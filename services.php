<?php
/**
* Template Name: Services
*
*/
?>

<?php get_header(); ?>
<div class="services">
    <div class="back"></div>
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php
            if(function_exists('bcn_display'))
            {
            bcn_display();
            }?>
        </div>
        <span class="green">
            Co oferujemy
        </span>
        <span>
            Nasze usługi
        </span>
    </div>
    <div class="main">

        <div class="container">
            <ul>

                <li><a href="/Fotowoltaika">Fotowoltaika</a></li>
                <li><a href="/Rekuperacja">Rekuperacja</a></li>
                <li><a href="/Pompy-ciepła">Pompy ciepła</a></li>
                <li><a href="/Domy-inteligentne">Domy inteligentne</a></li>
                <li><a href="/Ogrzewanie-elektryczne">Ogrzewanie elektryczne</a></li>
                <li><a href="/Domy-szkieletowe">Domy szkieletowe</a></li>
            </ul>
        </div>
    </div>


    <div class="phone">
        <div class="green"></div>
        <div class="white">
            <div class="call">(48) 505 701 847</div>
            <div class="btn">Napisz wiadomość</div>
        </div>
    </div>

</div>
<?php get_footer(); ?>