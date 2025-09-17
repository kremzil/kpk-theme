<?php
/**
 * Template Name: KartÃ³novÃ© stojany (POS)
 * Description: Landing pre POS z kartÃ³nu: preÄo kartÃ³n, podtypy, kapacita/termÃ­ny, rozvoz a plnenie, klienti, galÃ©ria, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>KartÃ³novÃ© POS stojany na mieru</h1>
    <p class="meta-hero">Ä½ahkÃ©, cenovo efektÃ­vne a rÃ½chlo vyrobiteÄ¾nÃ© rieÅ¡enia pre retail a promo. Od nÃ¡vrhu po rozvoz a plnenie po celej SR.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">PoÅ¾iadaÅ¥ o cenovÃº ponuku</a>
      <a class="hero-silent-btn" href="https://www.kpkreklama.sk/wp-content/uploads/2024/07/POS-KATALOG-2024.pdf" target="_blank">KatalÃ³g</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- PREÄŒO KARTÃ“N  -->
<section class="section">
  <div class="container">
    <h2>PreÄo kartÃ³n</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/pos/lahke.webp')"></div>
        <div style="padding:16px">
          <h3>Ä½ahkÃ©</h3>
          <p class="meta">JednoduchÃ½ prenos a rÃ½chle postavenie priamo v predajni.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/pos/lacne.webp')"></div>
        <div style="padding:16px">
          <h3>LacnÃ©</h3>
          <p class="meta">VÃ½bornÃ½ pomer ceny a vÃ½konu â€” ideÃ¡lne pre krÃ¡tkodobÃ© kampane.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/pos/rychle.webp')"></div>
        <div style="padding:16px">
          <h3>RÃ½chla vÃ½roba</h3>
          <p class="meta">Prototypovanie a produkcia v krÃ¡tkych termÃ­noch, bez zloÅ¾itej logistiky.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEO INTRO (short, no links) -->
<section class="section">
  <div class="container">
    <h2>ProfesionÃ¡lne rieÅ¡enia z kartÃ³nu pre retail a promo</h2>
    <div class="card" style="padding:16px">
      
    <p>
KartÃ³novÃ© POS stojany vyrÃ¡bame na mieru â€“ od nÃ¡vrhu a prototypu aÅ¾ po sÃ©riovÃº produkciu, rozvoz a plnenie v predajniach. TovarovÃ© stojany, paletovÃ© wrapy, 3D objekty/â€žlamyâ€œ, shelf stoppers aj obaly dodÃ¡vame s plnofarebnou potlaÄou, prispÃ´sobenÃ© rozmerom, hmotnosti produktu a pravidlÃ¡m merchandasingu.
    </p>
    <p>
KartÃ³n je Ä¾ahkÃ½, cenovo efektÃ­vny a rÃ½chlo vyrobiteÄ¾nÃ½ materiÃ¡l vhodnÃ½ pre krÃ¡tkodobÃ© aj strednodobÃ© kampane. PonÃºkame povrchovÃ© Ãºpravy pre vyÅ¡Å¡iu odolnosÅ¥, ekologickÃ© varianty a balenie do plochy pre jednoduchÃ½ transport. ZabezpeÄujeme inÅ¡talÃ¡ciu a servis po celej SR, Å¡tandardnÃ© termÃ­ny vÃ½roby sÃº 5â€“10 dnÃ­, prototyp zvyÄajne do 2â€“3 dnÃ­.
    </p>
    </div>
  </div>
</section>

<!-- PODTYPY (MINI-LANDING BLOKY) -->
<section class="section">
  <div class="container">
    <h2>KatalÃ³g podtypov</h2>

    <?php
    $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';
    $subs = [
      [
        'title' => 'TovarovÃ© stojany',
        'desc'  => 'PredajnÃ© stojany s policami/boxami pre produkty. Dizajn na mieru podÄ¾a rozmerov a hmotnosti tovaru.',
        'bullets'=> ['RÃ½chla montÃ¡Å¾ v predajni', 'PlnofarebnÃ¡ potlaÄ', 'MoÅ¾nosÅ¥ doplniÅ¥ wobblery/topper'],
        'img'   => '/assets/pos/1.webp'
      ],
      [
        'title' => 'PaletovÃ© wrapy',
        'desc'  => 'OplÃ¡Å¡tenie paliet v retaili â€” rÃ½chla inÅ¡talÃ¡cia, jednotnÃ½ vizuÃ¡l kampane, vÃ½bornÃ¡ cena.',
        'bullets'=> ['RÃ½chla vÃ½mena vizuÃ¡lu', 'StabilnÃ½ branding na ploche', 'KompatibilnÃ© s paletovÃ½mi ostrovmi'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0295-1200x900-1-copy.png'
      ],
      [
        'title' => '3D objekty / BrÃ¡ny / â€žLamyâ€œ',
        'desc'  => 'PriestorovÃ© POS prvky pre promo a eventy. SilnÃ½ vizuÃ¡lny efekt a vysokÃ¡ miera zapamÃ¤tania.',
        'bullets'=> ['Tvarovanie na mieru', 'PevnÃ¡ konÅ¡trukcia z kartÃ³nu', 'MoÅ¾nosÅ¥ podsvietenia/kompozitnÃ½ch prvkov'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/53188136_2038575189530734_8841243831547461632_n-900x900-1.jpg'
      ],
      [
        'title' => 'Shelf stoppers',
        'desc'  => 'PoliÄkovÃ© â€žstopperyâ€œ a shelf-talkers â€” zaujmÃº pozornosÅ¥ priamo v regÃ¡li.',
        'bullets'=> ['JednoduchÃ© uchytenie', 'CielenÃ½ zÃ¡sah pri produkte', 'NÃ­zka jednotkovÃ¡ cena'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0724-1-675x900-1-1-1.jpg'

      ],
      [
        'title' => 'ObalovÃ½ materiÃ¡l / Krabice',
        'desc'  => 'Krabice, vÃ½plne a poÅ¡tovÃ© balenia s potlaÄou. VhodnÃ© pre e-shop aj promo packy.',
        'bullets'=> ['PresnÃ© rozmery a vÃ½sek', 'EkologickÃ© materiÃ¡ly', 'MoÅ¾nosÅ¥ sÃ©riovej vÃ½roby'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0437-1200x900-1-copy.png'

      ],
      [
        'title' => 'Å¡oÅ¡ovky, lamy a brÃ¡ny',
        'desc'  => 'Krabice, vÃ½plne a poÅ¡tovÃ© balenia s potlaÄou. VhodnÃ© pre e-shop aj promo packy.',
        'bullets'=> ['PresnÃ© rozmery a vÃ½sek', 'EkologickÃ© materiÃ¡ly', 'MoÅ¾nosÅ¥ sÃ©riovej vÃ½roby'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0509.jpg'

      ],
    ];

    foreach ($subs as $s):
      // kpk_resolve_img($v) Ð¼Ñ‹ ÑƒÐ¶Ðµ Ð´Ð¾Ð±Ð°Ð²Ð»ÑÐ»Ð¸ Ñ€Ð°Ð½ÑŒÑˆÐµ; Ð¾Ð½ Ð¿Ð¾Ð½Ð¸Ð¼Ð°ÐµÑ‚ ID/URL/Ð¾Ñ‚Ð½Ð¾ÑÐ¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð¿ÑƒÑ‚ÑŒ
      $img = !empty($s['img']) ? kpk_resolve_img($s['img']) : $ph;
    ?>
      <div class="card u-mb-2">
        <div class="grid grid-2" style="align-items:center">
          <div class="figure" style="background-image:url('<?php echo esc_url($img); ?>')"></div>
          <div style="padding:16px">
            <h3><?php echo esc_html($s['title']); ?></h3>
            <p class="meta"><?php echo esc_html($s['desc']); ?></p>

            <?php if (!empty($s['bullets']) && is_array($s['bullets'])): ?>
              <ul class="meta u-mt-1">
                <?php foreach($s['bullets'] as $b): ?>
                  <li><?php echo esc_html($b); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            
            <div class="u-mt-2">
              <a class="cta-btn" href="#kpk-quote">ZistiÅ¥ cenu</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- VÃROBNÃ KAPACITA A TERMÃNY -->
<section class="section">
  <div class="container">
    <h2>VÃ½robnÃ¡ kapacita a termÃ­ny</h2>
    <div class="badges">
      <div class="badge"><strong>3 000+ ks</strong><br><span class="meta">mesaÄne pri beÅ¾nÃ½ch stojanoch</span></div>
      <div class="badge"><strong>2â€“3 dni</strong><br><span class="meta">prototyp a test v predajni</span></div>
      <div class="badge"><strong>5â€“10 dnÃ­</strong><br><span class="meta">Å¡tandardnÃ¡ produkcia</span></div>
      <div class="badge"><strong>24â€“48 h</strong><br><span class="meta">urgentnÃ¡ tlaÄ (po dohode)</span></div>
    </div>
    <p class="meta u-mt-1">TermÃ­n zÃ¡visÃ­ od mnoÅ¾stva, povrchovej Ãºpravy a logistiky rozvozu.</p>
  </div>
</section>

<!-- ROZVOZ A PLNENIE STOJANOV (SERVIS-BLOK) -->
<section class="section bg-muted">
  <div class="container">
    <h2>Rozvoz a plnenie stojanov</h2>
    <div class="grid grid-4">
      <?php
      $svc = [
        ['PlÃ¡novanie trasy', 'OptimalizÃ¡cia rozvozu do predajnÃ­', '/assets/pos/cesta.webp'],
        ['DoruÄenie a inÅ¡talÃ¡cia', 'MontÃ¡Å¾ v predajni podÄ¾a guideline', '/assets/pos/instalacia.webp'],
        ['Plnenie produktom', 'KompletÃ¡cia a merch podÄ¾a zoznamu', '/assets/pos/plnenie.webp'],
        ['Report a foto', 'DokumentÃ¡cia a spÃ¤tnÃ¡ vÃ¤zba', '/assets/pos/report.webp'],
      ];

      $ph = get_stylesheet_directory_uri() . '/assets/placeholder.jpg';

      foreach ($svc as $item) :
        $img = kpk_asset($item[2] ?? '') ?: $ph; // â† Ñ…ÐµÐ»Ð¿ÐµÑ€ Ð¸Ð· functions.php
      ?>
        <div class="card">
          <div class="figure" style="background-image:url('<?php echo esc_url($img); ?>')"></div>
          <div style="padding:16px">
            <h3><?php echo esc_html($item[0]); ?></h3>
            <p class="meta"><?php echo esc_html($item[1]); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="meta u-mt-1">
      <a href="<?php echo esc_url(home_url('/sluzby/')); ?>">
        Pozrite si aj ÄalÅ¡ie sluÅ¾by â†’
      </a>
    </p>
  </div>
</section>


<!-- GALÃ‰RIA -->
<section class="section" id="outdoor-gallery">
  <div class="container">
    <h2>UkÃ¡Å¾ky POS realizÃ¡ciÃ­</h2>

    <div class="grid grid-3 tiles">
      <?php
        $gallery = [
          ['title'=>'1', 'img'=>'/assets/pos/pos-9.webp'],
          ['title'=>'2', 'img'=>'/assets/pos/pos-1.webp'],
          ['title'=>'3', 'img'=>'/assets/pos/pos-8.webp'],
          ['title'=>'4', 'img'=>'/assets/pos/pos-7.webp'],
          ['title'=>'5', 'img'=>'/assets/pos/pos-6.webp'],
          ['title'=>'6', 'img'=>'/assets/pos/pos-5.webp'],
          ['title'=>'7', 'img'=>'/assets/pos/pos-4.webp'],
          ['title'=>'8', 'img'=>'/assets/pos/pos-3.webp'],
          ['title'=>'9', 'img'=>'/assets/pos/pos-2.webp'],
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
            <h3 class="meta">POS projekt <?php echo esc_html($s['title']); ?></h3>
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

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Ako si vybraÅ¥ typ stojana?', 'ZÃ¡leÅ¾Ã­ od produktu, hmotnosti a priestoru. Navrhneme vhodnÃº konÅ¡trukciu a vÃ½sek.'],
        ['AkÃ© sÃº limity rozmerov?', 'VÃ¤ÄÅ¡ina stojanov je skladateÄ¾nÃ¡ â€” dodÃ¡vame v plochom balenÃ­ s jednoduchÃ½m nÃ¡vodom.'],
        ['KoÄ¾ko vydrÅ¾Ã­ kartÃ³n v predajni?', 'Pre krÃ¡tke aÅ¾ strednÃ© kampane; vÃ½drÅ¾ zvyÅ¡uje povrchovÃ¡ Ãºprava a sprÃ¡vne osadenie.'],
        ['Viete zabezpeÄiÅ¥ plnenie?', 'Ãno, doruÄenie do predajnÃ­, poskladanie a naplnenie podÄ¾a zoznamu.'],
        ['Je moÅ¾nÃ¡ re-cyklÃ¡cia?', 'PouÅ¾Ã­vame recyklovateÄ¾nÃ© materiÃ¡ly; vieme dodaÅ¥ aj eco varianty.'],
        ['Ako funguje prototypovanie?', 'VyrobÃ­me vzorku na skÃºÅ¡ku v reÃ¡lnom prostredÃ­, upravÃ­me podÄ¾a feedbacku.'],
      ];
      foreach($faq as $f){
        echo '<div class="card">
                <div style="padding:16px">
                  <h3>'.$f[0].'</h3>
                  <p class="meta">'.$f[1].'</p>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- FINÃLNY CTA (JEDNA FORMA) -->
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>PoÅ¾iadaÅ¥ o cenovÃº ponuku</h2>
          <p class="meta">Odpovieme do 24 hodÃ­n. PomÃ´Å¾e, keÄ uvediete typ stojana, nÃ¡klad a termÃ­n.</p>
          <ul class="meta u-mt-1">
            <li>â€¢ Podtyp (tovarovÃ½ / paletovÃ½ wrap / 3D / shelf stopper / krabice)</li>
            <li>â€¢ PoÄet ks a predajnÃ© miesta</li>
            <li>â€¢ TermÃ­n kampane a logistickÃ© poÅ¾iadavky</li>
          </ul>
        </div>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic">
            <option value="">Podtyp stojana</option>
            <option>TovarovÃ½</option>
            <option>PaletovÃ½ wrap</option>
            <option>3D / BrÃ¡na / Lama</option>
            <option>Shelf stopper</option>
            <option>Obal / Krabice</option>
            <option>InÃ©</option>
          </select>
          <textarea name="message" rows="4" placeholder="Rozmery, poÄet ks, predajne, termÃ­n"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">ZÃ­skaÅ¥ ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
