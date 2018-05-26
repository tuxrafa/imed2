<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Conservatório Ever Dream</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="fonts/quadraat.css">
  <link rel="stylesheet" href="css/imed-theme.css">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Ever Dream"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul>
          <li class="conservatorio"><a href="#conservatorio">O Conservatório</a></li>
          <li class="curso"><a href="#curso">Cursos</a></li>
          <li class="grade"><a href="#grade">Grade</a></li>
          <li class="promocoes"><a href="#promocoes">Promoções</a></li>
          <li class="videos"><a href="#videos">Vídeos</a></li>
          <li class="agenda"><a href="#agenda">Agenda</a></li>
          <li class="downloads"><a href="#downloads">Downloads</a></li>
          <li class="yourtrack"><a href="#">Estúdio Your Track</a></li>
          <li class="madrigal"><a href="http://madrigaleverdream.com" target="_blank">Madrigal Ever Dream</a></li>
          <li class="contato"><a href="#contato">Contato</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </nav>

  <div class="container-full">
    <!-- Example row of columns -->
    <section class="row header" id="inicio">
      <div class="container">&nbsp;</div>
    </section>

    <section class="row conservatorio" id="conservatorio">
      <div class="container">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
          <h2>O Conservatório</h2>
          <div class="texto texto1">
            <p>
              <?php
                $myfile = fopen("textos/conservatorio.txt", "r") or print_r("Unable to open file!");
                echo fread($myfile, filesize("textos/conservatorio.txt"));
                fclose($myfile);
              ?>
            </p>
          </div>

          <div class="texto texto2">
            <h3>Missão, visão, valores.</h3>
              <p>
                <?php
                  $myfile = fopen("textos/missao.txt", "r") or print_r("Unable to open file!");
                  echo fread($myfile, filesize("textos/missao.txt"));
                  fclose($myfile);
                ?>
              </p>
          </div>
        </div>
      </div>
    </section>

    <section class="row curso" id="curso">
      <div class="container">
        <div class="col-md-1 spacer"></div>
        <div class="col-md-6 curso-area">
          <h2>Cursos.</h2>
          <div class="texto texto4">
            <h3>Nosso curso</h3>
              <p>
                <?php
                  $myfile = fopen("textos/curso.txt", "r") or print_r("Unable to open file!");
                  echo fread($myfile, filesize("textos/curso.txt"));
                  fclose($myfile);
                ?>
              </p>

            <h3>Metodologia Keep on Playing</h3>
              <p>
                <?php
                  $myfile = fopen("textos/keeponplaying.txt", "r") or print_r("Unable to open file!");
                  echo fread($myfile, filesize("textos/keeponplaying.txt"));
                  fclose($myfile);
                ?>
              </p>
          </div>
        </div>
        <div class="col-md-5">
          <div id="keeponplaying">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/hn77tKLpusw?rel=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="row grade" id="grade">
      <div class="container">
        <div class="col-md-4">
          <h2>Grade.</h2>
        </div>
        <div class="col-md-8">
          <div class="texto texto5">
            <h3>Matérias teóricas</h3>
              <p>
                <?php
                  $myfile = fopen("textos/materias-teoricas.txt", "r") or print_r("Unable to open file!");
                  echo fread($myfile, filesize("textos/materias-teoricas.txt"));
                  fclose($myfile);
                ?>
              </p>

            <h3>Prática de bandas</h3>
              <p>
                <?php
                  $myfile = fopen("textos/materias-praticas.txt", "r") or print_r("Unable to open file!");
                  echo fread($myfile, filesize("textos/materias-praticas.txt"));
                  fclose($myfile);
                ?>
              </p>

            <h3>Canto coral grátis</h3>
              <p>
                <?php
                  $myfile = fopen("textos/canto-coral.txt", "r") or print_r("Unable to open file!");
                  echo fread($myfile, filesize("textos/canto-coral.txt"));
                  fclose($myfile);
                ?>
              </p>
          </div>
        </div>
      </div>
    </section>

    <section class="row promocoes" id="promocoes">
      <div class="container">
        <div class="col-md-4">
          <h2>Promoções.</h2>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="row videos" id="videos">
      <div class="container">
        <div class="col-md-8">
          <h2>Vídeos.</h2>
          <div class="texto texto6">
            Video principal
          </div>
        </div>
        <div class="col-md-4">
          Lista de vídeos
        </div>
      </div>
    </section>

    <section class="row agenda" id="agenda">
      <div class="container">
        <div class="col-md-8">
          <h2>Agenda.</h2>
          <div class="slider slider4">
            <div class="mes maio">
              <div class="evento">
                Evento
              </div>
              <div class="evento">
                Evento
              </div>
            </div>
            <div class="mes junho">
              <div class="evento">
                Evento
              </div>
              <div class="evento">
                Evento
              </div>
              <div class="mes julho">
                <div class="evento">
                  Evento
                </div>
              </div>
            </div>
          </div>

        </div>
    </section>

    <section class="row agenda" id="agenda">
      <div class="container">
        <div class="col-md-8">
          <h2>Agenda.</h2>
          <div class="slider slider4">
            <div class="mes maio">
              <div class="evento">
                Evento
              </div>
              <div class="evento">
                Evento
              </div>
            </div>
            <div class="mes junho">
              <div class="evento">
                Evento
              </div>
              <div class="evento">
                Evento
              </div>
              <div class="mes julho">
                <div class="evento">
                  Evento
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="row agenda" id="agenda">
      <div class="container">
        <div class="col-md-8">
          <h2>Contato.</h2>
          <div class="texto texto7">
            Video principal
          </div>
        </div>
        <div class="col-md-4">
          Lista de vídeos
        </div>
      </div>
    </section>

    <section class="row downloads" id="downloads">
      <div class="container">
        <div class="col-md-8">
          <h2>Contato.</h2>
          <div class="texto texto7">
            Video principal
          </div>
        </div>
        <div class="col-md-4">
          Lista de vídeos
        </div>
      </div>
    </section>

    <section class="row contato" id="contato">
      <div id="map">
        <div id="gmap-wrap">
          <div id="gmap">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <h2>Contato.</h2>
          <div class="texto texto7">
            <a tel="+551143712659">+55 11 4371-2659</a><br>
            <br>
            <a mailto:"secretaria@institutomusicaleverdream.com">secretaria@institutomusicaleverdream.com</a><br>
            <br>
            Alameda Fernão Cardim, 9, São Paulo, Brazil</br>
            <br>
            <br>
            <a target="_blank" href="https://www.facebook.com/pg/ConservatorioMusicalEverDream/">Facebook</a><br>
            <br>
            <a target="_blank" href="https://www.youtube.com/channel/UCJKmwNywGNcI2MRx3AFu7KQ/">Youtube</a>


          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>&copy; Conservatório Ever Dream - IMED 2018</p>
    </footer>
    </div>
    <!-- /container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyBXS4GV0MomOH_6TTG2O0xswo8T7Wt8FkY"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/main.js"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyBXS4GV0MomOH_6TTG2O0xswo8T7Wt8FkY"></script>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
          function() {
            (b[l].q = b[l].q || []).push(arguments)
          });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
      }(window, document, 'script', 'ga'));
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
</body>

</html>
