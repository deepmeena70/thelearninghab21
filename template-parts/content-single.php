<div class="content">
    <div class="post-page">
        <div class="title">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
        <div>
            <div class="thumbnail" style="background-image:url(' <?php the_post_thumbnail_url();?> ')">
            </div>
        </div>
        <div class="para">
            <?php the_content(); ?>
        </div>
        <?php previous_post_link('%link', 'prev'); ?>
        <?php next_post_link('%link', 'next'); ?>
    </div>


    <?php comments_template(); ?>

</div>