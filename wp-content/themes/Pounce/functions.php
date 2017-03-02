<?php

wp_enqueue_script( 'pounce-app', get_template_directory_uri() . '/build/bundle.js', [], null, true );
wp_enqueue_style( 'pounce-app', get_template_directory_uri() . '/build/style.css', []);