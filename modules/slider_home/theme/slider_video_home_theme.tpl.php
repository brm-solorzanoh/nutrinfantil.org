<?php 
  foreach ($variables['nodos'] as $value) {
    //var_dump($value->field_id_video['und'][0]['value']);
  }
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 multimedia">
              <!--multimedia-->
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 u-title u-title-izq">
                  <h2>MULTIMEDIA</h2>
                  <div class="u-cuadrito u-cuadrito-rojo"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider-video">
                  <div id="carousel-example-generic" data-ride="carousel" class="carousel slide">
                    <!--indicadores-->
                    <ol class="carousel-indicators slider-video-indicadores">
                      <?php $aux = 0; foreach ($variables['nodos'] as $values) { ?>
                      <li data-target="#carousel-example-generic" data-slide-to="<?php print $aux; ?>" class="active"></li>
                      <?php $aux++;} ?>
                    </ol>
                    <!--imagenes-->
                    <div role="listbox" class="carousel-inner slider-video-videos">
                      <?php
                       $cont = 0;
                       foreach ($variables['nodos'] as $value1) { 
                         if($cont == 0){ ?>
                        <div class="item active">
                           <iframe id="ytplayer" type="text/html" width="640" height="390" src='http://www.youtube.com/embed/<?php print $value1->field_id_video["und"][0]["value"]; ?>?autoplay=0' frameborder="0" ></iframe>
                        </div>
                         <?php }else{?>
                        <div class="item">
                          <iframe id="ytplayer" type="text/html" width="640" height="390" src='http://www.youtube.com/embed/<?php print $value1->field_id_video["und"][0]["value"]; ?>?autoplay=0' frameborder="0" ></iframe>
                        </div>
                        <?php } $cont++; } ?>
                    </div>
                    <!--controles-->
                  </div>
                </div>
              </div>
              <!--iframe facebook-->
              <div class="col-lg-4 col-md-4 hidden-sm hidden-xs iframe-fb">
                <div data-href="https://www.facebook.com/SoyNutrinfantil" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true" class="fb-page">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/SoyNutrinfantil"><a href="https://www.facebook.com/SoyNutrinfantil">Nutrinfantil</a></blockquote>
                  </div>
                </div>
              </div>
            </div>