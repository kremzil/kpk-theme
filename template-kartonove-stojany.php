<?php
/**
 * Template Name: Kartónové stojany (POS)
 * Description: Landing pre POS z kartónu: prečo kartón, podtypy, kapacita/termíny, rozvoz a plnenie, klienti, galéria, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Kartónové POS stojany na mieru</h1>
    <p class="meta-hero">Ľahké, cenovo efektívne a rýchlo vyrobiteľné riešenia pre retail a promo. Od návrhu po rozvoz a plnenie po celej SR.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">Požiadať o cenovú ponuku</a>
      <a class="hero-silent-btn" href="https://www.kpkreklama.sk/wp-content/uploads/2024/07/POS-KATALOG-2024.pdf" target="_blank">Katalóg</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- PREČO KARTÓN  -->
<section class="section">
  <div class="container">
    <h2>Prečo kartón</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/pos/lahke.webp' ); ?>" alt="Ľahké" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px">
          <h3>Ľahké</h3>
          <p class="meta">Jednoduchý prenos a rýchle postavenie priamo v predajni.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/pos/lacne.webp' ); ?>" alt="Lacné" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px">
          <h3>Lacné</h3>
          <p class="meta">Výborný pomer ceny a výkonu — ideálne pre krátkodobé kampane.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/pos/rychle.webp' ); ?>" alt="Rýchla výroba" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px">
          <h3>Rýchla výroba</h3>
          <p class="meta">Prototypovanie a produkcia v krátkych termínoch, bez zložitej logistiky.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEO INTRO (short, no links) -->
<section class="section">
  <div class="container">
    <h2>Profesionálne riešenia z kartónu pre retail a promo</h2>
    <div class="card" style="padding:16px">
      
    <p>
Kartónové POS stojany vyrábame na mieru – od návrhu a prototypu až po sériovú produkciu, rozvoz a plnenie v predajniach. Tovarové stojany, paletové wrapy, 3D objekty/„lamy“, shelf stoppers aj obaly dodávame s plnofarebnou potlačou, prispôsobené rozmerom, hmotnosti produktu a pravidlám merchandasingu.
    </p>
    <p>
Kartón je ľahký, cenovo efektívny a rýchlo vyrobiteľný materiál vhodný pre krátkodobé aj strednodobé kampane. Ponúkame povrchové úpravy pre vyššiu odolnosť, ekologické varianty a balenie do plochy pre jednoduchý transport. Zabezpečujeme inštaláciu a servis po celej SR, štandardné termíny výroby sú 5–10 dní, prototyp zvyčajne do 2–3 dní.
    </p>
    </div>
  </div>
</section>

<!-- PODTYPY (MINI-LANDING BLOKY) -->
<section class="section">
  <div class="container">
    <h2>Katalóg podtypov</h2>

    <?php
    $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';
    $subs = [
      [
        'title' => 'Tovarové stojany',
        'desc'  => 'Predajné stojany s policami/boxami pre produkty. Dizajn na mieru podľa rozmerov a hmotnosti tovaru.',
        'bullets'=> ['Rýchla montáž v predajni', 'Plnofarebná potlač', 'Možnosť doplniť wobblery/topper'],
        'img'   => '/assets/pos/1.webp'
      ],
      [
        'title' => 'Paletové wrapy',
        'desc'  => 'Opláštenie paliet v retaili — rýchla inštalácia, jednotný vizuál kampane, výborná cena.',
        'bullets'=> ['Rýchla výmena vizuálu', 'Stabilný branding na ploche', 'Kompatibilné s paletovými ostrovmi'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0295-1200x900-1-copy.png'
      ],
      [
        'title' => '3D objekty / Brány / „Lamy“',
        'desc'  => 'Priestorové POS prvky pre promo a eventy. Silný vizuálny efekt a vysoká miera zapamätania.',
        'bullets'=> ['Tvarovanie na mieru', 'Pevná konštrukcia z kartónu', 'Možnosť podsvietenia/kompozitných prvkov'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/53188136_2038575189530734_8841243831547461632_n-900x900-1.jpg'
      ],
      [
        'title' => 'Shelf stoppers',
        'desc'  => 'Poličkové „stoppery“ a shelf-talkers — zaujmú pozornosť priamo v regáli.',
        'bullets'=> ['Jednoduché uchytenie', 'Cielený zásah pri produkte', 'Nízka jednotková cena'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0724-1-675x900-1-1-1.jpg'

      ],
      [
        'title' => 'Obalový materiál / Krabice',
        'desc'  => 'Krabice, výplne a poštové balenia s potlačou. Vhodné pre e-shop aj promo packy.',
        'bullets'=> ['Presné rozmery a výsek', 'Ekologické materiály', 'Možnosť sériovej výroby'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0437-1200x900-1-copy.png'

      ],
      [
        'title' => 'šošovky, lamy a brány',
        'desc'  => 'Krabice, výplne a poštové balenia s potlačou. Vhodné pre e-shop aj promo packy.',
        'bullets'=> ['Presné rozmery a výsek', 'Ekologické materiály', 'Možnosť sériovej výroby'],
        'img'   => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0509.jpg'

      ],
    ];

    foreach ($subs as $s):
      // kpk_resolve_img($v) мы уже добавляли раньше; он понимает ID/URL/относительный путь
      $img = !empty($s['img']) ? kpk_resolve_img($s['img']) : $ph;
    ?>
      <div class="card u-mb-2">
        <div class="grid grid-2" style="align-items:center">
          <div class="figure">
            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($s['title']); ?>" loading="lazy" decoding="async">
          </div>
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
              <a class="cta-btn" href="#kpk-quote">Zistiť cenu</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- VÝROBNÁ KAPACITA A TERMÍNY -->
<section class="section">
  <div class="container">
    <h2>Výrobná kapacita a termíny</h2>
    <div class="badges">
      <div class="badge"><strong>3 000+ ks</strong><br><span class="meta">mesačne pri bežných stojanoch</span></div>
      <div class="badge"><strong>2–3 dni</strong><br><span class="meta">prototyp a test v predajni</span></div>
      <div class="badge"><strong>5–10 dní</strong><br><span class="meta">štandardná produkcia</span></div>
      <div class="badge"><strong>24–48 h</strong><br><span class="meta">urgentná tlač (po dohode)</span></div>
    </div>
    <p class="meta u-mt-1">Termín závisí od množstva, povrchovej úpravy a logistiky rozvozu.</p>
  </div>
</section>

<!-- ROZVOZ A PLNENIE STOJANOV (SERVIS-BLOK) -->
<section class="section bg-muted">
  <div class="container">
    <h2>Rozvoz a plnenie stojanov</h2>
    <div class="grid grid-4">
      <?php
      $svc = [
        ['Plánovanie trasy', 'Optimalizácia rozvozu do predajní', '/assets/pos/cesta.webp'],
        ['Doručenie a inštalácia', 'Montáž v predajni podľa guideline', '/assets/pos/instalacia.webp'],
        ['Plnenie produktom', 'Kompletácia a merch podľa zoznamu', '/assets/pos/plnenie.webp'],
        ['Report a foto', 'Dokumentácia a spätná väzba', '/assets/pos/report.webp'],
      ];

      $ph = get_stylesheet_directory_uri() . '/assets/placeholder.jpg';

      foreach ($svc as $item) :
        $img = kpk_asset($item[2] ?? '') ?: $ph; // ← хелпер из functions.php
      ?>
        <div class="card">
          <div class="figure">
            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($item[0]); ?>" loading="lazy" decoding="async">
          </div>
          <div style="padding:16px">
            <h3><?php echo esc_html($item[0]); ?></h3>
            <p class="meta"><?php echo esc_html($item[1]); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="meta u-mt-1">
      <a href="<?php echo esc_url(home_url('/sluzby/')); ?>">
        Pozrite si aj ďalšie služby →
      </a>
    </p>
  </div>
</section>


<!-- GALÉRIA -->
<section class="section" id="outdoor-gallery">
  <div class="container">
    <h2>Ukážky POS realizácií</h2>

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
          <div class="figure is-square">
            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($s['title']); ?>" loading="lazy" decoding="async">
          </div>
          <div style="padding:12px">
            <h3 class="meta">POS projekt <?php echo esc_html($s['title']); ?></h3>
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

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Ako si vybrať typ stojana?', 'Záleží od produktu, hmotnosti a priestoru. Navrhneme vhodnú konštrukciu a výsek.'],
        ['Aké sú limity rozmerov?', 'Väčšina stojanov je skladateľná — dodávame v plochom balení s jednoduchým návodom.'],
        ['Koľko vydrží kartón v predajni?', 'Pre krátke až stredné kampane; výdrž zvyšuje povrchová úprava a správne osadenie.'],
        ['Viete zabezpečiť plnenie?', 'Áno, doručenie do predajní, poskladanie a naplnenie podľa zoznamu.'],
        ['Je možná re-cyklácia?', 'Používame recyklovateľné materiály; vieme dodať aj eco varianty.'],
        ['Ako funguje prototypovanie?', 'Vyrobíme vzorku na skúšku v reálnom prostredí, upravíme podľa feedbacku.'],
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

<!-- FINÁLNY CTA (JEDNA FORMA) -->
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Odpovieme do 24 hodín. Pomôže, keď uvediete typ stojana, náklad a termín.</p>
          <ul class="meta u-mt-1">
            <li>Podtyp (tovarový / paletový wrap / 3D / shelf stopper / krabice)</li>
            <li>Počet ks a predajné miesta</li>
            <li>Termín kampane a logistické požiadavky</li>
          </ul>
        </div>
<form id="kpk-quote-form" method="post" class="form kpk-form" aria-label="Quote form">
  <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>

  <input type="text" name="name" placeholder="Meno a priezvisko" required>
  <input type="email" name="email" placeholder="E-mail" required>
  <input type="tel" name="phone" placeholder="Telefón">

  <select name="topic">
    <option value="">Podtyp stojana</option>
    <option>Tovarový</option>
    <option>Paletový wrap</option>
    <option>3D / Brána / Lama</option>
    <option>Shelf stopper</option>
    <option>Obal / Krabice</option>
    <option>Iné</option>
  </select>

  <textarea name="message" rows="4" placeholder="Rozmery, počet ks, predajne, termín"></textarea>

  <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">

  <!-- reCAPTCHA token -->
  <input type="hidden" name="kpk_recaptcha_token" value="">

  <button type="submit">Získať ponuku</button>
</form>

      </div>
    </div>
  </div>
</section>

<?php get_footer();
