<div class="talk">

    <div class="container">
        <div class="title">
            <span class="green"><?php the_field('zielony_tytul_formularz', 'option'); ?></span>
            <span><?php the_field('czarny_tytul_formularz', 'option'); ?></span>
            <p><?php the_field('opis_formularz', 'option'); ?>
            </p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]') ?>
    </div>
</div>
<footer>

    <div class="container">

        <div class="logo"> <img class="logo"
                src="<?php bloginfo('template_directory'); ?>/dist/images/header/desktop/logo_podstawowe_kolor-01@2x.png"
                alt="logo"></div>
        <div class="flexi">
            <div class="menu">
                <span>Strona</span>
                <ul>
                    <li><a href="#">Nasze usługi</a></li>
                    <li><a href="#">Realizacje</a></li>
                    <li class="white"><a href="#">Baza informacji</a></li>
                    <li class="white"><a href="#">Zadaj pytanie</a></li>
                    <li class="white border"><a href="#">Kontakt</a></li>
                </ul>
            </div>
            <div class="adres"><span>Adres</span>
                <p> <?php the_field('adres', 'option'); ?> </p>




                <span>Godziny Otwarcia</span>
                <p> <?php the_field('godziny', 'option'); ?>
                </p>
            </div>
            <div class="">
                <div class="contact"><span>Kontakt</span>
                    <p><span><img class=" " src="<?php bloginfo('template_directory'); ?>/dist/images/footer/email.png"
                                alt="slider offer"></span><?php the_field('email', 'option'); ?></p>
                    <p><span> <img class=" " src="<?php bloginfo('template_directory'); ?>/dist/images/footer/Call.svg"
                                alt="slider offer"></span><?php the_field('telefon', 'option'); ?></p>
                </div>
                <div class="social"><span>Obserwuj Nas</span><a href="<?php the_field('facebook', 'option'); ?>">
                        <p><span><img class=" "
                                    src="<?php bloginfo('template_directory'); ?>/dist/images/footer/Path 9.svg"
                                    alt="slider offer"></span>Facebook</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>

<script defer src="<?php bloginfo('template_directory'); ?>/dist/app.js"></script>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"></script>




</body>


</html>