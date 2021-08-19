<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'baz-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'baz';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$image = get_field('zdjecie');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php

$baza = get_field('baza');
$repeaterssteps = $baza['oferty'];?>
    <div class="baza">
        <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php
            if(function_exists('bcn_display'))
            {
            bcn_display();
            }?>
            </div>
            <div class="title">
                <span class="green"><?php echo get_field('tytul_zielony') ?></span>
                <span><?php echo get_field('tytul_czarny') ?></span>

            </div>
            <?php

// check for rows (parent repeater)
if( have_rows('oferty') ): ?>
            <div class="lists">

                <?php $i = 01; ?>
                <?php

    // loop through rows (parent repeater)
    while( have_rows('oferty') ): the_row();
$image = get_sub_field('zdjecie');?> <div class="item">
                    <div>
                        <div class="count">/ <?php echo $i++; ?> /</div>
                        <span><?php the_sub_field('tytul'); ?></span>
                        <?php

                // check for rows (sub repeater)
                if( have_rows('pytania') ): ?>
                        <ul>
                            <?php

                // loop through rows (sub repeater)
                while( have_rows('pytania') ): the_row();

                    // display each item as a list - with a class of completed ( if completed )
                    ?>
                            <li>
                                <a>
                                    <p><?php the_sub_field('pytanie'); ?></p><img class=" "
                                        src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/desktop/arrowgreen.png"
                                        alt="">
                                </a>
                                <p> <?php the_sub_field('odpowiedz'); ?></p>

                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; //if( get_sub_field('pytania') ): ?>
                        <button class="cta"> <a href="<?php the_sub_field('link'); ?>">Przejdź do strony</a></button>
                    </div>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                        class="main" />
                </div>
                <?php endwhile; // while( has_sub_field('oferty') ): ?>

            </div>
        </div>
        <?php endif; // if( get_field('oferty') ): ?>



    </div>
</div>
</div>