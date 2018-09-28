<div class="col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary"><?php the_category(' '); ?></strong>
            <h3 class="mb-0">
            <a class="text-dark" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="mb-1 text-muted"><?php the_time('F j, Y'); ?>&nbsp;by&nbsp;<a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></div>
            <a href="<?php echo get_permalink(); ?>">Continue reading</a>
        </div>
        <div class="feturedImgContainer">
            <img class="card-img-right flex-auto d-none d-lg-block" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap"/>
        </div>
    </div>
</div>