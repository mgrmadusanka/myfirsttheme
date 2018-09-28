<?php 
/* 
    Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div class="container">
    <?php $latestBlogPost = new WP_Query('type=post&posts_per_page=1'); ?>
    <?php while( $latestBlogPost -> have_posts()): $latestBlogPost -> the_post(); ?>
        <div class="jumbotron p-3 p-md-5 text-white rounded" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
            <div class="col-md-6 px-0">
                <h1 class="display-4"><?php the_title(); ?></h1>
                <p class="lead my-3"><?php the_excerpt(); ?></p>
                <p class="lead mb-0"><a href="<?php echo get_permalink(); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <div class="row mb-2">
        <?php $categories = get_categories(); ?>
        <?php foreach($categories as $category): ?>
            <?php $latestBlogPostInCat = new WP_Query(array(
                'type' => 'post',
                'posts_per_page' => 1,
                'offset' => 1,
                'category__in' => $category -> term_id
            )); ?>
                <?php while($latestBlogPostInCat -> have_posts()): $latestBlogPostInCat -> the_post(); ?>
                    <?php get_template_part('template-parts/content', 'featured'); ?>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endforeach; ?>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 border-bottom">Awesome Blog Posts</h3>

                <?php $latestBlogPosts = new WP_Query('type=post&posts_per_page=3&offset=1'); ?>
                    <?php while( $latestBlogPosts -> have_posts()): $latestBlogPosts -> the_post(); ?>
                        <?php get_template_part('template-parts/content', '') ?>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <a href="<?php echo bloginfo('url') . '/blog/'; ?>" class="btn btn-secondary" style="margin-bottom: 50px;">See All Posts</a>
            </div><!-- / .blog-main -->

            <?php get_sidebar(); ?>
        </div><!-- / .row -->
    </main>
</div><!-- /.container -->

<?php get_footer(); ?>