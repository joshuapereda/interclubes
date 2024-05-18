<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| CLUBES</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div><br>
<?php $CI = &get_instance(); ?>
<div class="row">
    <div id="ultimate_kickoff_fixture-5" class=" table t_general widget widget_ultimate_kickoff_fixture kode-widget">
        <div class="clear clearfix"></div>
        <div class="kode-sidebar">
            <div class="kf_border">
                <div class="kode-sidebar">
                    <div class="kf_border">
                        <div class="fixture">
                            <?php foreach ($data as $r) { ?>
                                <div class="fecha-texto2"><?php echo $CI->obtenerFechaEnLetra($r->fecha); ?></div>
                                <?php $ProximaFechas = $CI->getResultadosAll($r->NRO_FECHA, $r->id_subcat);
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
        </div>
    </div>
</div>
<script>
    $("#cbocategoria").change(function(e) {
        var id_cat = $("#cbocategoria").val();
        var url = "<?php echo base_url(); ?>resultados/index/" + id_cat;
        window.location.href = url;
    });
</script>