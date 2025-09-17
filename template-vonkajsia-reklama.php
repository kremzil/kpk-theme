<?php
/**
 * Template Name: VonkajÅ¡ia reklama (Landing)
 * Description: KategÃ³rny landing pre vonkajÅ¡iu reklamu: podkategÃ³rie, benefity, materiÃ¡ly/technolÃ³gie, galÃ©ria, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>VonkajÅ¡ia reklama, ktorÃ¡ funguje</h1>
    <p class="meta-hero">Billboardy, citylighty, backlighty, plachty a prizmy â€“ vysokÃ½ dosah 24/7, veÄ¾kÃ½ formÃ¡t a jasnÃ½ odkaz.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">BezplatnÃ¡ konzultÃ¡cia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- PRE KOHO / VÃHODY -->
<section class="section">
  <div class="container">
    <h2>Pre koho a na Äo</h2>
    <div class="grid grid-4">
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/viditelnost.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>ViditeÄ¾nosÅ¥</h3>
          <p class="meta">VeÄ¾kÃ© formÃ¡ty pritiahnu pozornosÅ¥ poÄas dÅˆa aj noci.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/dosah.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>Dosah</h3>
          <p class="meta">OslovÃ­te tisÃ­ce Ä¾udÃ­ na frekventovanÃ½ch trasÃ¡ch.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/247.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>24/7</h3>
          <p class="meta">VaÅ¡a kampaÅˆ funguje nepretrÅ¾ite, bez prepÃ­nania.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/outdoor/brand.webp' ); ?>')"></div>
        <div style="padding:16px">
          <h3>Brand awareness</h3>
          <p class="meta">Buduje povedomie a podporuje predajnÃ© akcie.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEO INTRO (short, no links) -->
<section class="section">
  <div class="container">
    <h2>EfektÃ­vne rieÅ¡enia pre vaÅ¡u znaÄku</h2>
    <div class="card" style="padding:16px">
      
    <p>
      VonkajÅ¡ia reklama od KPK Reklama spÃ¡ja veÄ¾kÃ½ formÃ¡t, vysokÃ½ dosah a ÄitateÄ¾nÃ½ odkaz. 
      Realizujeme billboardy, citylighty, backlighty, plachty a mesh aj prizmy â€“ od nÃ¡vrhu cez vÃ½robu aÅ¾ po montÃ¡Å¾.
    </p>
    <p>
      VlastnÃ¡ vÃ½roba v KoÅ¡iciach a overenÃ© postupy nÃ¡m umoÅ¾ÅˆujÃº rÃ½chle termÃ­ny a stabilnÃº kvalitu; 
      kampane zabezpeÄujeme po celom Slovensku s dÃ´razom na bezpeÄnÃº inÅ¡talÃ¡ciu a servis.
    </p>
    </div>
  </div>
</section>


<!-- PODKATEGÃ“RIE (MINI-LANDING BLOKY) -->
<section class="section">
  <div class="container">
    <h2>PodkategÃ³rie</h2>

    <?php
    // ÐŸÐ»ÐµÐ¹ÑÑ…Ð¾Ð»Ð´ÐµÑ€ Ð½Ð° ÑÐ»ÑƒÑ‡Ð°Ð¹ Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²Ð¸Ñ img
    $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

    $subs = [
      [
        'title'   => 'Billboardy (BBS)',
        'desc'    => 'NajÄastejÅ¡ie 5,1Ã—2,4 m a 4Ã—3 m. OdporÃºÄanÃ½ materiÃ¡l: PVC plachta / blueback papier podÄ¾a dÄºÅ¾ky kampane.',
        'bullets' => ['VysokÃ½ zÃ¡sah na hlavnÃ½ch Å¥ahoch', 'KrÃ¡tke a ÃºdernÃ© posolstvo', 'MoÅ¾nosÅ¥ rÃ½chlej vÃ½meny vizuÃ¡lu'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0074-1508x900-1-e1669190918387.jpg',
      ],
      [
        'title'   => 'Backlighty',
        'desc'    => 'PodsvietenÃ© nosiÄe pre noÄnÃº viditeÄ¾nosÅ¥. MateriÃ¡l: backlit film/plachta, vysokÃ½ jas a rovnomernÃ© presvietenie.',
        'bullets' => ['SilnÃ¡ vizibilita v noci', 'KvalitnÃ© podsvietenie', 'VhodnÃ© pre dlhÅ¡ie kampane'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0588-1200x900-1-e1669190660337.jpg',
      ],
      [
        'title'   => 'Citylighty',
        'desc'    => 'CLV/abribus v MHD zÃ³nach a peÅ¡Ã­ch koridoroch. IdeÃ¡lne na kombinÃ¡ciu brandingu a akciÃ­.',
        'bullets' => ['BlÃ­zkosÅ¥ k Ä¾uÄom', 'ÄŒitateÄ¾nÃ© krÃ¡tke sprÃ¡vy', 'MoÅ¾nosÅ¥ podsvietenia'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0696-675x900-1-e1669190379525.jpg',
      ],
      [
        'title'   => 'Plachty / Mesh',
        'desc'    => 'VeÄ¾kÃ© fasÃ¡dne plochy. Mesh pre veternÃ© miesta; PVC plachta pre plnÃº kryciu plochu.',
        'bullets' => ['VeÄ¾kÃ½ formÃ¡t pre fasÃ¡dy', 'OkÃ¡ a sprÃ¡vna fixÃ¡cia', 'OutdoorovÃ¡ Å¾ivotnosÅ¥'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0505-1200x900-1-e1669197647355.jpg',
      ],
      [
        'title'   => 'Prizmy',
        'desc'    => 'TrianglovÃ© (prizmatickÃ©) nosiÄe s rotÃ¡ciou 3 vizuÃ¡lov. ZvyÅ¡uje variabilitu kampane.',
        'bullets' => ['RotÃ¡cia 3 sprÃ¡v', 'DlhodobÃ© kampane', 'VÃ½bornÃ¡ frekvencia zÃ¡sahu'],
        'cta'     => '#kpk-quote',
        'img'     => 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_4028-1200x900-1-e1669194672101.jpg',
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
              <a class="cta-btn" href="<?php echo esc_url($s['cta']); ?>">ZistiÅ¥ cenu</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>


<!-- MATERIÃLY A TECHNOLÃ“GIE (KOMPAKTNÃ TABUÄ½KA) -->
<section class="section">
  <div class="container">
    <h2>MateriÃ¡ly a technolÃ³gie</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Typ nosiÄa</th>
          <th>Odpor. materiÃ¡l</th>
          <th>Å½ivotnosÅ¥</th>
          <th>PoznÃ¡mka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Billboardy</td>
          <td>PVC plachta / Blueback</td>
          <td>KrÃ¡tka aÅ¾ strednÃ¡</td>
          <td>RÃ½chla vÃ½mena vizuÃ¡lu</td>
        </tr>
        <tr>
          <td>Backlight</td>
          <td>Backlit film/plachta</td>
          <td>StrednÃ¡ aÅ¾ dlhÃ¡</td>
          <td>Podsvietenie 24/7</td>
        </tr>
        <tr>
          <td>Citylight</td>
          <td>Backlit/Citylight papier</td>
          <td>StrednÃ¡</td>
          <td>MHD zÃ³ny, peÅ¡ie trasy</td>
        </tr>
        <tr>
          <td>Plachta / Mesh</td>
          <td>PVC / Mesh (veternÃ© miesta)</td>
          <td>StrednÃ¡ aÅ¾ dlhÃ¡</td>
          <td>OkÃ¡, sprÃ¡vna fixÃ¡cia</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- GALÃ‰RIA -->
<section class="section" id="outdoor-gallery">
  <div class="container">
    <h2>UkÃ¡Å¾ky outdoor realizÃ¡ciÃ­</h2>

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

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Ako vybraÅ¥ sprÃ¡vny formÃ¡t?', 'ZÃ¡visÃ­ od lokality a vzdialenosti pozorovania. NajÄastejÅ¡ie pouÅ¾Ã­vame 5,1Ã—2,4 m alebo 4Ã—3 m pre BBS, citylight pre peÅ¡Ã­ch.'],
        ['Kedy zvoliÅ¥ mesh namiesto plachty?', 'V exponovanÃ½ch veternÃ½ch miestach alebo na veÄ¾kÃ½ch fasÃ¡dach â€” mesh znÃ­Å¾i nÃ¡por vetra.'],
        ['Ako dlho trvÃ¡ vÃ½roba?', 'Å tandardne 3â€“7 pracovnÃ½ch dnÃ­ podÄ¾a rozsahu a dostupnosti plÃ´ch.'],
        ['Potrebujem aj montÃ¡Å¾?', 'Ãno, zabezpeÄujeme kompletnÃº montÃ¡Å¾ a servis po celej SR.'],
        ['AkÃ© podklady sÃº potrebnÃ©?', 'Grafika v tlaÄovej kvalite (PDF/TIFF), s nastavenÃ½m bleedom. S nÃ¡vrhom radi pomÃ´Å¾eme.'],
        ['Je moÅ¾nÃ¡ vÃ½mena kampane?', 'Ãno, pripravÃ­me viac vizuÃ¡lov a vieme ich rÃ½chlo prelepiÅ¥ alebo vymeniÅ¥.'],
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
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section bg-muted">
  <div class="container grid grid-2">
    <div class="card"  style="padding:16px">
          
          <h2>PoÅ¾iadaÅ¥ o cenovÃº ponuku</h2>
          <p class="meta">ZvyÄajne odpovieme do 24 hodÃ­n. Navrhneme formÃ¡ty, odporuÄÃ­me lokality a pripravÃ­me nezÃ¡vÃ¤znÃº ponuku.</p>
          <ul class="meta u-mt-1">
            <li>FormÃ¡t a poÄet plÃ´ch</li>
            <li>Lokalita / mesto</li>
            <li>TermÃ­n a dÄºÅ¾ka kampane</li>
          </ul>
          </div>

         
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic">
            <option value="">TÃ©ma dopytu</option>
            <option>Billboardy</option>
            <option>Backlight</option>
            <option>Citylight</option>
            <option>Plachta / Mesh</option>
            <option>Prizmy</option>
            <option>InÃ©</option>
          </select>
          <textarea name="message" rows="4" placeholder="Rozmery, lokality, termÃ­n, rozpoÄet (ak je)"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">ZÃ­skaÅ¥ ponuku</button>
        </form>
      
  </div>
</section>

<?php get_footer();
