<?php
hide($content['comments']);
hide($content['links']);
$date = new DateTime($content["body"]["#object"]->field_fecha_evento_['und'][0]['value']);
?>
<body>
  <!--/-Header-->
  <section class="container-fluid l-detalle-evento">
    <div class="row">
      <!--articulo-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 articulo-descripcion">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 articulo-descripcion-imagen">
                <?php print theme('image_style', array('style_name' => 'large', 'path' => $content["body"]["#object"]->field_image['und'][0]['uri'], 'getsize' => FALSE, 'attributes' => array('class' => 'loadPageOpt'))); ?>
                <h3><?php print $date->format('d/M/Y'); ?></h3>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 articulo-descripcion-corta">
                <h4><?php print $content["body"]["#object"]->field_resumen['und'][0]['value']; ?></h4>
                <p>- autor de la frase</p>
                <div class="u-redes u-redes-morado u-redes-articulo">
                  <h3>Compartir</h3>
                  <ul>
                    <!--Twitter-->
                    <li class="active"><a href="https://www.twitter.com/"><span class="icon-twitter"></span></a></li>
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
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 articulo">
              <div class="u-title u-title-izq">
                <h2>Subtitulo de la noticia</h2>
                <div class="u-cuadrito u-cuadrito-rojo"></div>
              </div>
              <?php print $content["body"]["#object"]->body['und'][0]['value']; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
      <div<?php print $content_attributes; ?>>
    <?php //print render($content); ?>
  </div>
  </section>
</body>