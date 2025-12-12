<?php get_header(); ?>
<section class="hero">
  <div class="container">
    <h1><?php single_cat_title(); ?></h1>
    <?php if (category_description()): ?>
      <p class="meta"><?php echo category_description(); ?></p>
    <?php endif; ?>
    <div class="chips">
      <a class="chip" href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>">Všetko</a>
      <?php
        $cats = get_categories(['hide_empty'=>1,'orderby'=>'name']);
        foreach($cats as $c){
          $active = (get_queried_object_id()===$c->term_id) ? ' is-active' : '';
          echo '<a class="chip'.$active.'" href="'.esc_url(get_category_link($c)).'">'.esc_html($c->name).'</a>';
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
            <a href="<?php the_permalink(); ?>">
              <div class="figure">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(kpk_placeholder_url()); ?>" alt="" loading="lazy" decoding="async">
                <?php endif; ?>
              </div>
            </a>
            <div style="padding:16px">
              <span class="label"><?php single_cat_title(); ?></span>
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
