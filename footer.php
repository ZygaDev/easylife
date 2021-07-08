<footer>
    Footer
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    var my_val = 0;
    $(".green").click(function() {
        my_val = my_val + 1;

        if (my_val % 2 != 0) {
            $("div.white").animate({
                width: 170
            }, 1000);
            $(".green").animate({
                right: 170
            }, 1000);
        } else {
            $("div.white").animate({
                width: 0
            }, 1000);
            $(".green").animate({
                right: 0
            }, 1000);
        }
    });
});
</script>




</body>


</html>