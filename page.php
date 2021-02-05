<?php get_header(); ?>

<div class="page-wrapper">
    <div class="pages-container">

        <h2 class="page-title"><?php the_title() ?></h2>
        <?php if (have_posts()): while(have_posts()) : the_post();?>
            <div class="page-container">
                <div class="page-content">    
                    <?php the_content(); ?>
                </div>
            </div>    
        <?php endwhile; endif;?>
    </div>
</div>

<?php get_footer(); ?>