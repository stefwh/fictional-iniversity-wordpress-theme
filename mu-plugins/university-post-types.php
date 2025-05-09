<?php

function university_post_types() {
  
  // Event Post Type

  register_post_type('event', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt',),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calendar-alt', // Icon: https://developer.wordpress.org/resource/dashicons/#calendar-alt
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event' // Label used in admin UI
    )
  ));

  // Program Post Type

  register_post_type('program', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calendar-alt', // Icon: https://developer.wordpress.org/resource/dashicons/#calendar-alt
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program' // Label used in admin UI
    ),
    'menu_icon' => 'dashicons-awards'
  ));
}

add_action('init', 'university_post_types');
