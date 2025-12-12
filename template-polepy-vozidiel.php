<?php
/**
 * Template Name: Polepy vozidiel (Landing)
 * Description: Konverzný landing pre polepy vozidiel: balíčky, proces, materiály, pred/po, logistika, recenzie, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Profesionálny polep na auto</h1>
    <p class="meta-hero">Branding + ochrana laku. Certifikované materiály a montáž po celej SR.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">Bezplatná konzultácia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- CENOVÉ BALÍČKY -->
<section class="section">
  <div class="container">
    <h2>Cenové balíčky</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure">
          <img src="https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG-0305-scaled-copy-1.png" alt="Basic — logo & kontakty" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px">
          <h3>Basic — logo & kontakty</h3>
          <p class="meta">Orientačne: podľa modelu a rozsahu. Ideálne pre firemné vozidlá a flotily.</p>
          <ul class="meta u-mt-1">
            <li>Kvalitná fólia pre rovné plochy</li>
            <li>Aplikácia na dvere / zadné sklo</li>
            <li>Základná laminácia</li>
            <li>Krátky čas montáže</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="figure">
          <img src="https://www.kpkreklama.sk/wp-content/uploads/2022/11/WP_003371-scaled-copy.png" alt="Business — partial wrap" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px">
          <h3>Business — partial wrap</h3>
          <p class="meta">Orientačne: podľa plochy, tvarov a grafiky. Silný vizuálny efekt za rozumný rozpočet.</p>
          <ul class="meta u-mt-1">
            <li>Liata fólia na tvarované diely</li>
            <li>Plné boky / kapota / zadná časť</li>
            <li>UV laminácia (mat / lesk)</li>
            <li>Záruka na materiál a montáž</li>
          </ul>
        </div>
      </div>

      <div class="card">
        <div class="figure">
          <img src="https://www.kpkreklama.sk/wp-content/uploads/2023/06/SpartanRace.jpg" alt="Full — full wrap" loading="lazy" decoding="async">
        </div>
        <div style="padding:16px">
          <h3>Full — full wrap</h3>
          <p class="meta">Orientačne: podľa modelu, farby a povrchu. Maximálny branding a ochrana originálneho laku.</p>
          <ul class="meta u-mt-1">
            <li>Prémiová liata fólia + laminácia</li>
            <li>Prekrytie celého vozidla</li>
            <li>Starostlivosť a „aftercare“ manuál</li>
            <li>Rozšírená záruka</li>
          </ul>
        </div>
      </div>
    </div>
    <p class="meta u-mt-1">Pozn.: finálnu cenu upresníme po zameraní a schválení grafiky.</p>
  </div>
</section>

<!-- PROCES ) -->
<section class="section">
  <div class="container">
    <h2>Proces</h2>
    <div class="grid grid-4">
      <?php
      $steps = [
        ['Pripáva','Umytie a odmastenie auta', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/1img.jpg'],
        ['Deinštalácia','Deinštalácia prvkov na karosérii', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/2img.jpg'],
        ['Výroba','Tlač, rez, laminácia, kontrola kvality', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/3img.jpg'],
        ['Inštalácia','Certifikovaná montáž, odovzdanie vozidla', 'https://www.kpkreklama.sk/wp-content/uploads/2023/06/4img.jpg']
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

<!-- MATERIÁLY A ŽIVOTNOSŤ -->
<section class="section">
  <div class="container">
    <h2>Materiály a životnosť</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Položka</th>
          <th>Odporúčanie</th>
          <th>Životnosť</th>
          <th>Poznámka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Fólia (liata)</td>
          <td>Karoséria, 3D prelisy</td>
          <td>dlhodobá</td>
          <td>Vysoká tvárnosť a priľnavosť</td>
        </tr>
        <tr>
          <td>Fólia (polymerická)</td>
          <td>Rovné plochy, kratší čas</td>
          <td>stredná</td>
          <td>Cenovo dostupnejšia</td>
        </tr>
        <tr>
          <td>Laminácia</td>
          <td>Mat / lesk podľa vizuálu</td>
          <td>–</td>
          <td>UV ochrana a odolnosť voči oderu</td>
        </tr>
        <tr>
          <td>Starostlivosť</td>
          <td>Šetrná chemia, ručné umývanie</td>
          <td>–</td>
          <td>Predlžuje životnosť a vzhľad</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- GALÉRIA PRED/PO -->
<section class="section">
  <div class="container">
    <h2>Pred / Po</h2>
    <div class="grid">
       <div class="card">
          <div class="grid grid-2">
            <div>
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/polepy/Audi-Q5-Before.webp' ); ?>" alt="Pred" loading="lazy" decoding="async">
        </div>
              <div style="padding:8px"><p class="meta">Pred</p></div>
            </div>
            <div>
        <div class="figure">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/polepy/Audi-Q5-After.webp' ); ?>" alt="Po" loading="lazy" decoding="async">
        </div>
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
        ['Vyzdvihnutie','Prevoz vozidla / materiálu'],
        ['Montáž on-site','Mobilné tímy a termíny mimo špičky'],
        ['Doručenie','Odovzdanie a krátke zaškolenie'],
        ['Servis','Záruka, opravy a prelepy']
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
        ['„Rýchle termíny a čistá montáž. Auto vyzerá skvelo.“','Marek, fleet manažér'],
        ['„Full wrap nám zvýšil viditeľnosť značky v meste.“','Lucia, marketing'],
        ['„Po roku fólia drží a vyzerá ako nová.“','Peter, živnostník'],
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
        ['Potrebujem zápis do evidencie vozidiel?', 'Pri zmene farby je potrebné overiť povinnosti podľa typu zmeny. S administratívou poradíme.'],
        ['Ako sa o polep starať?', 'Odporúčame ručné umývanie, jemnú chémiu a vyhýbať sa agresívnym rozpúšťadlám.'],
        ['Aká je záruka?', 'Závisí od materiálu a použitia. Štandardne poskytujeme záruku na materiál aj montáž.'],
        ['Dá sa fólia bezpečne odstrániť?', 'Áno, s použitím tepla a čistenia lepidla. Pri dlhoročných fóliách rátame s dlhším časom.'],
        ['Koľko trvá montáž?', 'Partial wrap zvyčajne 1 deň, full wrap 1–2 dni podľa modelu.'],
        ['Môžete polepiť celú flotilu?', 'Áno, zabezpečíme plánovanie, logistiku a rovnakú kvalitu naprieč vozidlami.'],
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

<!-- FINÁLNY CTA  -->
<?php kpk_form_notice(); ?>
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Odpovieme do 24 hodín. Prosím, uveďte model vozidla, rozsah polepu a termín.</p>
          <ul class="meta u-mt-1">
            <li>Model a farba vozidla</li>
            <li>Rozsah (Basic / Partial / Full)</li>
            <li>Preferovaný termín</li>
          </ul>
        </div>
        <form method="post" class="form kpk-form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="Telefón">
          <select name="topic">
            <option value="">Balíček</option>
            <option>Basic (logo & kontakty)</option>
            <option>Business (partial wrap)</option>
            <option>Full (full wrap)</option>
          </select>
          <textarea name="message" rows="4" placeholder="Model vozidla, farba, rozsah, termín"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">Získať ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
