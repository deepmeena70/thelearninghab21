<?php 
       //Add Theme support
       add_theme_support( 'title-tag' );
       add_theme_support( 'post-thumbnails' );
       add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
       add_theme_support( 'html5' );
       add_theme_support( 'automatic-feed-links' );
       add_theme_support( 'custom-background' );
       add_theme_support('custom-header');
       add_theme_support('custom-logo');
       add_theme_support( 'customize-selective-refresh-widgets' );
       add_theme_support('starter-content');

    // register styles
    function tlh_register_styles(){
        wp_enqueue_style('fontawesome', get_template_directory_uri() . "/assets/fontawesome/fontawesome.min.css");
        wp_enqueue_style('fontawesome-all', get_template_directory_uri() . "/assets/fontawesome/all.min.css");
        wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css");
        wp_enqueue_style('small-desktop', get_template_directory_uri() . "/assets/css/small_desktop.style.css",array(), 1.0,'screen and (max-width: 1359px)');
        wp_enqueue_style('tablets', get_template_directory_uri() . "/assets/css/tablets.style.css", array(), 1.0,'screen and (max-width: 949px)');
        wp_enqueue_style('mobile', get_template_directory_uri() . "/assets/css/mobile.style.css", array(), 1.0,'screen and (max-width:499px)');
    }

    add_action('wp_enqueue_scripts', 'tlh_register_styles');

    // register scripts
    function tlh_register_scripts() {
        wp_enqueue_script('gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js", array(), 1.0, true );
        wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", array(), 1.0, true);
    }

    add_action('wp_enqueue_scripts', 'tlh_register_scripts');

    //register menus
    register_nav_menus( [
        'main-menu' => esc_html__('Main Menu', 'tlh')
    ] );

    // Setup Widget Area

    function tlh_widgets_init() {
        $args = [
            'name'          => esc_html__('Main Sidebar', 'tlh'),
            'id'            => 'main_sidebar',
            'description'   => esc_html__('Add widgets for main sidebar here', 'tlh'),
            'before_widget' => '<section>',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget_title">',
            'after_title'   => '</h2>',
        ];
        register_sidebar( $args );
    }
    add_action('widgets_init', 'tlh_widgets_init');

    //post excerpt limit
    function tlh_post_excerpt_length(){
        return 30;
    }
    add_filter('excerpt_length', 'tlh_post_excerpt_length');


    function previous_post_link_attributes($output) {
        $code = 'class="prev"';
        return str_replace('<a href=', '<a '.$code.' href=', $output);
    }
    function next_post_link_attributes($output) {
        $code = 'class="next"';
        return str_replace('<a href=', '<a '.$code.' href=', $output);
    }
    
    add_filter('previous_post_link', 'previous_post_link_attributes');
    add_filter('next_post_link', 'next_post_link_attributes');





?>