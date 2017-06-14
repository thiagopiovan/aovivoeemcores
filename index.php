<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Ao Vivo | Início</title>
        
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
        <link href="css/inicio.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
        <link href="css/circulos.css" rel="stylesheet">
        <link href="css/video&depoimento.css" rel="stylesheet">
        <link href="css/newsletter.css" rel="stylesheet">
        <link href="css/rodape.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include "php/depoimentos.php";
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
                    <a class="navbar-brand" href="#"><img src="imagens/logo.png" alt="Ao Vivo e em Cores"></a>
                </div>
                <!-- Menu -->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Início</a></li>
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
                        <li class="dropdown">
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
        <div class="container-fluid global">
            
            <!-- Carousel -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <a href="participe.html"><img src="imagens/slide1A.png" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="colabore.php"><img src="imagens/slide2A.png" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="organizacao.html"><img src="imagens/slide3A.png" class="img-responsive"></a>
                    </div>
                    <div class="item">
                        <a href="noticias.html"><img src="imagens/slide4A.png" class="img-responsive"></a>
                    </div>
                </div>
                <ul class="nav nav-pills">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="participe.html">Participe</a></li>
                    <li data-target="#myCarousel" data-slide-to="1"><a href="colabore.php">Colabore</a></li>
                    <li data-target="#myCarousel" data-slide-to="2"><a href="organizacao.html">Organização</a></li>
                    <li data-target="#myCarousel" data-slide-to="3"><a href="noticias.html">Notícias</a></li>
                </ul>
            </div>
                
            <div class="row-fluid">
                
                <!-- Divs Circulares -->
                <div class="col-md-3 col-sm-6">
                    <div class="ih-item circle1 effect bottom_to_top sombra">
                        <a href="participe.html">
                            <div class="img img-responsive"><img src="imagens/circulo1.png" alt="img"></div>
                            <div class="info">
                                <div class="info-back">
                                    <h4>Saiba como participar !</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="ih-item circle2 effect bottom_to_top sombra">
                        <a href="colabore.php">
                            <div class="img img-responsive"><img src="imagens/circulo2.png" alt="img"></div>
                            <div class="info">
                                <div class="info-back">
                                    <h4>Ajude o projeto a crescer !</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="ih-item circle3 effect bottom_to_top sombra">
                        <a href="historia.html">
                            <div class="img img-responsive"><img src="imagens/circulo3.png" alt="img"></div>
                            <div class="info">
                                <div class="info-back">
                                    <h4>Conheça nossa história !</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="ih-item circle4 effect bottom_to_top sombra">
                        <a href="participe.html">
                            <div class="img img-responsive"><img src="imagens/circulo4.png" alt="img"></div>
                            <div class="info">
                                <div class="info-back">
                                    <h4>Descubra nossas novidades !</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            
                <!-- Vídeo & Depoimento-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vd_margem">
                    <div class="titulo-video">Vídeo</div>
                    <div class="conteudo-video vd sombra">
                        <div class="embed-responsive embed-responsive-16by9 video">
                            <iframe allowFullScreen="allowFullScreen"  src="http://www.youtube.com/embed/mde091fsQLQ"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vd_margem">
                    <div class="titulo-depoimento">Depoimento</div>
                    <div class="conteudo-depoimento vd sombra">
                        <div class="centralizar">
                            <p><?php echo $descricao; ?></p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 imagem-depoimento">
                                    <?php echo "<img src=\"".$imagem."\" class=\"img-circle img-responsive pull-right\">"; ?>
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    <div class="pull-left pessoa-depoimento">
                                        <p><b><?php echo $nome; ?></b>
                                        <br><?php echo $cargo; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Newsletter -->
                <div class="col-xs-12">
                    <div class="titulo-newsletter">Newsletter</div>
                    <div class="conteudo-newsletter sombra">
                        <div class="row text-center">
                            <form id="newsletter" method="post" action="php/newsletter.php">
                                <div class="col-xs-12 col-sm-2 texto-newsletter">
                                Inscreva-se!
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <input type="text" name="nome" id="nome" required="required" class="form-control" placeholder="Nome"/>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <input type="email" name="email" id="email" required="required" class="form-control" placeholder="E-mail"/>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <button type="submit" id="submit" name="submit" class="btn">Cadastrar</button>
                                </div>
                            </form>
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
                            <img src="imagens/rodape.png" alt="Logo Rodapé" class="logo_rodape img-responsive">
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
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/tintas_pig.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/sanro.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/tatu.png" class="img-responsive center-block"></a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-xs-4 logos">
                                                        <a href="#"><img src="imagens/roloflex.png" class="img-responsive center-block"></a>
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
        <script src="js/carousel.js"></script>
        <script src="js/global.js"></script>
        <script src="js/video&depoimento.js"></script>
        <script src="js/rodape.js"></script>
    </body>
</html>