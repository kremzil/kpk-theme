<?php
/**
 * Template Name: Výstavné systémy (Landing)
 * Description: Landing pre výstavné a promo systémy: kde sa hodí, podkategórie, sety pod rozpočet, galéria, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Výstavné systémy na eventy a predajné miesta</h1>
    <p class="meta-hero">Textilné a modulárne riešenia pre veľtrhy, retail a promo akcie. Rýchla montáž, prenosnosť a čistý vizuál.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">Požiadať o cenovú ponuku</a>
      <a class="hero-silent-btn" href="<?php echo esc_url( home_url('/kontakt/') ); ?>">Konzultácia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- KDE SA HODÍ -->
<section class="section">
  <div class="container">
    <h2>Kde sa hodí</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/vystava/stanky.webp' ); ?>" alt="Veľtrhy" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px"><h3>Veľtrhy</h3><p class="meta">Stánky, textilné steny a pop-up riešenia s rýchlou výmenou grafiky.</p></div>
      </div>
      <div class="card">
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/vystava/promostol.webp' ); ?>" alt="Retail" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px"><h3>Retail</h3><p class="meta">Promo ostrovy, roll-upy a svetelné logá pri pokladniach a vstupoch.</p></div>
      </div>
      <div class="card">
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/vystava/promo.webp' ); ?>" alt="Promo" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px"><h3>Promo</h3><p class="meta">Mobilné sety pre roadshow a sampling – skladné, odolné, opakovane použiteľné.</p></div></div>
    </div>
  </div>
</section>

<!-- SEO INTRO (short, no links) -->
<section class="section">
  <div class="container">
    <h2>Flexibilné systémy pre výstavy, retail a promo</h2>
    <div class="card" style="padding:16px">
      
    <p>
Výstavné systémy navrhujeme a vyrábame na mieru pre veľtrhy, retail aj promo akcie. Textilné steny a rámy, pop-up konštrukcie, roll-upy, promo stolíky, vlajkové systémy, stany a svetelné logá/lightboxy ponúkajú rýchlu montáž bez náradia, nízku hmotnosť, prenosnosť a opakované použitie. Postaráme sa o návrh, vizualizáciu, tlač aj výrobu s dôrazom na čistý vizuál a farebnú zhodu.
   </p>
   <p>
Pripravíme modulárne sety podľa priestoru a rozpočtu (Starter/Pro/Premium alebo vlastná kombinácia), s možnosťou rýchlej výmeny grafiky a transportných vakov. Zabezpečujeme inštaláciu a servis po celej SR; štandardné dodacie lehoty sú 3–7 pracovných dní podľa rozsahu.
   </p>
    </div>
  </div>
</section>

<!-- PODKATEGÓRIE -->
<section class="section">
  <div class="container">
    <h2>Podkategórie</h2>

    <?php
    $subs = [
      ['Textil / T-Flex','Textilné steny a rámy s výmenou látkového printu.','Rýchla výmena látky, bez lesku, prenosné konštrukcie.','Jednoduchá stavba bez náradia','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/tflex_humanic3-copy.jpg'],
      ['Obrazy / Tabule','Tlačené panely a info tabule pre interiér aj short-term outdoor.','Ľahké materiály: PVC, kompozit, pena, hliník.','Montáž na stojany alebo stenu','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_3343-scaled-copy-1.png'],
      ['Roll-Up','Klasický mobilný stojan do vstupných zón a na eventy.','Malý transportný rozmer, rýchle postavenie.','Výmena grafiky kazetou','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_3126-675x900-1-copy.png'],
      ['Promo stolíky','Sampling a promo priestor pre retail a eventy.','Ľahké, skladné, s poličkou na materiál.','Možnosť dodávky s transportným vakom','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/WhatsApp-Image-2018-10-28-at-14.40.05-675x900-1-copy.png'],
      ['Vlajkové systémy','Beachflagy/kvapky do exteriéru aj interiéru.','Rôzne tvary a výšky, základne na vodu či kríž.','Rýchla výmena vlajky','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/Chabry1-1200x900-1-copy.jpg'],
      ['Pop-Up steny','Magnetické a textilné skladacie steny.','Veľký vizuál, rýchla montáž.','Pre prezentácie a konferencie','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/12/POP-UP-KPKReklama.sk-fabrika-na-reklamu-002-new.jpg'],
      ['Stany','Reklamné stany 3×3 / 3×4,5 / 3×6 m.','S potlačou strechy a stien.','Rýchla stavba, odolná konštrukcia','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2023/02/Reklamny-stan-KPKReklama.sk-fabrika-na-reklamu-001-scaled.jpg'],
      ['Svetelné logá','LED logotypy a lightboxy.','Silná vizibilita, nízka spotreba.','Zavesenie alebo stojan','#kpk-quote', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0591-copy.png'],
    ];
    foreach($subs as $s): ?>
      <div class="card u-mb-2">
        <div class="grid grid-2" style="align-items:center">
          <div class="figure is-square">
            <img src="<?php echo esc_url($s[5]); ?>" alt="<?php echo esc_attr($s[0]); ?>" loading="lazy" decoding="async">
          </div>
          <div style="padding:16px">
            <h3><?php echo esc_html($s[0]); ?></h3>
            <p class="meta"><strong>Kedy použiť:</strong> <?php echo esc_html($s[1]); ?></p>
            <ul class="meta u-mt-1">
              <li><strong>Výbava:</strong> <?php echo esc_html($s[2]); ?></li>
              <li><strong>Montáž/prenos:</strong> <?php echo esc_html($s[3]); ?></li>
            </ul>
            <div class="u-mt-2">
              <a class="cta-btn" href="<?php echo esc_url($s[4]); ?>">Zistiť cenu</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- GALÉRIA -->
<section class="section" id="vystave-gallery">
  <div class="container">
    <h2>Ukážky výstavných systemov v realizácií</h2>

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

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Ako vybrať medzi textilom a panelom?', 'Textil je bez odlesku a veľmi prenosný; panel (PVC/kompozit) drží tvar a je pevnejší.'],
        ['Dá sa meniť grafika?', 'Áno, väčšina systémov umožňuje rýchlu výmenu printu (látka, banner, vložené printy).'],
        ['Ako prebieha montáž?', 'Systémy sú navrhnuté na rýchlu stavbu bez náradia; môžeme zabezpečiť aj kompletnú inštaláciu.'],
        ['Pre outdoor promo?', 'Vlajky, stany a odolné tabule s UV odolnou tlačou a povrchovou úpravou.'],
        ['Aké sú dodacie lehoty?', 'Štandardne 3–7 pracovných dní podľa setu a množstva.'],
        ['Je možné prenajímať konštrukcie?', 'Podľa typu – radi vám odporučíme najvýhodnejší model (nákup/prenájom).'],
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

<!-- FINÁLNY CTA -->
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Navrhneme optimálny set pre váš rozpočet a priestor.</p>
          <ul class="meta u-mt-1">
            <li>Typ akcie (veľtrh / retail / promo)</li>
            <li>Rozmery plochy a rozpočet</li>
            <li>Požadované prvky (textil, roll-up, stan, vlajky…)</li>
          </ul>
        </div>
        <div style="padding:16px">
        <?php kpk_form_notice(); ?>
        <form method="post" class="form kpk-form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="Telefón">
          <select name="topic">
            <option value="">Záujem o set</option>
            <option>Starter</option>
            <option>Pro</option>
            <option>Premium</option>
            <option>Vlastná kombinácia</option>
          </select>
          <textarea name="message" rows="4" placeholder="Priestor, termín, požadované prvky"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">Získať ponuku</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
