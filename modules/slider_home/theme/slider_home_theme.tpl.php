<?php
$imag = array();
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider-imagenes">
	<div id="carousel" data-ride="carousel" class="carousel slide">
          <!--indicadores-->
          <ol class="carousel-indicators">
          	<?php $aux = 0; foreach ($variables['nodes'] as $values) { ?>
          	  <li data-target="#carousel" data-slide-to="<?php print $aux; ?>" class="active"></li>
          	<?php $aux++;} ?>
          </ol>
          <!--imagenes-->
          <div role="listbox" class="carousel-inner">
            <?php
            $cont = 0;
            foreach ($variables['nodes'] as $value) {

            	if($cont == 0){ ?>
            		<div class="item slider-imagenes-img active"><img src="<?php print file_create_url($value->field_image['und'][0]['uri']); ?>" alt="" />
	             <?php }else{?>
	            	<div class="item slider-imagenes-img"><img src="<?php print file_create_url($value->field_image['und'][0]['uri']);?>" alt="" />
	            <?php } ?>
	              <div class="carousel-caption slider-imagenes-descripcion">
	                <section>
	                  <h3><?php
                      if(isset($value->field_fecha_evento_['und'][0]['value'])){
	                  	$date = new DateTime($value->field_fecha_evento_['und'][0]['value']);
						          print t($date->format('F d/Y'));
                      }
	           			?><strong><?php print $value->title?></strong></h3>
	                  <p><?php print $value->field_resumen['und'][0]['value']?></p>
	                </section>
	                <h4 class="btn btn-redondo"><a href="<?php print drupal_get_path_alias('node/'.$value->nid); ?>">Ver más</a></h4>
	              </div>
	            </div>
            <?php $cont++;} ?>           
          </div>
          <!--icontroles-->
        </div>
</div>