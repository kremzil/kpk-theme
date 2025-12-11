<?php
/**
 * Template Name: Cenník – Multi JSON (groups)
 * Template Post Type: page
 */
get_header();

/**
 * Источники JSON:
 * 1) Кастомное поле 'cennik_json_urls' — список URL или ID (по одному на строку/через запятую)
 * 2) Если пусто — дефолтный один JSON
 */
$page_id   = get_the_ID();
$raw       = (string) get_post_meta($page_id, 'cennik_json_urls', true);
$json_urls = [];

if ($raw !== '') {
  $parts = preg_split('/[\r\n,]+/', $raw, -1, PREG_SPLIT_NO_EMPTY);
  foreach ($parts as $p) {
    $p = trim($p);
    if ($p === '') continue;
    if (ctype_digit($p)) {
      $maybe = wp_get_attachment_url((int)$p);
      if ($maybe) $json_urls[] = $maybe;
    } else {
      $json_urls[] = $p;
    }
  }
}
if (empty($json_urls)) {
  $json_urls[] = home_url('/wp-content/uploads/2025/09/cennik_full_normalized.json');
}
$json_urls_safe = array_map('esc_url', $json_urls);
?>

<style>
/* область шаблона */
#kpk-cennik-all{
  --kpk-sticky-top: 0px;   /* низ шапки сайта */
  --kpk-th-top:    0px;    /* верх thead */
  --kpk-group-h:   0px;    /* высота группового ряда */
  --kpk-head-h:    0px;    /* высота ряда названий колонок */
  --kpk-filter-h:  0px;    /* высота ряда фильтров */
  /* top для заметки — ровно под фильтрами */
  --kpk-note-top: calc(var(--kpk-th-top) + var(--kpk-group-h) + var(--kpk-head-h) + var(--kpk-filter-h));
}

#kpk-cennik-all .table-wrap { overflow: visible; }
#kpk-cennik-all, #kpk-cennik-all .container, #kpk-cennik-all .section { overflow: visible; }

/* --- липкие ряды в thead --- */
#kpk-cennik-all thead tr.group-row th{
  position: sticky; top: var(--kpk-th-top); z-index: 9; background:#fff;
}
#kpk-cennik-all thead tr.head-row th{
  position: sticky; top: calc(var(--kpk-th-top) + var(--kpk-group-h)); z-index: 8; background:#fff;
}
#kpk-cennik-all thead tr.filter-row th{
  position: sticky; top: calc(var(--kpk-th-top) + var(--kpk-group-h) + var(--kpk-head-h)); z-index: 7; background:#fff;
}

/* таблица */
#kpk-cennik-all .table { border-collapse: separate; border-spacing:0; width:100%; overflow:visible; }
#kpk-cennik-all .table th, #kpk-cennik-all .table td {
  white-space: nowrap;
  vertical-align: top;
  padding:6px 10px;
  border-bottom:1px solid #e9ecef;
}

/* одиночные колонки в group-row */
#kpk-cennik-all thead tr.group-row th.solo-placeholder{ background:transparent; border-bottom:none; padding:0; height:0; }

/* Заметка: одна строка в TBODY. По умолчанию обычная.
   Когда «дорастает» до фильтров — сама ячейка становится sticky.
   Никакой подсветки, просто переносы и фон #fff чтобы перекрывать зебру. */
#kpk-cennik-all tr.note-inline-row td{
  white-space: normal !important;
  overflow-wrap: anywhere;
  word-break: break-word;
  background:#fff;
  position: sticky;             /* sticky ВСЕГДА — сработает только, когда упрётся */
  top: var(--kpk-note-top);
  z-index: 6;
}

/* Зебра — только для обычных строк данных */
#kpk-cennik-all tbody.data-rows tr.data-row:nth-child(odd)  td { background:#fff; }
#kpk-cennik-all tbody.data-rows tr.data-row:nth-child(even) td { background:#f2f3f4; }

/* Заголовок категории */
#kpk-cennik-all tbody.cat-heading h3.meta { margin:12px 0 6px; }

/* чипы в hero — без двойной рамки */
.hero .hero-silent-btn{ border:0 !important; background:transparent !important; box-shadow:none !important; padding:0 !important; }
.hero .hero-silent-btn::before, .hero .hero-silent-btn::after{ content:none !important; display:none !important; }
</style>

<section class="section" id="kpk-cennik-all">
  <section class="hero">
    <div class="container">
      <h1>Cenník</h1>
      <div class="filters u-mb-2">
        <div class="hero-silent-btn" id="cennikSheets"></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="filters-bar wide" style="margin-top:8px">
        <label>
          <span class="meta">Hľadať</span>
          <input id="cennikSearch" type="search" placeholder="Hľadať v aktuálnom liste" />
        </label>
        <span id="cennikStat" class="stat">—</span>
      </div>
      <div class="chips" id="cennikCats"></div>

      <div id="cennikContent" class="u-mt-1"></div>
    </div>
  </section>
</section>

<script>
(function(){
  const JSON_URLS = <?php echo wp_json_encode($json_urls_safe, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;

  const $root    = document.getElementById('kpk-cennik-all');
  const $sheets  = document.getElementById('cennikSheets');
  const $cats    = document.getElementById('cennikCats');
  const $content = document.getElementById('cennikContent');
  const $search  = document.getElementById('cennikSearch');
  const $stat    = document.getElementById('cennikStat');

  const state = { data:null, sheetIndex:0, activeCat:'Všetko', colFilters:{} };

  function escapeHtml(s){
    return String(s||'')
      .replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
      .replace(/"/g,'&quot;').replace(/'/g,'&#039;');
  }

  function renderSheetChips(){
    const names = (state.data?.sheets || []).map(s => s.name);
    $sheets.innerHTML = names.map((n,i)=>`<a class="chip${i===state.sheetIndex?' is-active':''}" data-i="${i}">${escapeHtml(n)}</a>`).join('');
  }
  function renderCatChips(){
    const sheet = state.data.sheets[state.sheetIndex];
    const cats  = ['Všetko', ...sheet.categories.map(c=>c.name)];
    $cats.innerHTML = cats.map(n => `<a class="chip${n===state.activeCat?' is-active':''}" data-cat="${escapeHtml(n)}">${escapeHtml(n)}</a>`).join('');
  }

  function blockToTBODY(block, fields, gid, bid){
    const hasNote = !!(block.note && String(block.note).trim() !== '');
    let rows = '';

    if (hasNote){
      rows += `<tr class="note-inline-row"><td colspan="${fields.length}">
                 <div class="meta">${escapeHtml(block.note)}</div>
               </td></tr>`;
    }

    (block.items||[]).forEach(it=>{
      const tds = fields.map(c=> `<td>${escapeHtml(it[c]??'')}</td>`).join('');
      rows += `<tr class="data-row">${tds}</tr>`;
    });

    return `<tbody class="cat-group data-rows" data-g="${gid}" data-b="${bid}">${rows}</tbody>`;
  }

  // кэш колонок
  const _fieldsCache = new WeakMap();
  function normKey(k){ return String(k ?? '').trim(); }
  function getSheetFields(sheet){
    if (_fieldsCache.has(sheet)) return _fieldsCache.get(sheet);
    const base = Array.isArray(sheet.fields) ? sheet.fields.map(normKey) : [];
    const set  = new Set(base);
    (sheet.categories || []).forEach(cat =>
      (cat.groups || []).forEach(g =>
        (g.items || []).forEach(it => {
          Object.keys(it || {}).forEach(k => {
            const key = normKey(k);
            if (key && !set.has(key)) set.add(key);
          });
        })
      )
    );
    const fields = Array.from(set);
    _fieldsCache.set(sheet, fields);
    return fields;
  }

  function buildHeaderHTML(sheet) {
    const allLeaves = getSheetFields(sheet);
    const fieldsOrder = Array.isArray(sheet.fields) && sheet.fields.length
      ? sheet.fields.filter(f => allLeaves.includes(f)).concat(allLeaves.filter(f => !sheet.fields.includes(f)))
      : allLeaves.slice();

    const groups = Array.isArray(sheet.header_groups) ? sheet.header_groups : [];

    const childToGroup = new Map();
    groups.forEach(g => {
      const kids = (g.children || []).filter(k => fieldsOrder.includes(k));
      kids.forEach(k => childToGroup.set(k, { label:g.label, kids }));
    });

    // верхняя групповая строка
    let groupRowCells = [];
    for (let i = 0; i < fieldsOrder.length; i++) {
      const leaf = fieldsOrder[i];
      const meta = childToGroup.get(leaf);
      if (meta) {
        if (meta.kids[0] === leaf) {
          groupRowCells.push(`<th colspan="${meta.kids.length}">${escapeHtml(meta.label)}</th>`);
          i += meta.kids.length - 1;
        }
      } else {
        groupRowCells.push(`<th class="solo-placeholder"></th>`);
      }
    }
    const groupRow = groups.length ? `<tr class="group-row">${groupRowCells.join('')}</tr>` : '';

    const headRow = '<tr class="head-row">' +
      fieldsOrder.map(f => `<th>${escapeHtml(f)}</th>`).join('') +
      '</tr>';

    const filterRow = '<tr class="filter-row">' +
      fieldsOrder.map(c => `<th><select class="col-filter" data-col="${escapeHtml(c)}"><option value="">— všetko —</option></select></th>`).join('') +
      '</tr>';

    return { groupRow, headRow, filterRow, leafOrder: fieldsOrder };
  }

  function buildTableHTML(cats, sheet){
    const { groupRow, headRow, filterRow, leafOrder } = buildHeaderHTML(sheet);

    let bodies = '';
    cats.forEach((cat, gid)=>{
      bodies += `<tbody class="cat-heading"><tr>
                   <td colspan="${leafOrder.length}">
                     <h3 class="meta" style="font-weight:700; margin:12px 0 6px;">${escapeHtml(cat.name)}</h3>
                   </td>
                 </tr></tbody>`;
      (cat.groups||[]).forEach((g, i)=> bodies += blockToTBODY(g, leafOrder, gid, i));
    });

    const thead = `<thead>${groupRow}${headRow}${filterRow}</thead>`;
    return { html: `<div class="table-wrap"><table class="table">${thead}${bodies}</table></div>`, leafOrder };
  }

  // ——— Рендер ———
  function render(){
    const sheet  = state.data.sheets[state.sheetIndex];
    const allLeaves = getSheetFields(sheet);
    const q      = String(($search.value||'')).trim().toLowerCase();

    let total = 0;
    const catsAfterSearch = [];
    const sourceCats = (state.activeCat==='Všetko')
      ? (sheet.categories||[])
      : (sheet.categories||[]).filter(c=>c.name===state.activeCat);

    sourceCats.forEach(cat=>{
      const groups = (cat.groups||[]).map(g=>{
        const items = (g.items||[]).filter(it=>{
          const hay = allLeaves.map(k => String(it[k] ?? '')).join(' ').toLowerCase();
          const ok  = !q || hay.includes(q);
          if (ok) total++;
          return ok;
        });
        return { note:g.note, items };
      }).filter(g=> g.items && g.items.length);
      if (groups.length) catsAfterSearch.push({ name:cat.name, groups });
    });

    // опции для фильтров
    const optionsMap = new Map();
    allLeaves.forEach(col => optionsMap.set(col, new Set()));
    catsAfterSearch.forEach(cat =>
      cat.groups.forEach(g =>
        g.items.forEach(it =>
          allLeaves.forEach(col => {
            const v = String(it[col] ?? '').trim();
            if (v) optionsMap.get(col).add(v);
          })
        )
      )
    );

    // применяем колонковые фильтры
    if (!state.colFilters) state.colFilters = {};
    let matched = 0;
    const catsFinal = [];
    catsAfterSearch.forEach(cat=>{
      const groups = cat.groups.map(g=>{
        const items = g.items.filter(it=>{
          for (const [col, val] of Object.entries(state.colFilters)){
            if (val && String(it[col] ?? '') !== val) return false;
          }
          matched++;
          return true;
        });
        return { note:g.note, items };
      }).filter(g=> g.items && g.items.length);
      if (groups.length) catsFinal.push({ name:cat.name, groups });
    });

    if (!catsFinal.length){
      $content.innerHTML = '<div class="meta">Žiadne položky pre zadané filtre.</div>';
      $stat.textContent  = '—';
      afterRenderSticky();
      return;
    }

    const { html } = buildTableHTML(catsFinal, sheet);
    $content.innerHTML = html;
    $stat.textContent  = total ? `Zobrazené: ${matched} z ${total}` : '—';

    // заполняем селекты
    const selects = Array.from($content.querySelectorAll('.filter-row select.col-filter'));
    allLeaves.forEach(col=>{
      const sel = selects.find(s => s.getAttribute('data-col') === col);
      if (!sel) return;
      const set = optionsMap.get(col) || new Set();
      Array.from(set).sort((a,b)=> a.localeCompare(b, undefined, {numeric:true, sensitivity:'base'}))
        .forEach(v=>{
          const opt = document.createElement('option');
          opt.value = v; opt.textContent = v; sel.appendChild(opt);
        });
      if (state.colFilters[col]) sel.value = state.colFilters[col];
      sel.addEventListener('change', ()=>{ state.colFilters[col] = sel.value; render(); });
    });

    afterRenderSticky();
  }

  // ——— Sticky offsets (учитываем высоты верхних рядов) ———
  function getHeaderOffsetPx() {
    const siteHeader = document.querySelector('.header');
    let top = 0;
    if (siteHeader) {
      const cs = getComputedStyle(siteHeader);
      const topCss = parseFloat(cs.top || '0') || 0;
      const rect = siteHeader.getBoundingClientRect();
      top = (rect.height || 0) + (topCss || 0);
    }
    return Math.max(0, Math.round(top));
  }
  function recalcStickyOffsets() {
    if (!$root) return;
    const headerOffset = getHeaderOffsetPx();

    $root.style.setProperty('--kpk-sticky-top', headerOffset + 'px');
    $root.style.setProperty('--kpk-th-top',    headerOffset + 'px');

    const thead    = $content.querySelector('thead');
    const groupRow = thead ? thead.querySelector('tr.group-row') : null;
    const headRow  = thead ? thead.querySelector('tr.head-row')  : null;
    const filterRow= thead ? thead.querySelector('tr.filter-row'): null;

    const groupH = groupRow ? Math.ceil(groupRow.getBoundingClientRect().height) : 0;
    const headH  = headRow  ? Math.ceil(headRow .getBoundingClientRect().height) : 0;
    const filtH  = filterRow? Math.ceil(filterRow.getBoundingClientRect().height): 0;

    $root.style.setProperty('--kpk-group-h', groupH + 'px');
    $root.style.setProperty('--kpk-head-h',  headH  + 'px');
    $root.style.setProperty('--kpk-filter-h',filtH  + 'px');
  }
  function afterRenderSticky() {
    requestAnimationFrame(() => { recalcStickyOffsets(); requestAnimationFrame(recalcStickyOffsets); });
  }

  // события
  $sheets.addEventListener('click', e=>{
    const el = e.target.closest('.chip'); if (!el) return;
    state.sheetIndex = parseInt(el.dataset.i, 10) || 0;
    state.activeCat  = 'Všetko';
    state.colFilters = {};
    $search.value = '';
    renderSheetChips(); renderCatChips(); render();
    const y = $root.getBoundingClientRect().top + window.scrollY - getHeaderOffsetPx() - 8;
    window.scrollTo({ top: y, behavior: 'smooth' });
  });

  $cats.addEventListener('click', e=>{
    const el = e.target.closest('.chip'); if (!el) return;
    state.activeCat = el.dataset.cat;
    state.colFilters = {};
    renderCatChips(); render();
  });

  $search.addEventListener('input', render);
  window.addEventListener('resize', recalcStickyOffsets, { passive: true });
  window.addEventListener('orientationchange', afterRenderSticky);

  // init
  (function loadAllJSONs(){
    const urls = JSON_URLS.map(u => u + (u.includes('?') ? '&' : '?') + 'v=' + Date.now());
    Promise.allSettled(urls.map(u => fetch(u, { cache: 'no-store' }).then(r=>{ if(!r.ok) throw new Error('HTTP '+r.status); return r.json(); })))
      .then(results=>{
        const sheets = [];
        results.forEach((res, idx)=>{
          if (res.status === 'fulfilled' && res.value && Array.isArray(res.value.sheets)) {
            res.value.sheets.forEach(s => sheets.push(s));
          } else {
            console.warn('Cenník JSON load error:', JSON_URLS[idx], res.reason || res);
          }
        });
        state.data = { sheets };
        if (!state.data.sheets.length) throw new Error('No sheets');
        renderSheetChips(); renderCatChips(); render();
      })
      .catch(err=>{
        console.error('Cenník JSON load error:', err);
        $content.innerHTML = '<div class="meta">Chyba načítania dát. Skontrolujte JSON zdroje.</div>';
      });
  })();
})();
</script>

<?php
get_footer();
