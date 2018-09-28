<?php get_header(); ?>

<div class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php while(have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/content', 'archive'); ?>
                <?php endwhile; ?>

                <?php the_posts_pagination( array(
					'prev_text' => 'Prev',
					'next_text' => 'Next',
					'screen_reader_text' => ' '
				) ); ?>
            </div><!-- / .blog-main -->

            <?php get_sidebar(); ?>
        </div><!-- / .row -->
    </main>
</div><!-- /.container -->

<?php get_footer(); ?>