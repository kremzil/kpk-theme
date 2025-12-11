<?php
/**
 * Template Name: Kontakt (Landing)
 * Description: Kontakty a rýchly dopyt: všeobecné kontakty, adresy/mapa, roly (Sales/Front office/Production), pracovný čas, sociálne siete, 1 formulár.
 */
get_header(); ?>

<!-- HERO / TOP CONTACT BAR -->
<section class="hero">
  <div class="container">
    <h1>Kontakt</h1>
    <p class="meta-hero">Ozvite sa nám – poradíme s výberom riešenia a pripravíme nezáväznú ponuku.</p>

    <div class="badges" style="margin-top:12px">
      <?php
        $general_phone = get_theme_mod('kpk_phone', '+421 000 000 000');
        $general_email = get_theme_mod('kpk_email', get_option('admin_email'));
      ?>
      <a class="hero-btn" href="tel:<?php echo preg_replace('/\s+/', '', esc_attr($general_phone)); ?>">Zavolať: <?php echo esc_html($general_phone); ?></a>
      <a class="hero-silent-btn" href="mailto:<?php echo antispambot($general_email); ?>">Napísať: <?php echo antispambot($general_email); ?></a>
    </div>
  </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- ADDRESSES / MAP -->
<section class="section">
  <div class="container">
    <h2>Adresa a mapa</h2>
    <div class="grid grid-2" style="align-items:start">
      <div class="card">
        <div style="padding:16px">
          <h3>Prevádzka / Výroba</h3>
          <p class="meta u-mt-1">
            <?php echo nl2br(esc_html( get_theme_mod('kpk_address', "Ulica 1\n040 00 Košice\nSlovensko") )); ?>
          </p>
          <p class="meta u-mt-1"><strong>Telefon:</strong> <?php echo esc_html($general_phone); ?><br>
          <strong>E-mail:</strong> <a href="mailto:<?php echo antispambot($general_email); ?>"><?php echo antispambot($general_email); ?></a></p>
        </div>
      </div>

<div class="card u-center u-p-1 map-card">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1159.2168196470202!2d21.249122057662305!3d48.69287300110936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee0011df0b0b3%3A0xeefacb6063c0c18f!2zUm96dm9qb3bDoSAyLCAwNDAgMTEgS2_FoWljZSwg0KHQu9C-0LLQsNC60LjRjw!5e1!3m2!1sru!2sby!4v1763486807588!5m2!1sru!2sby"
          width="600" height="312" style="border:0;" allowfullscreen loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

  <a class="contact button map-btn" href="https://maps.app.goo.gl/5YD5eWXNxh9PMgA99" target="_blank">
    Otvoriť v Google Maps
  </a>
</div>
    </div>
  </div>
</section>

<!-- ROLES (dynamic compact grid) -->
<section class="section">
  <div class="container">
    <h2>Kontaktné osoby</h2>

    <?php
      $team_count = max(1, (int)get_theme_mod('kpk_team_count', 8));
      $compact    = get_theme_mod('kpk_team_compact', true);
      $cls_grid   = $compact ? 'people-grid is-compact' : 'people-grid';
    ?>
    <div class="<?php echo esc_attr($cls_grid); ?>">

      <?php for ($i=1; $i<=$team_count; $i++):
        $name  = get_theme_mod("kpk_person_{$i}_name", '');
        $role  = get_theme_mod("kpk_person_{$i}_role", '');
        $phone = get_theme_mod("kpk_person_{$i}_phone", '');
        $email = get_theme_mod("kpk_person_{$i}_email", '');
        $photo = get_theme_mod("kpk_person_{$i}_photo", '');

        if (!$name && !$email && !$phone && !$photo) continue; // пустые — пропускаем
      ?>
        <div class="person-card">
          <?php if ($photo): ?>
            <img class="person-photo <?php echo $compact ? 'is-sm' : ''; ?>"
                 src="<?php echo esc_url($photo); ?>"
                 alt="<?php echo esc_attr(trim($name.' — '.$role)); ?>"
                 loading="lazy" decoding="async" width="<?php echo $compact?88:96; ?>" height="<?php echo $compact?88:96; ?>">
          <?php else: ?>
            <div class="figure" style="width:<?php echo $compact?88:96; ?>px;height:<?php echo $compact?88:96; ?>px;border-radius:50%;margin:0 auto"></div>
          <?php endif; ?>

          <?php if ($name): ?><div class="person-name"><?php echo esc_html($name); ?></div><?php endif; ?>
          <?php if ($role): ?><div class="person-role"><?php echo esc_html($role); ?></div><?php endif; ?>

          <div class="person-meta">
            <?php if ($phone): ?><div><a href="tel:<?php echo preg_replace('/\s+/', '', esc_attr($phone)); ?>"><?php echo esc_html($phone); ?></a></div><?php endif; ?>
            <?php if ($email): ?><div><a href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email); ?></a></div><?php endif; ?>
          </div>
        </div>
      <?php endfor; ?>

    </div>
  </div>
</section>



<!-- WORKING HOURS & SOCIAL -->
<section class="section bg-muted">
  <div class="container">
    <h2>Otváracie hodiny a sociálne siete</h2>
    <div class="grid grid-2">
      <div class="card">
        <div style="padding:16px">
          <h3>Otváracie hodiny</h3>
          <table class="table u-mt-1">
            <tbody>
              <tr><td>Pondelok – Piatok</td><td>08:00 – 16:30</td></tr>
              <tr><td>Sobota</td><td>zatvorené</td></tr>
              <tr><td>Nedeľa</td><td>zatvorené</td></tr>
            </tbody>
          </table>
          <p class="meta u-mt-1">Individuálne termíny montáže podľa dohody.</p>
        </div>
      </div>
      <div class="card">
        <div style="padding:16px">
          <h3>Sociálne siete</h3>
          <ul class="meta u-mt-1">
            <li><a href="<?php echo esc_url( get_theme_mod('kpk_fb', '#') ); ?>" rel="noopener" target="_blank">Facebook</a></li>
            <li><a href="<?php echo esc_url( get_theme_mod('kpk_ig', '#') ); ?>" rel="noopener" target="_blank">Instagram</a></li>
          </ul>
          <p class="meta u-mt-1">Aktuálne ukážky prác a novinky.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA (SINGLE FORM) -->
<section id="kpk-quote" class="section">
  <div class="container">
    <div class="card">
      <div class="grid grid-2" style="align-items:center">
        <div style="padding:16px">
          <h2>Napíšte nám</h2>
          <p class="meta">Vyberte tému a stručne popíšte projekt – odpovieme spravidla do 24 hodín.</p>
          <ul class="meta u-mt-1">
            <li>Cenová ponuka</li>
            <li>Konzultácia</li>
            <li>Servis</li>
            <li>Iné</li>
          </ul>
        </div>
        <form method="post" class="form kpk-form" aria-label="Contact form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="Telefón">
          <select name="topic" required>
            <option value="">Téma</option>
            <option>Cenová ponuka</option>
            <option>Konzultácia</option>
            <option>Servis</option>
            <option>Iné</option>
          </select>
          <textarea name="message" rows="4" placeholder="Správa" required></textarea>
          <?php kpk_form_notice(); ?>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
			<input type="hidden" name="kpk_recaptcha_token" value="">

          <button type="submit">Odoslať</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
