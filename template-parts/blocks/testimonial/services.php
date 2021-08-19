<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'servs-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'servs';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$image = get_field('zdjecie');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

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
</div>