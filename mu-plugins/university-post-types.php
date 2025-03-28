<?php

function university_post_types() {
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
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
}

add_action('init', 'university_post_types');
