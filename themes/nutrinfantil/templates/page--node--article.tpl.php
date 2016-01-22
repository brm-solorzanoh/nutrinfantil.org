<!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<body>
  <!--Header-->
  <header>
    <div class="container">
      <div class="row">
        <!--redes sociales-->
        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-12 u-redes">
          <ul>
            <!--Twitter-->
            <li class="active"><a href=""><span class="icon-twitter"></span></a></li>
            <!--Facebook-->
            <li><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
            <!--Youtube-->
            <li><a href="#"><span class="icon-youtube"></span></a></li>
            <!--Google +-->
            <li><a href="#"><span class="icon-google"></span></a></li>
            <!--Instagram-->
            <li><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
        <!--menu-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-pag">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
              <?php endif; ?>
              </div>
              <!--menu-->
              <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse navbar-right menu-ppal">
                <?php $menu = menu_navigation_links('main-menu');
                      print theme('links__menu_casabienestar', array('links' => $menu,'attributes' => array('class' => array('nav navbar-nav'))));
                    ?>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--/-Header-->
  <section class="container-fluid l-detalle-evento">
    <div class="row">
      <!--encabezado-->

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 l-encabezado-imagen"><img src="<?php print file_create_url($node->field_image['und'][0]['uri']);?>" alt=""></div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 l-encabezado-title">
        <div class="container">
          <div class="row">
            <div class="u-title u-title-izq">
              <h1><?php $node = node_load(arg(1)); print $node->title; ?></h1>
              <?php var_dump($node->field_image['und'][0]['uri']);?>
              <div class="u-cuadrito u-cuadrito-rojo"></div>
            </div>
          </div>
        </div>
      </div>
      <!--articulo-->
      <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
                <?php print $content; ?>
              </div>
            <?php endif; ?>
    </div>
  </section>
  <!--Footer-->
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-morado">
          <div class="container">
            <div class="row">
              <!--noticias recientes-->
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-info">
                <h5>NOTICIAS RECIENTES</h5>
                <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.</p>
              </div>
              <!--enlaces relacionados-->
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-info">
                <h5>ENLACES RELACIONADOS</h5><img src="sites/all/themes/nutrinfantil/images/fxb.png" alt="">
                <p>www.fxb.org</p>
              </div>
              <!--temas relacionados-->
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-info">
                <h5>TEMAS RELACIONADOS</h5>
                <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo.</p>
                <h4 class="btn btn-redondo btn-redondo-transparente"><a href="#">CLIC AQUÍ</a></h4>
              </div>
            </div>
          </div>
        </div>
        <!--Redes sociales-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u-redes u-redes-morado">
          <ul>
            <!--Twitter-->
            <li class="active"><a href="#"><span class="icon-twitter"></span></a></li>
            <!--Facebook-->
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <!--Youtube-->
            <li><a href="#"><span class="icon-youtube"></span></a></li>
            <!--Google +-->
            <li><a href="#"><span class="icon-google"></span></a></li>
            <!--Instagram-->
            <li><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
          <!--©-->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-feet"><small>© Bogotá, Colombia. 2015 Powered by Preferente.com.co</small></div>
        </div>
      </div>
    </div>
  </footer>
  <!--/-Footer-->
  <!--Scripts-->
  <script src="js/libs/jquery.js"></script>
  <script src="js/libs/bootstrap.min.js"></script>
  <script src="js/nutrinfantil.js"></script>
</body></html>