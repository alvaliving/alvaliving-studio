<?php
/**
 * Author: Alvaliving Studio
 * Plugin: SVG Upload Support
 * Description: Enables SVG file uploads in WordPress media library.
 */

// Allow SVG uploads by adding MIME type
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

// Sanitize SVG files for security
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);
