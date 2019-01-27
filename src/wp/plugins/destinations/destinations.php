<?php

/*
* @package destinations
*/

/*
Plugin Name: TravisLi Destinations
Plugin URI: https://travisli.com/
Description: The management of "destinations", this plugin registers the 'destination' custom post type. It also exposes the destination's extended custom meta properties to the WordPress API.
Version: 1.0.0
Author: Steve Berry - steveberry@travisli.com
Author URI: https://travisli.com/
License: GPLv2 or later
Text Domain: destinations
*/

/*
This program is NOT free software; you can NOT redistribute it and/or modify it under the digital software intelectual propety terms of the TravisLi Luxury Travels, LLC. as published by TravisLi Luxury Travels, LLC.; either version 2 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY ANY WARRANTY of FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the digital software intelectual propety terms of the Romeo Power Systems, LLC. along with this program; if not, write to TravisLi Luxury Travels, LLC. 4380 Ayers Ave, Vernon, CA 90058, USA. Copyright 2005-2018 TravisLi Luxury Travels, LLC.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

// -------------------------------------------
// CUSTOM POST TYPE: "Destination"
// TThe registration of the custom post type "Destinations".
// -------------------------------------------
add_action( 'init', 'destination_cpt' );

function destination_cpt() {

  // VARIABLE: LABELS = ARRAY
  $destination_labels = array(
    'name' => 'Destinations',
    'singular_name' => 'Destination',
    'add_new' => 'Add Destination',
    'all_items' => 'All Destinations',
    'add_new_item' => 'Add Destination',
    'edit_item' => 'Edit Destination',
    'new_item' => 'New Destination',
    'view_item' => 'View Destination',
    'search_item' => 'Search Destinations',
    'not_found' => 'No Destinations Found',
    'not_found_in_trash' => 'No Destinations Found In Trash',
    'parent_item_colon' => 'Primary Destination',
    'menu_name' => 'Destinations'
  );

  // VARIABLE: ARGS = ARRAY
  $destination_args = array(
    'labels' => $destination_labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array( 'slug', 'guest' ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'author',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'custom-fields',
      'comments'
    ),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  // HOOK
  register_post_type( 'destinations', $destination_args );

  // FLUSH REWRITE.
  flush_rewrite_rules();

}



// -------------------------------------------
// EXTEND CUSTOM META
// The extended custom meta of the 'destinations' custom post type exposed in the WP API.
// -------------------------------------------
add_action( 'rest_api_init', 'register_destination_meta' );

function register_destination_meta() {

    $object_type = 'post';

		// BLANK
		$args_blank = array(
      'type' => 'string',
      'description' => 'blank',
      'single' => true,
      'show_in_rest' => true,
    );
		register_meta( $object_type, 'blank', $args_blank );

}
