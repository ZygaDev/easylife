<?php
/**
* Template Name: poszczególna usługa
*
*/
?>

<?php get_header(); ?>
<?php
$hero = get_field('sekcja_pierwsza');
if( $hero ): ?>
<div class="fotowoltaika-main">
    <div class="back">


        <img src="<?php echo esc_url( $hero['zdjecie_glowne']['url'] ); ?>" />


    </div>
    <div class="container">
        <div class="txt">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php
                if(function_exists('bcn_display'))
                {
                bcn_display();
                }?>
            </div>
            <span class="green">
                <?php echo esc_attr( $hero['tytul_zielony'] ); ?>
            </span>
            <span>
                <?php echo esc_attr( $hero['tytul_czarny'] ); ?>
            </span>
            <p> <?php echo esc_attr( $hero['opis'] ); ?></p>
            <div class="cta">Więcej o ofercie</div>
        </div>
    </div>

</div>
<?php endif; ?>

<div class="fotowoltaika">
    <div class="container">
        <?php
$function = get_field('sekcja_druga');
$repeat = $function['funkcjonalnosci'];
if( $function ): ?>
        <div class="function">

            <?php

            foreach($repeat as $newrep) {
          ?>
            <div class="accordion">
                <img src="<?php echo esc_url( $newrep['zdjecie']['url'] ); ?>"
                    alt="<?php echo esc_attr( $newrep['zdjecie']['alt'] ); ?>" />
                <span><?php echo $newrep["tytul"] ?></span>

                <p class="visible"> <?php echo $newrep["opis"] ?> </p>


                <div class="accord" id="accordion">
                    <h3>
                        <div class=" shw">Czytaj więcej <div class="arrow"></div>
                        </div>
                        <!-- <div id="showLess" class="showLess shw">Pokaż mniej <div class="arrow"></div>
                        </div> -->
                    </h3>
                    <div> <?php echo $newrep["opis_extra"] ?></div>
                </div>

            </div>



            <?php }?>

        </div>
        <?php endif; ?>
        <?php
$benefits = get_field('sekcja_trzecia');
$adds = $benefits['korzysci'];
if( $benefits ): ?>
        <div class="benefits">
            <div class="title"> <?php echo $benefits["korzysci_tytul"] ?></div>
            <div class="extra">
                <?php

            foreach($adds as $extra) {
            ?>
                <div class="">
                    <div class="icon"> <img class="logo"
                            src="<?php bloginfo('template_directory'); ?>/dist/images/fotowoltaika/greenbox.png"
                            alt="logo">
                    </div>
                    <span><?php echo $extra["tytul"] ?></span>
                </div>

                <?php }?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php
$calculator = get_field('sekcja_czwarta');
$results = $calculator['wyniki'];
$summary = $calculator['podsumowanie'];
if( $calculator ): ?>
    <div class="calculator">
        <div class="container">
            <div class="calc-main">
                <div class="title">
                    <span class="green">
                        <?php echo $calculator["kalkulator_zielony_tytul"] ?>
                    </span>
                    <span>
                        <?php echo $calculator["kalkulator_czarny_tytul_"] ?>
                    </span>
                    <p><?php echo $calculator["kalkulator_opis"] ?></p>
                    <p><?php echo $calculator["tytul_suwak"] ?></p>
                </div>
                <div class="calc">
                    <div id="wrapper">
                        <div id="sliderContainer">
                            <div class="tick-slider">
                                <div class="tick-slider-header">

                                </div>
                                <div class="tick-slider-value-container">
                                    <div id="weightLabelMin" class="tick-slider-label">
                                        <?php echo $calculator["suwak_od"] ?>zł</div>
                                    <div id="weightLabelMax" class="tick-slider-label">
                                        <?php echo $calculator["suwak_do"] ?>zł</div>

                                </div>
                                <div class="tick-slider-background"></div>
                                <div id="weightProgress" class="tick-slider-progress"></div>
                                <div id="weightTicks" class="tick-slider-tick-container">

                                    <div id="weightValue" class="tick-slider-value speech"></div>
                                </div>
                                <input id="weightSlider" class="tick-slider-input" type="range"
                                    min=" <?php echo $calculator["suwak_od"] ?>"
                                    max="<?php echo $calculator["suwak_do"] ?>" step="1" value="200" data-tick-step="1"
                                    data-tick-id="weightTicks" data-value-id="weightValue"
                                    data-progress-id="weightProgress" data-handle-size="18"
                                    data-min-label-id="weightLabelMin" data-max-label-id="weightLabelMax" />
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="results">
                    <?php

                foreach($results as $result) {
                ?>

                    <div class="result">
                        <div class=""><?php echo $result["tytul"] ?> <div class="res">wynik</div>
                        </div>
                    </div>


                    <?php }?>
                </div>
                <p class="small-title">Podsumowanie kosztów:</p>

                <div class=" summary">

                    <?php

                foreach($summary as $result) {
                ?>

                    <div class="result">
                        <div class=""><?php echo $result["tytul"] ?> <div class="res">wynik</div>
                        </div>
                    </div>


                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <?php endif; ?>
    <?php
$sliders = get_field('sekcja_piata');
if( $sliders ): ?>
    <div class="container">
        <div class="sliders">
            <div>
                <span class="green">
                    <?php echo $sliders["realizacje_zielony_tytul"] ?>
                </span>
                <span>
                    <?php echo $sliders["realizacje_czarny_tytul"] ?>
                </span>

            </div>
            <div class="galleryslider-new splide">

                <div class="splide__track">
                    <?php

                $images = $sliders["realizacje"] ;
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
            <a href="/../wszystkie-realizacje/">
                <div class="cta">Pokaż wszystkie</div>
            </a>
        </div>

    </div> <?php endif; ?>

    <div class="fotowoltaika">
        <div class="container">
            <?php

        $other_page = 32;

            $group = get_field('sekcja_trzecia', $other_page);
        $repeaters = $group['kafelki'];?>
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
            <?php
$rest = get_field('sekcja_szosta');
$repeat = $rest['pozostale'];
if( $rest ): ?>
            <div class="rest">
                <div class="title">
                    <span class="green">
                        <?php echo esc_attr( $rest['pozostale_tytul_zielony'] ); ?>

                    </span>
                    <span>
                        <?php echo esc_attr( $rest['pozostale_tytul_czarny'] ); ?>

                    </span>
                </div>
                <div class="diff">
                    <?php

        foreach($repeat as $extra) {
          ?>
                    <a href="<?php echo $extra["link"] ?>">
                        <div class="icon"><img src="<?php echo esc_url( $extra['zdjecie']['url'] ); ?>"
                                alt="<?php echo esc_attr( $extra['zdjecie']['alt'] ); ?>" /></div>
                        <span><?php echo $extra["tytul"] ?></span>
                    </a>

                    <?php }?>
                </div>
            </div>
        </div>
    </div><?php endif; ?>
</div>

<?php get_footer(); ?>