<?php

add_action('init', function () {
    register_extended_post_type(
        'restaurant',
        [
            'admin_cols' => [
                'cuisine' => [
                    'title' => 'Cuisine',
                    'taxonomy' => 'cuisine'
                ],
                'address' => [
                    'title'    => 'Address',
                    'function' => function () {
                        echo get_field('address');
                    },
                ],
                'featured_image' => [
                    'title'          => 'Featured Image',
                    'featured_image' => 'thumbnail',
                    'width'          => 60,
                    'height'         => 60,
                ],
                'publish_date' => [
                    'title'      => 'Publish Date',
                    'post_field' => 'post_date',
                    'date_format' => 'd M',
                ],
            ],
            'admin_filters' => [
                'cuisine' => [
                    'title'    => 'Cuisine',
                    'taxonomy' => 'cuisine',
                ],
                'address' => [
                    'title'           => 'Address',
                    'meta_search_key' => 'address',
                ],
            ],
        ],
        [
            'singular' => 'Restaurant',
            'plural'   => 'Restaurants',
        ],
    );
});
