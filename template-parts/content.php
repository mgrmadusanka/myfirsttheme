<div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php the_time('F j, Y'); ?>&nbsp;by&nbsp;<a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>
    <div class="postImgContainer">
        <?php the_post_thumbnail('medium_large'); ?>
    </div>
    <?php the_excerpt(); ?>
    <hr/>
</div><!-- /.blog-post -->