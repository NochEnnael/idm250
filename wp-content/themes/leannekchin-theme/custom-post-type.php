<?php 



function register_project_custom_post_type(){

    $args = [
    'label' => 'Projects'

        ];

        register_post_type('projects', '$args');
    }

    add_action ('init', 'register_project_custom_post_type')

?>