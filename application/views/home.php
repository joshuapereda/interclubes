<?php $CI = &get_instance(); ?>
<!--
    <img class="img-fluid" src="<?php echo base_url() . "public/img/portada0.jpg"; ?>">
-->
<!-- Alex metio mano y la cago -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img class="d-block w-100 img-banner"  src="<?php echo base_url() . "public/img/portada5.jpg"; ?>" alt="First slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100 img-banner"  src="<?php echo base_url() . "public/img/portada1.jpg"; ?>" alt="Second slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100 img-banner" src="<?php echo base_url() . "public/img/portada.jpg"; ?>" alt="Third slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    -->
</div>

<!-- Fin Alex metio mano y la cago -->
<br>
<div class="" id="publicaciones">
    <br>
    <hr>
</div>
<h3 class="text-center">Publicaciones</h3>
<hr><br>
<div class="row">

    <?php foreach ($data['publicacion'] as $row) : ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" height="250" src="<?php echo $row->imagen; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->titulo; ?></h5>
                    <p class="card-text"><?php echo substr(strip_tags($row->texto), 0, 150); ?>...</p>
                    <a href="<?php echo base_url() . "publicacion/ver/" . $row->id; ?>" class="btn bg-secundario">Ver más ...</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div><br>
<div class="row bg-gris">
    <div class="col-md-8">
        <div class=" bg-gris"> <br>
            <h3 class="text-center">Noticias</h3>
            <hr>
            <?php foreach ($data['noticia'] as $row) : ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="item-image">
                            <img class="card-img-top" style="display: block;" src="<?php echo $row->imagen; ?>">
                            <div class="wp-tiles-byline">
                                <!--style="background-color: rgba(0, 0, 0, 0.7); color:#fff !important; max-height: 50%; overflow-wrap: break-word;" -->
                                <div class="wp-tiles-byline-wrapper">
                                    <a href="<?php echo base_url() . 'noticia/ver/' . $row->id; ?>">
                                        <h4 itemprop="name" class="wp-tiles-byline-title"><?php echo $row->titulo; ?> </h4>
                                    </a>
                                    <a href="<?php echo base_url() . 'noticia/ver/' . $row->id; ?>">
                                        <p class="card-text"><?php echo substr(strip_tags($row->texto), 0, 150); ?>...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <br>
    </div>

    <div class="col-md-4">
        <div id="tabla-posiciones">
            <br>
        </div>
        <h3 class="text-center">Tabla de Posiciones</h3>
        <hr><br>
        <table class="table-posicion t_general t_tabla_posiciones_short table-bordered">
            <thead>
                <tr class="bg-principal text-white">
                    <th></th>
                    <th></th>
                    <th>Equipo</th>
                    <th>PJ</th>
                    <th>PG</th>
                    <th>PE</th>
                    <th>PP</th>
                    <th>GF</th>
                    <th>GC</th>
                    <th>DF</th>
                    <th>PTOS</th>
                </tr>
            </thead>
            <tbody>
                <?php $cont = 0;
                foreach ($data['tabla'] as $row) {
                    $cont++; ?>
                    <tr>
                        <td class="text-right"><?php echo $cont; ?></td>
                        <td class="text-center"><img class="img-fluid" src="<?php echo $row->logo; ?>"></td>
                        <td><?php echo $row->Equipo; ?></td>
                        <td><?php echo $row->PJ; ?></td>
                        <td><?php echo $row->PG; ?></td>
                        <td><?php echo $row->PE; ?></td>
                        <td><?php echo $row->PP; ?></td>
                        <td><?php echo $row->GF; ?></td>
                        <td><?php echo $row->GC; ?></td>
                        <td><?php echo $row->DIF; ?></td>
                        <td><?php echo $row->PTS; ?></td>
                    </tr>
                <?php
            } ?>
        </table><br>
        <div id="ultimate_kickoff_fixture-5" class=" table t_general widget widget_ultimate_kickoff_fixture kode-widget">
            <br>

            <h3 class="text-center">Últimos Resultados</h3>
            <hr><br>
            <!-- <h6 class="kf_h5"><span>Liga1 – Fecha 05</span></h6> -->
            <div class="clear clearfix"></div>
            <div class="kode-sidebar">
                <div class="kf_border">
                    <div class="fixture">
                        <?php foreach ($data['resultados_cabecera'] as $r) { ?>
                            <div class="fecha-texto"><?php echo $CI->obtenerFechaEnLetra($r->fecha); ?></div>
                            <?php $resultados = $CI->getResultados($r->NRO_FECHA, $r->id_subcat);
                            foreach ($resultados as $row) { ?>
                                <div class="partido">
                                    <div class="hora"><?php echo $row->hora; ?></div>
                                    <div class="escudo"><img src="<?php echo $row->logo_local; ?>"></div>
                                    <div class="central">
                                        <div class="central-superior">
                                            <div class="nombre-local"><?php echo $row->equipo_local; ?></div>
                                            <div class="versus"><a href="<?php echo base_url(); ?>partido/resumen/<?php echo $row->id; ?>">
                                                    <?php echo $row->result_local . '-' . $row->result_visita; ?></a>
                                            </div>
                                            <div class="nombre-visita"><?php echo $row->equipo_visita; ?></div>
                                        </div>
                                        <div class="central-inferior">
                                            <a href="<?php echo base_url(); ?>partido/resumen/<?php echo $row->id; ?>" class="link_partido">Resumen</a>
                                        </div>
                                    </div>
                                    <div class="escudo"><img src="<?php echo $row->logo_visita; ?>"></div>
                                </div> <?php }
                            } ?>
                    </div>
                </div>
            </div>
        </div>
        </table><br><br>
        <?php if($data['ProximaFechasCabecera']!=null) {  ?>
        <div id="ultimate_kickoff_fixture-5" class=" table t_general widget widget_ultimate_kickoff_fixture kode-widget">
            <div id="prox-fecha"></div>
            <div class="clear clearfix"></div><br><br>
                            
            <!-- <h6 class="kf_h5"><span>Liga1 – Fecha 05</span></h6> -->
            <h3 class="text-center">Próximas Fechas</h3>
            <hr><br>
            <div class="kode-sidebar">
                <div class="kf_border">
                    <div class="fixture">
                        <?php foreach ($data['ProximaFechasCabecera'] as $r) { ?>
                            <div class="fecha-texto2"><?php if($r->fecha_jue=="1900-01-00"){
                                // $fecha_jue="";
                                $fecha =$CI->obtenerFechaEnLetra($r->fecha);
                                $fecha_aux=$r->fecha;
                            }else{
                                // $fecha="";                                
                                $fecha=$CI->obtenerFechaEnLetra($r->fecha_jue);    
                                $fecha_aux=$r->fecha_jue;                        
                            }
                                 echo $fecha; ?></div>
                            <?php $ProximaFechas = $CI->getFechaProximas($r->NRO_FECHA, $r->id_subcat,$fecha_aux);
                            foreach ($ProximaFechas as $row) { ?>
                                <div class="partido">
                                    <div class="hora"><?php echo $row->hora; ?></div>
                                    <div class="escudo"><img src="<?php echo $row->logo_local; ?>"></div>
                                    <div class="central">
                                        <div class="central-superior">
                                            <div class="nombre-local"><?php echo $row->equipo_local; ?></div>
                                            <div class="versus"><a href="<?php echo base_url(); ?>partido/resumen/<?php echo $row->id; ?>">
                                                    <?php echo $row->result_local . '-' . $row->result_visita; ?></a>
                                            </div>
                                            <div class="nombre-visita"><?php echo $row->equipo_visita; ?></div>
                                        </div>
                                        <div class="central-inferior">
                                            <a href="<?php echo base_url(); ?>partido/resumen/<?php echo $row->id; ?>" class="link_partido">Resumen</a>
                                        </div>
                                    </div>
                                    <div class="escudo"><img src="<?php echo $row->logo_visita; ?>"></div>
                                </div>
                            <?php }
                    } ?>
                    </div>
                </div>
            </div>
        </div>
                <?php } ?>
    </div>
</div>
<script>
    $("#cbocategoria").change(function(e) {
        var id_cat = $("#cbocategoria").val();
        var url = "<?php echo base_url(); ?>home/index/" + id_cat;
        window.location.href = url;
    });
</script>