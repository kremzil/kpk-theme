<?php
if (!defined('KPK_VER')) define('KPK_VER', '1.0.0');
add_action('after_setup_theme', function(){
  add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('html5',['search-form','gallery','caption','script','style','navigation-widgets']);
  add_theme_support('custom-logo', [
  'height'      => 60,   // Ð¾Ñ€Ð¸ÐµÐ½Ñ‚Ð¸Ñ€, Ð½Ðµ Ð¶Ñ‘ÑÑ‚ÐºÐ¸Ð¹ Ð¿Ñ€ÐµÐ´ÐµÐ»
  'width'       => 180,
  'flex-height' => true,
  'flex-width'  => true,
]);

  register_nav_menus([
  'primary'         => __('Primary Menu','kpk'),
  'footer_products' => __('Footer â€“ Produkty','kpk'),
  'footer_services' => __('Footer â€“ SluÅ¾by','kpk'),
  'footer_legal'    => __('Footer â€“ Odkazy / Legal','kpk'),
]);

});
add_action('wp_enqueue_scripts', function(){
  
  wp_enqueue_style('kpk-base', get_stylesheet_directory_uri().'/assets/css/base.css', [], KPK_VER);
  wp_enqueue_style('kpk-layout', get_stylesheet_directory_uri().'/assets/css/layout.css', ['kpk-base'], KPK_VER);
  wp_enqueue_style('kpk-components', get_stylesheet_directory_uri().'/assets/css/components.css', ['kpk-layout'], KPK_VER);
  wp_enqueue_style('kpk-utilities', get_stylesheet_directory_uri().'/assets/css/utilities.css', ['kpk-components'], KPK_VER);
  if (is_front_page()) { wp_enqueue_style('kpk-home', get_stylesheet_directory_uri().'/assets/css/home.css', ['kpk-utilities'], KPK_VER); }

});

// ÐŸÐ¾Ð»Ð½Ñ‹Ð¹ URL Ðº Ñ„Ð°Ð¹Ð»Ñƒ Ñ‚ÐµÐ¼Ñ‹ Ð¿Ð¾ Ð¾Ñ‚Ð½Ð¾ÑÐ¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ð¼Ñƒ Ð¿ÑƒÑ‚Ð¸ + cache-busting Ð¿Ð¾ mtime
function kpk_asset($path){
  if (!$path) return '';
  $path = ltrim($path, '/'); // "assets/..." Ð¸Ð»Ð¸ "images/..."
  $base_uri = trailingslashit( get_stylesheet_directory_uri() );   // child theme safe
  $base_dir = trailingslashit( get_stylesheet_directory() );
  $url = $base_uri . $path;
  $file = $base_dir . $path;
  if (file_exists($file)) {
    $url = add_query_arg('v', filemtime($file), $url); // bust cache
  }
  return $url;
}

// Ð£Ð½Ð¸Ð²ÐµÑ€ÑÐ°Ð»ÑŒÐ½Ñ‹Ð¹ Ñ€ÐµÐ·Ð¾Ð»Ð²ÐµÑ€ ÐºÐ°Ñ€Ñ‚Ð¸Ð½Ð¾Ðº: ID / Ð°Ð±ÑÐ¾Ð»ÑŽÑ‚Ð½Ñ‹Ð¹ URL / Ð¾Ñ‚Ð½Ð¾ÑÐ¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð¿ÑƒÑ‚ÑŒ Ð² Ñ‚ÐµÐ¼Ðµ
function kpk_resolve_img($v){
  if (empty($v)) return '';
  if (is_numeric($v)) {
    $u = wp_get_attachment_image_url((int)$v, 'large');
    return $u ?: '';
  }
  if (filter_var($v, FILTER_VALIDATE_URL)) return $v; // ÑƒÐ¶Ðµ Ð¿Ð¾Ð»Ð½Ñ‹Ð¹ URL
  return kpk_asset($v); // Ð¾Ñ‚Ð½Ð¾ÑÐ¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð¿ÑƒÑ‚ÑŒ â†’ URL Ñ‚ÐµÐ¼Ñ‹
}


// Ð¥Ð»ÐµÐ±Ð½Ñ‹Ðµ ÐºÑ€Ð¾ÑˆÐºÐ¸
function kpk_breadcrumbs(){
  if (is_front_page()) return;
  echo '<nav class="breadcrumbs container" aria-label="Breadcrumbs"><a href="'.esc_url(home_url('/')).'">Domov</a>';
  if (is_singular('post')) {
    $cat = get_the_category(); if ($cat) echo ' â€º <a href="'.esc_url(get_category_link($cat[0]->term_id)).'">'.esc_html($cat[0]->name).'</a>';
    echo ' â€º <span>'.esc_html(get_the_title()).'</span>';
  } elseif (is_page()) {
    $anc = array_reverse(get_post_ancestors(get_the_ID()));
    foreach ($anc as $a) echo ' â€º <a href="'.get_permalink($a).'">'.get_the_title($a).'</a>';
    echo ' â€º <span>'.esc_html(get_the_title()).'</span>';
  } elseif (is_category()) {
    echo ' â€º <span>'.single_cat_title('', false).'</span>';
  } else {
    echo ' â€º <span>'.esc_html(get_the_archive_title()).'</span>';
  }
  echo '</nav>';
}

// === Team (Kontakt) â€” Customizer ===
add_action('customize_register', function($wp_customize){

  // Ð¡ÐµÐºÑ†Ð¸Ñ
  $wp_customize->add_section('kpk_team', [
    'title'       => __('TÃ­m (Kontakt)', 'kpk'),
    'priority'    => 31,
    'description' => __('Nastavenia kariet tÃ­mu: foto, meno, rola, telefÃ³n, e-mail', 'kpk'),
  ]);

  // ÐšÐ¾Ð»-Ð²Ð¾ ÐºÐ°Ñ€Ñ‚Ð¾Ñ‡ÐµÐº Ð¸ Â«ÐºÐ¾Ð¼Ð¿Ð°ÐºÑ‚Ð½Ñ‹Ð¹Â» Ñ€ÐµÐ¶Ð¸Ð¼
  $wp_customize->add_setting('kpk_team_count', ['default'=>8, 'sanitize_callback'=>'absint']);
  $wp_customize->add_control('kpk_team_count', [
    'section'=>'kpk_team','label'=>__('PoÄet osÃ´b (1â€“12)','kpk'),'type'=>'number',
    'input_attrs'=>['min'=>1,'max'=>12,'step'=>1],
  ]);

  $wp_customize->add_setting('kpk_team_compact', ['default'=>true, 'sanitize_callback'=>fn($v)=> (bool)$v ]);
  $wp_customize->add_control('kpk_team_compact', [
    'section'=>'kpk_team','label'=>__('KompaktnÃ© karty (menÅ¡ie foto, hustejÅ¡ia mrieÅ¾ka)','kpk'),'type'=>'checkbox'
  ]);

  // ÐŸÐ¾Ð¼Ð¾Ñ‰Ð½Ð¸Ðº Ð´Ð»Ñ Ð¾Ð´Ð½Ð¾Ð¹ Ð¿ÐµÑ€ÑÐ¾Ð½Ñ‹
  $add_person = function($i) use ($wp_customize){
    $idx = (int)$i;

    $wp_customize->add_setting("kpk_person_{$idx}_name", ['default'=>'', 'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control("kpk_person_{$idx}_name", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d â€“ Meno','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_role", ['default'=>'', 'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control("kpk_person_{$idx}_role", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d â€“ Rola','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_phone", ['default'=>'', 'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control("kpk_person_{$idx}_phone", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d â€“ TelefÃ³n','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_email", ['default'=>'', 'sanitize_callback'=>'sanitize_email']);
    $wp_customize->add_control("kpk_person_{$idx}_email", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d â€“ E-mail','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_photo", ['sanitize_callback'=>'esc_url_raw']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "kpk_person_{$idx}_photo", [
      'section'=>'kpk_team',
      'label'=>sprintf(__('Osoba %d â€“ Fotografia','kpk'), $idx),
      'description'=>__('OdporÃºÄanÃ©: 600Ã—600 px, JPG/PNG','kpk'),
    ]));
  };

  // Ð¡Ð¾Ð·Ð´Ð°Ñ‘Ð¼ Ð¿Ð¾Ð»Ñ Ð´Ð»Ñ 12 Ñ‡ÐµÐ»Ð¾Ð²ÐµÐº
  for ($i=1; $i<=12; $i++) { $add_person($i); }
});

/* === BLOG helpers === */

/* Ð”Ð¾Ð±Ð°Ð²Ð»ÑÐµÐ¼ id Ðº <h2>/<h3> Ð² Ð¿Ð¾ÑÑ‚Ð°Ñ… (Ð´Ð»Ñ Ð¾Ð³Ð»Ð°Ð²Ð»ÐµÐ½Ð¸Ñ) */
add_filter('the_content', function($content){
  if (!is_singular('post')) return $content;
  return preg_replace_callback('/<h([23])([^>]*)>(.*?)<\/h\1>/i', function($m){
    if (stripos($m[2], 'id=') !== false) return $m[0];
    $id = sanitize_title( wp_strip_all_tags($m[3]) );
    return "<h{$m[1]} id=\"{$id}\"{$m[2]}>{$m[3]}</h{$m[1]}>";
  }, $content);
}, 8);

/* Ð˜Ð·Ð²Ð»ÐµÐºÐ°ÐµÐ¼ Ð¿ÑƒÐ½ÐºÑ‚Ñ‹ ToC (h2/h3 Ñ id) */
function kpk_get_toc_items($html){
  preg_match_all('/<h([23])[^>]*id=["\']([^"\']+)["\'][^>]*>(.*?)<\/h\1>/i', $html, $m, PREG_SET_ORDER);
  $items = [];
  foreach ($m as $h) { $items[] = ['level'=>(int)$h[1], 'id'=>$h[2], 'text'=>wp_strip_all_tags($h[3])]; }
  return $items;
}

/* ÐšÐ¾Ñ€Ð¾Ñ‚ÐºÐ¸Ð¹ Ð²Ñ‹Ð²Ð¾Ð´ ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸Ð¸ (Ð¿ÐµÑ€Ð²Ð°Ñ) */
function kpk_primary_category_name($post_id=null){
  $cats = get_the_category($post_id?:get_the_ID());
  return $cats ? $cats[0]->name : '';
}

/* ÐŸÐ»ÐµÐ¹ÑÑ…Ð¾Ð»Ð´ÐµÑ€ Ð´Ð»Ñ ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐ¸ */
function kpk_placeholder_url(){
  return get_stylesheet_directory_uri().'/assets/placeholder.jpg';
}

// === Forms: handler + honeypot + AJAX JSON (Ñ Ð¿Ñ€Ð¾Ð²ÐµÑ€ÐºÐ¾Ð¹ wp_mail) ===
add_action('init', function () {
  if (!isset($_POST['kpk_form_nonce'])) return;
  if (!wp_verify_nonce($_POST['kpk_form_nonce'], 'kpk_form')) return;
  if (!empty($_POST['hp'])) return; // honeypot

  $name  = sanitize_text_field($_POST['name'] ?? '');
  $email = sanitize_email($_POST['email'] ?? '');
  $phone = sanitize_text_field($_POST['phone'] ?? '');
  $topic = sanitize_text_field($_POST['topic'] ?? '');
  $msg   = wp_kses_post($_POST['message'] ?? '');
  if (!$name || !$email) return;

  $to = sanitize_email( get_theme_mod('kpk_mail_to', get_option('admin_email')) );
  $subject = 'KPK dopyt: ' . ($topic ?: 'NeÅ¡pecifikovanÃ©');
  $body = wpautop(
    "Meno: {$name}\nEmail: {$email}\nTelefÃ³n: {$phone}\nTÃ©ma: {$topic}\n\nSprÃ¡va:\n{$msg}\n\nURL: " . (wp_get_referer() ?: home_url())
  );
  $headers = ['Content-Type: text/html; charset=UTF-8', 'Reply-To: '.$name.' <'.$email.'>'];

  $sent = wp_mail($to, $subject, $body, $headers);

  $is_ajax = (isset($_POST['kpk_ajax']) && $_POST['kpk_ajax'] === '1')
          || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');

  if ($is_ajax) {
    if ($sent) wp_send_json_success(['message' => __('ÄŽakujeme! VaÅ¡a sprÃ¡va bola odoslanÃ¡.','kpk')]);
    wp_send_json_error(['message' => __('Ups â€” nepodarilo sa odoslaÅ¥. SkÃºste znova alebo nÃ¡s kontaktujte telefonicky.','kpk')]);
  }

  $back = wp_get_referer() ?: home_url('/');
  wp_safe_redirect(add_query_arg('sent', $sent ? '1' : '0', $back));
  exit;
});

add_filter('wp_mail_from', function($from){
  $host = parse_url(home_url(), PHP_URL_HOST);
  return 'noreply@' . $host; // Ð½Ð°Ð¿Ñ€Ð¸Ð¼ÐµÑ€ noreply@kpkreklama.sk
});
add_filter('wp_mail_from_name', function($name){
  return get_bloginfo('name');
});

add_action('wp_mail_failed', function($wp_error){
  error_log('KPK mail failed: ' . print_r($wp_error, true));
});


// Small helper to print success alert
function kpk_form_notice(){
  if (!empty($_GET['sent'])) {
    echo '<div class="card" style="border-left:4px solid var(--color-accent);margin:12px 0;padding:12px 16px"><strong>ÄŽakujeme!</strong> VaÅ¡a sprÃ¡va bola odoslanÃ¡.</div>';
  }
}

// === 301 redirect: /moloplosna-tlac -> /maloplosna-tlac ===
add_action('template_redirect', function(){
  $req = $_SERVER['REQUEST_URI'] ?? '';
  if (stripos($req, '/moloplosna-tlac') === 0) {
    wp_redirect(home_url('/maloplosna-tlac/'), 301);
    exit;
  }
});
// === 301 redirect: /profesionalny-polep-na-auto -> /polepy-vozidiel ===
add_action('template_redirect', function(){
  $req = $_SERVER['REQUEST_URI'] ?? '';
  if (stripos($req, '/profesionalny-polep-na-auto') === 0) {
    wp_redirect(home_url('/polepy-vozidiel/'), 301);
    exit;
  }
});

// === Header / Footer / Tech icons â€” Customizer ===
add_action('customize_register', function($wp_customize){

  /* Header / Nav */
  $wp_customize->add_section('kpk_header', [
    'title'       => __('Header & NavigÃ¡cia','kpk'),
    'priority'    => 25,
    'description' => __('Nastavenie tlaÄidla v hlaviÄke','kpk'),
  ]);
  $wp_customize->add_setting('kpk_header_cta_text', ['default'=>__('PoÅ¾iadaÅ¥ o cenovÃº ponuku','kpk'), 'sanitize_callback'=>'sanitize_text_field']);
  $wp_customize->add_control('kpk_header_cta_text', ['section'=>'kpk_header','label'=>__('CTA â€“ Text','kpk'),'type'=>'text']);
  $wp_customize->add_setting('kpk_header_cta_url',  ['default'=>'#kpk-quote', 'sanitize_callback'=>'esc_url_raw']);
  $wp_customize->add_control('kpk_header_cta_url',  ['section'=>'kpk_header','label'=>__('CTA â€“ URL','kpk'),'type'=>'url']);

  /* Footer */
  $wp_customize->add_setting('kpk_mail_to', [
  'default' => get_option('admin_email'),
  'sanitize_callback' => 'sanitize_email'
  ]);
  $wp_customize->add_control('kpk_mail_to', [
    'section' => 'kpk_footer',
    'label'   => __('E-mail pre formulÃ¡re','kpk'),
    'type'    => 'text'
  ]);
  $wp_customize->add_section('kpk_footer', [
    'title'       => __('Footer','kpk'),
    'priority'    => 60,
    'description' => __('RÃ½chle kontakty a odkazy v pÃ¤tiÄke','kpk'),
  ]);
  $wp_customize->add_setting('kpk_address', ['default'=>"Ulica 1\n040 00 KoÅ¡ice\nSlovensko", 'sanitize_callback'=>'wp_kses_post']);
  $wp_customize->add_control('kpk_address', ['section'=>'kpk_footer','label'=>__('Adresa (riadky)','kpk'),'type'=>'textarea']);
  $wp_customize->add_setting('kpk_phone', ['default'=>'+421 000 000 000','sanitize_callback'=>'sanitize_text_field']);
  $wp_customize->add_control('kpk_phone', ['section'=>'kpk_footer','label'=>__('TelefÃ³n','kpk'),'type'=>'text']);
  $wp_customize->add_setting('kpk_email', ['default'=>get_option('admin_email'),'sanitize_callback'=>'sanitize_email']);
  $wp_customize->add_control('kpk_email', ['section'=>'kpk_footer','label'=>__('E-mail','kpk'),'type'=>'text']);

  // Socials
  $wp_customize->add_setting('kpk_fb',['sanitize_callback'=>'esc_url_raw']); $wp_customize->add_control('kpk_fb',['section'=>'kpk_footer','label'=>'Facebook','type'=>'url']);
  $wp_customize->add_setting('kpk_ig',['sanitize_callback'=>'esc_url_raw']); $wp_customize->add_control('kpk_ig',['section'=>'kpk_footer','label'=>'Instagram','type'=>'url']);
  $wp_customize->add_setting('kpk_li',['sanitize_callback'=>'esc_url_raw']); $wp_customize->add_control('kpk_li',['section'=>'kpk_footer','label'=>'LinkedIn','type'=>'url']);

  /* Tech icons */
  $wp_customize->add_section('kpk_tech', [
    'title'       => __('TechnolÃ³gie â€“ ikony','kpk'),
    'priority'    => 61,
    'description' => __('LogÃ¡ strojov/materiÃ¡lov do riadku v pÃ¤tiÄke','kpk'),
  ]);
  $wp_customize->add_setting('kpk_tech_text', [
  'default' => __('Roland UV Â· Mimaki Â· Summa Â· Laser Â· FrÃ©za Â· LaminÃ¡cia','kpk'),
  'sanitize_callback' => 'sanitize_text_field'
]);
$wp_customize->add_control('kpk_tech_text', [
  'section' => 'kpk_tech',
  'label'   => __('Text pri ikonÃ¡ch','kpk'),
  'type'    => 'text'
]);
  for ($i=1; $i<=10; $i++) {
    $wp_customize->add_setting("kpk_tech_icon_$i", ['sanitize_callback'=>'esc_url_raw']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "kpk_tech_icon_{$i}", [
      'section'=>'kpk_tech',
      'label'=>sprintf(__('Ikona %d','kpk'), $i),
      'description'=>__('OdporÃºÄanÃ©: 200Ã—80 px, PNG/JPG s priehÄ¾adnÃ½m/Äer. pozadÃ­m','kpk'),
    ]));
  }
});


add_action('wp_enqueue_scripts', function () {
  $uri = get_stylesheet_directory_uri();
  $dir = get_stylesheet_directory();

  $styles = [
    'kpk-base'       => '/assets/css/base.css',
    'kpk-layout'     => '/assets/css/layout.css',
    'kpk-components' => '/assets/css/components.css',
    'kpk-utilities'  => '/assets/css/utilities.css',
    'kpk-home'       => '/assets/css/home.css',
  ];

  foreach ($styles as $handle => $rel) {
    $path = $dir . $rel;
    $ver  = file_exists($path) ? filemtime($path) : null;
    wp_enqueue_style($handle, $uri . $rel, [], $ver);
  }

  // style.css Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡Ð°ÐµÐ¼ Ð¿Ð¾ÑÐ»ÐµÐ´Ð½Ð¸Ð¼ â€” Ð¾Ð½ ÑƒÐ¶Ðµ Ñƒ Ñ‚ÐµÐ±Ñ Ñ Â«Ð¶Ð¸Ð²Ð¾Ð¹Â» Ð²ÐµÑ€ÑÐ¸ÐµÐ¹, Ð½Ð¾ Ð½Ð° Ð²ÑÑÐºÐ¸Ð¹:
  $main = $dir . '/style.css';
  wp_enqueue_style('theme', get_stylesheet_uri(), [], filemtime($main));
}, 20);

?>