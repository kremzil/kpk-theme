<?php get_header(); ?>
<div class="container section">
  <?php while (have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>

      <!-- Ð—Ð°Ð³Ð¾Ð»Ð¾Ð²Ð¾Ðº + Ð¼ÐµÑ‚Ð° -->
      <h1><?php the_title(); ?></h1>
      <p class="meta">
        <?php echo get_the_date(); ?>
        <?php $pc = kpk_primary_category_name(); if($pc) echo ' Â· '.$pc; ?>
      </p>

      <!-- ÐžÐ±Ð»Ð¾Ð¶ÐºÐ° -->
      <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('large', ['class'=>'figure']);
        }
      ?>

      <?php
        // Ð“Ð¾Ñ‚Ð¾Ð²Ð¸Ð¼ ÐºÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ Ð¸ ToC
        $content = apply_filters('the_content', get_the_content());
        $toc = kpk_get_toc_items($content);
      ?>

      <!-- ÐžÐ³Ð»Ð°Ð²Ð»ÐµÐ½Ð¸Ðµ (ÐµÑÐ»Ð¸ >=2 Ð·Ð°Ð³Ð¾Ð»Ð¾Ð²ÐºÐ¾Ð²) -->
      <?php if (count($toc) >= 2): ?>
        <div class="toc u-mt-2">
          <h3><?php _e('Obsah','kpk'); ?></h3>
          <ul>
            <?php foreach($toc as $t): ?>
              <li style="margin-left:<?php echo $t['level']==3 ? '12px':'0'; ?>">
                <a href="#<?php echo esc_attr($t['id']); ?>"><?php echo esc_html($t['text']); ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <!-- ÐšÐ¾Ð½Ñ‚ÐµÐ½Ñ‚ -->
      <div class="entry-content u-mt-2"><?php echo $content; ?></div>

      <!-- Ð¡Ð¾Ð¿ÑƒÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‰Ð¸Ðµ Ð¿Ñ€Ð¾Ð´ÑƒÐºÑ‚Ñ‹/ÑƒÑÐ»ÑƒÐ³Ð¸ -->
      <section class="section">
        <h2><?php _e('SÃºvisiace produkty a sluÅ¾by','kpk'); ?></h2>
        <div class="grid grid-4">
          <?php
            $map = [
              'Outdoor'             => ['/vonkajsia-reklama/','VonkajÅ¡ia reklama'],
              'FÃ³lie'               => ['/samolepiace-folie/','Samolepiace fÃ³lie'],
              'POS'                 => ['/kartonove-stojany/','KartÃ³novÃ© stojany'],
              'VÃ½stavnÃ© systÃ©my'    => ['/vystavne-systemy/','VÃ½stavnÃ© systÃ©my'],
            ];
            $cats = wp_get_post_categories(get_the_ID(), ['fields'=>'names']);
            $shown = [];
            foreach ($cats as $name){
              if(isset($map[$name]) && !in_array($name,$shown, true)){
                echo '<a class="card" href="'.esc_url(home_url($map[$name][0])).'">
                        <div class="figure"></div>
                        <div style="padding:16px"><h3>'.$map[$name][1].'</h3>
                        <p class="meta">'.esc_html($name).'</p></div>
                      </a>';
                $shown[] = $name;
              }
            }
            // Ð•ÑÐ»Ð¸ ÑÐ¾Ð²Ð¿Ð°Ð´ÐµÐ½Ð¸Ð¹ Ð½ÐµÑ‚ â€” Ð²Ñ‹Ð²Ð¾Ð´Ð¸Ð¼ Ð²ÑÐµ 4 ÐºÐ°Ðº Ð´ÐµÑ„Ð¾Ð»Ñ‚
            if (empty($shown)) {
              foreach ($map as $slug => $arr){
                echo '<a class="card" href="'.esc_url(home_url($arr[0])).'">
                        <div class="figure"></div>
                        <div style="padding:16px"><h3>'.$arr[1].'</h3>
                        <p class="meta">'.esc_html($slug).'</p></div>
                      </a>';
              }
            }
          ?>
        </div>
      </section>

      <!-- Ð¤Ð¸Ð½Ð°Ð»ÑŒÐ½Ñ‹Ð¹ CTA (Ð¾Ð´Ð½Ð° Ñ„Ð¾Ñ€Ð¼Ð°) -->
      <section id="kpk-quote" class="section bg-muted">
        <div class="card">
          <div class="grid grid-2" style="align-items:center">
            <div style="padding:16px">
              <h2><?php _e('ZÃ­skaÅ¥ cenovÃº ponuku','kpk'); ?></h2>
              <p class="meta"><?php _e('Povedzte nÃ¡m, Äo potrebujete â€“ ozveme sa do 24 hodÃ­n.','kpk'); ?></p>
            </div>
            <form method="post" class="form" aria-label="Quote form">
              <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
              <input type="text" name="name" placeholder="Meno a priezvisko" required>
              <input type="email" name="email" placeholder="E-mail" required>
              <input type="tel" name="phone" placeholder="TelefÃ³n">
              <select name="topic">
                <option value=""><?php _e('TÃ©ma dopytu','kpk'); ?></option>
                <option>VonkajÅ¡ia reklama</option>
                <option>Samolepiace fÃ³lie</option>
                <option>KartÃ³novÃ© stojany</option>
                <option>VÃ½stavnÃ© systÃ©my</option>
                <option>InÃ©</option>
              </select>
              <textarea name="message" rows="4" placeholder="StruÄnÃ½ popis, rozmery, termÃ­n"></textarea>
              <button type="submit"><?php _e('OdoslaÅ¥','kpk'); ?></button>
            </form>
          </div>
        </div>
      </section>

    </article>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
