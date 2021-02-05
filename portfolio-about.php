<?php
/**
* Template Name: Portfolio About
* Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="about-wrapper">
    <div class="about-container">

        <h2 class="about-title">About Me</h2>

        <?php if (have_posts()): while(have_posts()) : the_post();?>
        <div class="about-content-container">
            <div class="about-content">    
                <?php the_content(); ?>
            </div>
        </div>    

        <?php endwhile; endif;?>
    </div>
</div>

<?php get_footer(); ?>