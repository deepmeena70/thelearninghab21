<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container">
        <header>
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <div id="logo">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                    ?>
                </div>
            </a>
            
            <button id="menu-toggle-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 20">
                    <defs>
                        <style>.cls-1{fill:#EADEDA;}</style>
                    </defs>
                    <title>toggler</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <path id="line_1" class="cls-1" d="M29.1,3H.9C.4,3,0,2.31,0,1.49H0C0,.67.4,0,.9,0H29.1c.5,0,.9.67.9,1.49h0C30,2.31,29.6,3,29.1,3Z"/>
                            <path id="line_2" class="cls-1" d="M29.1,11.49H.9c-.5,0-.9-.67-.9-1.49H0c0-.82.4-1.49.9-1.49H29.1c.5,0,.9.67.9,1.49h0C30,10.82,29.6,11.49,29.1,11.49Z"/>
                            <path id="line_3" class="cls-1" d="M29.1,20H.9c-.5,0-.9-.67-.9-1.49H0C0,17.69.4,17,.9,17H29.1c.5,0,.9.67.9,1.49h0C30,19.33,29.6,20,29.1,20Z"/>
                        </g>
                    </g>
                </svg>
            </button>
        </header>