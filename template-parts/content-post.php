<div class="content">
    <div id="posts" class="posts">

        <?php while(have_posts()) : the_post(); ?>
            
            <div class="post-card">

                <div class="title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                    <a title="Read More" class="read-more" href="<?php the_permalink(); ?>">
                        <i class="fas fa-glasses"></i>
                    </a>
                    <a title="Share" class="share" href="">
                        <i class="fas fa-share-alt"></i>
                    </a>
                </div>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>

        <?php endwhile; ?>   
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<div class="load-more paginate">
    <?php echo paginate_links(); ?>
</div>
