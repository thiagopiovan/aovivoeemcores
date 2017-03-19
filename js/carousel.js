$(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 3000
    });
    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('#myCarousel .nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = $('#myCarousel .nav').children().length -1;
            var current = $('#myCarousel .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count === id) {
                $('#myCarousel .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});