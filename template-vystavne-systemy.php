<?php
/**
 * Template Name: VÃ½stavnÃ© systÃ©my (Landing)
 * Description: Landing pre vÃ½stavnÃ© a promo systÃ©my: kde sa hodÃ­, podkategÃ³rie, sety pod rozpoÄet, galÃ©ria, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>VÃ½stavnÃ© systÃ©my na eventy a predajnÃ© miesta</h1>
    <p class="meta-hero">TextilnÃ© a modulÃ¡rne rieÅ¡enia pre veÄ¾trhy, retail a promo akcie. RÃ½chla montÃ¡Å¾, prenosnosÅ¥ a ÄistÃ½ vizuÃ¡l.</p>
    <div class="badges" style="margin-top:12px">
      <a class="cta-btn" href="#kpk-quote">PoÅ¾iadaÅ¥ o cenovÃº ponuku</a>
      <a class="cta-btn" href="<?php echo esc_url( home_url('/kontakt/') ); ?>">KonzultÃ¡cia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- KDE SA HODÃ -->
<section class="section">
  <div class="container">
    <h2>Kde sa hodÃ­</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/vystava/stanky.webp')"></div>
        <div style="padding:16px"><h3>VeÄ¾trhy</h3><p class="meta">StÃ¡nky, textilnÃ© steny a pop-up rieÅ¡enia s rÃ½chlou vÃ½menou grafiky.</p></div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/vystava/promostol.webp')"></div>
        <div style="padding:16px"><h3>Retail</h3><p class="meta">Promo ostrovy, roll-upy a svetelnÃ© logÃ¡ pri pokladniach a vstupoch.</p></div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/vystava/promo.webp')"></div>
        <div style="padding:16px"><h3>Promo</h3><p class="meta">MobilnÃ© sety pre roadshow a sampling â€“ skladnÃ©, odolnÃ©, opakovane pouÅ¾iteÄ¾nÃ©.</p></div></div>
    </div>
  </div>
</section>

<!-- SEO INTRO (short, no links) -->
<section class="section">
  <div class="container">
    <h2>FlexibilnÃ© systÃ©my pre vÃ½stavy, retail a promo</h2>
    <div class="card" style="padding:16px">
      
    <p>
VÃ½stavnÃ© systÃ©my navrhujeme a vyrÃ¡bame na mieru pre veÄ¾trhy, retail aj promo akcie. TextilnÃ© steny a rÃ¡my, pop-up konÅ¡trukcie, roll-upy, promo stolÃ­ky, vlajkovÃ© systÃ©my, stany a svetelnÃ© logÃ¡/lightboxy ponÃºkajÃº rÃ½chlu montÃ¡Å¾ bez nÃ¡radia, nÃ­zku hmotnosÅ¥, prenosnosÅ¥ a opakovanÃ© pouÅ¾itie. PostarÃ¡me sa o nÃ¡vrh, vizualizÃ¡ciu, tlaÄ aj vÃ½robu s dÃ´razom na ÄistÃ½ vizuÃ¡l a farebnÃº zhodu.
   </p>
   <p>
PripravÃ­me modulÃ¡rne sety podÄ¾a priestoru a rozpoÄtu (Starter/Pro/Premium alebo vlastnÃ¡ kombinÃ¡cia), s moÅ¾nosÅ¥ou rÃ½chlej vÃ½meny grafiky a transportnÃ½ch vakov. ZabezpeÄujeme inÅ¡talÃ¡ciu a servis po celej SR; Å¡tandardnÃ© dodacie lehoty sÃº 3â€“7 pracovnÃ½ch dnÃ­ podÄ¾a rozsahu.
   </p>
    </div>
  </div>
</section>

<!-- PODKATEGÃ“RIE -->
<section class="section">
  <div class="container">
    <h2>PodkategÃ³rie</h2>

    <?php
    $subs = [
      ['Textil / T-Flex','TextilnÃ© steny a rÃ¡my s vÃ½menou lÃ¡tkovÃ©ho printu.','RÃ½chla vÃ½mena lÃ¡tky, bez lesku, prenosnÃ© konÅ¡trukcie.','JednoduchÃ¡ stavba bez nÃ¡radia','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/tflex_humanic3-copy.jpg'],
      ['Obrazy / Tabule','TlaÄenÃ© panely a info tabule pre interiÃ©r aj short-term outdoor.','Ä½ahkÃ© materiÃ¡ly: PVC, kompozit, pena, hlinÃ­k.','MontÃ¡Å¾ na stojany alebo stenu','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_3343-scaled-copy-1.png'],
      ['Roll-Up','KlasickÃ½ mobilnÃ½ stojan do vstupnÃ½ch zÃ³n a na eventy.','MalÃ½ transportnÃ½ rozmer, rÃ½chle postavenie.','VÃ½mena grafiky kazetou','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_3126-675x900-1-copy.png'],
      ['Promo stolÃ­ky','Sampling a promo priestor pre retail a eventy.','Ä½ahkÃ©, skladnÃ©, s poliÄkou na materiÃ¡l.','MoÅ¾nosÅ¥ dodÃ¡vky s transportnÃ½m vakom','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/WhatsApp-Image-2018-10-28-at-14.40.05-675x900-1-copy.png'],
      ['VlajkovÃ© systÃ©my','Beachflagy/kvapky do exteriÃ©ru aj interiÃ©ru.','RÃ´zne tvary a vÃ½Å¡ky, zÃ¡kladne na vodu Äi krÃ­Å¾.','RÃ½chla vÃ½mena vlajky','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/Chabry1-1200x900-1-copy.jpg'],
      ['Pop-Up steny','MagnetickÃ© a textilnÃ© skladacie steny.','VeÄ¾kÃ½ vizuÃ¡l, rÃ½chla montÃ¡Å¾.','Pre prezentÃ¡cie a konferencie','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/12/POP-UP-KPKReklama.sk-fabrika-na-reklamu-002-new.jpg'],
      ['Stany','ReklamnÃ© stany 3Ã—3 / 3Ã—4,5 / 3Ã—6 m.','S potlaÄou strechy a stien.','RÃ½chla stavba, odolnÃ¡ konÅ¡trukcia','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2023/02/Reklamny-stan-KPKReklama.sk-fabrika-na-reklamu-001-scaled.jpg'],
      ['SvetelnÃ© logÃ¡','LED logotypy a lightboxy.','SilnÃ¡ vizibilita, nÃ­zka spotreba.','Zavesenie alebo stojan','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0591-copy.png'],
    ];
    foreach($subs as $s): ?>
      <div class="card u-mb-2">
        <div class="grid grid-2" style="align-items:center">
          <div class="figure is-square" style="background-image:url('<?php echo esc_url($s[5]); ?>')"></div>
          <div style="padding:16px">
            <h3><?php echo esc_html($s[0]); ?></h3>
            <p class="meta"><strong>Kedy pouÅ¾iÅ¥:</strong> <?php echo esc_html($s[1]); ?></p>
            <ul class="meta u-mt-1">
              <li>â€¢ <strong>VÃ½bava:</strong> <?php echo esc_html($s[2]); ?></li>
              <li>â€¢ <strong>MontÃ¡Å¾/prenos:</strong> <?php echo esc_html($s[3]); ?></li>
            </ul>
            <div class="u-mt-2">
              <a class="cta-btn" href="<?php echo esc_url($s[4]); ?>">ZistiÅ¥ cenu</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- GALÃ‰RIA -->
<section class="section" id="vystave-gallery">
  <div class="container">
    <h2>UkÃ¡Å¾ky vÃ½stavnÃ½ch systemov v realizÃ¡ciÃ­</h2>

    <div class="grid grid-3 tiles">
      <?php
        $gallery = [
          ['title'=>'1', 'img'=>'/assets/vystava/vystava-9.webp'],
          ['title'=>'2', 'img'=>'/assets/vystava/vystava-1.webp'],
          ['title'=>'3', 'img'=>'/assets/vystava/vystava-8.webp'],
          ['title'=>'4', 'img'=>'/assets/vystava/vystava-7.webp'],
          ['title'=>'5', 'img'=>'/assets/vystava/vystava-6.webp'],
          ['title'=>'6', 'img'=>'/assets/vystava/vystava-5.webp'],
          ['title'=>'7', 'img'=>'/assets/vystava/vystava-4.webp'],
          ['title'=>'8', 'img'=>'/assets/vystava/vystava-3.webp'],
          ['title'=>'9', 'img'=>'/assets/vystava/vystava-2.webp'],
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

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Ako vybraÅ¥ medzi textilom a panelom?', 'Textil je bez odlesku a veÄ¾mi prenosnÃ½; panel (PVC/kompozit) drÅ¾Ã­ tvar a je pevnejÅ¡Ã­.'],
        ['DÃ¡ sa meniÅ¥ grafika?', 'Ãno, vÃ¤ÄÅ¡ina systÃ©mov umoÅ¾Åˆuje rÃ½chlu vÃ½menu printu (lÃ¡tka, banner, vloÅ¾enÃ© printy).'],
        ['Ako prebieha montÃ¡Å¾?', 'SystÃ©my sÃº navrhnutÃ© na rÃ½chlu stavbu bez nÃ¡radia; mÃ´Å¾eme zabezpeÄiÅ¥ aj kompletnÃº inÅ¡talÃ¡ciu.'],
        ['Pre outdoor promo?', 'Vlajky, stany a odolnÃ© tabule s UV odolnou tlaÄou a povrchovou Ãºpravou.'],
        ['AkÃ© sÃº dodacie lehoty?', 'Å tandardne 3â€“7 pracovnÃ½ch dnÃ­ podÄ¾a setu a mnoÅ¾stva.'],
        ['Je moÅ¾nÃ© prenajÃ­maÅ¥ konÅ¡trukcie?', 'PodÄ¾a typu â€“ radi vÃ¡m odporuÄÃ­me najvÃ½hodnejÅ¡Ã­ model (nÃ¡kup/prenÃ¡jom).'],
      ];
      foreach($faq as $f): ?>
        <div class="card">
          <div style="padding:16px">
            <h3><?php echo esc_html($f[0]); ?></h3>
            <p class="meta"><?php echo esc_html($f[1]); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FINÃLNY CTA -->
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>PoÅ¾iadaÅ¥ o cenovÃº ponuku</h2>
          <p class="meta">Navrhneme optimÃ¡lny set pre vÃ¡Å¡ rozpoÄet a priestor.</p>
          <ul class="meta u-mt-1">
            <li>â€¢ Typ akcie (veÄ¾trh / retail / promo)</li>
            <li>â€¢ Rozmery plochy a rozpoÄet</li>
            <li>â€¢ PoÅ¾adovanÃ© prvky (textil, roll-up, stan, vlajkyâ€¦)</li>
          </ul>
        </div>
        <?php kpk_form_notice(); ?>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic">
            <option value="">ZÃ¡ujem o set</option>
            <option>Starter</option>
            <option>Pro</option>
            <option>Premium</option>
            <option>VlastnÃ¡ kombinÃ¡cia</option>
          </select>
          <textarea name="message" rows="4" placeholder="Priestor, termÃ­n, poÅ¾adovanÃ© prvky"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">ZÃ­skaÅ¥ ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
