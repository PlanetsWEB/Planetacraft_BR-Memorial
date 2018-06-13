<!DOCTYPE html>
<html lang="pt-br" hola_ext_inject="disabled">

<head>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <style type="text/css">
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }
    </style>
    <style type="text/css">
        @media print {
            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {
            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style type="text/css">
        .gm-style {
            font-family: Roboto, Arial, sans-serif;
            font-size: 11px;
            font-weight: 400;
            text-decoration: none
        }

        .gm-style img {
            max-width: none
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fotos - Projeto Planetacraft_BR</title>
    <link rel="shortcut icon" href="img/icon.png">
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/grayscale.css" rel="stylesheet">
    <link href="src/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="src/css/style.css"/>
    <script src="src/js/jquery.js"></script>
    <script src="src/js/modernizr.custom.70736.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="src/css/noJS.css"/></noscript>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand page-scroll" href="inicio">
                    <img class="pull-left" src="img/icon.png" width="32" height="32"><span class="light" style="margin-left:5px;line-height: 35px;"> Planetacraft_BR</span>
                </a>
                </div>

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden active">
                            <a href="#page-top"></a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="inicio">Início</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="historia">Nossa História</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="fechamento">Porque fechamos?</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="agradeco_de_coracao">Agradecimentos</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="dados">Dados</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="videos">Vídeos</a>
                        </li>
                        <li class="">
                                <a class="page-scroll" href="fotos">Fotos</a>
                        </li>
                        <li class="">
                            <a class="page-scroll" href="redes">Redes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="intro">
            <div class="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <center>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                <h1>Galeria de Fotos</h1>
                                <p>Galeria com varias fotos do servidor.</p>
                                <hr>
                                <div class="row texto">
                                <br><br>
                                <h3><a href="fotos_add">Adicione a sua foto do servidor também!!!</a></h3>
                                <hr><br>

                                    <div class="gamma-container gamma-loading" id="gamma-container">
                                        <ul class="gamma-gallery">

<?php

function limitarTexto($texto, $limite){
    $quebra = true;
    $tamanho = strlen($texto);
    if($tamanho <= $limite){ //Verifica se o tamanho do texto é menor ou igual ao limite
       $novo_texto = $texto;
    }else{ // Se o tamanho do texto for maior que o limite
       if($quebra == true){ // Verifica a opção de quebrar o texto
          $novo_texto = trim(substr($texto, 0, $limite))."...";
       }else{ // Se não, corta $texto na última palavra antes do limite
          $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
          $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; // Corta o $texto até a posição localizada
       }
    }
    return $novo_texto; // Retorna o valor formatado
 }

foreach (glob("img/galeria/*.*") as $img_dir) {
$img_name = limitarTexto(str_replace("img/galeria/", "", $img_dir), $limite = 25);
echo '
<li>
<div data-alt="'.$img_name.'" data-description="<h3><i class=\'fa fa-expand\' aria-hidden=\'true\'></i> '.$img_name.' <i class=\'fa fa-expand\' aria-hidden=\'true\'></i></h3>" data-max-width="1800" data-max-height="1350">
<div data-src="'.$img_dir.'"></div>
<noscript>
<img src="'.$img_dir.'" alt="'.$img_name.'" />
</noscript>
</div>
</li>
'; 
}
?>

                                        </ul>
                                        <div class="gamma-overlay"></div>
                                    </div>

                                </div>
                                </br>
                                <hr>

                        </div>
                    </div>
                </div>
                <center><br><br><a href="http://www.planetsweb.com.br/" target="_blank" style="cursor: url(https://www.planetsweb.com.br/setores/fotos/geral/logo.cur) 4 12, auto!important;border: none!important;">
<img src="https://www.planetsweb.com.br/setores/fotos/geral/logotipo_branca.png" alt="PlanetsWEB" width="200"></a><br><br><br><br></center>
            </div>
        </header>

        
        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/jquery.easing.min.js"></script>
        <script src="src/js/grayscale.js"></script>
		<script src="src/js/jquery.masonry.min.js"></script>
		<script src="src/js/jquery.history.js"></script>
		<script src="src/js/js-url.min.js"></script>
		<script src="src/js/jquerypp.custom.js"></script>
		<script src="src/js/gamma.js"></script>
		<script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = [""]

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>	


        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-50795258-2', 'auto');
            ga('send', 'pageview');
        </script>

    </body>

</html>