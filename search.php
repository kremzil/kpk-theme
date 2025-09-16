<?php get_header(); ?>
<section class="hero"><div class="container">
  <h1>Hľadať: “<?php echo esc_html(get_search_query()); ?>”</h1>
</div></section>
<section class="section"><div class="container">
  <?php if (have_posts()): ?>
    <div class="grid grid-3">
      <?php while(have_posts()): the_post(); ?>
        <article class="card">
          <a href="<?php the_permalink(); ?>"><div class="figure"></div></a>
          <div style="padding:16px">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="meta"><?php echo get_the_date(); ?></p>
            <p><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
    <div class="section"><?php the_posts_pagination(); ?></div>
  <?php else: ?>
    <p>Žiadne výsledky.</p>
  <?php endif; ?>
</div></section>
<?php get_footer(); ?>
