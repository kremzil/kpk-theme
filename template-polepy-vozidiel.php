<?php
/**
 * Template Name: Polepy vozidiel (Landing)
 * Description: KonverznÃ½ landing pre polepy vozidiel: balÃ­Äky, proces, materiÃ¡ly, pred/po, logistika, recenzie, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>ProfesionÃ¡lny polep na auto</h1>
    <p class="meta-hero">Branding + ochrana laku. CertifikovanÃ© materiÃ¡ly a montÃ¡Å¾ po celej SR.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">BezplatnÃ¡ konzultÃ¡cia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- CENOVÃ‰ BALÃÄŒKY -->
<section class="section">
  <div class="container">
    <h2>CenovÃ© balÃ­Äky</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure" style="background-image:url('https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG-0305-scaled-copy-1.png')"></div>
        <div style="padding:16px">
          <h3>Basic â€” logo & kontakty</h3>
          <p class="meta">OrientaÄne: podÄ¾a modelu a rozsahu. IdeÃ¡lne pre firemnÃ© vozidlÃ¡ a flotily.</p>
          <ul class="meta u-mt-1">
            <li>KvalitnÃ¡ fÃ³lia pre rovnÃ© plochy</li>
            <li>AplikÃ¡cia na dvere / zadnÃ© sklo</li>
            <li>ZÃ¡kladnÃ¡ laminÃ¡cia</li>
            <li>KrÃ¡tky Äas montÃ¡Å¾e</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="figure" style="background-image:url('https://www.kpkreklama.sk/wp-content/uploads/2022/11/WP_003371-scaled-copy.png')"></div>
        <div style="padding:16px">
          <h3>Business â€” partial wrap</h3>
          <p class="meta">OrientaÄne: podÄ¾a plochy, tvarov a grafiky. SilnÃ½ vizuÃ¡lny efekt za rozumnÃ½ rozpoÄet.</p>
          <ul class="meta u-mt-1">
            <li>Liata fÃ³lia na tvarovanÃ© diely</li>
            <li>PlnÃ© boky / kapota / zadnÃ¡ ÄasÅ¥</li>
            <li>UV laminÃ¡cia (mat / lesk)</li>
            <li>ZÃ¡ruka na materiÃ¡l a montÃ¡Å¾</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="figure" style="background-image:url('https://www.kpkreklama.sk/wp-content/uploads/2023/06/SpartanRace.jpg')"></div>
        <div style="padding:16px">
          <h3>Full â€” full wrap</h3>
          <p class="meta">OrientaÄne: podÄ¾a modelu, farby a povrchu. MaximÃ¡lny branding a ochrana originÃ¡lneho laku.</p>
          <ul class="meta u-mt-1">
            <li>PrÃ©miovÃ¡ liata fÃ³lia + laminÃ¡cia</li>
            <li>Prekrytie celÃ©ho vozidla</li>
            <li>StarostlivosÅ¥ a â€žaftercareâ€œ manuÃ¡l</li>
            <li>RozÅ¡Ã­renÃ¡ zÃ¡ruka</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="meta u-mt-1">Pozn.: finÃ¡lnu cenu upresnÃ­me po zameranÃ­ a schvÃ¡lenÃ­ grafiky.</p>
  </div>
</section>

<!-- PROCES ) -->
<section class="section">
  <div class="container">
    <h2>Proces</h2>
    <div class="grid grid-4">
      <?php
      $steps = [
        ['PripÃ¡va','Umytie a odmastenie auta', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/1img.jpg'],
        ['DeinÅ¡talÃ¡cia','DeinÅ¡talÃ¡cia prvkov na karosÃ©rii', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/2img.jpg'],
        ['VÃ½roba','TlaÄ, rez, laminÃ¡cia, kontrola kvality', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/3img.jpg'],
        ['InÅ¡talÃ¡cia','CertifikovanÃ¡ montÃ¡Å¾, odovzdanie vozidla', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/4img.jpg']
      ];
      foreach($steps as $s){
        echo '<div class="card">
                <div class="figure" style="background-image: url(\''.$s[2].'\');"></div>
                <div style="padding:16px">
                  <h3>'.$s[0].'</h3>
                  <p class="meta">'.$s[1].'</p>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- MATERIÃLY A Å½IVOTNOSÅ¤ -->
<section class="section">
  <div class="container">
    <h2>MateriÃ¡ly a Å¾ivotnosÅ¥</h2>
    <table class="table">
      <thead>
        <tr>
          <th>PoloÅ¾ka</th>
          <th>OdporÃºÄanie</th>
          <th>Å½ivotnosÅ¥</th>
          <th>PoznÃ¡mka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>FÃ³lia (liata)</td>
          <td>KarosÃ©ria, 3D prelisy</td>
          <td>dlhodobÃ¡</td>
          <td>VysokÃ¡ tvÃ¡rnosÅ¥ a priÄ¾navosÅ¥</td>
        </tr>
        <tr>
          <td>FÃ³lia (polymerickÃ¡)</td>
          <td>RovnÃ© plochy, kratÅ¡Ã­ Äas</td>
          <td>strednÃ¡</td>
          <td>Cenovo dostupnejÅ¡ia</td>
        </tr>
        <tr>
          <td>LaminÃ¡cia</td>
          <td>Mat / lesk podÄ¾a vizuÃ¡lu</td>
          <td>â€“</td>
          <td>UV ochrana a odolnosÅ¥ voÄi oderu</td>
        </tr>
        <tr>
          <td>StarostlivosÅ¥</td>
          <td>Å etrnÃ¡ chemia, ruÄnÃ© umÃ½vanie</td>
          <td>â€“</td>
          <td>PredlÅ¾uje Å¾ivotnosÅ¥ a vzhÄ¾ad</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- GALÃ‰RIA PRED/PO -->
<section class="section">
  <div class="container">
    <h2>Pred / Po</h2>
    <div class="grid">
       <div class="card">
          <div class="grid grid-2">
            <div>
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/polepy/Audi-Q5-Before.webp')"></div>
              <div style="padding:8px"><p class="meta">Pred</p></div>
            </div>
            <div>
        <div class="figure" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/polepy/Audi-Q5-After.webp')"></div>
              <div style="padding:8px"><p class="meta">Po</p></div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!-- LOGISTIKA PO CELEJ SR -->
<section class="section">
  <div class="container">
    <h2>Logistika po celej SR</h2>
    <div class="grid grid-4">
      <?php
      $logi = [
        ['Vyzdvihnutie','Prevoz vozidla / materiÃ¡lu'],
        ['MontÃ¡Å¾ on-site','MobilnÃ© tÃ­my a termÃ­ny mimo Å¡piÄky'],
        ['DoruÄenie','Odovzdanie a krÃ¡tke zaÅ¡kolenie'],
        ['Servis','ZÃ¡ruka, opravy a prelepy']
      ];
      foreach($logi as $l){
        echo '<div class="card">
                  <div style="padding:16px">
                  <h3>'.$l[0].'</h3>
                  <p class="meta">'.$l[1].'</p>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- RECENZIE -->
<section class="section">
  <div class="container">
    <h2>Recenzie</h2>
    <div class="grid grid-3">
      <?php
      $quotes = [
        ['â€žRÃ½chle termÃ­ny a ÄistÃ¡ montÃ¡Å¾. Auto vyzerÃ¡ skvelo.â€œ','Marek, fleet manaÅ¾Ã©r'],
        ['â€žFull wrap nÃ¡m zvÃ½Å¡il viditeÄ¾nosÅ¥ znaÄky v meste.â€œ','Lucia, marketing'],
        ['â€žPo roku fÃ³lia drÅ¾Ã­ a vyzerÃ¡ ako novÃ¡.â€œ','Peter, Å¾ivnostnÃ­k'],
      ];
      foreach($quotes as $q){
        echo '<div class="card">
                <div style="padding:16px">
                  <p>'.$q[0].'</p>
                  <p class="meta">'.$q[1].'</p>
                </div>
              </div>';
      }
      ?>
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
        ['Potrebujem zÃ¡pis do evidencie vozidiel?', 'Pri zmene farby je potrebnÃ© overiÅ¥ povinnosti podÄ¾a typu zmeny. S administratÃ­vou poradÃ­me.'],
        ['Ako sa o polep staraÅ¥?', 'OdporÃºÄame ruÄnÃ© umÃ½vanie, jemnÃº chÃ©miu a vyhÃ½baÅ¥ sa agresÃ­vnym rozpÃºÅ¡Å¥adlÃ¡m.'],
        ['AkÃ¡ je zÃ¡ruka?', 'ZÃ¡visÃ­ od materiÃ¡lu a pouÅ¾itia. Å tandardne poskytujeme zÃ¡ruku na materiÃ¡l aj montÃ¡Å¾.'],
        ['DÃ¡ sa fÃ³lia bezpeÄne odstrÃ¡niÅ¥?', 'Ãno, s pouÅ¾itÃ­m tepla a Äistenia lepidla. Pri dlhoroÄnÃ½ch fÃ³liÃ¡ch rÃ¡tame s dlhÅ¡Ã­m Äasom.'],
        ['KoÄ¾ko trvÃ¡ montÃ¡Å¾?', 'Partial wrap zvyÄajne 1 deÅˆ, full wrap 1â€“2 dni podÄ¾a modelu.'],
        ['MÃ´Å¾ete polepiÅ¥ celÃº flotilu?', 'Ãno, zabezpeÄÃ­me plÃ¡novanie, logistiku a rovnakÃº kvalitu naprieÄ vozidlami.'],
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

<!-- FINÃLNY CTA  -->
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>PoÅ¾iadaÅ¥ o cenovÃº ponuku</h2>
          <p class="meta">Odpovieme do 24 hodÃ­n. ProsÃ­m, uveÄte model vozidla, rozsah polepu a termÃ­n.</p>
          <ul class="meta u-mt-1">
            <li>Model a farba vozidla</li>
            <li>Rozsah (Basic / Partial / Full)</li>
            <li>PreferovanÃ½ termÃ­n</li>
          </ul>
        </div>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic">
            <option value="">BalÃ­Äek</option>
            <option>Basic (logo & kontakty)</option>
            <option>Business (partial wrap)</option>
            <option>Full (full wrap)</option>
          </select>
          <textarea name="message" rows="4" placeholder="Model vozidla, farba, rozsah, termÃ­n"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">ZÃ­skaÅ¥ ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
