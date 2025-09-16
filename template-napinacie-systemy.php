<?php
/**
 * Template Name: Napínacie systémy (Landing)
 * Description: Landing pre napínacie rámy na dodávky a nákladiaky: výhody vs fólie, kompatibilita, postup, galéria, cenové scenáre, FAQ, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Napínacie rámy pre dodávky a nákladiaky</h1>
    <p class="meta">Výhodná alternatíva k fóliám: rýchla výmena kampaní, pevná konštrukcia a žiadne zásahy do laku. Inštalácia po celej SR.</p>
    <div class="badges" style="margin-top:12px">
      <a class="cta-btn" href="#kpk-quote">Cenová ponuka</a>
      <a class="cta-btn" href="<?php echo esc_url( home_url('/kontakt/') ); ?>">Konzultácia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>


<!-- VÝHODY VS FÓLIE -->
<section class="section">
  <div class="container">
    <h2>Výhody oproti fóliám</h2>
    <div class="grid grid-3">
      <div class="card">
        <div class="figure"></div>
        <div style="padding:16px">
          <h3>Rýchla výmena kampaní</h3>
          <p class="meta">Grafiku vymeníte v priebehu minút bez prelepovania celých plôch.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure"></div>
        <div style="padding:16px">
          <h3>Šetrné k vozidlu</h3>
          <p class="meta">Bez zásahov do lakovaných bokov — vhodné aj pre operatívny leasing.</p>
        </div>
      </div>
      <div class="card">
        <div class="figure"></div>
        <div style="padding:16px">
          <h3>Cena a prevádzka</h3>
          <p class="meta">Nižšie náklady pri častých zmenách kampaní, menej odstávok.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KOMPATIBILITA -->
<section class="section">
  <div class="container">
    <h2>Kompatibilita</h2>
    <div class="grid grid-4">
      <?php
      $compat = [
        ['Dodávky (L2/L3)','Bočné panely a zadné dvere, rám na mieru.'],
        ['Box / skriňa','Hladké steny, ľahký hliníkový profil.'],
        ['Chladiarenské nadstavby','Kompatibilné povrchy, šetrná montáž.'],
        ['Nákladné vozidlá','Veľké plochy pre kampane a promo.'],
      ];
      foreach($compat as $c){
        echo '<div class="card">
                <div class="figure"></div>
                <div style="padding:16px">
                  <h3>'.$c[0].'</h3>
                  <p class="meta">'.$c[1].'</p>
                </div>
              </div>';
      }
      ?>
    </div>
    <p class="meta u-mt-1">Rozmery a umiestnenie prispôsobíme typu karosérie a predpisom výrobcu.</p>
  </div>
</section>

<!-- AKO TO FUNGUJE (POSTUP) -->
<section class="section">
  <div class="container">
    <h2>Ako to funguje</h2>
    <div class="grid grid-4">
      <?php
      $steps = [
        ['Zameranie','Zistenie presných rozmerov a podkladu.'],
        ['Výroba rámu','Hliníkové profily a napínacie lišty na mieru.'],
        ['Tlač panelov','Plachta/print rezaná s tunelmi alebo lemovaním.'],
        ['Montáž','Osadenie profilov a napnutie grafiky, kontrola.'],
      ];
      foreach($steps as $s){
        echo '<div class="card">
                <div class="figure"></div>
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

<!-- GALÉRIA -->
<section class="section">
  <div class="container">
    <h2>Ukážky realizácií</h2>
    <div class="grid grid-3">
      <?php for($i=1;$i<=9;$i++): ?>
        <a class="card" href="#"><div class="figure"></div><div style="padding:12px"><h3 class="meta">Napínací rám <?php echo $i; ?></h3></div></a>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- CENOVÉ SCENÁRE -->
<section class="section bg-muted">
  <div class="container">
    <h2>Cenové scenáre</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Scenár</th>
          <th>Jednotka</th>
          <th>Orientačne</th>
          <th>Poznámka</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Rám + profil</td>
          <td>bežný meter</td>
          <td>individuálne</td>
          <td>Podľa typu karosérie a hrán</td>
        </tr>
        <tr>
          <td>Kompletný set (dodávka)</td>
          <td>set</td>
          <td>individuálne</td>
          <td>2× bok + zadné dvere, vrátane montáže</td>
        </tr>
        <tr>
          <td>Výmena grafiky</td>
          <td>plochy</td>
          <td>individuálne</td>
          <td>Rýchla výmena bez odstávky dielne</td>
        </tr>
      </tbody>
    </table>
    <p class="meta u-mt-1">Presnú cenu stanovíme po zameraní a výbere materiálu.</p>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container">
    <h2>FAQ</h2>
    <div class="grid grid-2">
      <?php
      $faq = [
        ['Poškodí rám karosériu?', 'Montujeme na vhodné body a používame šetrné postupy, aby sme predišli poškodeniu povrchu.'],
        ['Je to vhodné na zimu?', 'Áno, materiály sú odolné voči poveternostným vplyvom; napnutie priebežne kontrolujeme.'],
        ['Ako rýchlo viem vymeniť kampaň?', 'Po prvotnej montáži rámu je výmena grafiky otázkou minút.'],
        ['Je potrebná homologizácia?', 'Rámy nezasahujú do bezpečnostných prvkov; špecifiká konzultujeme podľa modelu.'],
        ['Aké podklady na tlač?', 'PDF/TIFF v mierke, bleed podľa profilu, odporúčame lamináciu pri dlhodobom nasadení.'],
        ['Dá sa to odstrániť bez stopy?', 'Áno, rám aj grafiku je možné demontovať; povrch sa dočistí.'],
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
<section id="kpk-quote" class="section">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Napíšte typ vozidla, rozmery panelov a plánovaný rozsah – pripravíme riešenie na mieru.</p>
          <ul class="meta u-mt-1">
            <li>• Typ karosérie (dodávka/box/chladiarenská/skriňa)</li>
            <li>• Počet plôch (boky, zadné dvere)</li>
            <li>• Predpokladaný termín a lokalita</li>
          </ul>
        </div>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="Telefón">
          <select name="topic">
            <option value="">Typ vozidla</option>
            <option>Dodávka (L2/L3)</option>
            <option>Box / skriňa</option>
            <option>Chladiarenská</option>
            <option>Nákladné vozidlo</option>
            <option>Iné</option>
          </select>
          <textarea name="message" rows="4" placeholder="Rozmery plôch, počet, termín, mesto"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">Získať ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
