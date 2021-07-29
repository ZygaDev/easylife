import "./scss/styles.scss";
var $ = require("jquery");

$(".phone div.white").hide();

var my_val = 0;
$(".phone .green").click(function () {
    my_val = my_val + 1;
    $(".phone .white").toggle("slow");
});
document.getElementsByTagName("body")[0].onscroll = () => {
    if ($("#numbers").is(":visible")) {
        $(".num").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-count");

            $({ countNum: $this.text() }).animate(
                {
                    countNum: countTo,
                },

                {
                    duration: 8000,
                    easing: "linear",
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    },
                }
            );
        });
    }
};
// Load the first 3 list items from another HTML file
//$('#myList').load('externalList.html li:lt(3)');
// $("#splide .splide__slide").hide();
// $("#splide .splide__slide:nth-child(-n+3)").show();
$("#showLess").hide();
$("#loadMore").on("click", (event) => {
    $("#showLess").css("display", "flex");
    $("#splide .splide__slide").show();
    $("#loadMore").hide();
});
$("#showLess").on("click", (event) => {
    $("#splide .splide__slide").hide();
    $("#splide .splide__slide:nth-child(-n+2)").show();
    $("#loadMore").show();
    $("#showLess").hide();
});

import Splide from "@splidejs/splide";

document.addEventListener("DOMContentLoaded", function () {
    new Splide("#splide", {
        perPage: 2,
        type: "loop",
        breakpoints: {
            999: {
                destroy: true,
            },
        },
    }).mount();
    new Splide("#splide2", {
        perPage: 1,
        gap: "25px",
        type: "loop",
        // cover: true,
        padding: {
            left: 0,
            right: "15rem",
        },
        breakpoints: {
            999: {
                perPage: 2,
                type: "loop",
                gap: "15px",
                cover: true,
                padding: {
                    left: 0,
                    right: "2rem",
                },
            },
        },
    }).mount();
    new Splide("#splide3", {
        perPage: 3,
        type: "loop",
        breakpoints: {
            999: {
                perPage: 1,
                type: "loop",
            },
        },
    }).mount();
});
