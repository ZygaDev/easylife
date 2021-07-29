<?php/**
* Template Name: Main
*
*/
?>
<?php get_header(); ?>
<?php
$hero = get_field('pierwsza_sekcja');
if( $hero ): ?>




<div class="hero">
    <div class="back"><img src="<?php echo esc_url( $hero['zdjecie']['url'] ); ?>"
            alt="<?php echo esc_attr( $hero['zdjecie']['alt'] ); ?>" />
    </div>
    <div class="container">
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
            <div class="video">
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
            </div>
        </div>
    </div><?php endif; ?>
    <?php
    $phone = get_field('telefon');
    if( $phone ): ?>
    <div class="phone">
        <div class="green"></div>
        <div class="white">
            <div class="call"> <?php echo esc_attr( $phone['numer'] ); ?></div>
            <div class="btn"> <?php echo esc_attr( $phone['przycisk_tekst'] ); ?></div>
        </div>
    </div>
    <?php endif; ?>
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
$repeaters = $group['kafelki'];?>
<div class="why_us">


    <div class="container">
        <img src="<?php echo esc_url( $group['zdjecie']['url'] ); ?>"
            alt="<?php echo esc_attr( $group['zdjecie']['alt'] ); ?>" />
        <div class="title">
            <span class="green"><?php echo esc_attr( $group['tytul_zielony'] ); ?></span>
            <span><?php echo esc_attr( $group['tytul_czarny'] ); ?></span>
        </div>
        <div class="square">
            <?php


foreach($repeaters as $repeater) {
   ?> <div class="sqr ">
                <div class="icon"><img src="<?php echo esc_url( $repeater['ikona']['url'] ); ?>"
                        alt="<?php echo esc_attr( $repeater['ikona']['alt'] ); ?>" /></div>
                <div class="txt"><?php echo $repeater["tekst"] ?></div>
            </div>
            <?php }

?>
        </div>
    </div>

</div>
<?php
$offer = get_field('sekcja_czwarta');
$images = $offer['slider'];
?>
<div class="our_offer">
    <div class="container">
        <div class="title">
            <span class="green"><?php echo esc_attr( $offer['tytul_zielony'] ); ?></span>
            <span><?php echo esc_attr( $offer['tytul_czarny'] ); ?></span>

            <p><?php echo esc_attr( $offer['opis'] ); ?>
            </p>

            <a href="/nasze-uslugi"> <button class="cta"><?php echo esc_attr( $offer['przycisk'] ); ?></button></a>
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
</div>
<?php
$collab = get_field('sekcja_piata');
$images = $collab['slider'];
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
</div>
<?php

$feed = get_field('sekcja_szosta');
$repeatersfeed = $feed['opinie'];?>
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
</div>
<?php

$steps = get_field('sekcja_siodma');
$repeaterssteps = $steps['etapy'];?>
<div class="steps">
    <div class="container-title">
        <div class=""></div>
        <div class="title">
            <span class="green"><?php echo $steps["zielony_tytul"] ?></span>
            <span><?php echo $steps["czarny_tytul"] ?></span>

        </div>
    </div>
    <div class="container">
        <div class="image">
            <img src="<?php echo esc_url( $steps['zdjecie_1']['url'] ); ?>"
                alt="<?php echo esc_attr( $steps['zdjecie_1']['alt'] ); ?>" />
            <img src="<?php echo esc_url( $steps['zdjecie_2']['url'] ); ?>"
                alt="<?php echo esc_attr( $steps['zdjecie_2']['alt'] ); ?>" />
        </div>
        <div class="step">

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
                        <h4 class="timeline-title"><span class="badge"><?php echo $repeaterstep["tytul"] ?></span></h4>
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
</div>
<div class="gallery">
    <div class="container">
        <div class="title">
            <span class="green">Galeria</span>
            <span>Przykładowe realizacje</span>

        </div>
        <div class="container">
            <div class="gallery-img item-1">
                <img class=" "
                    src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/NoPath — kopia (18).png"
                    alt="slider offer">
            </div>
            <div class="gallery-img item-2">
                <img class=" "
                    src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/NoPath — kopia (12).png"
                    alt="slider offer">
            </div>
            <div class="gallery-img item-3">
                <img class=" "
                    src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/NoPath — kopia (14).png"
                    alt="slider offer">
            </div>
            <div class="gallery-img item-4">
                <img class=" "
                    src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/NoPath — kopia (13).png"
                    alt="slider offer">
            </div>
            <div class="gallery-img item-5">
                <img class=" "
                    src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/NoPath — kopia (21).png"
                    alt="slider offer">
            </div>
            <div class="gallery-img item-6">
                <img class=" "
                    src="<?php bloginfo('template_directory'); ?>/dist/images/homepage/mobile/NoPath — kopia (23).png"
                    alt="slider offer">
            </div>
        </div>

        <div id="loadMore2" class="loadMore"><a href="/realizacje">Pokaż więcej <div class="arrow">
                </div></a>

        </div>

    </div>
</div>
<div class="money">
    <div class="container">
        <div class="title">
            <span class="green">Pomoc</span>
            <span>Potrzebujesz dofinansowania?</span>


            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi minus ducimus enim iure numquam vitae,
                tempora
                fugiat reprehenderit? Saepe minus eaque blanditiis illo numquam dolore nisi sequi quas perferendis
                totam?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti odio, excepturi possimus
                sapiente
                voluptatibus. Corrupti quae temporibus sequi quasi omnis eaque? Error praesentium repellendus, at
                ipsa
                quidem doloribus enim!</p>
            <button class="cta">Więcej informacji</button>
        </div>
    </div>
</div>


<?php get_footer(); ?>