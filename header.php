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

            <a href="#">
                <img class="logo mobile"
                    src="<?php bloginfo('template_directory'); ?>/assets/images/header/mobile/logo_podstawowe_kolor-01.png"
                    alt="logo">

                <img class="logo desktop"
                    src="<?php bloginfo('template_directory'); ?>/assets/images/header/desktop/logo_podstawowe_kolor-01@2x.png"
                    alt="logo">
            </a>

            <nav>
                <input type="checkbox" id="overlay-input" />
                <label for="overlay-input" id="overlay-button"><span></span></label>
                <div id="overlay">
                    <img class="logo-menu mobile"
                        src="<?php bloginfo('template_directory'); ?>/assets/images/header/mobile/white-logo.png"
                        alt="logo">
                    <ul>
                        <li><a href="#">Nasze usługi</a></li>
                        <li><a href="#">Realizacje</a></li>
                        <li><a href="#">Baza informacji</a></li>
                        <li><a href="#">Zadaj pytanie</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </div>
            </nav>

    </header>