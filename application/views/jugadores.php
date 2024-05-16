<div class="container jugadores">
    <br>
    <h3 class="text-center"><?php echo $data[0]->descripcion; ?>
        <img width="60" src="<?php echo $data[0]->logo; ?>"></h3> <br>
    <a class="btn btn-primary" target="_blank" href="<?php echo base_url() . 'reportes/index/' . $data[0]->id_club . '/' . $data[0]->id_subcat; ?>">Exportar a PDF</a>
    <div class="row">
        <?php
        foreach ($data as $row) { ?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://cdne.elbocon.pe/thumbs/uploads/img/2019/04/18/cristiano-ronaldo-dejara-juventus-tras-eliminaci-184828-439979-jpg_600x0.jpg" alt="Card image cap">
                    <div class="card-body2">
                        <h5 class="card-title"><?php echo $row->apellidos_nombres; ?></h5>
                        <p class="card-text">Documento: <?php echo $row->dni; ?></p>
                        <p class="card-text">Posición: <?php echo $row->posicion; ?></p>
                        <p class="card-text">Nacio: <?php echo $row->fecha_nacimiento; ?></p>
                        <p class="card-text">Nro.de Socio: <?php echo $row->nro_socio; ?></p>
                        <p class="card-text">Jug. Exp: <?php echo $row->profesional; ?></p>
                        <p class="card-text">Socio Dep: <?php echo $row->socio; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>