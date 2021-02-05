<?php
/**
* Template Name: Portfolio Contact
* Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="contact-wrapper">
    <div class="contact-container">

        <h2 class="contact-title">Contact | Resume</h2>

        <?php if (have_posts()): while(have_posts()) : the_post();?>
        <div class="contact-content-container">
            <div class="contact-content">    
                <?php the_content(); ?>
            </div>
        </div>    

        <?php endwhile; endif;?>
    </div>
</div>

<?php get_footer(); ?>