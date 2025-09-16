<?php
/**
 * Template Name: Vonkajšia reklama (Landing)
 * Description: Kategórny landing pre vonkajšiu reklamu: podkategórie, benefity, materiály/technológie, galéria, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Vonkajšia reklama, ktorá funguje</h1>
    <p class="meta-hero">Billboardy, citylighty, backlighty, plachty a prizmy – vysoký dosah 24/7, veľký formát a jasný odkaz.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">Bezplatná konzultácia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- PRE KOHO / VÝHODY -->
<section class="section">
  <div class="container">
    <h2>Pre koho a na čo</h2>
    <div class="grid grid-4">
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/viditelnost.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>Viditeľnosť</h3>
          <p class="meta">Veľké formáty pritiahnu pozornosť počas dňa aj noci.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/dosah.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>Dosah</h3>
          <p class="meta">Oslovíte tisíce ľudí na frekventovaných trasách.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/247.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>24/7</h3>
          <p class="meta">Vaša kampaň funguje nepretržite, bez prepínania.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/brand.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>Brand awareness</h3>
          <p class="meta">Buduje povedomie a podporuje predajné akcie.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEO INTRO (short, no links) -->
<section class="section">
  <div class="container">
    <h2>Efektívne riešenia pre vašu značku</h2>
    <div class="card" style="padding:16px">
      
    <p>
      Vonkajšia reklama od KPK Reklama spája veľký formát, vysoký dosah a čitateľný odkaz. 
      Realizujeme billboardy, citylighty, backlighty, plachty a mesh aj prizmy – od návrhu cez výrobu až po montáž.
    </p>
    <p>
      Vlastná výroba v Košiciach a overené postupy nám umožňujú rýchle termíny a stabilnú kvalitu; 
      kampane zabezpečujeme po celom Slovensku s dôrazom na bezpečnú inštaláciu a servis.
    </p>
    </div>
  </div>
</section>


<!-- PODKATEGÓRIE (MINI-LANDING BLOKY) -->
<section class="section">
  <div class="container">
    <h2>Podkategórie</h2>

    <?php
    // Плейсхолдер на случай отсутствия img
    $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

    $subs = [
      [
        'title'   => 'Billboardy (BBS)',
        'desc'    => 'Najčastejšie 5,1×2,4 m a 4×3 m. Odporúčaný materiál: PVC plachta / blueback papier podľa dĺžky kampane.',
        'bullets' => ['Vysoký zásah na hlavných ťahoch', 'Krátke a úderné posolstvo', 'Možnosť rýchlej výmeny vizuálu'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0074-1508x900-1-e1669190918387.jpg',
      ],
      [
        'title'   => 'Backlighty',
        'desc'    => 'Podsvietené nosiče pre nočnú viditeľnosť. Materiál: backlit film/plachta, vysoký jas a rovnomerné presvietenie.',
        'bullets' => ['Silná vizibilita v noci', 'Kvalitné podsvietenie', 'Vhodné pre dlhšie kampane'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0588-1200x900-1-e1669190660337.jpg',
      ],
      [
        'title'   => 'Citylighty',
        'desc'    => 'CLV/abribus v MHD zónach a peších koridoroch. Ideálne na kombináciu brandingu a akcií.',
        'bullets' => ['Blízkosť k ľuďom', 'Čitateľné krátke správy', 'Možnosť podsvietenia'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0696-675x900-1-e1669190379525.jpg',
      ],
      [
        'title'   => 'Plachty / Mesh',
        'desc'    => 'Veľké fasádne plochy. Mesh pre veterné miesta; PVC plachta pre plnú kryciu plochu.',
        'bullets' => ['Veľký formát pre fasády', 'Oká a správna fixácia', 'Outdoorová životnosť'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0505-1200x900-1-e1669197647355.jpg',
      ],
      [
        'title'   => 'Prizmy',
        'desc'    => 'Trianglové (prizmatické) nosiče s rotáciou 3 vizuálov. Zvyšuje variabilitu kampane.',
        'bullets' => ['Rotácia 3 správ', 'Dlhodobé kampane', 'Výborná frekvencia zásahu'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_4028-1200x900-1-e1669194672101.jpg',
      ],
    ];

    foreach ($subs as $s):
      // kpk_resolve_img($v) мы уже добавляли раньше; он понимает ID/URL/относительный путь
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
              <a class="cta-btn" href="<?php echo esc_url($s['cta']); ?>">Zistiť cenu</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>


<!-- MATERIÁLY A TECHNOLÓGIE (KOMPAKTNÁ TABUĽKA) -->
<section class="section">
  <div class="container">
    <h2>Materiály a technológie</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Typ nosiča</th>
          <th>Odpor. materiál</th>
          <th>Životnosť</th>
          <th>Poznámka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Billboardy</td>
          <td>PVC plachta / Blueback</td>
          <td>Krátka až stredná</td>
          <td>Rýchla výmena vizuálu</td>
        </tr>
        <tr>
          <td>Backlight</td>
          <td>Backlit film/plachta</td>
          <td>Stredná až dlhá</td>
          <td>Podsvietenie 24/7</td>
        </tr>
        <tr>
          <td>Citylight</td>
          <td>Backlit/Citylight papier</td>
          <td>Stredná</td>
          <td>MHD zóny, pešie trasy</td>
        </tr>
        <tr>
          <td>Plachta / Mesh</td>
          <td>PVC / Mesh (veterné miesta)</td>
          <td>Stredná až dlhá</td>
          <td>Oká, správna fixácia</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- GALÉRIA -->
<section class="section" id="outdoor-gallery">
  <div class="container">
    <h2>Ukážky outdoor realizácií</h2>

    <div class="grid grid-3 tiles">
      <?php
        $gallery = [
          ['title'=>'Billboard 1', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_1116-1200x900-1-e1669190993862.jpeg'],
          ['title'=>'Billboard 2', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_2022-1200x900-1-e1669191056415.jpeg'],
          ['title'=>'Backlit 1', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0739-1200x900-1-e1669190574879.jpg'],
          ['title'=>'Backlit 2', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0110-1200x900-1-e1669190592550.jpg'],
          ['title'=>'Citylight 1', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0740-1200x900-1-e1669190396323.jpg'],
          ['title'=>'Citylight 2', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0743-1200x900-1-e1669190414166.jpg'],
          ['title'=>'Plachty 1', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0711-1-675x900-1-e1669197795293.jpg'],
          ['title'=>'Plachty 2', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0320-1201x900-1-e1669197530251.jpg'],
          ['title'=>'Prizmy', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0133-635x900-1-e1669194788983.jpg'],
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

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Ako vybrať správny formát?', 'Závisí od lokality a vzdialenosti pozorovania. Najčastejšie používame 5,1×2,4 m alebo 4×3 m pre BBS, citylight pre peších.'],
        ['Kedy zvoliť mesh namiesto plachty?', 'V exponovaných veterných miestach alebo na veľkých fasádach — mesh zníži nápor vetra.'],
        ['Ako dlho trvá výroba?', 'Štandardne 3–7 pracovných dní podľa rozsahu a dostupnosti plôch.'],
        ['Potrebujem aj montáž?', 'Áno, zabezpečujeme kompletnú montáž a servis po celej SR.'],
        ['Aké podklady sú potrebné?', 'Grafika v tlačovej kvalite (PDF/TIFF), s nastaveným bleedom. S návrhom radi pomôžeme.'],
        ['Je možná výmena kampane?', 'Áno, pripravíme viac vizuálov a vieme ich rýchlo prelepiť alebo vymeniť.'],
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
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section bg-muted">
  <div class="container grid grid-2">
    <div class="card"  style="padding:16px">
          
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Zvyčajne odpovieme do 24 hodín. Navrhneme formáty, odporučíme lokality a pripravíme nezáväznú ponuku.</p>
          <ul class="meta u-mt-1">
            <li>Formát a počet plôch</li>
            <li>Lokalita / mesto</li>
            <li>Termín a dĺžka kampane</li>
          </ul>
          </div>

         
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="Telefón">
          <select name="topic">
            <option value="">Téma dopytu</option>
            <option>Billboardy</option>
            <option>Backlight</option>
            <option>Citylight</option>
            <option>Plachta / Mesh</option>
            <option>Prizmy</option>
            <option>Iné</option>
          </select>
          <textarea name="message" rows="4" placeholder="Rozmery, lokality, termín, rozpočet (ak je)"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">Získať ponuku</button>
        </form>
      
  </div>
</section>

<?php get_footer();
