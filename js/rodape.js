/*global $ */

function alturas() {
    "use strict";
    var altura = $(".logo_rodape").height();
    $(".altura").height(altura);
}

window.onload = function () {
    "use strict";
    alturas();
};

$(document).ready(function () {
    "use strict";
    $('#myCarousel2').carousel({
        interval: 5000
    });

    $('#myCarousel3').carousel({
        interval: 5000
    });

    $('#myCarousel4').carousel({
        interval: 5000
    });

    $('.multi-item-carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
    
});

$(window).resize(function () {
    "use strict";
    alturas();
});