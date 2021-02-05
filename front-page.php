<?php get_header(); ?>

<div class="front-page-container">
    <!--<h1><?php the_title() ?></h1>-->

    <?php if (have_posts()): while(have_posts()) : the_post();?>

        <div class="home-post-content">
            <!-- Pull images from Home Page -->
            <div class="reel-container">
                <?php the_content(); ?>
            </div>
            <!-- Create Play buttons -->
            <div class="play-buttons-container">
                <ul class="play-buttons">
                    <li class="play-button">
                        <!-- Pull URLs from ACF value -->
                        <div onclick="shadowBox('<?php the_field(reel_one)?>')" class="play-container">
                            <i class="fa fa-play"></i>
                            <p class="play-info">General Reel</p>
                        </button>
                    </li>
                    <li class="play-button">
                        <div onclick="shadowBox('<?php the_field(reel_two)?>')" class="play-container">
                            <i class="fa fa-play"></i>
                            <p class="play-info">Environment Reel</p>
                        </div>
                    </li>
                    <li class="play-button">
                        <div onclick="shadowBox('<?php the_field(reel_three)?>')" class="play-container">
                            <i class="fa fa-play"></i>
                            <p class="play-info">Film/TV Reel Reel</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        
        
        <?php endwhile; endif;?>
        <!-- Projects Title -->
        <div class="row">
            <div class="col-lg-2 project-title-container">
                <p class="project-title">Projects</p>
            </div>
        </div>

        <!-- Projects Display -->
        <div class="pages-container">
            <?php
                $args = array(
                    'post_type' => 'page', // set the post type to page
                    'category_name' => 'art', // Define Category to display
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    ?>

                    <?php
                    while ($query->have_posts()) {
                        $query->the_post();
                        $count++;
                        ?>
                        <!-- Display Thumbnail -->
                        <div class="page-container">
                            <img class="page-img" src="<?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail_url('large');
                                } else {
                                    bloginfo('template_url');
                                    ?>/resources/assets/images/no-img-post.png <?php } ?>" alt="<?php get_the_title() ?>" style="width:100%">

                            <a href="<?php echo get_permalink() ?>" title="<?php get_the_title() ?>" class="page-title">
                                <p class="text">
                                    <?php echo wp_trim_words(get_the_title(), 60); ?>
                                </p>
                            </a>
                        </div>

                    <?php
                    }
                }
                wp_reset_postdata();
            ?>
        </div>
</div>

<?php get_footer(); ?>

