<?php get_header(); ?>

<div class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php while(have_posts()): the_post(); ?>
                    <article>
                        <h1><?php the_title(); ?></h1>
                        <p class="blog-post-meta"><?php the_time('F j, Y'); ?>&nbsp;by&nbsp;<a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>
                        <p class="blog-post-meta">Category :&nbsp;<?php the_category(' '); ?></p>
                        <?php the_tags('<p class="blog-post-meta">Tags : ', ', ', '</p>'); ?>
                        <div class="postImgContainer">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </div>
                        <div class="singlePostContent">
                            <?php the_content(); ?>
                        </div>

                        <hr/>

                        <?php
                            if(comments_open()):
                                comments_template();
                            else:
                                echo '<h4 class="text-center">Sorry, Comments are disabled!</h4>';
                            endif;
                        ?>
                    </article>
                <?php endwhile; ?>
            </div><!-- / .blog-main -->

            <?php get_sidebar(); ?>
        </div><!-- / .row -->
    </main>
</div><!-- /.container -->

<?php get_footer(); ?>