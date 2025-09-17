<?php /* Template: Front Page */
get_header(); ?>

<!-- HERO -->
<?php
// Ð¿ÑƒÑ‚Ð¸ Ðº Ð²Ð¸Ð´ÐµÐ¾ Ð¸ Ð¿Ð¾ÑÑ‚ÐµÑ€Ñƒ (Ð·Ð°Ð¼ÐµÐ½Ð¸ Ð½Ð° ÑÐ²Ð¾Ð¸ Ð¸Ð»Ð¸ Ð·Ð°ÐºÐ¸Ð½ÑŒ Ñ„Ð°Ð¹Ð»Ñ‹ Ð² /assets/)
$hero_video  = $hero_video  = 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/KPK-PRINT-reklam-gyar-www.kpkprint.hu-video.mp4';;
$hero_poster = function_exists('kpk_asset') ? kpk_asset('assets/hero-poster.jpg') : get_stylesheet_directory_uri().'/assets/hero-poster.jpg';
?>
<section class="hero hero-video">
  <div class="hero-video__wrap">
    <video class="hero-video__media" autoplay muted playsinline loop poster="<?php echo esc_url($hero_poster); ?>">
      <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
       </video>
       <!-- Ð¡Ñ‚Ñ€ÐµÐ»ÐºÐ° Ð²Ð½Ð¸Ð· -->
<a class="hero-scroll" href="#hero-home" aria-label="PosunÃºÅ¥ na ÄalÅ¡iu sekciu">
  <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
</a>
  </div>
</section>
<!-- HERO TEXT -->
<section class="hero home" id="hero-home">
  <div class="container">
    <h1 >Reklama, ktorÃ¡ funguje</h1>
    <p class="meta-hero">
      VeÄ¾koformÃ¡tovÃ¡ tlaÄ, vonkajÅ¡ia reklama, samolepiace fÃ³lie, POS a vÃ½stavnÃ© systÃ©my.
      VlastnÃ¡ vÃ½roba v KoÅ¡iciach, rÃ½chle termÃ­ny a montÃ¡Å¾ po celom Slovensku â€“ od nÃ¡vrhu po inÅ¡talÃ¡ciu.
    </p>
    <div class="cta-wrap">
      <a class="hero-btn" href="<?php echo esc_url(home_url('/produkty/')); ?>">PozrieÅ¥ produkty</a>
      <a class="hero-silent-btn" href="#kpk-quote">PoÅ¾iadaÅ¥ o cenovÃº ponuku</a>
    </div>

    <!-- METRICS -->
    <div class="metrics badges">
      <div class="badge"><strong class="meta-hero-strong">16 000+</strong><br><span class="meta-hero">projektov roÄne</span></div>
      <div class="badge"><strong class="meta-hero-strong">50+</strong><br><span class="meta-hero">Å¡pecialistov</span></div>
      <div class="badge"><strong class="meta-hero-strong">32+</strong><br><span class="meta-hero">technolÃ³giÃ­</span></div>
      <div class="badge"><strong class="meta-hero-strong">1 mil+ mÂ²</strong><br><span class="meta-hero">tlaÄe roÄne</span></div>
    </div>
  </div>
</section>

<!-- PRODUKTY / RIEÅ ENIA -->
<section class="section home tiles">
  <div class="container">
    <h2>Produkty a rieÅ¡enia</h2>
    <div class="grid grid-4">
      <?php
      $tiles = [
        [
          'title' => 'VonkajÅ¡ia reklama',
          'desc'  => 'Billboardy, citylighty, backlighty, plachty a prizmy â€“ vysokÃ½ dosah 24/7.',
          'url'   => '/outdoor/',
        ],
        [
          'title' => 'Samolepiace fÃ³lie',
          'desc'  => 'FlexibilnÃ© rieÅ¡enia pre vÃ½klady, autÃ¡ aj interiÃ©r â€“ rÃ½chla aplikÃ¡cia a vÃ½bornÃ¡ cena.',
          'url'   => '/samolepiace-folie/',
        ],
                [
          'title' => 'KartÃ³novÃ© stojany',
          'desc'  => 'POS na mieru: tovarovÃ© stojany, paletovÃ© wrapy a 3D objekty â€“ rÃ½chla vÃ½roba, silnÃ½ vizuÃ¡l.',
          'url'   => '/kartonove-stojany/',
        ],        [
          'title' => 'VÃ½stavnÃ© systÃ©my',
          'desc'  => 'Roll-upy, textilnÃ© steny, promo stolÃ­ky a stany pre veÄ¾trhy aj retail.',
          'url'   => '/vystavne-systemy/',
        ],        [
          'title' => 'MaloploÅ¡nÃ¡ tlaÄ',
          'desc'  => 'LetÃ¡ky, vizitky, plagÃ¡ty a ÄalÅ¡ie malÃ© formÃ¡ty â€“ ÄistÃ½ vÃ½sledok a rÃ½chle termÃ­ny.',
          'url'   => '/maloplosna-tlac/',
        ],        [
          'title' => 'Polepy vozidiel',
          'desc'  => 'ProfesionÃ¡lny polep vozidiel â€“ branding, ochrana laku a reklama na kolesÃ¡ch.',
          'url'   => '/polepy-vozidiel/',
        ],        [
          'title' => 'NapÃ­nacie systÃ©my',
          'desc'  => 'NapÃ­nacie systÃ©my','NapÃ­nacie rÃ¡my pre dodÃ¡vky a nÃ¡kladiaky â€“ rÃ½chla vÃ½mena kampanÃ­ bez poÅ¡kodenia bokov.',
          'url'   => '/napinacie-systemy/',
        ],        [
          'title' => 'SluÅ¾by',
          'desc'  => 'GrafickÃ½ nÃ¡vrh, poradenstvo, vÃ½roba, montÃ¡Å¾ a logistika po celej SR. Jeden partner pre celÃ© rieÅ¡enie.',
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

        // 1) ÐµÑÐ»Ð¸ Ð² Ð¼Ð°ÑÑÐ¸Ð²Ðµ ÐµÑÑ‚ÑŒ 'img' â€” Ð±ÐµÑ€Ñ‘Ð¼ ÐµÑ‘
        $img = !empty($t['img']) ? kpk_resolve_img($t['img']) : '';

        // 2) Ð¸Ð½Ð°Ñ‡Ðµ Ð¿Ñ‹Ñ‚Ð°ÐµÐ¼ÑÑ Ð½Ð°Ð¹Ñ‚Ð¸ Ð¿Ð¾ ÑÐ»Ð°Ð³Ñƒ Ð¸Ð· URL
        if (!$img && !empty($t['url'])) {
          $slug = basename( trim( parse_url( home_url($t['url']), PHP_URL_PATH ), '/' ) );
          if (!empty($img_map[$slug])) {
            $img = kpk_resolve_img($img_map[$slug]);
          }
        }

        // 3) Ñ„Ð¾Ð»Ð±ÑÐº
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
          ['title'=>'Brief',      'text'=>'Ciele, rozmery, lokality, termÃ­n',      'img'=>'assets/steps/brief.webp'],
          ['title'=>'NÃ¡vrh',      'text'=>'Grafika, vizualizÃ¡cia, revÃ­zie',        'img'=>'assets/steps/navrh.webp'],
          ['title'=>'VÃ½roba',     'text'=>'TlaÄ, finalizÃ¡cia, kontrola kvality',   'img'=>'assets/steps/vyroba.webp'],
          ['title'=>'InÅ¡talÃ¡cia', 'text'=>'MontÃ¡Å¾, odovzdanie, servis',            'img'=>'assets/steps/instalacia.webp'],
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
    <div class="kpk-slider" data-autoplay="6000" tabindex="0" aria-roledescription="carousel" aria-label="TechnolÃ³gie">
      <div class="kpk-slides">

        <?php
        // Ð¡Ð»Ð°Ð¹Ð´Ñ‹: Ð¿Ñ€Ð°Ð²ÑŒ Ñ‚ÐµÐºÑÑ‚Ñ‹/Ñ‚ÐµÐ³Ð¸ Ð½Ð¸Ð¶Ðµ Ð¿Ð¾ Ð²ÐºÑƒÑÑƒ
        $slides = [

          // Ð¡Ð»Ð°Ð¹Ð´ 1: UV flatbed rigid
          [
            'label' => 'TechnolÃ³gie',
            'title' => 'UV flatbed rigid materiÃ¡ly (Agfa Titan S/HS, HP FB7600, etc.)',
            'text'  => 'Pre pevnÃ© dosky: Agfa Titan S/HS dosahuje ~160 mÂ²/h, Å¡Ã­rka aÅ¾ do 3,2 m, hrÃºbka materiÃ¡lu ~5 mm. HP Scitex FB7600 dosahuje Å¡Ã­rku panela do ~2,5 m, UV pigmentovÃ© 6 farebnÃ© atramenty, rozlÃ­Å¡enie aÅ¾ 600 dpi, robustnÃ¡ konÅ¡trukcia pre stabilnÃº produkciu.',
            'tags'  => ['160 mÂ²/h','Å Ã­rka 3200 mm','600 dpi','5 mm dosky','6 farieb','Pigment UV'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/agfa-titan.webp',
          ],

          // Ð¡Ð»Ð°Ð¹Ð´ 2: Eco-/solvent / Latex roll
          [
            'label' => 'TechnolÃ³gie',
            'title' => 'Eco-solvent & Latex / veÄ¾koformÃ¡t roll tlaÄ',
            'text'  => 'RuÄnÃ© / automatizovanÃ© roll-to-roll zariadenia: latexovÃ© alebo solventnÃ© atramenty, trvÃ¡cnosÅ¥ exteriÃ©r/interiÃ©r, Å¡Ã­rky mÃ©diÃ­ do ~3,2 m, moÅ¾nosÅ¥ backlit/micro-perforÃ¡cie/podkladov s textÃºrou. Idealne na bannery, polepy, fasÃ¡dy.',
            'tags'  => ['Latex','Eco-solvent','Roll-to-roll','Å Ã­rka 3200 mm','Outdoor/Indoor','Backlit'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/MIMAKI-JV5.webp',
          ],

          // Ð¡Ð»Ð°Ð¹Ð´ 3: RÃ©zanie / frÃ©zovanie / finishing
          [
            'label' => 'TechnolÃ³gie',
            'title' => 'Rezanie, frÃ©zovanie & finishing (Esko, Summa, FX stroje)',
            'text'  => 'Plotre/vÃ½sekovÃ© / frÃ©zovacie stolice: Esko Kongsberg XN-24 mÃ¡ pracovnÃº plochu ~1680Ã—3200 mm, materiÃ¡ly do ~20 mm hrÃºbky (PVC, akryl, kompozity), presnosÅ¥ rezu a bigovania, moÅ¾nosÅ¥ rÃ´znych hlÃ¡v, vysekÃ¡vania. Summa D120 a FX stroje doplÅˆujÃº Å¡irÅ¡Ã­ sortiment pre tlaÄenÃ© projekty a finishing.',
            'tags'  => ['1680Ã—3200 mm','20 mm hrÃºbky','Bigovanie','PresnÃ© rezy','Kompozity','FreÌza'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/ESKO-KONGSBERG-XN-24.webp',
          ],

          // Ð¡Ð»Ð°Ð¹Ð´ 4: LaminÃ¡cia, aplikÃ¡cia, flatbed aplikÃ¡tory
          [
            'label' => 'TechnolÃ³gie',
            'title' => 'LaminÃ¡cia & aplikÃ¡cia & flatbed aplikÃ¡tory',
            'text'  => 'Rollsroller 400/170R: ploÅ¡nÃ½ aplikÃ¡tor so stolom 4000Ã—1700 mm, max. hrÃºbka substrÃ¡tu do 60 mm, LED osvetlenie, statickÃ½ popruh, moÅ¾nosÅ¥ pred-maskovania a laminÃ¡cie. Flexilam R160 a inÃ© stroje spÃ¡jajÃº ochrannÃ© laminovanie, aplikaÄnÃ© operÃ¡cie a prÃ­pravu vÃ½stupov pre montÃ¡Å¾.',
            'tags'  => ['4000Ã—1700 mm','60 mm hrÃºbky','LED osvetlenie','LaminÃ¡cia','Pred-mask','Flatbed aplikÃ¡tor'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/ROLLSROLLER-400-170R.webp',
          ],

          // Ð¡Ð»Ð°Ð¹Ð´ 5: DigitÃ¡l / laser / planovÃ© ofset / Xerox aproach
          [
            'label' => 'TechnolÃ³gie',
            'title' => 'Xerox 1000i / digitÃ¡lna tlaÄ',
            'text'  => 'RozlÃ­Å¡enie 2400Ã—2400 dpi, tonerovÃ¡ technolÃ³gia EA, papier gramÃ¡Å¾e od ~55 do 350 gsm, formÃ¡ty od A4 do ~330Ã—488 mm, 50-100 str./min v zÃ¡vislosti od formÃ¡tu. LaserovÃ¡ kvalita vhodnÃ¡ pre produkciu malÃ½ch sÃ©riÃ­, letÃ¡kov, broÅ¾Ãºr, zakÃ¡zkovÃ½ch jobs.',
            'tags'  => ['2400 dpi','55-350 gsm','50-100 str./min','A4-SRA3 etc.','Laser / toner','MalÃ© sÃ©rie'],
            'img'   => get_stylesheet_directory_uri().'/assets/tech/XEROX-1000l.webp',
          ],

          // Ð¡Ð»Ð°Ð¹Ð´ 6: Hybrid / Å¡peciÃ¡lne technolÃ³gie & nerozlÃ­Å¡enÃ© stroje
          [
            'label' => 'TechnolÃ³gie',
            'title' => '2-5 m stroje',
            'text'  => 'Machinery ako napr. Durst Rho sÃ©rie, HP Scitex XP/RJ, Aristo LFC-3332: tovÃ¡rne stroje pre veÄ¾koformÃ¡tovÃ© kampane, backdrops, mesh/Å¡irÅ¡ie subtrÃ¡ty. TypickÃ© Å¡Ã­rky 2-5 m, UV alebo hybridnÃ© princÃ­py, vysokÃ¡ odolnosÅ¥ materiÃ¡lov, moÅ¾nosÅ¥ vÃ½roby billboardov, fasÃ¡dnych panelov, veÄ¾koploÅ¡nÃ½ch grafÃ­k s vysokou Å¾ivotnosÅ¥ou.',
            'tags'  => ['Å Ã­rka 2-6 m','Billboard','Mesh','Hybrid','UV / roll-to-roll','Outdoor heavy'],
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

      <!-- ÐÐ°Ð²Ð¸Ð³Ð°Ñ†Ð¸Ñ Ð¸ Ñ‚Ð¾Ñ‡ÐºÐ¸ (Ð·Ð°Ð¿Ð¾Ð»Ð½ÑÑ‚ÑÑ JS) -->
      <button class="kpk-nav kpk-prev" aria-label="PredoÅ¡lÃ½">â€¹</button>
      <button class="kpk-nav kpk-next" aria-label="ÄŽalÅ¡Ã­">â€º</button>
      <div class="kpk-dots" aria-hidden="true"></div>
    </div>
  </div>
</section>

<!-- SEO TEXT BLOCK -->
<section class="section home seo" id="seo-text">
  <div class="container narrow">

    <header class="seo-head">
      <h2>KomplexnÃ© reklamnÃ© rieÅ¡enia pre firmy na celom Slovensku</h2>
      <p class="lead">
        V <strong>KPK Reklama</strong> spÃ¡jame kreatÃ­vu, technolÃ³gie a dlhoroÄnÃ© skÃºsenosti, aby sme doruÄovali
        reklamu, ktorÃ¡ <em>naozaj funguje</em> â€“ od nÃ¡vrhu po inÅ¡talÃ¡ciu s vlastnou vÃ½robou v KoÅ¡iciach.
      </p>
      <div class="chips">
        <a class="chip" href="<?php echo esc_url( home_url('/vonkajsia-reklama/') ); ?>">VonkajÅ¡ia reklama</a>
        <a class="chip" href="<?php echo esc_url( home_url('/samolepiace-folie/') ); ?>">Samolepiace fÃ³lie</a>
        <a class="chip" href="<?php echo esc_url( home_url('/kartonove-stojany/') ); ?>">POS stojany</a>
        <a class="chip" href="<?php echo esc_url( home_url('/vystavne-systemy/') ); ?>">VÃ½stavnÃ© systÃ©my</a>
        <a class="chip" href="<?php echo esc_url( home_url('/polepy-vozidiel/') ); ?>">Polepy vozidiel</a>
        <a class="chip" href="<?php echo esc_url( home_url('/maloplosna-tlac/') ); ?>">MaloploÅ¡nÃ¡ tlaÄ</a>
      </div>
    </header>

    <!-- clamp: ÑÐ²ÐµÑ€Ð½Ñ‘Ð¼ Ð´Ð»Ð¸Ð½Ð½Ñ‹Ð¹ Ñ‚ÐµÐºÑÑ‚ Ð´Ð¾ N px, Â«ZobraziÅ¥ viacÂ» Ñ€Ð°ÑÐºÑ€Ð¾ÐµÑ‚ -->
    <input id="seo-more" class="seo-toggle" type="checkbox" hidden aria-hidden="true">
    <div class="seo-columns">
      <div class="seo-body">
        <p>
          Å pecializujeme sa na <a href="<?php echo esc_url( home_url('/velkoformatova-tlac/') ); ?>">veÄ¾koformÃ¡tovÃº tlaÄ</a>
          a vÃ½robu reklamnÃ½ch produktov â€“ vÅ¡etko vo vlastnej rÃ©Å¾ii. VÄaka tomu garantujeme rÃ½chle dodacie termÃ­ny,
          flexibilitu a stabilnÃº kvalitu vÃ½stupov.
        </p>
        <p>
          NaÅ¡e sluÅ¾by zahÅ•ÅˆajÃº <a href="<?php echo esc_url( home_url('/vonkajsia-reklama/') ); ?>">vonkajÅ¡iu reklamu</a>
          (billboardy, citylighty, backlighty, plachty), <a href="<?php echo esc_url( home_url('/polepy-vozidiel/') ); ?>">profesionÃ¡lne polepy vozidiel</a>,
          <a href="<?php echo esc_url( home_url('/kartonove-stojany/') ); ?>">POS stojany</a> a
          <a href="<?php echo esc_url( home_url('/samolepiace-folie/') ); ?>">samolepiace fÃ³lie</a> pre vÃ½klady a interiÃ©ry,
          ako aj <a href="<?php echo esc_url( home_url('/vystavne-systemy/') ); ?>">vÃ½stavnÃ© systÃ©my</a> pre veÄ¾trhy a retail.
        </p>
        <p>
          KaÅ¾dÃ½ projekt pripravujeme na mieru â€“ od ÃºvodnÃ©ho briefu a grafickÃ©ho nÃ¡vrhu, cez konzultÃ¡cie a vizualizÃ¡cie,
          aÅ¾ po vÃ½robu a montÃ¡Å¾ priamo na mieste. TÃ­m 25 Å¡pecialistov zvlÃ¡da aj komplexnÃ© kampane v krÃ¡tkych termÃ­noch
          s dÃ´razom na detail.
        </p>
        <p>
          ModernÃ© technolÃ³gie nÃ¡m umoÅ¾ÅˆujÃº tlaÄiÅ¥ na rÃ´zne materiÃ¡ly, spracovÃ¡vaÅ¥ veÄ¾kÃ© formÃ¡ty, frÃ©zovaÅ¥, laminovaÅ¥
          a pripravovaÅ¥ produkty na okamÅ¾itÃº inÅ¡talÃ¡ciu. VÄaka napÃ­nacÃ­m systÃ©mom vieme rÃ½chlo meniÅ¥ kampane na dodÃ¡vkach
          a nÃ¡kladnÃ½ch vozidlÃ¡ch bez poÅ¡kodenia karosÃ©rie Äi reklamnej plochy.
        </p>
        <p>
          Sme spoÄ¾ahlivÃ½m partnerom pre malÃ© firmy aj medzinÃ¡rodnÃ© znaÄky. NaÅ¡e rieÅ¡enia pomÃ¡hajÃº budovaÅ¥ dÃ´veru,
          zÃ­skavaÅ¥ novÃ½ch zÃ¡kaznÃ­kov a posilniÅ¥ imidÅ¾ znaÄky. NapÃ­Å¡te nÃ¡m â€“ do 24 hodÃ­n sa vÃ¡m ozveme s nÃ¡vrhom rieÅ¡enia.
        </p>
      </div>

      <aside class="seo-aside">
        <div class="seo-aside__card">
          <h3>ÄŒo zÃ­skate</h3>
          <ul class="seo-check">
            <li>VlastnÃ¡ vÃ½roba & rÃ½chle termÃ­ny</li>
            <li>StabilnÃ¡ kvalita a kontrola vÃ½stupov</li>
            <li>Komplet servis: nÃ¡vrh â†’ vÃ½roba â†’ montÃ¡Å¾</li>
            <li>CeloslovenskÃ© pokrytie logistiky</li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>



<!-- GALÃ‰RIA -->
<section class="section home" id="home-gallery">
  <div class="container">
    <h2>UkÃ¡Å¾ky prÃ¡c</h2>

    <div class="grid grid-3 tiles">
      <?php
        $gallery = [
          ['title'=>'Billboardy', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_5395-1200x900-1-e1669191165862.jpeg'],
          ['title'=>'Backlighty', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0409-1200x900-1-e1669190515921.jpg'],
          ['title'=>'Polepy vÃ½kladov a pevnÃ½ch podkladov', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_20181016_175928-2-1200x900-1-e1669199264424.jpg'],
          ['title'=>'Polepy vozidiel', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG-0321-scaled-e1669200851366.jpg'],
          ['title'=>'Samolepiace fÃ³lie na podlahy', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG-2790-scaled-e1669200642920.jpg'],
          ['title'=>'KartÃ³novÃ© stojany', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2023/05/kartonove-stojany.png'],
          ['title'=>'Stojany a 3D objekty z kartÃ³nu', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/53188136_2038575189530734_8841243831547461632_n-900x900-1.jpg'],
          ['title'=>'VlajkovÃ© systÃ©my', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/image005-1-675x900-1-e1660204131481-copy.jpg'],
          ['title'=>'Tapety', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/DK1_4973-1350x900-1-copy.png'],
        ];
        $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

        foreach ($gallery as $i => $s):
          // Ð¿Ñ€ÐµÐ²ÑŒÑŽ (thumb) Ð¸ Ð¿Ð¾Ð»Ð½Ð¾Ñ€Ð°Ð·Ð¼ÐµÑ€ (full) â€” ÐµÑÐ»Ð¸ Ð½ÐµÑ‚ full, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÐ¼ img
          $thumb = !empty($s['thumb']) ? kpk_resolve_img($s['thumb']) : kpk_resolve_img($s['img']);
          $full  = !empty($s['full'])  ? kpk_resolve_img($s['full'])  : kpk_resolve_img($s['img']);
          if (!$thumb) $thumb = $ph;
          if (!$full)  $full  = $thumb;
      ?>
        <div class="card js-lb-item"
             role="button" tabindex="0"
             aria-label="ZvÃ¤ÄÅ¡iÅ¥: <?php echo esc_attr($s['title']); ?>"
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


<!-- LOGÃ KLIENTOV -->
<section class="section home">
  <div class="container">
    <h2>DÃ´verujÃº nÃ¡m</h2>

    <?php
    // ÐµÐ´Ð¸Ð½Ñ‹Ð¹ ÑÐ¿Ð¸ÑÐ¾Ðº Ð»Ð¾Ð³Ð¾Ñ‚Ð¸Ð¿Ð¾Ð²
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

    // Ð´ÐµÐ»Ð¸Ð¼ Ð½Ð° Ð´Ð²Ðµ ÑÑ‚Ñ€Ð¾ÐºÐ¸
    $split = (int)ceil(count($logos)/2);
    $row1 = array_slice($logos, 0, $split);
    $row2 = array_slice($logos, $split);

    // Ñ€ÐµÐ½Ð´ÐµÑ€ Ð¾Ð´Ð½Ð¾Ð¹ ÑÑ‚Ñ€Ð¾ÐºÐ¸ (Ð´ÑƒÐ±Ð»Ð¸Ñ€ÑƒÐµÐ¼ Ð²Ð½ÑƒÑ‚Ñ€Ð¸ Ð´Ð»Ñ Ð±ÐµÑÑˆÐ¾Ð²Ð½Ð¾Ð¹ Ð°Ð½Ð¸Ð¼Ð°Ñ†Ð¸Ð¸)
    function kpk_render_logo_row($set, $reverse = false, $speed = '40s'){
      $dir = $reverse ? ' marquee--rev' : '';
      echo '<div class="marquee'.$dir.'" style="--speed:'.$speed.'"><div class="marquee__track">';
      foreach ($set as $src) {
        echo '<div class="logo"><img src="'.esc_url($src).'" alt="" loading="lazy" decoding="async"></div>';
      }
      // Ð´ÑƒÐ±Ð»Ð¸ÐºÐ°Ñ‚ Ð½Ð°Ð±Ð¾Ñ€Ð° â€” Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð´Ð»Ñ Ð½ÐµÐ¿Ñ€ÐµÑ€Ñ‹Ð²Ð½Ð¾ÑÑ‚Ð¸, ÑÐºÑ€Ñ‹Ð²Ð°ÐµÐ¼ Ð¾Ñ‚ screen reader
      foreach ($set as $src) {
        echo '<div class="logo" aria-hidden="true"><img src="'.esc_url($src).'" alt=""></div>';
      }
      echo '</div></div>';
    }
    ?>

    <div class="logo-marquee">
      <?php kpk_render_logo_row($row1, true,  '42s'); // Ð²ÐµÑ€Ñ…Ð½ÑÑ: ÑÐ»ÐµÐ²Ð°â†’Ð½Ð°Ð¿Ñ€Ð°Ð²Ð¾ ?>
      <?php kpk_render_logo_row($row2, false, '48s'); // Ð½Ð¸Ð¶Ð½ÑÑ: ÑÐ¿Ñ€Ð°Ð²Ð°â†’Ð½Ð°Ð»ÐµÐ²Ð¾ ?>
    </div>
  </div>
</section>


<!-- FINÃLNY CTA -->
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section home bg-muted">
  <div class="container grid grid-2">
    <div>
      <h2>PripravenÃ­ zaÄaÅ¥?</h2>
      <p class="meta">ZÃ­skajte nezÃ¡vÃ¤znÃº cenovÃº ponuku do 24 hodÃ­n.</p>
      <ul class="meta u-mt-1">
        <li>KompletnÃ© sluÅ¾by od nÃ¡vrhu po inÅ¡talÃ¡ciu</li>
        <li>CelÃ© Slovensko â€“ rozvoz a montÃ¡Å¾</li>
        <li>OverenÃ© materiÃ¡ly a technolÃ³gie</li>
      </ul>
    </div>
    <form method="post" class="form" aria-label="Quote form">
      <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
      <input type="text" name="name" placeholder="Meno a priezvisko" required>
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="tel" name="phone" placeholder="TelefÃ³n">
      <select name="topic">
        <option value="">TÃ©ma dopytu</option>
        <option>VonkajÅ¡ia reklama</option>
        <option>Samolepiace fÃ³lie</option>
        <option>KartÃ³novÃ© stojany</option>
        <option>VÃ½stavnÃ© systÃ©my</option>
        <option>Polepy vozidiel</option>
        <option>MaloploÅ¡nÃ¡ tlaÄ</option>
        <option>NapÃ­nacie systÃ©my</option>
        <option>InÃ©</option>
      </select>
      <textarea name="message" rows="4" placeholder="StruÄnÃ½ popis projektu / rozmery / termÃ­n"></textarea>
      <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
      <button type="submit">OdoslaÅ¥ dopyt</button>
    </form>
  </div>
</section>

<?php get_footer(); ?>
