import "./scss/styles.scss";
var $ = require("jquery");
//import $ from "jquery";
$(document).ready(function () {
    $("div.white").hide();

    var my_val = 0;
    $(".green").click(function () {
        my_val = my_val + 1;
        $(".white").toggle("slow");
    });
    $(window).scroll(function () {
        if ($("#numbers").is(":visible")) {
            $({
                countNum: $(".num-1").html(),
            }).animate(
                {
                    countNum: 3458,
                },
                {
                    duration: 4000,
                    easing: "linear",
                    step: function () {
                        $(".num-1").html(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $(".num-1").html(this.countNum);
                        //alert('finished');
                    },
                }
            );
            $({
                countNum: $(".num-2").html(),
            }).animate(
                {
                    countNum: 146,
                },
                {
                    duration: 4000,
                    easing: "linear",
                    step: function () {
                        $(".num-2").html(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $(".num-2").html(this.countNum);
                        //alert('finished');
                    },
                }
            );
            $({
                countNum: $(".num-3").html(),
            }).animate(
                {
                    countNum: 65,
                },
                {
                    duration: 4000,
                    easing: "linear",
                    step: function () {
                        $(".num-3").html(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $(".num-3").html(this.countNum);
                        //alert('finished');
                    },
                }
            );
        }
    });
});
