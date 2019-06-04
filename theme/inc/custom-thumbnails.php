<?php

// custom image sizes
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'featured-4x3-xlarge', 1280, 960, true);
  add_image_size( 'featured-4x3-large', 1024, 768, true);
  add_image_size( 'featured-4x3-medium', 800, 600, true);
  add_image_size( 'featured-4x3-small', 640, 480, true);
  add_image_size( 'hero-16x10-xlarge', 1920, 1200, true);
  add_image_size( 'hero-16x10-large', 1366, 768, true);
  add_image_size( 'hero-16x10-medium', 1280, 800, true);
  add_image_size( 'hero-16x10-small', 800, 600, true);
}
add_filter('image_size_names_choose', 'image_sizes');

function image_sizes($sizes) {
  $addsizes = array(
    "hero-16x10-xlarge" => __("Hero (16:10) 1920x1200"),
    "hero-16x10-large" => __("Hero (16:10) 1366x768"),
    "hero-16x10-medium" => __("Hero (16:10) 1280x800"),
    "hero-16x10-small" => __("Hero (16:10) 800x600")
  );
  $newsizes = array_merge($sizes, $addsizes);
  return $newsizes;
}
