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
                        <td>12</td>
                        <td>Zamudio Ángel Gustavo</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Garro Luis Fernando</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td class="hidden-xs">Salió por el 15</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Carranza Miguel Alexander</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Rivera José Daniel</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Cedrón Víctor Andrés</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs">Salió por el 8</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Gularte Gerardo Sebastian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs">Salió por el 11</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Morales Juan Gustavo Waldemar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Rabanal Jesus Giancarlos</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Rentería Edy</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Dioses David Josue</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Mimbela Willyan Junior</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
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
                        <td>12</td>
                        <td>Heredia Manuel Alexander</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Noronha Osnar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Álvarez Luis Enrique</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Villamarín Joao de Jesús</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs">Salió por el 13</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>López Andres Alejandro</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Vargas Josimar Hugo</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Jiménez Camilo César</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Moreno Kevin Manuel</td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Benites Luis Enrique</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs">Salió por el 8</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Lencinas Joaquín Adán</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs"></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>Manicero Diego Ariel</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="hidden-xs">Salió por el 20</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <?php if ($data[0]->cj == "SI") { ?>
        <br>
        <h3 class="text-center"><span class="text-danger">CJ </span><?php echo $data[0]->observacion; ?></h3>
        <br>
    <?php }  ?>
</div>