<?php get_header(); ?>
<section class="hero">
  <div class="container">
    <h1>Blog</h1>
    <p class="meta">Tipy k outdooru, fóliám, POS a výstavným systémom.</p>

    <!-- Категории-чипсы -->
    <div class="chips">
      <a class="chip <?php if(is_home()) echo 'is-active'; ?>" href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>">Všetko</a>
      <?php
        $cats = get_categories(['hide_empty'=>1,'orderby'=>'name']);
        foreach($cats as $c){
          echo '<a class="chip" href="'.esc_url(get_category_link($c)).'">'.esc_html($c->name).'</a>';
        }
      ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php if (have_posts()): ?>
      <div class="grid grid-3">
        <?php while(have_posts()): the_post(); ?>
          <article class="card">
            <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
              <div class="figure">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(kpk_placeholder_url()); ?>" alt="" loading="lazy" decoding="async">
                <?php endif; ?>
              </div>
            </a>
            <div style="padding:16px">
              <?php $pc = kpk_primary_category_name(); if($pc): ?>
                <span class="label"><?php echo esc_html($pc); ?></span>
              <?php endif; ?>
              <h3 style="margin-top:8px"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="meta"><?php echo get_the_date(); ?></p>
              <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="section"><?php the_posts_pagination(); ?></div>
    <?php else: ?>
      <p><?php _e('Žiadne príspevky','kpk'); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
