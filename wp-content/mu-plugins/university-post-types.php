<?php

function university_post_types(){
    // Event Post Type
        register_post_type('event', array(
            'show_in_rest' => true,
            'capability_type' => 'event',
            'map_meta_cap' => true,
            'supports' => array('title', 'editor', 'excerpt'),
            'rewrite' => array(
                'slug' => 'events'
            ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singlular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // Program Post Type
        register_post_type('program', array(
            'show_in_rest' => true,
            'supports' => array('title'),
            'rewrite' => array(
                'slug' => 'programs'
            ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Add New Program',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singlular_name' => 'Program'
            ),
            'menu_icon' => 'dashicons-awards'
        ));

        // Professor Post Type
        register_post_type('professor', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array(
                'slug' => 'professors'
            ),
            'public' => true,
            'labels' => array(
                'name' => 'Professors',
                'add_new_item' => 'Add New Professor',
                'edit_item' => 'Edit Professor',
                'all_items' => 'All Professors',
                'singlular_name' => 'Professor'
            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));

        // HomepageSlideshow Post Type
        register_post_type('homepageSlideshow', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'rewrite' => array(
                'slug' => 'HomepageSlideshows'
            ),
            'public' => true,
            'labels' => array(
                'name' => 'HomepageSlideshows',
                'add_new_item' => 'Add New HomepageSlideshow',
                'edit_item' => 'Edit HomepageSlideshow',
                'all_items' => 'All HomepageSlideshows',
                'singlular_name' => 'HomepageSlideshow'
            ),
            'menu_icon' => 'dashicons-slides'
        ));

        // Note Post Type
        register_post_type('note', array(
            'capability_type' => 'note',
            'map_meta_cap' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'show_ui' => true,
            'public' => false,
            'labels' => array(
                'name' => 'Notes',
                'add_new_item' => 'Add New Note',
                'edit_item' => 'Edit Note',
                'all_items' => 'All Notes',
                'singlular_name' => 'Note'
            ),
            'menu_icon' => 'dashicons-welcome-write-blog'
        ));

        // Note Post Type
        register_post_type('like', array(
            'supports' => array('title'),
            'show_ui' => true,
            'public' => false,
            'labels' => array(
                'name' => 'Likes',
                'add_new_item' => 'Add New Like',
                'edit_item' => 'Edit Like',
                'all_items' => 'All Likes',
                'singlular_name' => 'Like'
            ),
            'menu_icon' => 'dashicons-heart'
        ));


        
    }

    add_action('init', 'university_post_types');

?>