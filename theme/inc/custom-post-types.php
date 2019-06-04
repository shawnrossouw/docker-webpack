<?php

function register_acf_block_types() {

  // register a testimonial block.
  acf_register_block_type(array(
    'name'              => 'featured_images',
    'title'             => __('Featured Images'),
    'description'       => __('Featured Images for Posts'),
    'render_template'   => 'patterns/molecules/featured-images.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'images' ),
  ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_types');
}