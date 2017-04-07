sameHeight = function() {
    var heights = $(".vd").map(function() {
        return $(this).height();
    }).get(),
    maxHeight = Math.max.apply(null, heights);
    $(".vd").height(maxHeight);
}

$(document).ready(function() {
    sameHeight();
});

$(window).resize(function() {
    $(".vd").height("auto");
    sameHeight();
});