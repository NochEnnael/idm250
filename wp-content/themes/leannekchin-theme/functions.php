<?php

function include_css_files(){
    wp_enqueue_style('idm250-css', '/wp-content/themes/leannekchin-theme/dist/css/style.css');
}

add_action('wp_enqueue_script', 'include_css_files');