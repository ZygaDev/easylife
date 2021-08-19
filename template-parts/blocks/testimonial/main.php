<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'Main-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'Main';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php
$hero = get_field('pierwsza_sekcja');
if( $hero ): ?>




    <div class="hero">
        <div class="container main">
            <span class="green">
                <?php echo esc_attr( $hero['tytul_zielony'] ); ?>
                <br>
            </span>
            <span>
                <?php echo esc_attr( $hero['tytul_czarny'] ); ?>
            </span>
            <div class="cta-hero">
                <button class="cta"> <?php echo esc_attr( $hero['przycisk_zielony'] ); ?>
                </button>
                <button class="video">
                    <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px"
                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path class="stroke-solid" fill="none" stroke="#444444" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                        <path class="icon" fill="#6fbc25"
                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                    </svg>
                    <span> <?php echo esc_attr( $hero['material_wideo'] ); ?>
                    </span>
                </button>
            </div>
        </div>
        <div class="back">
            <img class="desktop" src="<?php echo esc_url( $hero['zdjecie']['url'] ); ?>"
                alt="<?php echo esc_attr( $hero['zdjecie']['alt'] ); ?>" />
            <img class="mobile" src="<?php echo esc_url( $hero['zdjecie_mobile']['url'] ); ?>"
                alt="<?php echo esc_attr( $hero['zdjecie_mobile']['alt'] ); ?>" />
        </div>
        <div class="desc">

        </div><?php endif; ?>

    </div>


    <?php
    $second = get_field('druga_sekcja');
    if( $second ): ?>
    <div class="who_we">
        <div class="image"><img src="<?php echo esc_url( $second['zdjecie']['url'] ); ?>"
                alt="<?php echo esc_attr( $second['zdjecie']['alt'] ); ?>" /></div>
        <div class="description">
            <div class="container">
                <span class="green"><?php echo esc_attr( $second['tytul_zielony'] ); ?> </span>
                <span><?php echo esc_attr( $second['tytul_czarny'] ); ?> </span>
                <p><?php echo esc_attr( $second['opis'] ); ?>
                </p>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php
    $number = get_field('sekcja_liczby');
    if( $number ): ?>

    <div class="numbers" id="numbers">
        <div class="container">
            <div class="item-animate">
                <span data-count="<?php echo esc_attr( $number['pierwsza_liczba'] ); ?>" class="num num-1">0 </span>
                <span><?php echo esc_attr( $number['pierwszy_tytul'] ); ?></span>
            </div>
            <div class="item-animate">
                <span data-count="<?php echo esc_attr( $number['druga_liczba'] ); ?>" class="num num-2">0 </span>
                <span><?php echo esc_attr( $number['drugi_tytul'] ); ?></span>
            </div>
            <div class="item-animate">
                <span data-count="<?php echo esc_attr( $number['trzecia_liczba'] ); ?>" class="num num-3">0 </span>
                <span><?php echo esc_attr( $number['trzeci_tytul'] ); ?></span>
            </div>
        </div>
    </div>
    <?php endif;

$group = get_field('sekcja_trzecia');
$repeaters = $group['kafelki'];
  if( $group ): ?>
    <div class="why_us">


        <div class="container">
            <img src="<?php echo esc_url( $group['zdjecie']['url'] ); ?>"
                alt="<?php echo esc_attr( $group['zdjecie']['alt'] ); ?>" />
            <div class="box">
                <div class="title">
                    <span class="green"><?php echo esc_attr( $group['tytul_zielony'] ); ?></span>
                    <span><?php echo esc_attr( $group['tytul_czarny'] ); ?></span>
                </div>
                <div class="square">
                    <?php

                $i = 0;
                foreach($repeaters as $repeater) {
                ?> <div class="sqr sqr<?php echo $i++ ?>">
                        <div class="icon"><img src="<?php echo esc_url( $repeater['ikona']['url'] ); ?>"
                                alt="<?php echo esc_attr( $repeater['ikona']['alt'] ); ?>" /></div>
                        <div class="txt"><?php echo $repeater["tekst"] ?></div>
                    </div>
                    <?php }

                ?>
                </div>
            </div>

        </div>

    </div>
    <?php endif;
$offer = get_field('sekcja_czwarta');
$images = $offer['slider'];
if( $offer ): ?>
    <div class="our_offer">

        <div class="title">
            <div class="container">


                <span class="green"><?php echo esc_attr( $offer['tytul_zielony'] ); ?></span>
                <span><?php echo esc_attr( $offer['tytul_czarny'] ); ?></span>

                <p><?php echo esc_attr( $offer['opis'] ); ?>
                </p>

                <a href="/nasze-uslugi"> <button class="cta"><?php echo esc_attr( $offer['przycisk'] ); ?></button></a>
            </div>
        </div>

        <div id="splide2" class="splide">
            <div class="splide__track">

                <?php

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

    </div>
    <?php endif; ?>
    <?php
$collab = get_field('sekcja_piata');
$images = $collab['slider'];
if( $collab ):
?>
    <div class="collab">
        <div class="container">
            <div class="title">
                <span class="green"><?php echo esc_attr( $collab['tytul_zielony'] ); ?></span>
                <span><?php echo esc_attr( $collab['tytul_czarny'] ); ?></span>

                <p><?php echo esc_attr( $collab['opis'] ); ?>
                </p>
            </div>
            <div class="images">
                <div id="splide" class="splide">
                    <div class="splide__track">

                        <?php

                if( $images ): ?>
                        <ul class="splide__list">
                            <?php foreach( $images as $image ): ?>
                            <li class="splide__slide">
                                <div class="box">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />

                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </div>
                </div>

            </div>

            <div id="loadMore" class="loadMore">Pokaż więcej <div class="arrow"></div>
            </div>
            <div id="showLess" class="showLess">Pokaż mniej <div class="arrow"></div>
            </div>

        </div>
    </div>
    <!-- </div> --> <?php endif; ?>
    <?php

$feed = get_field('sekcja_szosta');
$repeatersfeed = $feed['opinie'];?>
    <?php

if( $feed ): ?>
    <div class="feed">
        <div class="container">
            <div class="title">
                <span class="green"><?php echo $feed["tytul_zielony"] ?></span>
                <span><?php echo $feed["tytul_czarny"] ?></span>

            </div>
            <div class="feedslide">

                <div id="splide3" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php


                            foreach($repeatersfeed as $repeaterfeed) {
                            ?> <li class="splide__slide">
                                <div class="box">
                                    <div class="avatar">
                                        <img src="<?php echo esc_url( $repeaterfeed['klient_avatar']['url'] ); ?>"
                                            alt="<?php echo esc_attr( $repeaterfeed['klient_avatar']['alt'] ); ?>" />
                                    </div>
                                    <div class="quote">
                                        <img class=" "
                                            src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/ios-quote.svg"
                                            alt="slider offer">
                                    </div>
                                    <p class="txt"><?php echo $repeaterfeed["klient_opinia"] ?>
                                    </p>
                                    <p class="nick"><?php echo $repeaterfeed["klient_podpis"] ?></p>
                            </li>
                            <?php }

                            ?>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <?php endif; ?>
    <?php

$steps = get_field('sekcja_siodma');
$repeaterssteps = $steps['etapy'];?>
    <?php

if( $steps ): ?>
    <div class="steps">

        <div class="container">
            <div class="image">
                <img src="<?php echo esc_url( $steps['zdjecie_1']['url'] ); ?>"
                    alt="<?php echo esc_attr( $steps['zdjecie_1']['alt'] ); ?>" />
                <img src="<?php echo esc_url( $steps['zdjecie_2']['url'] ); ?>"
                    alt="<?php echo esc_attr( $steps['zdjecie_2']['alt'] ); ?>" />
            </div>
            <div class="step">
                <div class="container-title">
                    <div class=""></div>
                    <div class="title">
                        <span class="green"><?php echo $steps["zielony_tytul"] ?></span>
                        <span><?php echo $steps["czarny_tytul"] ?></span>

                    </div>
                </div>
                <div class="timeline">
                    <?php

$i=01;
foreach($repeaterssteps as $repeaterstep) {
?>

                    <div class="timeline-container ">
                        <div class="timeline-icon"><span>0<?php echo $i++ ?></q></span>
                            <img src="<?php echo esc_url( $repeaterstep['ikona']['url'] ); ?>"
                                alt="<?php echo esc_attr( $repeaterstep['ikona']['alt'] ); ?>" />
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title"><span class="badge"><?php echo $repeaterstep["tytul"] ?></span>
                            </h4>
                            <p><?php echo $repeaterstep["opis"] ?> </p>

                        </div>
                    </div>
                    <?php }

?>

                    <button class="cta"><?php echo $steps["przycisk"] ?></button>

                </div>
            </div>
        </div>
    </div>
</div><?php endif; ?>
<?php

$gallery = get_field('sekcja_osma');
$images = $gallery['galeria'];?>
<?php

if( $gallery ): ?>
<div class="gallery">
    <div class="container">
        <div class="title">
            <span class="green"><?php echo $gallery["zielony_tytul"] ?></span>
            <span><?php echo $gallery["czarny_tytul"] ?></span>

        </div>
        <div class="container">
            <?php

if( $images ):
            $a = 01;?>
            <?php foreach( $images as $image ):

$content = '  <div class="gallery-img item-'. $a++ .'">';
            $content .= ' <a class="gallery_image" href=" '.$image['url'].' "> ';
                $content .= ' <img src="'.$image['url'].' " alt="'. $image['alt'].'" />';
                $content .= ' </a>';
            $content .= ' </div>';
        if ( function_exists('slb_activate') ){
        $content = slb_activate($content);
        }

        echo $content;
        ?>
            <?php endforeach; ?>

            <?php endif; ?>

        </div>

        <div id="loadMore2" class="loadMore"><a href="/wszystkie-realizacje/"><span>Pokaż więcej </span>
                <div class="arrow">
                </div>
            </a>

        </div>

    </div>
</div><?php endif; ?>
<?php

$money = get_field('sekcja_dziewiata');
$images = $money['zdjecie'];
?><?php

if( $money ): ?>
<div class="money">

    <div class="container">
        <img src="<?php echo esc_url($images['url']); ?>" alt="<?php echo esc_attr($images['alt']); ?>" />
        <div class="title">
            <span class="green"><?php echo $money["zielony_tytul"] ?></span>
            <span><?php echo $money["czarny_tytul"] ?></span>


            <p><?php echo $money["opis"] ?></p>
            <button class="cta"><?php echo $money["przycisk"] ?></button>
        </div>
    </div>
</div>

</div><?php endif; ?> </div>