<?php

function add_thumbnail_rest_api() {
    register_rest_field( 
        'post',
        'featured_image_src',
        array(
            'get_callback'    => 'get_image_src',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'add_thumbnail_rest_api' );

function get_image_src( $object, $field_name, $request ) {
    $feat_img_array = wp_get_attachment_image_src(
        $object['featured_media'],
        'full', 
        true
    );
    return $feat_img_array[0];
}

function add_post_date_rest_api( $data, $post ) {
    $data->data['post_date'] = get_the_date( 'd/m/Y', $post->ID );

    return $data;
}

add_filter('rest_prepare_post', 'add_post_date_rest_api', 10, 3);

function add_post_excerpt_rest_api( $data ) {
    $data->data['post_excerpt'] = limit_words(get_the_excerpt(), 20);

    return $data;
}

add_filter('rest_prepare_post', 'add_post_excerpt_rest_api', 10, 3);

function add_categories_rest_api( $data ) {
    if (!empty($data->data['categories'])) {
        $cats = array();
    
        foreach($data->data['categories'] as $category_id) {
            $category = get_category($category_id);
            array_push($cats, $category->name);
        
            $data->data['child_category'] = $cats;
            
        }
    }

    return $data;
};


