<?php get_header(); ?>
<div class="container section">
  <?php while (have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>

      <!-- Заголовок + мета -->
      <h1><?php the_title(); ?></h1>
      <p class="meta">
        <?php echo get_the_date(); ?>
        <?php $pc = kpk_primary_category_name(); if($pc) echo ' · '.$pc; ?>
      </p>

      <!-- Обложка -->
      <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('large', ['class'=>'figure']);
        }
      ?>

      <?php
        // Готовим контент и ToC
        $content = apply_filters('the_content', get_the_content());
        $toc = kpk_get_toc_items($content);
      ?>

      <!-- Оглавление (если >=2 заголовков) -->
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

      <!-- Контент -->
      <div class="entry-content u-mt-2"><?php echo $content; ?></div>

      <!-- Сопутствующие продукты/услуги -->
      <section class="section">
        <h2><?php _e('Súvisiace produkty a služby','kpk'); ?></h2>
        <div class="grid grid-4">
          <?php
            $map = [
              'Outdoor'             => ['/vonkajsia-reklama/','Vonkajšia reklama'],
              'Fólie'               => ['/samolepiace-folie/','Samolepiace fólie'],
              'POS'                 => ['/kartonove-stojany/','Kartónové stojany'],
              'Výstavné systémy'    => ['/vystavne-systemy/','Výstavné systémy'],
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
            // Если совпадений нет — выводим все 4 как дефолт
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

      <!-- Финальный CTA (одна форма) -->
      <section id="kpk-quote" class="section bg-muted">
        <div class="card">
          <div class="grid grid-2" style="align-items:center">
            <div style="padding:16px">
              <h2><?php _e('Získať cenovú ponuku','kpk'); ?></h2>
              <p class="meta"><?php _e('Povedzte nám, čo potrebujete – ozveme sa do 24 hodín.','kpk'); ?></p>
            </div>
            <form method="post" class="form" aria-label="Quote form">
              <?php wp_nonce_field('kpk_form','kpk_form_nonce'); ?>
              <input type="text" name="name" placeholder="Meno a priezvisko" required>
              <input type="email" name="email" placeholder="E-mail" required>
              <input type="tel" name="phone" placeholder="Telefón">
              <select name="topic">
                <option value=""><?php _e('Téma dopytu','kpk'); ?></option>
                <option>Vonkajšia reklama</option>
                <option>Samolepiace fólie</option>
                <option>Kartónové stojany</option>
                <option>Výstavné systémy</option>
                <option>Iné</option>
              </select>
              <textarea name="message" rows="4" placeholder="Stručný popis, rozmery, termín"></textarea>
              <button type="submit"><?php _e('Odoslať','kpk'); ?></button>
            </form>
          </div>
        </div>
      </section>

    </article>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
