
<?php get_header(); ?>
<div class="container section">
  <?php if (have_posts()): ?>
    <div class="grid grid-3">
      <?php while (have_posts()): the_post(); ?>
        <article class="card">
          <a href="<?php the_permalink(); ?>" class="figure" aria-label="<?php the_title_attribute(); ?>"></a>
          <div style="padding:16px">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="meta"><?php echo get_the_date(); ?></p>
            <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
    <div class="section"><?php the_posts_pagination(); ?></div>
  <?php else: ?>
    <p><?php _e('Žiadne príspevky','kpk'); ?></p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
