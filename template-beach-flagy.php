<?php
/**
 * Template Name: Beach flagy
 * Description: Produktová stránka pre reklamné beach flagy, varianty tvarov a CTA formulár.
 */
get_header(); ?>

<section class="hero">
  <div class="container">
    <h1>Beach flagy pre značky, ktoré chcú byť viditeľné</h1>
    <p class="meta-hero">
      Praktické a odolné vlajky pre exteriér aj interiér. Kombinácia hliníkového stožiara a flexibilného
      sklolaminátu zaručí stabilitu, prirodzený pohyb vo vetre a profesionálny vzhľad.
    </p>
    <div class="badges" style="margin-top:12px">
      <a class="hero-btn" href="#beach-cta">Získať cenovú ponuku</a>
      <a class="hero-silent-btn" href="<?php echo esc_url( home_url('/kontakt/') ); ?>">Konzultácia</a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<section class="section">
  <div class="container">
    <div class="grid grid-2" style="align-items:center">
      <div>
        <h2>Beach flag ako univerzálny reklamný nosič</h2>
        <p>
          Beach flag je spoľahlivý reklamný nosič s výborným pomerom ceny a výkonu. Ľahká hliníková konštrukcia
          doplnená o sklolaminátový hrot v hornej časti sa prispôsobí vetru, takže grafika zostáva čitateľná a vlajka
          si zachováva tvar aj po dlhých hodinách používania.
        </p>
        <p>
          Systém zvládne častú manipuláciu, jednoduchú montáž a rýchlu výmenu grafiky. Hodí sa pre promo zóny,
          predajne, podujatia aj dlhodobé vonkajšie kampane.
        </p>
      </div>
      <div class="card">
        <div class="figure is-square" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri().'/assets/beachflag/beachflag1.webp' ); ?>')"></div>
      </div>
    </div>
  </div>
</section>

<section class="section bg-muted">
  <div class="container">
    <h2>Varianty tvarov a systémov</h2>
    <div class="grid grid-2">
      <div class="card" style="padding:16px">
        <span class="chip">Y-Series</span>
        <h3>Klasické tvary beach flagov</h3>
        <p class="meta">
          Univerzálne riešenie vhodné na eventy, retail aj outdoor kampane. Dostupné štyri tvary pre rôzne typy
          grafiky a výšky.
        </p>
        <ul class="meta u-mt-1">
          <li>Y-Standard – dynamický rez pre športové a promo aplikácie</li>
          <li>Y-Knife – prirodzený kvapkový tvar pre všestranné použitie</li>
          <li>Y-Round – oblý roh pre mäkší vizuál a interiéry</li>
          <li>Y-Drop – klasická “kvapka” s maximálnou viditeľnosťou loga</li>
        </ul>
        <div class="container" style="padding:0">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/beachflag/y-series.webp' ); ?>"
               alt="<?php esc_attr_e('Tvary beach flagov','kpk'); ?>"
               style="width:100%;height:auto;border-radius:12px;">
        </div>
      </div>
      <div class="card" style="padding:16px">
        <span class="chip">FLAGPOLE RECTANGLE</span>
        <h3>Obdĺžnikový tvar</h3>
        <p class="meta">
          Odolná hliníková konštrukcia s pevným obdĺžnikom udrží grafiku čitateľnú aj bez vetra. Ideálne riešenie
          pre korporátne identity, ktoré potrebujú „billboard“ efekt v kompaktnom formáte.
        </p>
        <ul class="meta u-mt-1">
          <li>Masívny hliník po celej dĺžke stožiara</li>
          <li>Vysoká stabilita aj pri častom outdoor použití</li>
          <li>Jednoduchá výmena textílie s grafikou</li>
        </ul>
        <div class="container" style="padding:0">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/beachflag/rectangle-series.webp' ); ?>"
               alt="<?php esc_attr_e('Tvary beach flagov','kpk'); ?>"
               style="width:100%;height:auto;border-radius:12px;">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Prečo beach flagy od KPK</h2>
    <div class="grid grid-3">
      <?php
      $reasons = [
        ['Flexibilné použitie', 'Jedna konštrukcia pre interiér aj exteriér, rôzne tvary a výšky.'],
        ['Dlhá životnosť', 'Hliník + sklolaminát odolajú poveternostným vplyvom a častému skladaniu.'],
        ['Silná vizibilita', 'Vlajky prinášajú výrazný pohyb siete a prirodzene priťahujú pohľad okoloidúcich.'],
      ];
      foreach ($reasons as $card): ?>
        <div class="card">
          <div style="padding:16px">
            <h3><?php echo esc_html($card[0]); ?></h3>
            <p class="meta"><?php echo esc_html($card[1]); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Technické parametre a príslušenstvo</h2>
    <div class="grid grid-2">
      <div class="card" style="padding:16px">
        <h3>Koncepcia stožiara</h3>
        <ul class="meta">
          <li>Dolná časť z hliníka so segmentami pre jednoduchú montáž</li>
          <li>Horné časti zo sklolaminátu pre flexibilitu pri nárazoch vetra</li>
          <li>Tvary a výšky: od 2,7 m po 5,5 m podľa potreby</li>
        </ul>
      </div>
      <div class="card" style="padding:16px">
        <h3>Podstavy a doplnky</h3>
        <ul class="meta">
          <li>Krížové podstavy, podstavy s vodným vakom alebo záťažové platne</li>
          <li>Kolíky pre pevné ukotvenie do zeme</li>
          <li>Transportné vaky pre jednoduché prenášanie</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section bg-muted">
  <div class="container">
    <h2>Ukážky vizuálov</h2>
    <?php
      $gallery = [];
      for ($i = 1; $i <= 6; $i++) {
        $gallery[] = [
          'title' => 'Beach flag ukážka '.$i,
          'img'   => get_stylesheet_directory_uri().'/assets/vystavne.webp',
        ];
      }
      $ph = get_stylesheet_directory_uri().'/assets/placeholder.jpg';
    ?>
    <div class="grid grid-3 tiles">
      <?php foreach ($gallery as $index => $item):
        $full = kpk_resolve_img($item['img']) ?: $ph;
        $thumb = $full;
      ?>
        <div class="card js-lb-item"
             role="button" tabindex="0"
             aria-label="Zväčšiť: <?php echo esc_attr($item['title']); ?>"
             data-full="<?php echo esc_attr($full); ?>"
             data-title="<?php echo esc_attr($item['title']); ?>"
             data-index="<?php echo (int)$index; ?>">
          <div class="figure is-square" style="background-image:url('<?php echo esc_url($thumb); ?>')"></div>
          <div style="padding:12px">
            <h3 class="meta"><?php echo esc_html($item['title']); ?></h3>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="beach-cta" class="section">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Požiadať o cenovú ponuku</h2>
          <p class="meta">Vyberieme vhodný tvar beach flagu, pripravíme grafiku a zabezpečíme výrobu aj montáž.</p>
          <ul class="meta u-mt-1">
            <li>Povedzte nám plánované miesto a rozmer</li>
            <li>Vyberieme vhodnú konštrukciu (Y-Series alebo Rectangle)</li>
            <li>Dodáme vlajky do celej SR</li>
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
              <option value="">Variant vlajky</option>
              <option>Y-Standard</option>
              <option>Y-Knife</option>
              <option>Y-Round</option>
              <option>Y-Drop</option>
              <option>FLAGPOLE RECTANGLE</option>
              <option>Iný / poradiť</option>
            </select>
            <textarea name="message" rows="4" placeholder="Počet kusov, lokalita, termín"></textarea>
            <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
            <button type="submit">Odoslať dopyt</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
