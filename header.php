<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="note" content="environment=development" />

    <title>Easylife</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="container">
            <?php    if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}


?>

            <nav>
                <input type="checkbox" id="overlay-input" />
                <label for="overlay-input" id="overlay-button"><span></span></label>
                <div id="overlay">
                    <img class="logo-menu mobile"
                        src="<?php bloginfo('template_directory'); ?>/dist/images/header/mobile/white-logo.png"
                        alt="logo">
                    <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
                    <!-- <ul>
                        <li><a href="/nasze-uslugi/">Nasze usługi</a></li>
                        <li><a href="#">Realizacje</a></li>
                        <li class="white"><a href="#">Baza informacji</a></li>
                        <li class="white"><a href="#">Zadaj pytanie</a></li>
                        <li class="white border"><a href="#">Kontakt</a></li>
                    </ul> -->
                </div>
            </nav>

    </header>
    <?php
    $phone = get_field('telefon');
    if( $phone ): ?>
    <div class="phone">
        <div class="green"></div>
        <div class="white">

            <div class="call"> <?php dynamic_sidebar( 'header-1' ); ?></div>
            <a href="/kontakt">
                <div class="btn"> Wyślij wiadomość</div>
            </a>
        </div>
    </div>
    <?php endif; ?>