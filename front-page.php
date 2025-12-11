<?php /* Template: Front Page */
get_header(); ?>

<!-- HERO -->
<?php
// пути к видео и постеру (замени на свои или закинь файлы в /assets/)
$hero_video  = $hero_video  = 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/KPK-PRINT-reklam-gyar-www.kpkprint.hu-video.mp4';;
$hero_poster = function_exists('kpk_asset') ? kpk_asset('assets/hero-poster.jpg') : get_stylesheet_directory_uri().'/assets/hero-poster.jpg';
?>
<section class="hero hero-video">
  <div class="hero-video__wrap">
    <video class="hero-video__media" autoplay muted playsinline loop poster="<?php echo esc_url($hero_poster); ?>">
      <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
       </video>
       <!-- Стрелка вниз -->
<a class="hero-scroll" href="#hero-home" aria-label="Posunúť na ďalšiu sekciu">
  <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
</a>
  </div>
</section>
<!-- HERO TEXT -->
<section class="hero home" id="hero-home">
  <div class="container">
    <h1 >Reklama, ktorá funguje</h1>
    <p class="meta-hero">
      Veľkoformátová tlač, vonkajšia reklama, samolepiace fólie, POS a výstavné systémy.
      Vlastná výroba v Košiciach, rýchle termíny a montáž po celom Slovensku – od návrhu po inštaláciu.
    </p>
    <div class="cta-wrap">
      <a class="hero-btn" href="#produkty">Pozrieť produkty</a>
      <a class="hero-silent-btn" href="#kpk-quote">Požiadať o cenovú ponuku</a>
    </div>

    <!-- METRICS -->
    <div class="metrics badges">
      <div class="badge"><strong class="meta-hero-strong">16 000+</strong><br><span class="meta-hero">projektov ročne</span></div>
      <div class="badge"><strong class="meta-hero-strong">50+</strong><br><span class="meta-hero">špecialistov</span></div>
      <div class="badge"><strong class="meta-hero-strong">32+</strong><br><span class="meta-hero">technológií</span></div>
      <div class="badge"><strong class="meta-hero-strong">1 mil+ m²</strong><br><span class="meta-hero">tlače ročne</span></div>
    </div>
  </div>
</section>

<!-- PRODUKTY / RIEŠENIA -->
<section class="section home tiles">
  <div class="container" id="produkty">
    <h2>Produkty a riešenia</h2>
    <div class="grid grid-4">
      <?php
      $tiles = [
        [
          'title' => 'Vonkajšia reklama',
          'desc'  => 'Billboardy, citylighty, backlighty, plachty a prizmy – vysoký dosah 24/7.',
          'url'   => '/outdoor/',
        ],
        [
          'title' => 'Samolepiace fólie',
          'desc'  => 'Flexibilné riešenia pre výklady, autá aj interiér – rýchla aplikácia a výborná cena.',
          'url'   => '/samolepiace-folie/',
        ],
                [
          'title' => 'Kartónové stojany',
          'desc'  => 'POS na mieru: tovarové stojany, paletové wrapy a 3D objekty – rýchla výroba, silný vizuál.',
          'url'   => '/kartonove-stojany/',
        ],        [
          'title' => 'Výstavné systémy',
          'desc'  => 'Roll-upy, textilné steny, promo stolíky a stany pre veľtrhy aj retail.',
          'url'   => '/vystavne-systemy/',
        ],        [
          'title' => 'Maloplošná tlač',
          'desc'  => 'Letáky, vizitky, plagáty a ďalšie malé formáty – čistý výsledok a rýchle termíny.',
          'url'   => '/maloplosna-tlac/',
        ],        [
          'title' => 'Polepy vozidiel',
          'desc'  => 'Profesionálny polep vozidiel – branding, ochrana laku a reklama na kolesách.',
          'url'   => '/polepy-vozidiel/',
        ],        [
          'title' => 'Napínacie systémy',
          'desc'  => 'Napínacie systémy','Napínacie rámy pre dodávky a nákladiaky – rýchla výmena kampaní bez poškodenia bokov.',
          'url'   => '/napinacie-systemy/',
        ],        [
          'title' => 'Služby',
          'desc'  => 'Grafický návrh, poradenstvo, výroba, montáž a logistika po celej SR. Jeden partner pre celé riešenie.',
          'url'   => '/sluzby/',
        ],
       ];

         $img_map = [
        'outdoor'            => 'assets/outdoor.webp',
        'samolepiace-folie'  => 'assets/folie.webp',
        'kartonove-stojany'  => 'assets/kartonove.webp',
        'vystavne-systemy'   => 'assets/vystavne.webp',
        'maloplosna-tlac'    => 'assets/male-formaty.webp',
        'polepy-vozidiel'    => 'assets/auta1.webp',
        'napinacie-systemy'  => 'assets/napinacie.webp',
        'sluzby'             => 'assets/sluzby.webp',
      ];
     $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

      foreach($tiles as $t){

        // 1) если в массиве есть 'img' — берём её
        $img = !empty($t['img']) ? kpk_resolve_img($t['img']) : '';

        // 2) иначе пытаемся найти по слагу из URL
        if (!$img && !empty($t['url'])) {
          $slug = basename( trim( parse_url( home_url($t['url']), PHP_URL_PATH ), '/' ) );
          if (!empty($img_map[$slug])) {
            $img = kpk_resolve_img($img_map[$slug]);
          }
        }

        // 3) фолбэк
        if (!$img) $img = $ph;
      ?>
        <a class="card" href="<?php echo esc_url( home_url($t['url']) ); ?>" aria-label="<?php echo esc_attr($t['title']); ?>">
          <div class="figure" style="background-image:url('<?php echo esc_url($img); ?>')"></div>
          <div style="padding:16px">
            <h3><?php echo esc_html($t['title']); ?></h3>
            <p class="meta"><?php echo esc_html($t['desc']); ?></p>
          </div>
        </a>
      <?php } ?>
    </div>

  </div>
</section>

<!-- AKO PRACUJEME -->
<section class="section home">
  <div class="container">
    <h2>Ako pracujeme</h2>
    <div class="grid grid-4">
      <?php
        $steps = [
          ['title'=>'Brief',      'text'=>'Ciele, rozmery, lokality, termín',      'img'=>'assets/steps/brief.webp'],
          ['title'=>'Návrh',      'text'=>'Grafika, vizualizácia, revízie',        'img'=>'assets/steps/navrh.webp'],
          ['title'=>'Výroba',     'text'=>'Tlač, finalizácia, kontrola kvality',   'img'=>'assets/steps/vyroba.webp'],
          ['title'=>'Inštalácia', 'text'=>'Montáž, odovzdanie, servis',            'img'=>'assets/steps/instalacia.webp'],
        ];
        $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

        foreach ($steps as $s) {
          $img = !empty($s['img']) ? kpk_resolve_img($s['img']) : $ph;
          ?>
          <div class="card">
            <div class="figure is-square" style="background-image:url('<?php echo esc_url($img); ?>')"></div>
            <div style="padding:12px">
              <h3><?php echo esc_html($s['title']); ?></h3>
              <p class="meta"><?php echo esc_html($s['text']); ?></p>
            </div>
          </div>
          <?php
        }?>
    </div>

  </div>
</section>

<!-- TECHNO SLIDER -->
<section class="section bg-muted" id="tech-slider">
  <div class="container">
    <div class="kpk-slider" data-autoplay="6000" tabindex="0" aria-roledescription="carousel" aria-label="Technológie">
      <div class="kpk-slides">

        <?php
        
        $slides = [

          // Слайд 1: UV flatbed rigid
          [
            'label' => 'Technológie',
            'title' => 'UV flatbed rigid materiály (Agfa Titan S/HS, HP FB7600, etc.)',
            'text'  => 'Pre pevné dosky: Agfa Titan S/HS dosahuje ~160 m²/h, šírka až do 3,2 m, hrúbka materiálu ~5 mm. HP Scitex FB7600 dosahuje šírku panela do ~2,5 m, UV pigmentové 6 farebné atramenty, rozlíšenie až 600 dpi, robustná konštrukcia pre stabilnú produkciu.',
            'tags'  => ['160 m²/h','Šírka 3200 mm','600 dpi','5 mm dosky','6 farieb','Pigment UV'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/agfa-titan.webp',
          ],

          // Слайд 2: Eco-/solvent / Latex roll
          [
            'label' => 'Technológie',
            'title' => 'Eco-solvent & Latex / veľkoformát roll tlač',
            'text'  => 'Ručné / automatizované roll-to-roll zariadenia: latexové alebo solventné atramenty, trvácnosť exteriér/interiér, šírky médií do ~3,2 m, možnosť backlit/micro-perforácie/podkladov s textúrou. Idealne na bannery, polepy, fasády.',
            'tags'  => ['Latex','Eco-solvent','Roll-to-roll','Šírka 3200 mm','Outdoor/Indoor','Backlit'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/MIMAKI-JV5.webp',
          ],

          // Слайд 3: Rézanie / frézovanie / finishing
          [
            'label' => 'Technológie',
            'title' => 'Rezanie, frézovanie & finishing (Esko, Summa, FX stroje)',
            'text'  => 'Plotre/výsekové / frézovacie stolice: Esko Kongsberg XN-24 má pracovnú plochu ~1680×3200 mm, materiály do ~20 mm hrúbky (PVC, akryl, kompozity), presnosť rezu a bigovania, možnosť rôznych hláv, vysekávania. Summa D120 a FX stroje doplňujú širší sortiment pre tlačené projekty a finishing.',
            'tags'  => ['1680×3200 mm','20 mm hrúbky','Bigovanie','Presné rezy','Kompozity','Fréza'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/ESKO-KONGSBERG-XN-24.webp',
          ],

          // Слайд 4: Laminácia, aplikácia, flatbed aplikátory
          [
            'label' => 'Technológie',
            'title' => 'Laminácia & aplikácia & flatbed aplikátory',
            'text'  => 'Rollsroller 400/170R: plošný aplikátor so stolom 4000×1700 mm, max. hrúbka substrátu do 60 mm, LED osvetlenie, statický popruh, možnosť pred-maskovania a laminácie. Flexilam R160 a iné stroje spájajú ochranné laminovanie, aplikačné operácie a prípravu výstupov pre montáž.',
            'tags'  => ['4000×1700 mm','60 mm hrúbky','LED osvetlenie','Laminácia','Pred-mask','Flatbed aplikátor'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/ROLLSROLLER-400-170R.webp',
          ],

          // Слайд 5: Digitál / laser / planové ofset / Xerox aproach
          [
            'label' => 'Technológie',
            'title' => 'Xerox 1000i / digitálna tlač',
            'text'  => 'Rozlíšenie 2400×2400 dpi, tonerová technológia EA, papier gramáže od ~55 do 350 gsm, formáty od A4 do ~330×488 mm, 50-100 str./min v závislosti od formátu. Laserová kvalita vhodná pre produkciu malých sérií, letákov, brožúr, zakázkových jobs.',
            'tags'  => ['2400 dpi','55-350 gsm','50-100 str./min','A4-SRA3 etc.','Laser / toner','Malé série'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/XEROX-1000l.webp',
          ],

          // Слайд 6: Hybrid / špeciálne technológie & nerozlíšené stroje
          [
            'label' => 'Technológie',
            'title' => '2-5 m stroje',
            'text'  => 'Machinery ako napr. Durst Rho série, HP Scitex XP/RJ, Aristo LFC-3332: továrne stroje pre veľkoformátové kampane, backdrops, mesh/širšie subtráty. Typické šírky 2-5 m, UV alebo hybridné princípy, vysoká odolnosť materiálov, možnosť výroby billboardov, fasádnych panelov, veľkoplošných grafík s vysokou životnosťou.',
            'tags'  => ['Šírka 2-6 m','Billboard','Mesh','Hybrid','UV / roll-to-roll','Outdoor heavy'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/DURST-RHO-800.webp',
          ],

        ];


        foreach($slides as $i => $s): ?>
          <article class="kpk-slide" role="group" aria-label="<?php echo esc_attr(($i+1).'/'.count($slides)); ?>">
            <div class="kpk-slide-grid">
              <div class="kpk-slide-media" style="background-color:var(--color-bg);">
                <?php
                  $img = $s['img'] ?? '';
                  if (empty($img) && !empty($s['img_id'])) {
                    $img = wp_get_attachment_image_url((int)$s['img_id'], 'large');
                  }
                ?>
                <?php if ($img): ?>
                  <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($s['title']); ?>" loading="lazy" decoding="async">
                <?php else: ?>
                  <div class="kpk-slide-figure">Equipment</div>
                <?php endif; ?>
              </div>
              <div class="kpk-slide-body">
                <span class="chip"><?php echo esc_html($s['label']); ?></span>
                <h2 class="kpk-slide-title"><?php echo esc_html($s['title']); ?></h2>
                <p class="meta kpk-slide-text"><?php echo esc_html($s['text']); ?></p>
                <div class="chips u-mt-1">
                  <?php foreach($s['tags'] as $t): ?>
                    <span class="chip"><?php echo esc_html($t); ?></span>
                  <?php endforeach; ?>
                </div>
                </div>
            </div>
          </article>
        <?php endforeach; ?>

      </div>

      <!-- Навигация и точки (заполнятся JS) -->
      <button class="kpk-nav kpk-prev" aria-label="Predošlý">‹</button>
      <button class="kpk-nav kpk-next" aria-label="Ďalší">›</button>
      <div class="kpk-dots" aria-hidden="true"></div>
    </div>
  </div>
</section>

<!-- SEO TEXT BLOCK -->
<section class="section home seo" id="seo-text">
  <div class="container narrow">

    <header class="seo-head">
      <h2>Komplexné reklamné riešenia pre firmy na celom Slovensku</h2>
      <p class="lead">
        V <strong>KPK Reklama</strong> spájame kreatívu, technológie a dlhoročné skúsenosti, aby sme doručovali
        reklamu, ktorá <em>naozaj funguje</em> – od návrhu po inštaláciu s vlastnou výrobou v Košiciach.
      </p>
      <div class="chips">
        <a class="chip" href="<?php echo esc_url( home_url('/outdoor/') ); ?>">Vonkajšia reklama</a>
        <a class="chip" href="<?php echo esc_url( home_url('/samolepiace-folie/') ); ?>">Samolepiace fólie</a>
        <a class="chip" href="<?php echo esc_url( home_url('/kartonove-stojany/') ); ?>">POS stojany</a>
        <a class="chip" href="<?php echo esc_url( home_url('/vystavne-systemy/') ); ?>">Výstavné systémy</a>
        <a class="chip" href="<?php echo esc_url( home_url('/polepy-vozidiel/') ); ?>">Polepy vozidiel</a>
        <a class="chip" href="<?php echo esc_url( home_url('/maloplosna-tlac/') ); ?>">Maloplošná tlač</a>
      </div>
    </header>

    <div class="seo-columns">
      <div class="seo-body">
        <p>
          Špecializujeme sa na <a href="<?php echo esc_url( home_url('/velkoformatova-tlac/') ); ?>">veľkoformátovú tlač</a>
          a výrobu reklamných produktov – všetko vo vlastnej réžii. Vďaka tomu garantujeme rýchle dodacie termíny,
          flexibilitu a stabilnú kvalitu výstupov.
        </p>
        <p>
          Naše služby zahŕňajú <a href="<?php echo esc_url( home_url('/vonkajsia-reklama/') ); ?>">vonkajšiu reklamu</a>
          (billboardy, citylighty, backlighty, plachty), <a href="<?php echo esc_url( home_url('/polepy-vozidiel/') ); ?>">profesionálne polepy vozidiel</a>,
          <a href="<?php echo esc_url( home_url('/kartonove-stojany/') ); ?>">POS stojany</a> a
          <a href="<?php echo esc_url( home_url('/samolepiace-folie/') ); ?>">samolepiace fólie</a> pre výklady a interiéry,
          ako aj <a href="<?php echo esc_url( home_url('/vystavne-systemy/') ); ?>">výstavné systémy</a> pre veľtrhy a retail.
        </p>
        <p>
          Každý projekt pripravujeme na mieru – od úvodného briefu a grafického návrhu, cez konzultácie a vizualizácie,
          až po výrobu a montáž priamo na mieste. Tím 25 špecialistov zvláda aj komplexné kampane v krátkych termínoch
          s dôrazom na detail.
        </p>
        <p>
          Moderné technológie nám umožňujú tlačiť na rôzne materiály, spracovávať veľké formáty, frézovať, laminovať
          a pripravovať produkty na okamžitú inštaláciu. Vďaka napínacím systémom vieme rýchlo meniť kampane na dodávkach
          a nákladných vozidlách bez poškodenia karosérie či reklamnej plochy.
        </p>
        <p>
          Sme spoľahlivým partnerom pre malé firmy aj medzinárodné značky. Naše riešenia pomáhajú budovať dôveru,
          získavať nových zákazníkov a posilniť imidž značky. Napíšte nám – do 24 hodín sa vám ozveme s návrhom riešenia.
        </p>
      </div>

      <aside class="seo-aside">
        <div class="seo-aside__card">
          <h3>Čo získate</h3>
          <ul class="seo-check">
            <li>Vlastná výroba & rýchle termíny</li>
            <li>Stabilná kvalita a kontrola výstupov</li>
            <li>Komplet servis: návrh → výroba → montáž</li>
            <li>Celoslovenské pokrytie logistiky</li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>



<!-- GALÉRIA -->
<section class="section home" id="home-gallery">
  <div class="container">
    <h2>Ukážky prác</h2>

    <div class="grid grid-3 tiles">
      <?php
        $gallery = [
          ['title'=>'Billboardy', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_5395-1200x900-1-e1669191165862.jpeg'],
          ['title'=>'Backlighty', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0409-1200x900-1-e1669190515921.jpg'],
          ['title'=>'Polepy výkladov a pevných podkladov', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_20181016_175928-2-1200x900-1-e1669199264424.jpg'],
          ['title'=>'Polepy vozidiel', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG-0321-scaled-e1669200851366.jpg'],
          ['title'=>'Samolepiace fólie na podlahy', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG-2790-scaled-e1669200642920.jpg'],
          ['title'=>'Kartónové stojany', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2023/05/kartonove-stojany.png'],
          ['title'=>'Stojany a 3D objekty z kartónu', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/53188136_2038575189530734_8841243831547461632_n-900x900-1.jpg'],
          ['title'=>'Vlajkové systémy', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/image005-1-675x900-1-e1660204131481-copy.jpg'],
          ['title'=>'Tapety', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/DK1_4973-1350x900-1-copy.png'],
        ];
        $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

        foreach ($gallery as $i => $s):
          // превью (thumb) и полноразмер (full) — если нет full, используем img
          $thumb = !empty($s['thumb']) ? kpk_resolve_img($s['thumb']) : kpk_resolve_img($s['img']);
          $full  = !empty($s['full'])  ? kpk_resolve_img($s['full'])  : kpk_resolve_img($s['img']);
          if (!$thumb) $thumb = $ph;
          if (!$full)  $full  = $thumb;
      ?>
        <div class="card js-lb-item"
             role="button" tabindex="0"
             aria-label="Zväčšiť: <?php echo esc_attr($s['title']); ?>"
             data-full="<?php echo esc_attr($full); ?>"
             data-title="<?php echo esc_attr($s['title']); ?>"
             data-index="<?php echo (int)$i; ?>">
          <div class="figure is-square" style="background-image:url('<?php echo esc_url($thumb); ?>')"></div>
          <div style="padding:12px">
            <h3 class="meta"><?php echo esc_html($s['title']); ?></h3>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- LOGÁ KLIENTOV -->
<section class="section home">
  <div class="container">
    <h2>Dôverujú nám</h2>

    <?php
    // единый список логотипов
    $logos = [
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/miro_jaros.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/logo.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/logo-retina-1.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Logo_METRO.svg_.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/sony.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/rytmus_2.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/palmolive.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Mattel-logo-842CE25B64-seeklogo.com_.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Kaufland_Deutschland.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/johnnie_walker.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Jameson-Logo.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/ikar.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/h16.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/gamble_pro.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/de6fb1689abd0a3a62120bba850be92e.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Barilla2-Logo.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/bambino.jpg',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Artboard-6-1.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Artboard-2-1.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/Artboard-1-1.png',
      'https://www.kpkreklama.sk/wp-content/uploads/2023/05/absolut.jpg',
    ];

    // делим на две строки
    $split = (int)ceil(count($logos)/2);
    $row1 = array_slice($logos, 0, $split);
    $row2 = array_slice($logos, $split);

    // рендер одной строки (дублируем внутри для бесшовной анимации)
    function kpk_render_logo_row($set, $reverse = false, $speed = '40s'){
      $dir = $reverse ? ' marquee--rev' : '';
      echo '<div class="marquee'.$dir.'" style="--speed:'.$speed.'"><div class="marquee__track">';
      foreach ($set as $src) {
        echo '<div class="logo"><img src="'.esc_url($src).'" alt="" loading="lazy" decoding="async"></div>';
      }
      // дубликат набора — только для непрерывности, скрываем от screen reader
      foreach ($set as $src) {
        echo '<div class="logo" aria-hidden="true"><img src="'.esc_url($src).'" alt=""></div>';
      }
      echo '</div></div>';
    }
    ?>

    <div class="logo-marquee">
      <?php kpk_render_logo_row($row1, true,  '42s'); // верхняя: слева→направо ?>
      <?php kpk_render_logo_row($row2, false, '48s'); // нижняя: справа→налево ?>
    </div>
  </div>
</section>


<!-- FINÁLNY CTA -->
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section home bg-muted">
  <div class="container grid grid-2">
    <div>
      <h2>Pripravení začať?</h2>
      <p class="meta">Získajte nezáväznú cenovú ponuku do 24 hodín.</p>
      <ul class="meta u-mt-1">
        <li>Kompletné služby od návrhu po inštaláciu</li>
        <li>Celé Slovensko – rozvoz a montáž</li>
        <li>Overené materiály a technológie</li>
      </ul>
    </div>
<form id="kpk-quote-form" method="post" class="form kpk-form" aria-label="Quote form">
	<?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>

	<input type="text" name="name" placeholder="Meno a priezvisko" required>
	<input type="email" name="email" placeholder="E-mail" required>
	<input type="tel" name="phone" placeholder="Telefón">

	<select name="topic">
		<option value="">Téma dopytu</option>
		<option>Vonkajšia reklama</option>
		<option>Samolepiace fólie</option>
		<option>Kartónové stojany</option>
		<option>Výstavné systémy</option>
		<option>Polepy vozidiel</option>
		<option>Maloplošná tlač</option>
		<option>Napínacie systémy</option>
		<option>Iné</option>
	</select>

	<textarea name="message" rows="4" placeholder="Stručný popis projektu / rozmery / termín"></textarea>

	<input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">

	<!-- reCAPTCHA v3 -->
	<input type="hidden" name="kpk_recaptcha_token" id="kpk_recaptcha_token">

	<button type="submit">Odoslať dopyt</button>
</form>

  </div>
</section>

<?php get_footer(); ?>
