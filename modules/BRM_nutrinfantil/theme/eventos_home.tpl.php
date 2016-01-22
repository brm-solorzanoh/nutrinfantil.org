<?php
foreach ($variables['nodes'] as $value) {
	$date = new DateTime($value->field_fecha_evento_['und'][0]['value']);

}
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 actividades">
              <!--videos-->
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 u-title u-title-izq">
                  <h2>EVENTOS</h2>
                  <div class="u-cuadrito u-cuadrito-azul"></div>
                </div>
                <!--caja-->
                <?php foreach ($variables['nodes'] as $values) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="u-caja-video">
                    <!--video+fecha-->
                    <section>
                      <!--fecha-->
                      <div class="u-pin-fecha">
                        <h5><?php print $date->format('d'); ?></h5><small><?php print strtoupper($date->format('M')); ?></small>
                      </div>
                      <!--video-->
                      <a href="<?php print drupal_get_path_alias('node/'.$values->nid); ?>"><div class="video"><?php print theme('image_style', array('style_name' => 'ni_283x160_', 'path' => $value->field_image['und'][0]['uri'], 'getsize' => FALSE, 'attributes' => array('class' => 'loadPageOpt'))); ?></div></a>
                    </section>
                    <!--descripción-->
                    <div class="descripcion">
                      <p><?php print $value->field_resumen['und'][0]['value']; ?></p>
                    </div>
                  </div>
                </div>
                <?php }?>
              </div>
              <!--¿cómo ayudar?-->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ayudar">
                <div class="u-title u-title-centro">
                  <h2>¿CÓMO AYUDAR?</h2>
                  <div class="u-cuadrito u-cuadrito-rojo"></div>
                </div>
                <p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero.</p>
                <h4 class="btn btn-redondo btn-redondo-azul"><a href="como-puedo-ayudar">EMPEZAR</a></h4>
              </div>
              <!--frase-->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 frase">
                <h3>NUESTROS RESULTADOS, TRANSFORMAN SUS VIDAS</h3>
              </div>
            </div>