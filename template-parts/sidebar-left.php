<div class="left-side">
    <div id="brand-logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                }
            ?>
        </a>
    </div>
    <div id="navigation">
    <?php 
        $args = [
            'theme_location' => 'main-menu'
        ];

        wp_nav_menu( $args ) ?>
    </div>
    <div class="left-social-icons">
        <a href="">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="">
            <i class="fab fa-google-plus"></i>
        </a>
        <a href="">
            <div class="twitter-icon">
                <i class="fab fa-twitter"></i>
            </div>
        </a>
        <a href="">
            <i class="fab fa-telegram"></i>
        </a>
        <a href="">
            <i class="fab fa-github"></i>
        </a>
    </div>
</div>