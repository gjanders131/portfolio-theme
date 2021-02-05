<?php get_header(); ?>

<div class="page-wrapper">
    <div class="pages-container">

        <h2 class="page-title"><?php the_title() ?></h2>
        <?php if (have_posts()): while(have_posts()) : the_post();?>
            <div class="post-container">
            <div class="post-date"><?php echo get_the_date('l, M d, Y - g:i a'); ?></div> 
                <div class="post-content">    
                    <?php the_content(); ?>
                </div>
            </div>    
        <?php endwhile; endif;?>
    </div>
</div>

<?php get_footer(); ?>