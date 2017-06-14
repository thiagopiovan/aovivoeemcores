$(document).ready(function() {
    var color = '#';
    var letters = ['01163A','DF6388','F79451','009DC2'];
    color += letters[Math.floor(Math.random() * letters.length)];
    document.body.style.backgroundColor = color;
    
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