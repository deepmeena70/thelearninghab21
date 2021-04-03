<?php if( have_comments() ) : ?>
    <div class="comment-container">
        <span class="total-comments">
        <h1> 
            <sup><small><i class="fas fa-quote-left"></i></small></sup> <?php esc_html_e(get_comments_number( )); ?> Comments <sup><small><i class="fas fa-quote-right"></i></small></sup> 
        </h1>
        </span>
        
        <?php 
            $args = [
                'avatar_size' => 40
            ];       

            wp_list_comments($args); 
        ?>
    </div>

<?php endif; ?>

<?php if(comments_open()) : ?>

    <?php 
        comment_form();    
    ?>

<?php endif; ?>
