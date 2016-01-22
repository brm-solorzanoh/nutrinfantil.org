<?php
/**
 * @file
 * Adaptivetheme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * Adaptivetheme supplied variables:
 * - $site_logo: Themed logo - linked to front with alt attribute.
 * - $site_name: Site name linked to the homepage.
 * - $site_name_unlinked: Site name without any link.
 * - $hide_site_name: Toggles the visibility of the site name.
 * - $visibility: Holds the class .element-invisible or is empty.
 * - $primary_navigation: Themed Main menu.
 * - $secondary_navigation: Themed Secondary/user menu.
 * - $primary_local_tasks: Split local tasks - primary.
 * - $secondary_local_tasks: Split local tasks - secondary.
 * - $tag: Prints the wrapper element for the main content.
 * - $is_mobile: Mixed, requires the Mobile Detect or Browscap module to return
 *   TRUE for mobile.  Note that tablets are also considered mobile devices.
 *   Returns NULL if the feature could not be detected.
 * - $is_tablet: Mixed, requires the Mobile Detect to return TRUE for tablets.
 *   Returns NULL if the feature could not be detected.
 * - *_attributes: attributes for various site elements, usually holds id, class
 *   or role attributes.
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Core Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * Adaptivetheme Regions:
 * - $page['leaderboard']: full width at the very top of the page
 * - $page['menu_bar']: menu blocks placed here will be styled horizontal
 * - $page['secondary_content']: full width just above the main columns
 * - $page['content_aside']: like a main content bottom region
 * - $page['tertiary_content']: full width just above the footer
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see adaptivetheme_preprocess_page()
 * @see adaptivetheme_process_page()
 */
?>
<head>
  <meta charset="utf-8">
  <title>Nutrinfantil</title>
  <meta name="description" content="Nutrinfantil">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="sites/all/themes/nutrinfantil/css/nutrinfantil.min.css">
  <!-- Web Fonts-->
  <link href="http://fonts.googleapis.com/css?family=Varela+Round|Roboto:400italic,300,700,400" rel="stylesheet" type="text/css"><!--[if lt IE]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="sites/all/themes/nutrinfantil/js/libs/modernizr-2.6.2.min.js"></script>
  <script src="sites/all/themes/nutrinfantil/js/libs/bootstrap.min.js"></script>
  <script src="sites/all/themes/nutrinfantil/js/libs/jquery.js"></script>
  <script src="sites/all/themes/nutrinfantil/js/libs/jquery.validate.js"></script>
</head>
<body>
  <!--Header-->
  <header<?php print $header_attributes; ?>>
    <div class="container">
      <div class="row">
        <!--redes sociales-->
        <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 u-redes">
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <nav class="navbar navbar-default menu-pag">
            <div class="container-fluid">
              <div class="navbar-header">
              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
              <?php endif; ?>
              </div>
              <!--menu-->
              <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse menu-ppal">
                <?php $menu = menu_navigation_links('main-menu');
                      print theme('links__menu_casabienestar', array('links' => $menu,'attributes' => array('class' => array('nav navbar-nav'))));
                    ?>
              </div>
            </div>
          </nav>
        </div>
      

      <!-- !Header Region -->
      <?php print render($page['header']); ?>

    </header>
  <!--/-Header-->
  <section class="container-fluid l-home">
    <div class="row">
      <!--slider-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider-imagenes">
        <div id="carousel" data-ride="carousel" class="carousel slide">
          <!--indicadores-->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1" class="active"></li>
            <li data-target="#carousel" data-slide-to="2" class="active"></li>
          </ol>
          <!--imagenes-->
          <div role="listbox" class="carousel-inner">
          <?php $block = module_invoke('slider_home', 'block_view','slider_home_nodos');
            print render($block['content']); 
          ?>
            <!--
            <div class="item slider-imagenes-img active"><img src="sites/all/themes/nutrinfantil/images/slider-imagen01.jpg" alt="">
              <div class="carousel-caption slider-imagenes-descripcion">
                <section>
                  <h3>Octubre 31/2015<strong>FIESTA DE DISFRACES CON LA FAMILIA</strong></h3>
                  <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.</p>
                </section>
                <h4 class="btn btn-redondo"><a href="#">Ver más</a></h4>
              </div>
            </div>
            <div class="item"><img src="sites/all/themes/nutrinfantil/images/slider-imagen01.jpg" alt="">
              <div class="carousel-caption slider-imagenes-img">
                <div class="slider-imagenes-descripcion">
                  <h3>Octubre 31/2015<strong>FIESTA DE DISFRACES CON LA FAMILIA</strong></h3>
                  <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.</p>
                </div>
                <h4 class="btn btn-redondo"><a href="#">Ver más</a></h4>
              </div>
            </div>
            <div class="item"><img src="sites/all/themes/nutrinfantil/images/slider-imagen01.jpg" alt="">
              <div class="carousel-caption slider-imagenes-img">
                <div class="slider-imagenes-descripcion">
                  <h3>Octubre 31/2015<strong>FIESTA DE DISFRACES CON LA FAMILIA</strong></h3>
                  <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.</p>
                </div>
                <h4 class="btn btn-redondo"><a href="#">Ver más </a></h4>
              </div>
            </div>
            <div class="item"><img src="sites/all/themes/nutrinfantil/images/slider-imagen01.jpg" alt="">
              <div class="carousel-caption slider-imagenes-img">
                <div class="slider-imagenes-descripcion">
                  <h3>Octubre 31/2015<strong>FIESTA DE DISFRACES CON LA FAMILIA</strong></h3>
                  <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.</p>
                </div>
                <h4 class="btn btn-redondo"><a href="#">Ver más</a></h4>
              </div>
            </div>
            <div class="item"><img src="sites/all/themes/nutrinfantil/images/slider-imagen01.jpg" alt="">
              <div class="carousel-caption slider-imagenes-img">
                <div class="slider-imagenes-descripcion">
                  <h3>Octubre 31/2015<strong>FIESTA DE DISFRACES CON LA FAMILIA</strong></h3>
                  <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.</p>
                </div>
                <h4 class="btn btn-redondo"><a href="#">Ver más</a></h4>
              </div>
            </div> -->
          </div>
          <!--icontroles-->
        </div>
      </div>
      <!--dona aquí-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 donar">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <h4>"LA FELICIDAD QUE SE VIVE, DERIVA DEL AMOR QUE SE DA"</h4>
              <h5>- Isabel Allende</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h4 class="btn btn-cuadrado"><a href="#">Dona aquí</a></h4>
            </div>
          </div>
        </div>
      </div>
      <!--contenido-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
          <div class="row">
            <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
                <?php print $content; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
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
  <script src="sites/all/themes/nutrinfantil/js/nutrinfantil.js"></script>
  <script src="sites/all/themes/nutrinfantil/js/validarForm.js"></script>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
  </script>
</body>