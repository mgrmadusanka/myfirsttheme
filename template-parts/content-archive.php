<div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php the_time('F j, Y'); ?>&nbsp;by&nbsp;<a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>
    <div class="postArchiveEx">
        <div class="postArchiveLeft">
            <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="postArchiveRight">
            <?php the_excerpt(); ?>
        </div>
    </div>
    <hr/>
</div><!-- /.blog-post -->