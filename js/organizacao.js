$(document).ready(function() {
    $('#org').carousel({
        interval: false
    });
    $("#conteudo_artistico").hide();
    $("#conteudo_captacao").hide();
    $("#conteudo_comunicacao").hide();
    $("#conteudo_execucao").hide();
    $("#conteudo_externas").hide();
    $("#conteudo_financas").hide();
    $("#conteudo_gp").hide();
    $("#conteudo_oficinas").hide();
    $('#org').on('slide.bs.carousel', function (ev) {
        var id = ev.relatedTarget.id;
        switch (id) {
        case "cordenacao":
            $("#conteudo_coordenacao").fadeIn();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "artistico":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").fadeIn();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "captacao":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").fadeIn();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "comunicacao":
            $("#conteudo_coordenacao").hise();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").fadeIn();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "execucao":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").fadeIn();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "externas":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").fadeIn();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "financas":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").fadeIn();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        case "gp":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").fadeIn();
            $("#conteudo_oficinas").hide();
            break;
        case "oficinas":
            $("#conteudo_coordenacao").hide();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").fadeIn();
            break;
        default:
            $("#conteudo_coordenacao").fadeIn();
            $("#conteudo_artistico").hide();
            $("#conteudo_captacao").hide();
            $("#conteudo_comunicacao").hide();
            $("#conteudo_execucao").hide();
            $("#conteudo_externas").hide();
            $("#conteudo_financas").hide();
            $("#conteudo_gp").hide();
            $("#conteudo_oficinas").hide();
            break;
        }
    })
});