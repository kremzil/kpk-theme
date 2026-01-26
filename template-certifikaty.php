<?php
/**
 * Template Name: Certifikáty
 * Description: A custom page template for displaying certificates of KPK Reklama.
 */
get_header(); ?>

<!-- Hero Section -->
 <section class="hero">
    <div class="container">
        <h1 class=>Certifikáty KPK Reklama</h1>
        <p class="meta-hero">Naše záväzok k kvalite a profesionalite</p>
     <div class="badges" style="margin-top:12px">
        <a class="hero-btn" href="<?php echo esc_url( home_url('/kontakt/') ); ?>">Kontaktujte nás</a>
    </div>
    </div>
</section>

<?php kpk_breadcrumbs(); ?>

<!-- Certificates Section --> 

<section class="section">
    <div class="container">
        <h2 class="u-mb-2">Naše certifikáty</h2>
        <div class="grid grid-2">
            <?php
            $i = 0;
            $dir = get_template_directory() . '/assets/certificates';
            $folder_items = [];

            if (is_dir($dir)) {
                $files = scandir($dir);
                foreach ($files as $file) {
                    if ($file === '.' || $file === '..') continue;
                    $full = $dir . DIRECTORY_SEPARATOR . $file;
                    if (is_file($full)) {
                        $folder_items[] = [
                            'name' => $file,
                            'path' => $full,
                            'url'  => get_template_directory_uri() . '/assets/certificates/' . rawurlencode($file),
                        ];
                    }
                }
            }

                        foreach ($folder_items as $item): $i++; ?>
                                <div class="card cert-card">
                                        <div class="figure">
                                                <a href="#cert-<?php echo $i; ?>">
                                                    <img src="<?php echo esc_url($item['url']); ?>" alt="<?php echo esc_attr('Certifikát: '.$item['name']); ?>">
                                                </a>
                                        </div>
                                </div>

                                <!-- CSS-only overlay (activated via :target) -->
                                <div id="cert-<?php echo $i; ?>" class="lb" aria-hidden="true">
                                    <div class="lb__backdrop"></div>
                                    <div class="lb__stage">
                                        <img class="lb__img" src="<?php echo esc_url($item['url']); ?>" alt="<?php echo esc_attr($item['name']); ?>">
                                        <div class="lb__caption"><?php echo esc_html($item['name']); ?></div>
                                        <a class="lb__btn lb__close" href="#" aria-label="Close">✕</a>
                                    </div>
                                </div>
                        <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

