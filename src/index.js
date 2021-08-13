import "./scss/styles.scss";
let $ = require("jquery");
import Splide from "@splidejs/splide";
// require("webpack-jquery-ui/css");
require("webpack-jquery-ui");

require("webpack-jquery-ui/accordion");

// require("webpack-jquery-ui");
// require("webpack-jquery-ui/css");
$(".phone div.white").hide();

let my_val = 0;
$(".phone .green").click(function () {
    my_val = my_val + 1;
    $(".phone .white").toggle("slow");
});
document.getElementsByTagName("body")[0].onscroll = () => {
    if ($("#numbers").is(":visible")) {
        $(".num").each(function () {
            let $this = $(this),
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
$(".showLess").hide();
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

document.addEventListener("DOMContentLoaded", function () {
    if ($("#splide").length > 0) {
        new Splide("#splide", {
            perPage: 2,
            type: "loop",
            breakpoints: {
                1029: {
                    destroy: true,
                },
            },
        }).mount();
    } else {
    }
    if ($("#splide2").length > 0) {
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
                1029: {
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
    } else {
    }
    if ($("#splide3").length > 0) {
        new Splide("#splide3", {
            perPage: 3,
            type: "loop",
            breakpoints: {
                1029: {
                    perPage: 1,
                    type: "loop",
                },
            },
        }).mount();
    } else {
    }
    if ($("#galleryslider").length > 0) {
        let elms = document.getElementsByClassName("galleryslider");
        for (let i = 0, len = elms.length; i < len; i++) {
            new Splide(elms[i], {
                perPage: 2,
                gap: "25px",
                type: "loop",
                // cover: true,
                padding: {
                    left: 0,
                    right: "15rem",
                },
                breakpoints: {
                    1029: {
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
        }
    } else {
    }
    if ($(".galleryslider-new").length > 0) {
        new Splide(".galleryslider-new", {
            destroy: true,
            breakpoints: {
                1029: {
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
    } else {
    }
});
if (
    window.location.href.indexOf("/wszystkie-realizacje") > -1 ||
    window.location.href.indexOf("/baza-informacji") > -1
) {
    $("header div.container nav div#overlay ul li.white a").css("color", "#444");
    $("header div.container nav div#overlay ul li.white.border ").css("border", "2px solid #444");
}
function init() {
    const sliders = document.getElementsByClassName("tick-slider-input");

    for (let slider of sliders) {
        slider.oninput = onSliderInput;

        updateValue(slider);
        updateValuePosition(slider);
        updateLabels(slider);
        updateProgress(slider);

        setTicks(slider);
    }
}

function onSliderInput(event) {
    updateValue(event.target);
    updateValuePosition(event.target);
    updateLabels(event.target);
    updateProgress(event.target);
}

function updateValue(slider) {
    let value = document.getElementById(slider.dataset.valueId);

    value.innerHTML = "<div>" + slider.value + "</div>";
}

function updateValuePosition(slider) {
    let value = document.getElementById(slider.dataset.valueId);

    const percent = getSliderPercent(slider);

    const sliderWidth = slider.getBoundingClientRect().width;
    const valueWidth = value.getBoundingClientRect().width;
    const handleSize = slider.dataset.handleSize;

    let left = percent * (sliderWidth - handleSize) + handleSize / 2 - valueWidth / 2;

    left = Math.min(left, sliderWidth - valueWidth);
    left = slider.value === slider.min ? 0 : left;

    value.style.left = left + "px";
}

function updateLabels(slider) {
    const value = document.getElementById(slider.dataset.valueId);
    const minLabel = document.getElementById(slider.dataset.minLabelId);
    const maxLabel = document.getElementById(slider.dataset.maxLabelId);

    const valueRect = value.getBoundingClientRect();
    const minLabelRect = minLabel.getBoundingClientRect();
    const maxLabelRect = maxLabel.getBoundingClientRect();

    const minLabelDelta = valueRect.left - minLabelRect.left;
    const maxLabelDelta = maxLabelRect.left - valueRect.left;

    const deltaThreshold = 32;

    if (minLabelDelta < deltaThreshold) minLabel.classList.add("hidden");
    else minLabel.classList.remove("hidden");

    if (maxLabelDelta < deltaThreshold) maxLabel.classList.add("hidden");
    else maxLabel.classList.remove("hidden");
}

function updateProgress(slider) {
    let progress = document.getElementById(slider.dataset.progressId);
    const percent = getSliderPercent(slider);

    progress.style.width = percent * 100 + "%";
}

function getSliderPercent(slider) {
    const range = slider.max - slider.min;
    const absValue = slider.value - slider.min;

    return absValue / range;
}

function setTicks(slider) {
    let container = document.getElementById(slider.dataset.tickId);
    const spacing = parseFloat(slider.dataset.tickStep);
    const sliderRange = slider.max - slider.min;
    const tickCount = sliderRange / spacing + 1; // +1 to account for 0

    for (let ii = 0; ii < tickCount; ii++) {
        let tick = document.createElement("span");

        tick.className = "tick-slider-tick";

        container.appendChild(tick);
    }
}

function onResize() {
    const sliders = document.getElementsByClassName("tick-slider-input");

    for (let slider of sliders) {
        updateValuePosition(slider);
    }
}

window.onload = init;
window.addEventListener("resize", onResize);
if (window.location.href.indexOf("/nasze-uslugi") > -1) {
    let btn = document.querySelector(".fotowoltaika-main .cta");
    let el = document.querySelector(".function");

    btn.addEventListener("click", function () {
        el.scrollIntoView({ behavior: "smooth" });
    });
}
$(".function > .accordion").accordion({ header: "h3", collapsible: true, active: false });

$(".shw").on("click", function () {
    $(this).text(function (i, old) {
        return old == "Pokaż mniej " ? "Czytaj więcej " : "Pokaż mniej ";
    });
});
$(".ask .texty  li").accordion({ header: "a", collapsible: true, active: 2 });

$(".baza li").accordion({ header: "a", collapsible: true, active: false });
