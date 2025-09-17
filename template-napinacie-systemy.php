<?php
/**
 * Template Name: NapÃ­nacie systÃ©my (Landing)
 * Description: Landing pre napÃ­nacie rÃ¡my na dodÃ¡vky a nÃ¡kladiaky: vÃ½hody vs fÃ³lie, kompatibilita, postup, galÃ©ria, cenovÃ© scenÃ¡re, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>NapÃ­nacie rÃ¡my pre dodÃ¡vky a nÃ¡kladiaky</h1>
    <p class="meta-hero">VÃ½hodnÃ¡ alternatÃ­va k fÃ³liÃ¡m: rÃ½chla vÃ½mena kampanÃ­, pevnÃ¡ konÅ¡trukcia a Å¾iadne zÃ¡sahy do laku. InÅ¡talÃ¡cia po celej SR.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">CenovÃ¡ ponuka</a>
      <a class="hero-silent-btn" href="<?php echo esc_url( home_url('/kontakt/') ); ?>">KonzultÃ¡cia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>


<!-- VÃHODY VS FÃ“LIE -->
<section class="section">
  <div class="container">
    <h2>VÃ½hody oproti fÃ³liÃ¡m</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/napinacie/vymena.webp')"></div>
        <div style="padding:16px">
          <h3>RÃ½chla vÃ½mena kampanÃ­</h3>
          <p class="meta">Grafiku vymenÃ­te v priebehu minÃºt bez prelepovania celÃ½ch plÃ´ch.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/napinacie/setrne.webp')"></div>
        <div style="padding:16px">
          <h3>Å etrnÃ© k vozidlu</h3>
          <p class="meta">Bez zÃ¡sahov do lakovanÃ½ch bokov â€” vhodnÃ© aj pre operatÃ­vny leasing.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/napinacie/cena.webp')"></div>
        <div style="padding:16px">
          <h3>VÃ½mena plachiet do 30 minÃºt</h3>
          <p class="meta">NiÅ¾Å¡ie nÃ¡klady pri ÄastÃ½ch zmenÃ¡ch kampanÃ­, menej odstÃ¡vok. </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>SystÃ©m na napÃ­nanie reklamnÃ½ch plachiet pre VaÅ¡e vozidlÃ¡</h2>
    <div class="card u-p-2">
      JednoduchÃ½ a bezpeÄnÃ½ systÃ©m napÃ­nania reklamnÃ½ch plachiet pre nÃ¡kladnÃ© a dodÃ¡vkovÃ© vozidlÃ¡ s pevnou nadstavbou.
      Predstavujeme vÃ¡m novinku v podobe hlinÃ­kovÃ½ch napÃ­nacÃ­ch rÃ¡mov reklamnÃ½ch plachiet pre vaÅ¡e dodÃ¡vkovÃ© a nÃ¡kladnÃ© vozidlÃ¡ s pevnou boÄnou ÄasÅ¥ou. VÃ½hodou je nÃ­zka obstarÃ¡vacia cena a kratÅ¡Ã­ Äas inÅ¡talÃ¡cie plachiet v porovnanÃ­ s fÃ³liou.
    </div>
    <div class="card u-mt-2 u-p-2">
      RÃ¡m je vyrobenÃ½ z Ä¾ahkÃ©ho hlinÃ­kovÃ©ho profilu, ktorÃ½ je pripevnenÃ½ k vozidlu pomocou Å¡peciÃ¡lnych drÅ¾iakov. Na rÃ¡m sa nÃ¡sledne napÃ­na reklamnÃ¡ plachta, ktorÃ¡ je vybavenÃ¡ okami pre jednoduchÃ© a pevnÃ© uchytenie. Plachty je moÅ¾nÃ© jednoducho meniÅ¥ podÄ¾a aktuÃ¡lnych potrieb a kampanÃ­.
    </div> 
  </div>
</section>

<!-- KOMPATIBILITA -->
<section class="section">
  <div class="container">
      <h2>Kompatibilita</h2>
      <div class="figure" style="background-image:url('https://www.kpkreklama.sk/wp-content/uploads/2023/06/slider-2-1024x512-1.jpg')"></div>
      <div class="grid grid-2 u-mt-2">
        <?php
        $compat = [
          ['DodÃ¡vky (L2/L3)','BoÄnÃ© panely a zadnÃ© dvere, rÃ¡m na mieru.'],
          ['Box / skriÅˆa','HladkÃ© steny, Ä¾ahkÃ½ hlinÃ­kovÃ½ profil.'],
          ['ChladiarenskÃ© nadstavby','KompatibilnÃ© povrchy, Å¡etrnÃ¡ montÃ¡Å¾.'],
          ['NÃ¡kladnÃ© vozidlÃ¡','VeÄ¾kÃ© plochy pre kampane a promo.'],
        ];
        foreach($compat as $c){
          echo '<div class="card">
                    <div style="padding:16px">
                    <h3>'.$c[0].'</h3>
                    <p class="meta">'.$c[1].'</p>
                  </div>
                </div>';
        }
        ?>
      </div>
      <p class="meta u-mt-1">Rozmery a umiestnenie prispÃ´sobÃ­me typu karosÃ©rie a predpisom vÃ½robcu.</p>
  </div>
</section>



<!-- CENOVÃ‰ SCENÃRE -->
<section class="section bg-muted">
  <div class="container">
    <h2>CenovÃ© scenÃ¡re</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ScenÃ¡r</th>
          <th>Jednotka</th>
          <th>OrientaÄne</th>
          <th>PoznÃ¡mka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>RÃ¡m + profil</td>
          <td>beÅ¾nÃ½ meter</td>
          <td>individuÃ¡lne</td>
          <td>PodÄ¾a typu karosÃ©rie a hrÃ¡n</td>
        </tr>
        <tr>
          <td>KompletnÃ½ set (dodÃ¡vka)</td>
          <td>set</td>
          <td>individuÃ¡lne</td>
          <td>2Ã— bok + zadnÃ© dvere, vrÃ¡tane montÃ¡Å¾e</td>
        </tr>
        <tr>
          <td>VÃ½mena grafiky</td>
          <td>plochy</td>
          <td>individuÃ¡lne</td>
          <td>RÃ½chla vÃ½mena bez odstÃ¡vky dielne</td>
        </tr>
      </tbody>
    </table>
    <p class="meta u-mt-1">PresnÃº cenu stanovÃ­me po zameranÃ­ a vÃ½bere materiÃ¡lu.</p>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['PoÅ¡kodÃ­ rÃ¡m karosÃ©riu?', 'Montujeme na vhodnÃ© body a pouÅ¾Ã­vame Å¡etrnÃ© postupy, aby sme prediÅ¡li poÅ¡kodeniu povrchu.'],
        ['Je to vhodnÃ© na zimu?', 'Ãno, materiÃ¡ly sÃº odolnÃ© voÄi poveternostnÃ½m vplyvom; napnutie priebeÅ¾ne kontrolujeme.'],
        ['Ako rÃ½chlo viem vymeniÅ¥ kampaÅˆ?', 'Po prvotnej montÃ¡Å¾i rÃ¡mu je vÃ½mena grafiky otÃ¡zkou minÃºt.'],
        ['Je potrebnÃ¡ homologizÃ¡cia?', 'RÃ¡my nezasahujÃº do bezpeÄnostnÃ½ch prvkov; Å¡pecifikÃ¡ konzultujeme podÄ¾a modelu.'],
        ['AkÃ© podklady na tlaÄ?', 'PDF/TIFF v mierke, bleed podÄ¾a profilu, odporÃºÄame laminÃ¡ciu pri dlhodobom nasadenÃ­.'],
        ['DÃ¡ sa to odstrÃ¡niÅ¥ bez stopy?', 'Ãno, rÃ¡m aj grafiku je moÅ¾nÃ© demontovaÅ¥; povrch sa doÄistÃ­.'],
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
<section id="kpk-quote" class="section">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>PoÅ¾iadaÅ¥ o cenovÃº ponuku</h2>
          <p class="meta">NapÃ­Å¡te typ vozidla, rozmery panelov a plÃ¡novanÃ½ rozsah â€“ pripravÃ­me rieÅ¡enie na mieru.</p>
          <ul class="meta u-mt-1">
            <li>â€¢ Typ karosÃ©rie (dodÃ¡vka/box/chladiarenskÃ¡/skriÅˆa)</li>
            <li>â€¢ PoÄet plÃ´ch (boky, zadnÃ© dvere)</li>
            <li>â€¢ PredpokladanÃ½ termÃ­n a lokalita</li>
          </ul>
        </div>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic">
            <option value="">Typ vozidla</option>
            <option>DodÃ¡vka (L2/L3)</option>
            <option>Box / skriÅˆa</option>
            <option>ChladiarenskÃ¡</option>
            <option>NÃ¡kladnÃ© vozidlo</option>
            <option>InÃ©</option>
          </select>
          <textarea name="message" rows="4" placeholder="Rozmery plÃ´ch, poÄet, termÃ­n, mesto"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">ZÃ­skaÅ¥ ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
