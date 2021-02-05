<?php
/**
* Template Name: Portfolio Blog
* Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="page-wrapper">
    <div class="pages-container">
        <h2 class="page-title"><?php the_title() ?></h2>
        <?php
            $setID = get_field('post_category'); //Get Page's ACF category
            $args = array(
                'post_type' => 'post', // set the post type to page
                'category_name' => $setID, //Restrict posts to matching category
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                ?>

                <?php
                /* Post Loop */
                while ($query->have_posts()) {
                    $query->the_post();
                    $count++;
                    ?>

                    <div class="post-container">
                        <a href="<?php echo get_permalink() ?>" title="<?php get_the_title() ?>" class="post-title">
                            <p class="text">
                                <?php echo wp_trim_words(get_the_title(), 60); ?>
                            </p>
                        </a>
                        <div class="post-date"><?php echo get_the_date('l, M d, Y - g:i a'); ?></div> 
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>

                <?php
                }
            }
            wp_reset_postdata();
        ?>
    </div>
</div>
<?php get_footer(); ?>