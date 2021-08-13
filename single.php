<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area posts">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class="info">
                <div class="title">
                    <span><?php single_post_title(   ); ?></span>
                </div>


                <?php the_content(); ?>
            </div>

            <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
            ?>

            <?php

        // End the loop.
        endwhile; $image = get_field('zdjecie_glowne');
        ?>
        </div>
        <div class="back">
            <img class="" src="<?php echo esc_url($image['url']); ?>" />

        </div>
</div>
<div class="extra">
    <div class="galleryslider splide" id="galleryslider">

        <div class="splide__track">
            <?php

                $images = get_field('galeria_blog');

                if( $images ): ?>
            <ul class="splide__list">
                <?php foreach( $images as $image ): ?>
                <li class="splide__slide">

                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />


                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="texty"><?php echo get_field('tekst_glowny');?></div>
</div>


</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>