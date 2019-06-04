<?php
function add_styles(){
  wp_enqueue_style('main_css', get_template_directory_uri() . '/dist/css/bundle.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

function add_scripts(){
  wp_deregister_script('wp-embed.min.js');
  wp_deregister_script('wp-embed');
  wp_deregister_script('embed');
  wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '1.0.1', true);
  wp_enqueue_script('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.pkgd.min.js', array('jQuery'), '1.0.1', true);
  wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jQuery'), '1.0.1', false);
  wp_enqueue_script('hsforms', 'https://js.hsforms.net/forms/v2.js', array(), '1.0.1', false);
  wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/js/bundle.js', array('jQuery'), '1.0.1', true);
  wp_localize_script( 'bundle', 'BlogInfo', array('url' => get_bloginfo('template_directory').'/', 'site' => get_bloginfo('wpurl')));
}
add_action('wp_enqueue_scripts', 'add_scripts');

// Support for thumbnails
add_theme_support( 'post-thumbnails' );

// Register Menus
function menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'secondary-menu' => __( 'Secondary Menu' ),
      'tech-menu' => __( 'Tech Menu' ),
    )
  );
}
add_action( 'init', 'menus' );

// Add Categories to Pages
function add_taxonomies_to_pages() {
  register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_taxonomies_to_pages' );

// Responsive Image
function responsive_img($id, $size){
  $img = wp_get_attachment_image( $id, $size );
  echo preg_replace('#(width|height)="\d+"#','', $img);
}

function picture($name, $transparent = false){
  $ext = $transparent ? '.png' : '.jpg';
  echo "<picture>
      <source srcset='" . get_template_directory_uri() . "/dist/images/" . $name .".webp' type='image/webp'>
      <source srcset='" . get_template_directory_uri() . "/dist/images/" . $name . $ext ."' type='image/jpg'>
      <img src='" . get_template_directory_uri() . "/dist/images/" . $name . $ext ."'>
    </picture>";
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');