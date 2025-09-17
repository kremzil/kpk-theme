<?php get_header(); ?>
<section class="section">
  <div class="container">
    <h1>404 â€“ StrÃ¡nka sa nenaÅ¡la</h1>
    <p class="meta">SkÃºste vyhÄ¾adÃ¡vanie alebo prejdite na produkty.</p>
    <?php get_search_form(); ?>
    <p class="u-mt-1"><a class="cta-btn" href="<?php echo esc_url(home_url('/produkty/')); ?>">Produkty</a></p>
  </div>
</section>
<?php get_footer(); ?>