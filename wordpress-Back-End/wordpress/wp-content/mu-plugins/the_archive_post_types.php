<!--This block of code will enable WordPress to have a custom post type which will include all the parameters listed below.-->

<?php 

function the_archive_post_types()  {
    /*This small line of code is the registered Story Post Type*/
    register_post_type('story', array(
        'public' => true,
        'labels' => array(
        
            'name' => 'Stories',
            'add_new_item' => 'Add New Stories',
            'edit_item' => 'Edit Story',
            'all_items' => 'All Stories',
            'singular_name' => 'Story'
        ),
        'menu_icon' => 'dashicons-media-text'
    
    ));
    
    
    register_post_type('location', array(
        'public' => true,
        'labels' => array(
        
            'name' => 'Locations',
            'add_new_item' => 'Add New Location',
            'edit_item' => 'Edit Location',
            'all_items' => 'All Locations',
            'singular_name' => 'Location'
        ),
        'menu_icon' => 'dashicons-location-alt'
    
    ));
    
    
    
    
}
add_action('init', 'the_archive_post_types');
