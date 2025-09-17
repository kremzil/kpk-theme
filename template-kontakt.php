<?php
/**
 * Template Name: Kontakt (Landing)
 * Description: Kontakty a rÃ½chly dopyt: vÅ¡eobecnÃ© kontakty, adresy/mapa, roly (Sales/Front office/Production), pracovnÃ½ Äas, sociÃ¡lne siete, 1 formulÃ¡r.
 */
get_header(); ?>

<!-- HERO / TOP CONTACT BAR -->
<section class="hero">
  <div class="container">
    <h1>Kontakt</h1>
    <p class="meta-hero">Ozvite sa nÃ¡m â€“ poradÃ­me s vÃ½berom rieÅ¡enia a pripravÃ­me nezÃ¡vÃ¤znÃº ponuku.</p>

    <div class="badges" style="margin-top:12px">
      <?php
        $general_phone = get_theme_mod('kpk_phone', '+421 000 000 000');
        $general_email = get_theme_mod('kpk_email', get_option('admin_email'));
      ?>
      <a class="hero-btn" href="tel:<?php echo preg_replace('/\s+/', '', esc_attr($general_phone)); ?>">ZavolaÅ¥: <?php echo esc_html($general_phone); ?></a>
      <a class="hero-silent-btn" href="mailto:<?php echo antispambot($general_email); ?>">NapÃ­saÅ¥: <?php echo antispambot($general_email); ?></a>
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
          <h3>PrevÃ¡dzka / VÃ½roba</h3>
          <p class="meta u-mt-1">
            <?php echo nl2br(esc_html( get_theme_mod('kpk_address', "Ulica 1\n040 00 KoÅ¡ice\nSlovensko") )); ?>
          </p>
          <p class="meta u-mt-1"><strong>Telefon:</strong> <?php echo esc_html($general_phone); ?><br>
          <strong>E-mail:</strong> <a href="mailto:<?php echo antispambot($general_email); ?>"><?php echo antispambot($general_email); ?></a></p>
        </div>
      </div>

      <div class="card u-center u-p-1">
      
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1400.8377921477247!2d21.2499117!3d48.6931777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee15a9ca07ff1%3A0xbfee74101cfc8665!2sKPK%20Print%20s.r.o.%20%2F%20KPK%20Reklama%20-%20fabrika%20na%20reklamu!5e1!3m2!1ssk!2sby!4v1757888603866!5m2!1ssk!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
      </div>
    </div>
  </div>
</section>

<!-- ROLES (dynamic compact grid) -->
<section class="section">
  <div class="container">
    <h2>KontaktnÃ© osoby</h2>

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

        if (!$name && !$email && !$phone && !$photo) continue; // Ð¿ÑƒÑÑ‚Ñ‹Ðµ â€” Ð¿Ñ€Ð¾Ð¿ÑƒÑÐºÐ°ÐµÐ¼
      ?>
        <div class="person-card">
          <?php if ($photo): ?>
            <img class="person-photo <?php echo $compact ? 'is-sm' : ''; ?>"
                 src="<?php echo esc_url($photo); ?>"
                 alt="<?php echo esc_attr(trim($name.' â€” '.$role)); ?>"
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
    <h2>OtvÃ¡racie hodiny a sociÃ¡lne siete</h2>
    <div class="grid grid-2">
      <div class="card">
        <div style="padding:16px">
          <h3>OtvÃ¡racie hodiny</h3>
          <table class="table u-mt-1">
            <tbody>
              <tr><td>Pondelok â€“ Piatok</td><td>08:00 â€“ 16:30</td></tr>
              <tr><td>Sobota</td><td>zatvorenÃ©</td></tr>
              <tr><td>NedeÄ¾a</td><td>zatvorenÃ©</td></tr>
            </tbody>
          </table>
          <p class="meta u-mt-1">IndividuÃ¡lne termÃ­ny montÃ¡Å¾e podÄ¾a dohody.</p>
        </div>
      </div>
      <div class="card">
        <div style="padding:16px">
          <h3>SociÃ¡lne siete</h3>
          <ul class="meta u-mt-1">
            <li>â€¢ <a href="<?php echo esc_url( get_theme_mod('kpk_fb', '#') ); ?>" rel="noopener" target="_blank">Facebook</a></li>
            <li>â€¢ <a href="<?php echo esc_url( get_theme_mod('kpk_ig', '#') ); ?>" rel="noopener" target="_blank">Instagram</a></li>
            <li>â€¢ <a href="<?php echo esc_url( get_theme_mod('kpk_li', '#') ); ?>" rel="noopener" target="_blank">LinkedIn</a></li>
          </ul>
          <p class="meta u-mt-1">AktuÃ¡lne ukÃ¡Å¾ky prÃ¡c a novinky.</p>
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
          <h2>NapÃ­Å¡te nÃ¡m</h2>
          <p class="meta">Vyberte tÃ©mu a struÄne popÃ­Å¡te projekt â€“ odpovieme spravidla do 24 hodÃ­n.</p>
          <ul class="meta u-mt-1">
            <li>â€¢ CenovÃ¡ ponuka</li>
            <li>â€¢ KonzultÃ¡cia</li>
            <li>â€¢ Servis</li>
            <li>â€¢ InÃ©</li>
          </ul>
        </div>
        <form method="post" class="form" aria-label="Contact form">
          <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
          <input type="text" name="name" placeholder="Meno a priezvisko" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="tel" name="phone" placeholder="TelefÃ³n">
          <select name="topic" required>
            <option value="">TÃ©ma</option>
            <option>CenovÃ¡ ponuka</option>
            <option>KonzultÃ¡cia</option>
            <option>Servis</option>
            <option>InÃ©</option>
          </select>
          <textarea name="message" rows="4" placeholder="SprÃ¡va" required></textarea>
          <?php kpk_form_notice(); ?>
          <input type="text" name="hp" class="u-hide" tabindex="-1" autocomplete="off">
          <button type="submit">OdoslaÅ¥</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
