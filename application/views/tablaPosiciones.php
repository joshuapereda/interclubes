<?php $CI = &get_instance(); ?>
<style>
        .table-posiciones, .table td, .table th{font-size:0.75em;  padding: 0.25rem;} 
        h4{font-size:2em;}
        h6{font-size:1.50em;
            color: #7A767A;}
        .card-header {padding: 0.05rem 1.05rem;}
        .font-medium{
            font-size:0.45em;
        }
        .row-border{border-bottom:1px solid #f1f1f1;    margin-right: 0px;margin-left: 0px;}
        
        .card-body .row:nth-of-type(odd) div {
            background-color:rgba(0,0,0,.05);
        }
        .card-body .row:nth-of-type(even) div {
        background: #FFFFFF;
        }
        .font-xs{
            font-size:0.4em; 
        }
        .tabla_posiciones{
            font-family:Arial, Helvetica, sans-serif !important;
        }
</style>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| TABLA DE POSICIONES</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>
<br><br><br>
<div class="container mb-3">
        <div class="row">
            <div class="col-md-12">
                <?php foreach($categorias as $categoria) :
                //var_dump($categoria);exit;
                   $tabla_posiciones = $CI->getTablePosicion($categoria->id);
                ?><br>  
                <div class="mt-5 tabla_posiciones">
                    <h4 class="text-center"><b>CATEGORÍA <?=  $categoria->categoria; ?></b><br>                    
                    <br>
                    <div class="card-header bg-danger d-none d-sm-block">
                        <div class="row  font-medium text-white font-weight-bold">
                            <div class="col-md-1">POS.</div>
                            <div class="col-md-3 p-0"><h5 style="font-size:1em;"><strong>EQUIPOS</strong></h5></div>
                            <div class="col-md-1">PJ</div>
                            <div class="col-md-1">PG</div>
                            <div class="col-md-1">PE</div>
                            <div class="col-md-1">PP</div>
                            <div class="col-md-1">GF</div>
                            <div class="col-md-1">GC</div>
                            <div class="col-md-1">DIF</div>
                            <div class="col-md-1">PTS</div>
                        </div>
                    </div>
                    <div class="card-body font-xs p-0  mb-5 d-none d-sm-block tabla_posiciones">
                        <?php $pos = 0;  foreach ($tabla_posiciones as $row) :  ?>
                            <div class="row row-border">
                                <div class="col-md-1 text-center"><?= ++$pos; ?></div>   
                                <div class="col-md-3 p-0 text-left"><img width="32.95px" src="<?= $row->logo ?>"> <label class="ml-1"><?= $row->Equipo ?></label></div>
                                <div class="col-md-1"><?= $row->PJ ?></div>                                                                 
                                <div class="col-md-1"><?= $row->PG ?></div>                                                                 
                                <div class="col-md-1"><?= $row->PE ?></div>
                                <div class="col-md-1"><?= $row->PP ?></div>
                                <div class="col-md-1"><?= $row->GF ?></div>
                                <div class="col-md-1"><?= $row->GC ?></div>
                                <div class="col-md-1"><?= $row->DIF ?></div>
                                <div class="col-md-1"><?= $row->PTS ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>    
            </div>
        </div>
    </div>

