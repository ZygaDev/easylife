<?php
/**
* Template Name: Kontakt
*
*/
?>

<?php get_header();


$image = get_field('zdjecie');
?>

<div class="contacts">

    <div class="container">

        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php
                if(function_exists('bcn_display'))
                {
                bcn_display();
                }?>
        </div>
        <div class="title">
            <span class="green"> <?php echo get_field('tytul_zielony'); ?></span>
            <span> <?php echo get_field('tytul_czarny'); ?></span>

        </div>
        <span> <?php echo get_field('informacje'); ?></span>



    </div>
    <div class="back">
        <img class="" src="<?php echo esc_url($image['url']); ?>" />

    </div>
</div>
<div class="person">
    <?php if( have_rows('osoba') ): ?>
    <div class="container">
        <?php while( have_rows('osoba') ): the_row();
            $images = get_sub_field('zdjecie');?>


        <div class="item">

            <img class="" src="<?php echo esc_url($images['url']); ?>" />

            <div class="info">
                <span> <?php the_sub_field('imie_i_nazwisko'); ?></span>
                <span class="green"> <?php the_sub_field('stanowisko'); ?></span>
                <p><?php the_sub_field('dane_kontaktowe'); ?></p>
            </div>
        </div>

        <?php endwhile; ?>
    </div>

    <?php endif; ?>
</div>

<?php get_footer(); ?>