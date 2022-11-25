<?php get_header(); ?>
<div class="container">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
            
        <?php the_post();?>
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?php the_content();?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>