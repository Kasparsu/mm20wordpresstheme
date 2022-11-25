<?php get_header(); ?>
<div class="container">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
            <div class="card my-3">
                <?php the_post();?>
                
                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <p class="card-text"><?php the_content();?></p>
                </div>
                
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>