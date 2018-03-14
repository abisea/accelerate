<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
    <div class="main-content" role="main">
        <div class="about-hero-container">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div><!-- .main-content -->
</div><!-- #primary -->

<section class="my-services">
    <div class="main-content" role="main">
        
            
        <?php while ( have_posts() ) : the_post(); 
        $description = get_field('description');
        $image = get_field('image');
        $size = "full"; ?>

    <div class="my-services-container">
            <h2><?php the_title(); ?></h2>
            <p><?php echo $description; ?></p>
            <?php echo $image; ?>
    </div><!-- .services-container -->

    <?php endwhile; // end of the loop. ?>

    </div><!-- .main-content -->
</section><!-- services -->

	



<?php get_footer(); ?>
