<?php
/**
 * Author: Alvaliving Studio
 * Plugin: Custom Branding
 * Description: Example of branding for WordPress login page.
 */

// Add custom logo styling to the login page
add_action('login_enqueue_scripts', function () {
    ?>
    <style type="text/css">
        #login h1 a {
            background-image: url('INSERT-YOUR-LOGO-PATH-HERE'); /* Replace with your logo path */
            background-size: contain;
            width: 100%;
            height: 120px;
        }
    </style>
    <?php
});

// Change login header URL to site homepage
add_filter('login_headerurl', function () {
    return home_url();
});

// Change login header text to site name
add_filter('login_headertext', function () {
    return get_bloginfo('name');
});
