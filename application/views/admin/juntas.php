<!-- Content Wrapper. Contains page content -->
<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
<script src=<?php echo base_url() . "js/admin/links.js"; ?>></script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Junta Directiva
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Junta Directiva</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">            
            <button id="btn-publicacion" class="btn btn-primary btn-lg">Guardar</button>
            <form action="<?php echo base_url(); ?>/admin/AddLink" method="POST">            
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Junta Directiva
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <input type="file" class="form-control" name="link" id="link" maxlength="256" placeholder="Junta Directiva">
                    <input type="hidden"  name="link_id" id="link_id" value="2">                   
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
                <h4 class="modal-title">Junta Directiva</h4>
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