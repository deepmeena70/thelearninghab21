<?php get_header(); ?>
    
        <?php get_template_part('template-parts/sidebar', 'left') ?>

        <?php if( have_posts() ) : ?>
            <?php get_template_part('template-parts/content', 'post') ?>
        <?php else : ?>
            <h1>Content Not Found</h1>
        <?php endif; ?>
        
        <?php get_sidebar(); ?>
        

<?php get_footer(); ?>