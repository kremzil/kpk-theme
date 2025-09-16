<?php
/**
 * Template Name: Služby (Hub)
 * Description: Zjednotený prehľad služieb: návrh, poradenstvo, montáž/servis, logistika & rozvoz, plnenie POS, skladovanie + spolupráca, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Od návrhu po inštaláciu</h1>
    <p class="meta-hero">Grafický návrh, poradenstvo, výroba, montáž a logistika po celej SR. Jeden partner pre celé riešenie.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">Cenová ponuka</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- SLUŽBY (KARTIČKY) -->
<section id="kpk-services" class="section">
  <div class="container">
    <h2>Čo pre vás urobíme</h2>
    <div class="grid grid-3">
      <?php
      $services = [
        ['Grafický návrh','Konzistentný vizuál, príprava tlačových dát a layout podľa povrchu a formátu.','Úpravy podľa feedbacku, export s bleedom.', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/241434925_4211602365561328_4420586759710488175_n.jpg'],
        ['Poradenstvo','Pomôžeme vybrať materiál, formát a technológiu pre interiér aj exteriér.','Reálne príklady a kalkulácie.', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/272296102_4661975450524015_888061691817514557_n-2-copy.png'],
        ['Montáž / Servis','Certifikované postupy pre fólie, rámy, POS aj výstavné systémy.','Servis a repas podľa potreby.', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/269901425_4547739195280975_1131785709133169368_n-copy.png'],
        ['Logistika & rozvoz','Doručenie po celej SR, plánovanie trás pre predajne a pobočky.','Možnosť časových okien.', 'https://www.kpkreklama.sk/wp-content/uploads/2020/09/IMG_0957-scaled.jpg'],
        ['Plnenie POS','Kompletácia, osadenie v predajni a doplnenie produktom či merchandisingom.','Report a fotodokumentácia.', 'https://www.kpkreklama.sk/wp-content/uploads/2018/11/unnamed-copy-scaled.jpg'],
        ['Skladovanie','Krátkodobé uskladnenie materiálov a kampaní, inventúra a expedícia.','Dohodneme SLA.', 'https://www.kpkreklama.sk/wp-content/uploads/2018/10/IMG_0458-1.jpg'],
      ];
      foreach($services as $s){
        echo '<div class="card">
                <div class="figure" style="background-image: url(\''.$s[3].'\');"></div>
                <div style="padding:16px">
                  <h3>'.esc_html($s[0]).'</h3>
                  <p class="meta">'.esc_html($s[1]).'</p>
                  <p class="meta u-mt-1">'.esc_html($s[2]).'</p>
                  <div class="u-mt-2"><a class="cta-btn" href="#kpk-quote">Zistiť viac</a></div>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- AKO PREBIEHA SPOLUPRÁCA (TIMELINE) -->
<section class="section bg-muted">
  <div class="container">
    <h2>Ako prebieha spolupráca</h2>
    <div class="grid grid-5" style="grid-template-columns:repeat(5,minmax(0,1fr));gap:20px">
      <?php
      $steps = [
        ['Brief','Ciele, rozmery, lokality, termín'],
        ['Návrh','Grafika, vizualizácia, revízie'],
        ['Výroba','Tlač, finalizácia, kontrola kvality'],
        ['Logistika','Plán rozvozu, inštalačné sloty'],
        ['Inštalácia','Montáž, odovzdanie, servis'],
      ];
      foreach($steps as $i => $st){
        echo '<div class="card">
                <div class="figure"></div>
                <div style="padding:16px">
                  <h3>'.($i+1).'. '.$st[0].'</h3>
                  <p class="meta">'.$st[1].'</p>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- PRIEČNE PREPOJENIA (ODKAZY NA PRODUKTY) -->
<section class="section">
  <div class="container">
    <h2>S čím sa to najčastejšie spája</h2>
    <div class="grid grid-4">
      <?php
      $links = [
        ['Vonkajšia reklama','Billboardy, citylighty, plachty','/vonkajsia-reklama/','assets/outdoor.webp'],
        ['Samolepiace fólie','Výklady, interiér, autá','/samolepiace-folie/','assets/folie.webp'],
        ['Kartónové stojany','POS na mieru','/kartonove-stojany/','assets/kartonove.webp'],
        ['Výstavné systémy','Textil, roll-up, stany','/vystavne-systemy/','assets/vystavne.webp'],
      ];
      $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

      foreach($links as $l){
        $img = kpk_asset($l[3] ?? '') ?: $ph; // ← хелпер из functions.php
        ?>
        <a class="card" href="<?php echo esc_url( home_url($l[2]) ); ?>">
          <div class="figure" style="background-image:url('<?php echo esc_url($img); ?>')"></div>
          <div style="padding:16px">
            <h3><?php echo esc_html($l[0]); ?></h3>
            <p class="meta"><?php echo esc_html($l[1]); ?></p>
          </div>
        </a>
        <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- CASE MINI-GALÉRIA -->
<section class="section">
  <div class="container">
    <h2>Ukážky realizácií</h2>
    <div class="grid grid-3">
      <?php for($i=1;$i<=6;$i++): ?>
        <a class="card" href="#"><div class="figure"></div><div style="padding:12px"><h3 class="meta">Služby – projekt <?php echo $i; ?></h3></div></a>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- FINÁLNY CTA (JEDNA FORMA) -->
<section id="kpk-quote" class="section bg-muted">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Napíšte, s čím potrebujete pomôcť — navrhneme riešenie a termín.</p>
          <ul class="meta u-mt-1">
            <li>• Typ služby (návrh / montáž / logistika / plnenie POS / skladovanie)</li>
            <li>• Lokalita a termín</li>
            <li>• Krátky popis projektu</li>
          </ul>
        </div>
        <?php kpk_form_notice(); ?>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="Telefón">
          <select name="topic">
            <option value="">Služba</option>
            <option>Grafický návrh</option>
            <option>Poradenstvo</option>
            <option>Montáž / Servis</option>
            <option>Logistika & rozvoz</option>
            <option>Plnenie POS</option>
            <option>Skladovanie</option>
            <option>Iné</option>
          </select>
          <textarea name="message" rows="4" placeholder="Popis, termín, lokalita"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">Získať ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
