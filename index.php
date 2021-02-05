<?php get_header(); ?>

<div class="posts-container">

    <?php
        if ( have_posts()):
            // Load posts loop.
            while ( have_posts()):the_post(); ?>
                <div class="post-container" style="background-image: url(<?php the_post_thumbnail_url($size = 'thumbnail')?>)">
                    <div class="post-text-container" >
                        <h2 class="post-title"><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-content"><?php the_content(); ?></p>
                    </div>
                </div>
                

                
            <?php endwhile;
        endif;
    ?>

</div>
<?php get_footer(); ?>