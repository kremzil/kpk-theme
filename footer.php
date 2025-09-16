<?php ?>
</main>
<footer class="footer" role="contentinfo">
  <div class="container grid grid-4">
    <div class="footer-col">
      <h3><?php _e('Produkty','kpk'); ?></h3>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url(home_url('/vonkajsia-reklama/')); ?>">Vonkajšia reklama</a></li>
        <li><a href="<?php echo esc_url(home_url('/samolepiace-folie/')); ?>">Samolepiace fólie</a></li>
        <li><a href="<?php echo esc_url(home_url('/kartonove-stojany/')); ?>">Kartónové stojany</a></li>
        <li><a href="<?php echo esc_url(home_url('/vystavne-systemy/')); ?>">Výstavné systémy</a></li>
        <li><a href="<?php echo esc_url(home_url('/maloplosna-tlac/')); ?>">Maloplošná tlač</a></li>
        <li><a href="<?php echo esc_url(home_url('/polepy-vozidiel/')); ?>">Polepy vozidiel</a></li>
        <li><a href="<?php echo esc_url(home_url('/napinacie-systemy/')); ?>">Napínacie systémy</a></li>
        <li><a href="<?php echo esc_url(home_url('/technologie/')); ?>">Technológie</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3><?php _e('Služby','kpk'); ?></h3>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url(home_url('/sluzby/')); ?>">Návrh a poradenstvo</a></li>
        <li><a href="<?php echo esc_url(home_url('/sluzby/')); ?>">Inštalácia a servis</a></li>
        <li><a href="<?php echo esc_url(home_url('/sluzby/')); ?>">Logistika & rozvoz</a></li>
        <li><a href="<?php echo esc_url(home_url('/sluzby/')); ?>">Plnenie POS</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3><?php _e('Technológie & certifikáty','kpk'); ?></h3>
      <p class="meta">
        <?php
          echo esc_html(
            get_theme_mod('kpk_tech_text', __('Roland UV · Mimaki · Summa · Laser · Fréza · Laminácia','kpk'))
          );
        ?>
      </p>
      <div class="klogos">
        <?php
          $has_icons = false;
          for ($i=1; $i<=10; $i++):
            $icon = get_theme_mod("kpk_tech_icon_$i", '');
            if (!$icon) continue;
            $has_icons = true; ?>
            <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr__('Technológia','kpk').' '.$i; ?>" loading="lazy" width="120" height="40">
        <?php endfor; ?>
        <?php if(!$has_icons): ?>
          <div class="figure" style="width:120px;height:60px"></div>
          <div class="figure" style="width:120px;height:60px"></div>
          <div class="figure" style="width:120px;height:60px"></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="footer-col">
      <h3><?php _e('Kontakt','kpk'); ?></h3>
      <?php
        $addr  = get_theme_mod('kpk_address', "Košice, Slovensko");
        $phone = get_theme_mod('kpk_phone', '+421 000 000 000');
        $email = get_theme_mod('kpk_email', get_option('admin_email'));
        $fb = get_theme_mod('kpk_fb','#'); $ig = get_theme_mod('kpk_ig','#'); $li = get_theme_mod('kpk_li','#');
      ?>
      <p class="meta"><?php bloginfo('name'); ?><br><?php echo nl2br(esc_html($addr)); ?></p>
      <p>
        <a href="tel:<?php echo preg_replace('/\s+/', '', esc_attr($phone)); ?>"><?php echo esc_html($phone); ?></a><br>
        <a href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email); ?></a>
      </p>
      <p class="meta">
        <?php if($fb && $fb!=='#'): ?><a href="<?php echo esc_url($fb); ?>" target="_blank" rel="noopener">Facebook</a><?php endif; ?>
        <?php if($ig && $ig!=='#'): ?> · <a href="<?php echo esc_url($ig); ?>" target="_blank" rel="noopener">Instagram</a><?php endif; ?>
        <?php if($li && $li!=='#'): ?> · <a href="<?php echo esc_url($li); ?>" target="_blank" rel="noopener">LinkedIn</a><?php endif; ?>
      </p>
      <p><a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="cta-btn cta-btn--invert"><?php _e('Napísať správu','kpk'); ?></a></p>
    </div>
  </div>

  <div class="container footer-copy">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Všetky práva vyhradené.','kpk'); ?></div>
</footer>

<script>
(function(){
  document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('form.form').forEach(function(form){
      if (!form.querySelector('.kpk-form-alert')) {
        const box = document.createElement('div');
        box.className = 'kpk-form-alert';
        box.setAttribute('role','status');
        box.setAttribute('aria-live','polite');
        form.insertBefore(box, form.firstElementChild);
      }
    });
  });

  const forms = document.querySelectorAll('form.form');
  if(!forms.length) return;

  forms.forEach(form => {
    form.addEventListener('submit', function(e){
      if(!form.querySelector('input[name="kpk_form_nonce"]')) return;
      e.preventDefault();

      const btn = form.querySelector('button[type="submit"]');
      const btnText = btn ? btn.textContent : '';
      if(btn){ btn.disabled = true; btn.textContent = 'Odosielam…'; }

      const data = new FormData(form);
      data.append('kpk_ajax','1');

      fetch(window.location.href, {
        method: 'POST',
        body: data,
        headers: {'X-Requested-With':'XMLHttpRequest'}
      })
      .then(r => r.ok ? r.json() : Promise.reject())
      .then(res => {
        showAlert(form, (res && res.data && res.data.message) ? res.data.message : 'Ďakujeme! Vaša správa bola odoslaná.');
        try { form.reset(); } catch(e){}
      })
      .catch(() => {
        showAlert(form, 'Ups — nepodarilo sa odoslať. Skúste znova alebo nás kontaktujte telefonicky.', true);
      })
      .finally(() => {
        if(btn){ btn.disabled = false; btn.textContent = btnText; }
      });
    });
  });

  function showAlert(form, text, isError){
    const box = form.querySelector('.kpk-form-alert');
    if(!box) return;
    box.textContent = text;
    box.classList.toggle('is-error', !!isError);
  }
})();
</script>

<script>
(function(){
  document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.kpk-slider').forEach(initSlider);
  });

  function initSlider(root){
    const track   = root.querySelector('.kpk-slides');
    const slides  = Array.from(root.querySelectorAll('.kpk-slide'));
    const prevBtn = root.querySelector('.kpk-prev');
    const nextBtn = root.querySelector('.kpk-next');
    const dotsWrap= root.querySelector('.kpk-dots');
    const delay   = parseInt(root.dataset.autoplay || '0', 10);

    let i = 0, timer = null;
    let dragging = false, startX = 0;

    // dots
    const dots = slides.map((_,idx)=>{
      const b = document.createElement('button');
      b.type = 'button';    
      b.addEventListener('click', ()=>go(idx));
      dotsWrap.appendChild(b);
      return b;
    });

    function update(){
      track.style.transform = `translateX(${-i*100}%)`;
      slides.forEach((s,idx)=> s.setAttribute('aria-hidden', idx===i ? 'false':'true'));
      dots.forEach((d,idx)=> d.classList.toggle('is-active', idx===i));
    }
    function go(idx){ i = (idx + slides.length) % slides.length; update(); restart(); }

    // arrows
    prevBtn && prevBtn.addEventListener('click', ()=>go(i-1));
    nextBtn && nextBtn.addEventListener('click', ()=>go(i+1));

    // autoplay
    function restart(){
      if(!delay) return;
      clearTimeout(timer);
      timer = setTimeout(()=>go(i+1), delay);
    }
    root.addEventListener('mouseenter', ()=>clearTimeout(timer));
    root.addEventListener('mouseleave', restart);
    root.addEventListener('focusin',   ()=>clearTimeout(timer));
    root.addEventListener('focusout',  restart);

    root.addEventListener('pointerdown', e=>{
      if (e.target.closest('.kpk-nav, .kpk-dots')) return; // важно!
      dragging = true; startX = e.clientX;
    });
    root.addEventListener('pointermove', e=>{
      if(!dragging) return;
      const dx = e.clientX - startX;
      track.style.transform = `translateX(calc(${-i*100}% + ${dx}px))`;
    });
    root.addEventListener('pointerup', e=>{
      if(!dragging) return;
      const dx = e.clientX - startX;
      dragging = false;
      if(Math.abs(dx) > 60) go(i + (dx<0 ? 1 : -1)); else update();
    });
    root.addEventListener('pointercancel', ()=>{ dragging=false; update(); });

    root.addEventListener('keydown', e=>{
      if(e.key === 'ArrowRight') go(i+1);
      if(e.key === 'ArrowLeft')  go(i-1);
    });

    update(); restart();
  }
})();
</script>

<script>
(function(){
  const KEY = 'kpk_skip_hero';
  const hero = document.querySelector('.hero-video');
  if (!hero) return;

  if (sessionStorage.getItem(KEY) === '1') {
    hero.hidden = true;
    hero.querySelector('video')?.pause();
    return;
  }
  window.addEventListener('load', () => sessionStorage.setItem(KEY, '1'));
})();
</script>

<script>
(function(){
  document.addEventListener('DOMContentLoaded', function(){
    const items = Array.from(document.querySelectorAll('.js-lb-item'));
    if (!items.length) return;

    const lb = document.createElement('div');
    lb.className = 'lb';
    lb.setAttribute('role','dialog');
    lb.setAttribute('aria-modal','true');
    lb.innerHTML = `
      <div class="lb__backdrop" data-act="close"></div>
      <div class="lb__stage">
        <button class="lb__btn lb__prev" data-act="prev" aria-label="Predošlý">‹</button>
        <img class="lb__img" alt="">
        <button class="lb__btn lb__next" data-act="next" aria-label="Ďalší">›</button>
        <div class="lb__caption"></div>
        <button class="lb__btn lb__close" data-act="close" aria-label="Zavrieť">×</button>
        <div class="lb__dots" aria-hidden="true"></div>
      </div>`;
    document.body.appendChild(lb);

    const img      = lb.querySelector('.lb__img');
    const caption  = lb.querySelector('.lb__caption');
    const dotsWrap = lb.querySelector('.lb__dots');
    const closeBtn = lb.querySelector('.lb__close');
    const prevBtn  = lb.querySelector('.lb__prev');
    const nextBtn  = lb.querySelector('.lb__next');
    [closeBtn, prevBtn, nextBtn].forEach(b => b.setAttribute('type','button'));

    const dots = items.map((_, idx) => {
      const b = document.createElement('button');
      b.type = 'button';
      b.setAttribute('aria-label', `Zobraziť obrázok ${idx+1}`);
      b.addEventListener('click', () => go(idx));
      dotsWrap.appendChild(b);
      return b;
    });

    let index = 0;
    let startX = null;
    let lastActive = null;

    function updateUI(){
      const el = items[index];
      const url = el.getAttribute('data-full') || '';
      const ttl = el.getAttribute('data-title') || '';
      img.src = url;
      img.alt = ttl;
      caption.textContent = ttl;
      dots.forEach((d,i)=>d.classList.toggle('is-active', i===index));
      [index-1, index+1].forEach(j=>{
        const k = (j + items.length) % items.length;
        const u = items[k].getAttribute('data-full');
        if (u){ const p = new Image(); p.src = u; }
      });
    }

    function openAt(i){
      index = (i + items.length) % items.length;
      updateUI();
      lb.classList.add('is-open');
      document.body.classList.add('lb-open'); 
      lastActive = document.activeElement;
      closeBtn.focus({preventScroll:true});
    }
    function close(){
      lb.classList.remove('is-open');
      document.body.classList.remove('lb-open');
      img.removeAttribute('src');
      try { lastActive && lastActive.focus({preventScroll:true}); } catch(e){}
    }
    function go(i){
      index = (i + items.length) % items.length;
      updateUI();
    }

    items.forEach((el, idx)=>{
      const open = () => openAt(idx);
      el.addEventListener('click', open);
      el.addEventListener('keydown', e=>{
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(); }
      });
    });

    lb.addEventListener('click', e=>{
      const ctrl = e.target.closest('[data-act]');
      if (!ctrl) return;
      const act = ctrl.getAttribute('data-act');
      if (act === 'close') close();
      if (act === 'prev')  go(index - 1);
      if (act === 'next')  go(index + 1);
    });

    const stage = lb.querySelector('.lb__stage');
    stage.addEventListener('pointerdown', e=>{
      if (e.button !== 0) return;
      if (e.target.closest('.lb__btn, .lb__dots')) return;
      startX = e.clientX;
      stage.setPointerCapture(e.pointerId);
    });
    stage.addEventListener('pointerup', e=>{
      if (startX === null) return;
      const dx = e.clientX - startX;
      startX = null;
      if (Math.abs(dx) > 50) go(index + (dx < 0 ? 1 : -1));
    });
    stage.addEventListener('pointercancel', ()=>{ startX = null; });

   
    document.addEventListener('keydown', e=>{
      if (!lb.classList.contains('is-open')) return;
      if (e.key === 'Escape') close();
      else if (e.key === 'ArrowLeft')  go(index - 1);
      else if (e.key === 'ArrowRight') go(index + 1);
    });
  });
})();
</script>



<?php wp_footer(); ?>
</body>
</html>
