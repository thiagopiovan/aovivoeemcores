$(document).ready(function() {
    $('#anos').carousel({
        interval: false
    });
    $("#texto_2013").hide();
    $("#texto_2014").hide();
    $("#texto_2015").hide();
    $("#texto_2016").hide();
    $("#texto_2017").hide();
    $('#anos').on('slide.bs.carousel', function (ev) {
        var id = ev.relatedTarget.id;
        switch (id) {
        case "2012":
            $("#texto_2012").fadeIn();
            $("#texto_2013").hide();
            $("#texto_2014").hide();
            $("#texto_2015").hide();
            $("#texto_2016").hide();
            $("#texto_2017").hide();
            break;
        case "2013":
            $("#texto_2012").hide();
            $("#texto_2013").fadeIn();
            $("#texto_2014").hide();
            $("#texto_2015").hide();
            $("#texto_2016").hide();
            $("#texto_2017").hide();
            break;
        case "2014":
            $("#texto_2012").hide();
            $("#texto_2013").hide();
            $("#texto_2014").fadeIn();
            $("#texto_2015").hide();
            $("#texto_2016").hide();
            $("#texto_2017").hide();
            break;
        case "2015":
            $("#texto_2012").hide();
            $("#texto_2013").hide();
            $("#texto_2014").hide();
            $("#texto_2015").fadeIn();
            $("#texto_2016").hide();
            $("#texto_2017").hide();
            break;
        case "2016":
            $("#texto_2012").hide();
            $("#texto_2013").hide();
            $("#texto_2014").hide();
            $("#texto_2015").hide();
            $("#texto_2016").fadeIn();
            $("#texto_2017").hide();
            break;
        case "2017":
            $("#texto_2012").hide();
            $("#texto_2013").hide();
            $("#texto_2014").hide();
            $("#texto_2015").hide();
            $("#texto_2016").hide();
            $("#texto_2017").fadeIn();
            break;
        default:
            $("#texto_2012").hide();
            $("#texto_2013").hide();
            $("#texto_2014").hide();
            $("#texto_2015").hide();
            $("#texto_2016").hide();
            $("#texto_2017").hide();
            break;
        }
    })
});