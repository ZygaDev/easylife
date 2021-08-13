<?php
/**
* Template Name: Services
*
*/
?>

<?php get_header();


$image = get_field('zdjecie');
?>

<div class="services">

    <div class="container">



        <?php if( have_rows('uslugi') ): ?>
        <ul class="texty">
            <?php while( have_rows('uslugi') ): the_row();

        ?>
            <li>

                <a href="<?php the_sub_field('link'); ?>">
                    <p><?php the_sub_field('tekst'); ?></p>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>

    </div>
    <div class="back">
        <img class="" src="<?php echo esc_url($image['url']); ?>" />

    </div>





</div>
<?php get_footer(); ?>