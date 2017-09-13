<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Ao Vivo | Colabore</title>
        
		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="imagens/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="imagens/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="imagens/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="imagens/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="imagens/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="imagens/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="imagens/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="imagens/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="imagens/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="imagens/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="imagens/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="imagens/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="imagens/favicons/favicon-16x16.png">
		<link rel="manifest" href="imagens/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="imagens/favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
        
        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- CSS -->
        <link href="css/global.css" rel="stylesheet">
        <link href="css/colabore.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/rodape.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include_once("analyticstracking.php");
            include "php/dinheiro.php";
        ?>
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="imagens/logo.png" alt="Ao Vivo e em Cores"></a>
                </div>
                <!-- Menu -->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Início</a></li>
                        <li><a href="historia.html">História</a></li>
                      
                        <!-- Dropdowm -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organização</a>
                            <ul class="dropdown-menu">
                                <li><a href="organizacao.html#mvv">Missão, Visão e Valores</a></li>
                                <li><a href="organizacao.html#estrutura_organizacional">Estrutura Organizacional</a></li>
                                <li><a href="organizacao.html#gestao_atual">Gestão Atual</a></li>
                                <li><a href="organizacao.html#expansao">Expansão</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Participe</a>
                            <ul class="dropdown-menu">
                                <li><a href="participe.html">Próxima Ação</a></li>
                                <li><a href="participe.html">Inscrições</a></li>
                                <li><a href="participe.html">Perguntas Frequentes</a></li>
                            </ul>
                        </li>  
                        <li><a href="noticias.html">Notícias</a></li>
                        <li class="active dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Colabore</a>
                            <ul class="dropdown-menu">
                                <li><a href="colabore.php#produtos">Produtos</a></li>
                                <li><a href="colabore.php#doacoes">Doações</a></li>
                                <li><a href="colabore.php#nova_sede">Nova Sede</a></li>
                            </ul>
                        </li>
                        <li><a href="contato.html">Contato</a></li>
                    </ul>
                    
                    <!-- Right Align-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" id="login" data-toggle="modal" data-target="#aviso"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="cadastro.html"  data-toggle="modal" data-target="#aviso"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Modal -->
        <div id="aviso" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <img src="imagens/aviso.png">
            </div>
        </div>
        
        <!-- Conteúdo -->
        <div class="container global">
            <div class="col-xs-12 titulos">
                <div class="row vcenter">
                    <div class="col-xs-5 col-sm-3 titulo-esquerda">
                        <div class="titulo-pagina">Nova Sede</div>
                    </div>
                    <div class="col-xs-7 col-sm-9 titulo-direita">
                        <div class="titulo-linha"></div>   
                    </div>
                </div>
            </div>
            <div class="row-fluid tabela_mae">
                <div class="col-xs-12 col-sm-6 tabela_filho pb">
                    <img src="imagens/sede.png" class="img-responsive center-block sombra"/>
                </div>
                <div class="col-xs-12 col-sm-6 tabela_filho pb texto_sede">
                    <div class="col-xs-12 text-justify">
                        <p>&emsp;&emsp;O Projeto Social Ao Vivo e em Cores está com um projeto executivo de construção de uma sede no Campus da Unesp em Bauru. O terreno inclusive já foi aprovado pelas autoridades do Campus, assim, membros da organização estão finalizando o projeto e captando recursos.</p>
                        <p>&emsp;&emsp;Você pode contribuir doando para nós através do botão do pagseguro abaixo. Haverá um logo do nosso projeto na fachada composto pelo nome das pessoas que doaram R$100,00 ou mais. Sinta-se parte desse empreendimento e ajude-nos a atingir a meta de R$30.000,00 para construir mais esse sonho!</p>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-sm-5 text-center">
                            <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                            <form target="_blank" action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
                                <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                <input type="hidden" name="currency" value="BRL" />
                                <input type="hidden" name="receiverEmail" value="aovivoeemcores@dafae.com" />
                                <input type="hidden" name="iot" value="button" />
                                <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/95x45-doar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                            </form>
                            <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                        </div>
                        <div class="col-xs-12 col-sm-7 barra">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $atual ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $atual ?>%">
                                    <?php echo number_format($atual, 1, ",", "."); ?>%
                                </div>
                            </div>
                            <div class="text-center">R$<?php echo number_format($total, 2, ",", "."); ?> de R$30.000,00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- Rodapé -->
        <div class="container-fluid rodape">
            <div class="rodape1">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <img src="imagens/rodape.png" alt="Logo Rodapé" class="img-responsive logo_rodape">
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 altura">
                                    <div class="row">
                                        <div class="titulos_rodape1">
                                            Patrocinadores
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="carousel slide multi-item-carousel" id="myCarousel2">
                                            <div class="carousel-inner rodape_carousel">
                                                <div class="item active">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/tilibra.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/proex.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/copical.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/palamin.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 altura ajuste1">
                                    <div class="row">
                                        <div class="titulos_rodape1">
                                            Parceiros
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="carousel slide multi-item-carousel" id="myCarousel3">
                                            <div class="carousel-inner rodape_carousel">
                                                <div class="item active">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/dijr.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/dafae.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/semeng.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/enactus.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 altura ajuste2">
                                    <div class="row">
                                        <div class="titulos_rodape1">
                                            Apoiadores
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="carousel slide multi-item-carousel" id="myCarousel4">
                                            <div class="carousel-inner rodape_carousel">
                                                <div class="item active">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/feb.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/faac.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/fc.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/unesp.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#myCarousel4" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel4" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rodape2">
                <div class="container">
                    <div class="row mapa">
                        <div class="col-md-6">
                            <div class="row linhas">
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor margem">
                                    <a href="index.php">Início</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor margem">
                                    <a href="historia.html">História</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor">
                                    <a href="organizacao.html">Organização</a>
                                    <div class="itens">
                                        <a href="organizacao.html#mvv">Missão, Visão e Valores</a>
                                        <br><a href="organizacao.html#estrutura_organizacional">Estrutura Organizacional</a>
                                        <br><a href="organizacao.html#gestao_atual">Gestão Atual</a>
                                        <br><a href="organizacao.html#expansao">Expansão</a> 
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor">
                                    <a href="participe.html">Participe</a>
                                    <div class="itens">
                                        <a href="participe.html#proxima_acao">Próxima Ação</a>
                                        <br><a href="participe.html#inscricoes">Inscrições</a>
                                        <br><a href="participe.html#faq">Perguntas Frequentes</a>
                                        <br><a href="participe.html#escolas">Escolas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row linhas">
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor margem">
                                    <a href="noticias.html">Notícias</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor margem">
                                    <a href="colabore.php">Colabore</a>
                                    <div class="itens">
                                        <a href="colabore.php#produtos">Produtos</a>
                                        <br><a href="colabore.php#doacoes">Doações</a>
                                        <br><a href="colabore.php#nova_sede">Nova Sede</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 divisor">
                                    <a href="contato.html">Contato</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 redes_sociais">
                                    <a target="_blank" href="https://www.fb.com/aovivoeemcores"><img src="imagens/facebook.png" class="icones"></a>
                                    <a target="_blank" href="https://www.flickr.com/photos/aovivoeemcores/"><img src="imagens/flickr.png" class="icones"></a>
                                    <a target="_blank" href="https://www.instagram.com/aovivoeemcores/"><img src="imagens/instagram.png" class="icones"></a>
                                    <a target="_blank" href="https://www.youtube.com/user/aovivoeemcoresbauru/"><img src="imagens/youtube.png" class="icones"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Assinatura -->
            <div class="assinatura">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            Ao Vivo e em Cores - © 2017
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="volta_topo"></a>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/global.js"></script>
        <script src="js/rodape.js"></script>
    </body>
</html>