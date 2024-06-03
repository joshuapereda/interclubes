<style>
    thead{
        background-color: #F02323;
        color:white;
    }
</style>
<div>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| RESUMEN</h1>
    </div>
    <img src="<?php echo base_url(); ?>public/img/portada5.jpg" alt="">
</div>
 <br>
<div class="bg-image-resumen">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <h3 class="text-center"><?php echo $data[0]->equipo_local; ?></h3><img height="180px" src="<?php echo $data[0]->logo_local; ?>">
            </div>
            <div class="col-md-4">
            <?php $amarillo=""; if ($data[0]->cj == "SI") { $amarillo="text-amarillo"; }?>
                <h1 class="text-center <?php echo $amarillo; ?>"><?php echo $data[0]->result_local . " - " . $data[0]->result_visita; ?></h1>
                <h4 class="text-center">Resultado Final</h4>
                <?php if ($data[0]->cj == "SI") { ?>
                    <h3 class="text-center text-danger">CJ</h3>
                <?php }  ?>
                <h5 class="text-center">Fecha : <?php echo $data[0]->fecha.'  '; ?> &nbsp;  Hora: <?php echo $data[0]->hora; ?></h5>
                <h5 class="text-center">Fecha de Juego: <?php echo $data[0]->fecha_jue; ?></h5>
                <h4 class="text-center"><?php echo $data[0]->estadio; ?></h4><br>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-center"><?php echo $data[0]->equipo_visita; ?></h3><img height="180px" src="<?php echo $data[0]->logo_visita; ?>">
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h3 class="text-center"><?php echo $data[0]->equipo_local; ?></h3>       
        <table class="table t_alineacion">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>TITULARES</th>
                        <th>GOLES</th>
                        <th>TA</th>
                        <th>TR</th>
                        <th class="hidden-xs">CAMBIOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="n">12</p>
                        <p class="t">Zamudio Ángel Gustavo</p>
                        <p class="g">1</p>
                        <p class="ta">1</p>
                        <p class="tr">1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
        <h3 class="text-center"><?php echo $data[0]->equipo_visita; ?></h3>
        <table class="table t_alineacion">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>TITULARES</th>
                        <th>GOLES</th>
                        <th>TA</th>
                        <th>TR</th>
                        <th class="hidden-xs">CAMBIOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p>12</p>
                        <p>Zamudio Ángel Gustavo</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p class="hidden-xs"></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><br>
    <?php if ($data[0]->cj == "SI") { ?>
        <br>
        <h3 class="text-center"><span class="text-danger">CJ </span><?php echo $data[0]->observacion; ?></h3>
        <br>
    <?php }  ?>
</div>