<?php

add_action('init', function () {
    register_extended_taxonomy('cuisine', 'restaurant', [
        'hierarchical' => true
    ]);
    register_extended_taxonomy('price_level', 'restaurant', [
        'hierarchical' => true
    ]);
    register_extended_taxonomy('dietary_restriction', 'restaurant', [
        'hierarchical' => true
    ]);
});
