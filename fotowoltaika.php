<?php
/**
* Template Name: Fotowoltaika
*
*/
?>

<?php get_header(); ?>
<div class="fotowoltaika">
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
            Fotowoltaika
        </span>
        <p>Fotowoltaika to proekologiczna technologia, za pomocą której przetwarza się energię słoneczną w prąd
            elektryczny. Panele fotowoltaiczne składają się z krzemowych płytek półprzewodnikowych. W ich wnętrzu
            znajduje się bariera potencjału/pole elektromagnetyczne, które rozdziela ładunki dodatnie i ujemne
            (pozyskane z energii słonecznej). W ten sposób powstaje napięcie prądu, którym można zasilić domowe
            urządzenia elektryczne.</p>
        <div class="cta">Więcej o ofercie</div>
    </div>
    <div class="flexifoto">
        <div class="home"></div>
        <div class="company"></div>
        <div class="nature"></div>
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