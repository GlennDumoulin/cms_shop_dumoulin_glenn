<?php

function registertLocationTaxonomy() {
	$labels = array(
		'name'                       => 'Locations',
		'singular_name'              => 'Location',
		'menu_name'                  => 'Location',
		'all_items'                  => 'All Locations',
		'parent_item'                => 'Parent Location',
		'parent_item_colon'          => 'Parent Location:',
		'new_item_name'              => 'New Location Name',
		'add_new_item'               => 'Add New Location',
		'edit_item'                  => 'Edit Location',
		'update_item'                => 'Update Location',
		'view_item'                  => 'View Location',
		'separate_items_with_commas' => 'Separate locations with commas',
		'add_or_remove_items'        => 'Add or remove locations',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Locations',
		'search_items'               => 'Search Locations',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Locations',
		'items_list'                 => 'Locations list',
		'items_list_navigation'      => 'Locations list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'location', array( 'event' ), $args );
}

function registertHolidayTaxonomy() {
	$labels = array(
		'name'                       => 'Holidays',
		'singular_name'              => 'Holiday',
		'menu_name'                  => 'Holiday',
		'all_items'                  => 'All Holidays',
		'parent_item'                => 'Parent Holiday',
		'parent_item_colon'          => 'Parent Holiday:',
		'new_item_name'              => 'New Holiday Name',
		'add_new_item'               => 'Add New Holiday',
		'edit_item'                  => 'Edit Holiday',
		'update_item'                => 'Update Holiday',
		'view_item'                  => 'View Holiday',
		'separate_items_with_commas' => 'Separate holidays with commas',
		'add_or_remove_items'        => 'Add or remove holidays',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Holidays',
		'search_items'               => 'Search Holidays',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Holidays',
		'items_list'                 => 'Holidays list',
		'items_list_navigation'      => 'Holidays list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'holiday', array( 'gallery_item' ), $args );
}

add_action( 'init', 'registertLocationTaxonomy' );
add_action( 'init', 'registertHolidayTaxonomy' );