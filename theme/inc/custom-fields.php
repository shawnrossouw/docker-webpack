<?php

// Add options page
if( function_exists('acf_add_options_page') ) {
  // add parent
  $parent = acf_add_options_page(array(
    'page_title' 	=> 'General',
    'menu_title' 	=> 'Content',
    'redirect' 		=> true
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'General',
    'menu_title' 	=> 'General',
    'parent_slug' 	=> $parent['menu_slug'],
  )); 

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Home',
    'menu_title' 	=> 'Home',
    'parent_slug' 	=> $parent['menu_slug'],
  ));
}