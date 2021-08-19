<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'qa-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'qa';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$image = get_field('zdjecie');
?>

<div class="ask">

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
            <p>Najczęściej zadawane pytania</p>
        </div>


        <?php $i = 0; if( have_rows('pytania') ): ?>
        <ul class="texty">
            <?php while( have_rows('pytania') ): the_row();

        ?>
            <li id="ac<?php echo $i++ ?>">

                <a>
                    <?php the_sub_field('pytanie'); ?> <img class=" "
                        src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/desktop/arrowgreen.png"
                        alt="">
                </a>
                <p><?php the_sub_field('odpowiedz'); ?></p>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>

    </div>
    <div class="back">
        <img class="" src="<?php echo esc_url($image['url']); ?>" />

    </div>





</div>
</div>