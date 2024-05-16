<html>
<style>
    .text-center {
        text-align: center;
    }

    .logo {
        float: right;
    }

    td {
        border: 1px solid;
        font-size: 0.8rem;
    }
</style>
<img width="200" src="<?php echo base_url(); ?>public/img/logo.jpg">
<img class="logo" width="90" src="<?php echo $data[0]->logo; ?>">
<h3 class="text-center"><?php echo $data[0]->descripcion; ?></h3>
<h3>Categoría: <?php echo $data[0]->categoria; ?></h3>
<table class="table table-bordered">
    <tr>
        <td>Documento</td>
        <td>Nombres</td>
        <td>Fecha Nac.</td>
        <td>Socio Nro.</td>
    </tr>
    <?php foreach ($data as $row) {   ?>
        <tr>
            <td><?php echo $row->dni; ?></td>
            <td><?php echo $row->apellidos_nombres; ?></td>
            <td><?php echo $row->fecha_nacimiento; ?></td>
            <td><?php echo $row->nro_socio; ?></td>
        </tr>
    <?php   } ?>
</table>

</html>