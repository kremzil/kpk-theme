<?php
if (!defined('KPK_VER')) define('KPK_VER', '1.0.0');
add_action('after_setup_theme', function(){
  add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('html5',['search-form','gallery','caption','script','style','navigation-widgets']);
  add_theme_support('custom-logo', [
  'height'      => 60,   // ориентир, не жёсткий предел
  'width'       => 180,
  'flex-height' => true,
  'flex-width'  => true,
]);

  register_nav_menus([
  'primary'         => __('Primary Menu','kpk'),
  'footer_products' => __('Footer – Produkty','kpk'),
  'footer_services' => __('Footer – Služby','kpk'),
  'footer_legal'    => __('Footer – Odkazy / Legal','kpk'),
]);

});
add_action('wp_enqueue_scripts', function(){
  
  wp_enqueue_style('kpk-base', get_stylesheet_directory_uri().'/assets/css/base.css', [], KPK_VER);
  wp_enqueue_style('kpk-layout', get_stylesheet_directory_uri().'/assets/css/layout.css', ['kpk-base'], KPK_VER);
  wp_enqueue_style('kpk-components', get_stylesheet_directory_uri().'/assets/css/components.css', ['kpk-layout'], KPK_VER);
  wp_enqueue_style('kpk-utilities', get_stylesheet_directory_uri().'/assets/css/utilities.css', ['kpk-components'], KPK_VER);
  if (is_front_page()) { wp_enqueue_style('kpk-home', get_stylesheet_directory_uri().'/assets/css/home.css', ['kpk-utilities'], KPK_VER); }

});

// Полный URL к файлу темы по относительному пути + cache-busting по mtime
function kpk_asset($path){
  if (!$path) return '';
  $path = ltrim($path, '/'); // "assets/..." или "images/..."
  $base_uri = trailingslashit( get_stylesheet_directory_uri() );   // child theme safe
  $base_dir = trailingslashit( get_stylesheet_directory() );
  $url = $base_uri . $path;
  $file = $base_dir . $path;
  if (file_exists($file)) {
    $url = add_query_arg('v', filemtime($file), $url); // bust cache
  }
  return $url;
}

// Универсальный резолвер картинок: ID / абсолютный URL / относительный путь в теме
function kpk_resolve_img($v){
  if (empty($v)) return '';
  if (is_numeric($v)) {
    $u = wp_get_attachment_image_url((int)$v, 'large');
    return $u ?: '';
  }
  if (filter_var($v, FILTER_VALIDATE_URL)) return $v; // уже полный URL
  return kpk_asset($v); // относительный путь → URL темы
}


// Хлебные крошки
function kpk_breadcrumbs(){
  if (is_front_page()) return;
  echo '<nav class="breadcrumbs container" aria-label="Breadcrumbs"><a href="'.esc_url(home_url('/')).'">Domov</a>';
  if (is_singular('post')) {
    $cat = get_the_category(); if ($cat) echo ' › <a href="'.esc_url(get_category_link($cat[0]->term_id)).'">'.esc_html($cat[0]->name).'</a>';
    echo ' › <span>'.esc_html(get_the_title()).'</span>';
  } elseif (is_page()) {
    $anc = array_reverse(get_post_ancestors(get_the_ID()));
    foreach ($anc as $a) echo ' › <a href="'.get_permalink($a).'">'.get_the_title($a).'</a>';
    echo ' › <span>'.esc_html(get_the_title()).'</span>';
  } elseif (is_category()) {
    echo ' › <span>'.single_cat_title('', false).'</span>';
  } else {
    echo ' › <span>'.esc_html(get_the_archive_title()).'</span>';
  }
  echo '</nav>';
}

// === Team (Kontakt) — Customizer ===
add_action('customize_register', function($wp_customize){

  // Секция
  $wp_customize->add_section('kpk_team', [
    'title'       => __('Tím (Kontakt)', 'kpk'),
    'priority'    => 31,
    'description' => __('Nastavenia kariet tímu: foto, meno, rola, telefón, e-mail', 'kpk'),
  ]);

  // Кол-во карточек и «компактный» режим
  $wp_customize->add_setting('kpk_team_count', ['default'=>8, 'sanitize_callback'=>'absint']);
  $wp_customize->add_control('kpk_team_count', [
    'section'=>'kpk_team','label'=>__('Počet osôb (1–12)','kpk'),'type'=>'number',
    'input_attrs'=>['min'=>1,'max'=>12,'step'=>1],
  ]);

  $wp_customize->add_setting('kpk_team_compact', ['default'=>true, 'sanitize_callback'=>fn($v)=> (bool)$v ]);
  $wp_customize->add_control('kpk_team_compact', [
    'section'=>'kpk_team','label'=>__('Kompaktné karty (menšie foto, hustejšia mriežka)','kpk'),'type'=>'checkbox'
  ]);

  // Помощник для одной персоны
  $add_person = function($i) use ($wp_customize){
    $idx = (int)$i;

    $wp_customize->add_setting("kpk_person_{$idx}_name", ['default'=>'', 'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control("kpk_person_{$idx}_name", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d – Meno','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_role", ['default'=>'', 'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control("kpk_person_{$idx}_role", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d – Rola','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_phone", ['default'=>'', 'sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control("kpk_person_{$idx}_phone", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d – Telefón','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_email", ['default'=>'', 'sanitize_callback'=>'sanitize_email']);
    $wp_customize->add_control("kpk_person_{$idx}_email", ['section'=>'kpk_team','label'=>sprintf(__('Osoba %d – E-mail','kpk'), $idx),'type'=>'text']);

    $wp_customize->add_setting("kpk_person_{$idx}_photo", ['sanitize_callback'=>'esc_url_raw']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "kpk_person_{$idx}_photo", [
      'section'=>'kpk_team',
      'label'=>sprintf(__('Osoba %d – Fotografia','kpk'), $idx),
      'description'=>__('Odporúčané: 600×600 px, JPG/PNG','kpk'),
    ]));
  };

  // Создаём поля для 12 человек
  for ($i=1; $i<=12; $i++) { $add_person($i); }
});

/* === BLOG helpers === */

/* Добавляем id к <h2>/<h3> в постах (для оглавления) */
add_filter('the_content', function($content){
  if (!is_singular('post')) return $content;
  return preg_replace_callback('/<h([23])([^>]*)>(.*?)<\/h\1>/i', function($m){
    if (stripos($m[2], 'id=') !== false) return $m[0];
    $id = sanitize_title( wp_strip_all_tags($m[3]) );
    return "<h{$m[1]} id=\"{$id}\"{$m[2]}>{$m[3]}</h{$m[1]}>";
  }, $content);
}, 8);

/* Извлекаем пункты ToC (h2/h3 с id) */
function kpk_get_toc_items($html){
  preg_match_all('/<h([23])[^>]*id=["\']([^"\']+)["\'][^>]*>(.*?)<\/h\1>/i', $html, $m, PREG_SET_ORDER);
  $items = [];
  foreach ($m as $h) { $items[] = ['level'=>(int)$h[1], 'id'=>$h[2], 'text'=>wp_strip_all_tags($h[3])]; }
  return $items;
}

/* Короткий вывод категории (первая) */
function kpk_primary_category_name($post_id=null){
  $cats = get_the_category($post_id?:get_the_ID());
  return $cats ? $cats[0]->name : '';
}

/* Плейсхолдер для картинки */
function kpk_placeholder_url(){
  return get_stylesheet_directory_uri().'/assets/placeholder.jpg';
}

// === Forms: handler + honeypot + AJAX JSON (с проверкой wp_mail) ===
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
  $subject = 'KPK dopyt: ' . ($topic ?: 'Nešpecifikované');
  $body = wpautop(
    "Meno: {$name}\nEmail: {$email}\nTelefón: {$phone}\nTéma: {$topic}\n\nSpráva:\n{$msg}\n\nURL: " . (wp_get_referer() ?: home_url())
  );
  $headers = ['Content-Type: text/html; charset=UTF-8', 'Reply-To: '.$name.' <'.$email.'>'];

  $sent = wp_mail($to, $subject, $body, $headers);

  $is_ajax = (isset($_POST['kpk_ajax']) && $_POST['kpk_ajax'] === '1')
          || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');

  if ($is_ajax) {
    if ($sent) wp_send_json_success(['message' => __('Ďakujeme! Vaša správa bola odoslaná.','kpk')]);
    wp_send_json_error(['message' => __('Ups — nepodarilo sa odoslať. Skúste znova alebo nás kontaktujte telefonicky.','kpk')]);
  }

  $back = wp_get_referer() ?: home_url('/');
  wp_safe_redirect(add_query_arg('sent', $sent ? '1' : '0', $back));
  exit;
});

add_filter('wp_mail_from', function($from){
  $host = parse_url(home_url(), PHP_URL_HOST);
  return 'noreply@' . $host; // например noreply@kpkreklama.sk
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
    echo '<div class="card" style="border-left:4px solid var(--color-accent);margin:12px 0;padding:12px 16px"><strong>Ďakujeme!</strong> Vaša správa bola odoslaná.</div>';
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

// === Header / Footer / Tech icons — Customizer ===
add_action('customize_register', function($wp_customize){

  /* Header / Nav */
  $wp_customize->add_section('kpk_header', [
    'title'       => __('Header & Navigácia','kpk'),
    'priority'    => 25,
    'description' => __('Nastavenie tlačidla v hlavičke','kpk'),
  ]);
  $wp_customize->add_setting('kpk_header_cta_text', ['default'=>__('Požiadať o cenovú ponuku','kpk'), 'sanitize_callback'=>'sanitize_text_field']);
  $wp_customize->add_control('kpk_header_cta_text', ['section'=>'kpk_header','label'=>__('CTA – Text','kpk'),'type'=>'text']);
  $wp_customize->add_setting('kpk_header_cta_url',  ['default'=>'#kpk-quote', 'sanitize_callback'=>'esc_url_raw']);
  $wp_customize->add_control('kpk_header_cta_url',  ['section'=>'kpk_header','label'=>__('CTA – URL','kpk'),'type'=>'url']);

  /* Footer */
  $wp_customize->add_setting('kpk_mail_to', [
  'default' => get_option('admin_email'),
  'sanitize_callback' => 'sanitize_email'
  ]);
  $wp_customize->add_control('kpk_mail_to', [
    'section' => 'kpk_footer',
    'label'   => __('E-mail pre formuláre','kpk'),
    'type'    => 'text'
  ]);
  $wp_customize->add_section('kpk_footer', [
    'title'       => __('Footer','kpk'),
    'priority'    => 60,
    'description' => __('Rýchle kontakty a odkazy v pätičke','kpk'),
  ]);
  $wp_customize->add_setting('kpk_address', ['default'=>"Ulica 1\n040 00 Košice\nSlovensko", 'sanitize_callback'=>'wp_kses_post']);
  $wp_customize->add_control('kpk_address', ['section'=>'kpk_footer','label'=>__('Adresa (riadky)','kpk'),'type'=>'textarea']);
  $wp_customize->add_setting('kpk_phone', ['default'=>'+421 000 000 000','sanitize_callback'=>'sanitize_text_field']);
  $wp_customize->add_control('kpk_phone', ['section'=>'kpk_footer','label'=>__('Telefón','kpk'),'type'=>'text']);
  $wp_customize->add_setting('kpk_email', ['default'=>get_option('admin_email'),'sanitize_callback'=>'sanitize_email']);
  $wp_customize->add_control('kpk_email', ['section'=>'kpk_footer','label'=>__('E-mail','kpk'),'type'=>'text']);

  // Socials
  $wp_customize->add_setting('kpk_fb',['sanitize_callback'=>'esc_url_raw']); $wp_customize->add_control('kpk_fb',['section'=>'kpk_footer','label'=>'Facebook','type'=>'url']);
  $wp_customize->add_setting('kpk_ig',['sanitize_callback'=>'esc_url_raw']); $wp_customize->add_control('kpk_ig',['section'=>'kpk_footer','label'=>'Instagram','type'=>'url']);
  $wp_customize->add_setting('kpk_li',['sanitize_callback'=>'esc_url_raw']); $wp_customize->add_control('kpk_li',['section'=>'kpk_footer','label'=>'LinkedIn','type'=>'url']);

  /* Tech icons */
  $wp_customize->add_section('kpk_tech', [
    'title'       => __('Technológie – ikony','kpk'),
    'priority'    => 61,
    'description' => __('Logá strojov/materiálov do riadku v pätičke','kpk'),
  ]);
  $wp_customize->add_setting('kpk_tech_text', [
  'default' => __('Roland UV · Mimaki · Summa · Laser · Fréza · Laminácia','kpk'),
  'sanitize_callback' => 'sanitize_text_field'
]);
$wp_customize->add_control('kpk_tech_text', [
  'section' => 'kpk_tech',
  'label'   => __('Text pri ikonách','kpk'),
  'type'    => 'text'
]);
  for ($i=1; $i<=10; $i++) {
    $wp_customize->add_setting("kpk_tech_icon_$i", ['sanitize_callback'=>'esc_url_raw']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "kpk_tech_icon_{$i}", [
      'section'=>'kpk_tech',
      'label'=>sprintf(__('Ikona %d','kpk'), $i),
      'description'=>__('Odporúčané: 200×80 px, PNG/JPG s priehľadným/čer. pozadím','kpk'),
    ]));
  }
});

?>