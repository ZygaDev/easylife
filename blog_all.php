<?php
/**
* Template Name: Blog wszystkie wpisy
*
*/
?>

<?php get_header(); ?>

<div class="realizacjeblog">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php
            if(function_exists('bcn_display'))
            {
            bcn_display();
            }?>
        </div>
        <div class="title">
            <span class="green">Co wykonaliśmy</span>
            <span>Nasze realizacje</span>
        </div>
        <?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
        $i = 1;?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>

        <ul>

            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <li>

                <a href="<?php the_permalink(); ?>">
                    <div class="count">/ <?php echo $i++; ?> /</div>
                    <span><?php the_title(); ?></span>
                    <?php the_content(); ?>
                    <div id="loadMore" class="loadMore">Czytaj więcej <div class="arrow"></div>
                    </div>
                </a>
                <div class="galleryslider splide" id="galleryslider">

                    <div class="splide__track">
                        <?php

                        $images = get_field('galeria_blog');
                        ;
                        if( $images ): ?>
                        <ul class="splide__list">
                            <?php foreach( $images as $image ): ?>
                            <li class="splide__slide">

                                <img src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />


                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <?php endwhile; ?>
            <!-- end of the loop -->

        </ul>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>