<?php
/**
 * Template Name: SluÅ¾by (Hub)
 * Description: ZjednotenÃ½ prehÄ¾ad sluÅ¾ieb: nÃ¡vrh, poradenstvo, montÃ¡Å¾/servis, logistika & rozvoz, plnenie POS, skladovanie + spoluprÃ¡ca, CTA.
 */
get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Od nÃ¡vrhu po inÅ¡talÃ¡ciu</h1>
    <p class="meta-hero">GrafickÃ½ nÃ¡vrh, poradenstvo, vÃ½roba, montÃ¡Å¾ a logistika po celej SR. Jeden partner pre celÃ© rieÅ¡enie.</p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#kpk-quote">CenovÃ¡ ponuka</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- SLUÅ½BY (KARTIÄŒKY) -->
<section id="kpk-services" class="section">
  <div class="container">
    <h2>ÄŒo pre vÃ¡s urobÃ­me</h2>
    <div class="grid grid-3">
      <?php
      $services = [
        ['GrafickÃ½ nÃ¡vrh','KonzistentnÃ½ vizuÃ¡l, prÃ­prava tlaÄovÃ½ch dÃ¡t a layout podÄ¾a povrchu a formÃ¡tu.','Ãšpravy podÄ¾a feedbacku, export s bleedom.', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/241434925_4211602365561328_4420586759710488175_n.jpg'],
        ['Poradenstvo','PomÃ´Å¾eme vybraÅ¥ materiÃ¡l, formÃ¡t a technolÃ³giu pre interiÃ©r aj exteriÃ©r.','ReÃ¡lne prÃ­klady a kalkulÃ¡cie.', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/272296102_4661975450524015_888061691817514557_n-2-copy.png'],
        ['MontÃ¡Å¾ / Servis','CertifikovanÃ© postupy pre fÃ³lie, rÃ¡my, POS aj vÃ½stavnÃ© systÃ©my.','Servis a repas podÄ¾a potreby.', 'https://www.kpkreklama.sk/wp-content/uploads/2022/11/269901425_4547739195280975_1131785709133169368_n-copy.png'],
        ['Logistika & rozvoz','DoruÄenie po celej SR, plÃ¡novanie trÃ¡s pre predajne a poboÄky.','MoÅ¾nosÅ¥ ÄasovÃ½ch okien.', 'https://www.kpkreklama.sk/wp-content/uploads/2020/09/IMG_0957-scaled.jpg'],
        ['Plnenie POS','KompletÃ¡cia, osadenie v predajni a doplnenie produktom Äi merchandisingom.','Report a fotodokumentÃ¡cia.', 'https://www.kpkreklama.sk/wp-content/uploads/2018/11/unnamed-copy-scaled.jpg'],
        ['Skladovanie','KrÃ¡tkodobÃ© uskladnenie materiÃ¡lov a kampanÃ­, inventÃºra a expedÃ­cia.','Dohodneme SLA.', 'https://www.kpkreklama.sk/wp-content/uploads/2018/10/IMG_0458-1.jpg'],
      ];
      foreach($services as $s){
        echo '<div class="card">
                <div class="figure" style="background-image: url(\''.$s[3].'\');"></div>
                <div style="padding:16px">
                  <h3>'.esc_html($s[0]).'</h3>
                  <p class="meta">'.esc_html($s[1]).'</p>
                  <p class="meta u-mt-1">'.esc_html($s[2]).'</p>
                  <div class="u-mt-2"><a class="cta-btn" href="#kpk-quote">ZistiÅ¥ viac</a></div>
                </div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- AKO PREBIEHA SPOLUPRÃCA (TIMELINE) -->
<section class="section bg-muted">
  <div class="container">
    <h2>Ako prebieha spoluprÃ¡ca</h2>
    <div class="grid grid-5" style="grid-template-columns:repeat(5,minmax(0,1fr));gap:20px">
      <?php
      $steps = [
        ['Brief','Ciele, rozmery, lokality, termÃ­n'],
        ['NÃ¡vrh','Grafika, vizualizÃ¡cia, revÃ­zie'],
        ['VÃ½roba','TlaÄ, finalizÃ¡cia, kontrola kvality'],
        ['Logistika','PlÃ¡n rozvozu, inÅ¡talaÄnÃ© sloty'],
        ['InÅ¡talÃ¡cia','MontÃ¡Å¾, odovzdanie, servis'],
      ];
      foreach($steps as $i => $st){
        echo '<div class="card">
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

<!-- PRIEÄŒNE PREPOJENIA (ODKAZY NA PRODUKTY) -->
<section class="section">
  <div class="container">
    <h2>S ÄÃ­m sa to najÄastejÅ¡ie spÃ¡ja</h2>
    <div class="grid grid-4">
      <?php
      $links = [
        ['VonkajÅ¡ia reklama','Billboardy, citylighty, plachty','/vonkajsia-reklama/','assets/outdoor.webp'],
        ['Samolepiace fÃ³lie','VÃ½klady, interiÃ©r, autÃ¡','/samolepiace-folie/','assets/folie.webp'],
        ['KartÃ³novÃ© stojany','POS na mieru','/kartonove-stojany/','assets/kartonove.webp'],
        ['VÃ½stavnÃ© systÃ©my','Textil, roll-up, stany','/vystavne-systemy/','assets/vystavne.webp'],
      ];
      $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';

      foreach($links as $l){
        $img = kpk_asset($l[3] ?? '') ?: $ph; // â† Ñ…ÐµÐ»Ð¿ÐµÑ€ Ð¸Ð· functions.php
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

<!-- GALÃ‰RIA -->
<section class="section" id="maloplosna-gallery">
  <div class="container">
    <h2>UkÃ¡Å¾ky realizÃ¡ciÃ­</h2>

    <div class="grid grid-3 tiles">
      <?php
        $gallery = [
          ['title'=>'1', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/241690259_4211602432227988_5143389094334154690_n.jpg'],
          ['title'=>'2', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/271840600_4630485723672988_672674140470928561_n-copy.png'],
          ['title'=>'3', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/122116307_3310896628965244_4006765038207542467_n-copy.jpg'],
          ['title'=>'4', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/271844055_4630485757006318_7065288016743897656_n-copy.png'],
          ['title'=>'5', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/296361627_5209268839128004_8008745352077260214_n.jpg'],
          ['title'=>'6', 'img'=>'https://www.kpkreklama.sk/wp-content/uploads/2022/11/IMG_0544-1200x900-1-copy.png'],
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
          <p class="meta">NapÃ­Å¡te, s ÄÃ­m potrebujete pomÃ´cÅ¥ â€” navrhneme rieÅ¡enie a termÃ­n.</p>
          <ul class="meta u-mt-1">
            <li>â€¢ Typ sluÅ¾by (nÃ¡vrh / montÃ¡Å¾ / logistika / plnenie POS / skladovanie)</li>
            <li>â€¢ Lokalita a termÃ­n</li>
            <li>â€¢ KrÃ¡tky popis projektu</li>
          </ul>
        </div>
        <?php kpk_form_notice(); ?>
        <form method="post" class="form" aria-label="Quote form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic">
            <option value="">SluÅ¾ba</option>
            <option>GrafickÃ½ nÃ¡vrh</option>
            <option>Poradenstvo</option>
            <option>MontÃ¡Å¾ / Servis</option>
            <option>Logistika & rozvoz</option>
            <option>Plnenie POS</option>
            <option>Skladovanie</option>
            <option>InÃ©</option>
          </select>
          <textarea name="message" rows="4" placeholder="Popis, termÃ­n, lokalita"></textarea>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">ZÃ­skaÅ¥ ponuku</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
