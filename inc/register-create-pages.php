<?php

function single_create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Informações Gerais', 
                'menu_title' => 'Informações Gerais', 
                'menu_slug'  => 'Informações Gerais', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));
    }

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Campanha', 
                'menu_title' => 'Campanha', 
                'menu_slug'  => 'Campanha', 
                'capability' => 'edit_posts', 
                //'position'   => '20,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-excerpt-view' 
        ));
    }
}
add_action( 'init', 'single_create_page' );