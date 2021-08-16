<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Include ACF API Key
 */
add_filter('acf/fields/google_map/api', function ($api) {
    $api['key'] = $_ENV['GOOGLE_MAPS_API_KEY'];
    return $api;
});
