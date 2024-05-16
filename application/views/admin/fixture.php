<!-- Content Wrapper. Contains page content -->
<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
<script src=<?php echo base_url() . "js/admin/fixture.js"; ?>></script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fixture
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Noticias</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">            
            <button id="btn-publicacion" class="btn btn-primary btn-lg">Guardar</button>
            <form action="<?php echo base_url(); ?>/admin/AddFixture" method="POST">
            <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Categoría </h3>
                        <div class="box-body pad">
                            <select id="categoria">
                                <?php foreach ($data as $row) {  ?>
                                    <option value="<?php echo $row->id_categoria; ?>"> <?php echo $row->nombre; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Fixture
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <input type="file" class="form-control" name="fixture" id="fixture" maxlength="256" placeholder="fixture">                   
                </div>
            </div>
            </form>
            <!-- /.box -->
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
<div class="modal" id="modal-agregado">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Fixture</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Agregado correctamente
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btn-cerrar">Close</button>
            </div>

        </div>
    </div>
</div>