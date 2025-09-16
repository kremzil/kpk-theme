<?php ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<a class="sr-only" href="#content">Preskočiť na obsah</a>

<header class="header">
  <div class="container header-inner">
        <div class="brand">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>
        </div>


    <!-- Burger (CSS-only) -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-hidden="true">
    <label for="nav-toggle" class="burger" aria-label="Otvoriť menu" role="button" tabindex="0">
      <span></span><span></span><span></span>
    </label>

    <nav id="site-nav" class="nav" aria-label="<?php esc_attr_e('Primary','kpk'); ?>">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'menu',
          'fallback_cb'    => false
        ]);
      ?>
      <a class="cta-btn header-cta"
         href="<?php echo esc_url(get_theme_mod('kpk_header_cta_url', '#kpk-quote')); ?>">
        <?php echo esc_html(get_theme_mod('kpk_header_cta_text', __('Požiadať o cenovú ponuku','kpk'))); ?>
      </a>
    </nav>
  </div>
</header>

<main id="content">
