<style>
    #ultimate_kickoff_fixture-5 {
        margin: 0 auto;
        margin-top: 50px;
    }

    .fixture {
        max-width: 100%;
    }

    .fecha-texto2, .hora, .central-superior, .central-inferior, .escudo img {
        display: block;
        text-align: center;
    }

    .partido {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 1px;
    }

    .central {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .central-superior {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .versus a {
        text-decoration: none;
        color: inherit;
    }

    .nombre-local, .nombre-visita {
        margin-top: 60px 0px;
    }

    .link_partido {
        margin-top: 10px;
        text-decoration: none;
        color: blue;
    }

    .contenedorr img {
        width: 100%;
        height: auto;
    }

    .textoo h2 {
        text-align: center;
        font-size: 1.5em;
    }

    @media (min-width: 768px) {
        .partido {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .central {
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .central-superior {
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .nombre-local, .nombre-visita {
            margin: 0 10px;
        }

        .link_partido {
            margin-top: 0;
        }
    }

    @media (max-width: 767px) {
        #ultimate_kickoff_fixture-5 {
            width: 100%;
        }

        .nombre-local, .nombre-visita {
            font-size: 10px;
        }
        .central-inferior a { margin-right: 0px; color:#337ab7;  }
        .fixture .central-superior { display: block; width: 100%; float: left; padding-top: 4px;}
        .nombre-visita { margin-left: 25px;}
        .versus {  margin-left: 5px;}
        .versus a { padding-right: 200px;}
        .fixture .central-superior .nombre-local { display: block; width: 43%; float: left; text-align: left; font-size: 12px; padding-right: 4px; box-sizing: border-box;}
    }
    .fixture .partido { display: block; width: 100%; float: left; text-align: center; border-width: 0px 0px 1px 0px;
	border-style: solid; border-color: rgba(0, 0, 0, 0.1); padding-top: 5px; padding-bottom: 5px; background-color: white;}
.fixture .central { display: block; width: 70%; float: left;}
.fixture .central-superior { display: block; width: 100%; float: left; padding-top: 4px;}
.fixture .central-inferior { display: block; width: 100%; float: left; line-height: 0.75; }
.fixture .central-inferior a { color:#337ab7;  }
.central-inferior a { margin-right: 40px; color:#337ab7;  }
.fixture .hora { display: block; width: 10%; float: left; padding-top: 8px; padding-left: 3px; padding-right: 3px; box-sizing: border-box; font-size: 11px;}
.fixture .escudo{ display: block; width: 10%; float: left; padding: 4px; box-sizing: border-box;}
.fixture .escudo img { height: auto; max-width: 40px; width: 100%; min-width: 30px;}
.fixture .central-superior .nombre-local { display: block; width: 43%; float: left; text-align: left; font-size: 12px; padding-right: 4px; box-sizing: border-box;}
.fixture .central-superior .versus { display: block; width: 14%; float: left; font-weight: bold;}
.fixture .central-superior .versus a {  font-size: 12px;}
.versus a { margin-right: 83px;}
.fixture .central-superior .nombre-visita { display: block; width: 30% !important; float: left; text-align: right; font-size: 12px; padding-right: 4px; box-sizing: border-box;}
.fixture .link_partido { display: block; font-size: 12px; }

</style>

<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| RESULTADOS</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>
<br>
<?php $CI = &get_instance(); ?>
<div class="row">
    <div class="container">
        <div id="ultimate_kickoff_fixture-5" class="table t_general widget widget_ultimate_kickoff_fixture kode-widget">
            <div class="clear clearfix"></div>
            <div class="kode-sidebar">
                <div class="kf_border">
                    <div class="fixture">
                        <?php foreach ($data as $r) { ?>
                            <div class="fecha-texto2"><?php echo $CI->obtenerFechaEnLetra($r->fecha); ?></div>
                            <?php
                            $ProximaFechas = $CI->getResultadosAll($r->NRO_FECHA, $r->id_subcat);
                            foreach ($ProximaFechas as $row) { ?>
                                <div class="partido">
                                    <div class="hora"><?php echo $row->hora; ?></div>
                                    <div class="escudo"><img src="<?php echo $row->logo_local; ?>"></div>
                                    <div class="central">
                                        <div class="central-superior">
                                            <div class="nombre-local"><?php echo $row->equipo_local; ?></div>
                                            <div class="versus ">
                                                <a href="<?php echo base_url(); ?>partido/resumen/<?php echo $row->id; ?>">
                                                    <?php echo $row->result_local . '-' . $row->result_visita; ?>
                                                </a>
                                            </div>
                                            <div class="nombre-visita"><?php echo $row->equipo_visita; ?></div>
                                        </div>
                                        <div class="central-inferior">
                                            <a href="<?php echo base_url(); ?>partido/resumen/<?php echo $row->id; ?>" class="link_partido">Resumen</a>
                                        </div>
                                    </div>
                                    <div class="escudo"><img src="<?php echo $row->logo_visita; ?>"></div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<script>
    $("#cbocategoria").change(function(e) {
        var id_cat = $("#cbocategoria").val();
        var url = "<?php echo base_url(); ?>resultados/index/" + id_cat;
        window.location.href = url;
    });
</script>
