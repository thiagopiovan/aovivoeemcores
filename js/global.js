$(document).ready(function() {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.volta_topo').fadeIn();
        } else {
            $('.volta_topo').fadeOut();
        }
    });

    $('.volta_topo').click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});