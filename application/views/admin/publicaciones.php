<!-- Content Wrapper. Contains page content -->
<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
<script src=<?php echo base_url()."js/admin/publicacion.js";?>></script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Publicaciones
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Publicaciones</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <button id="btn-publicacion" class="btn btn-primary btn-lg">Guardar</button>
            <form action="<?php echo base_url(); ?>/admin/AddPublicacion" method="POST">

                <div class="box box-info">
                    <div class="box-header">
                        <h3   class="box-title">Titulo
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <input maxlength="100" type="text" id="titulo-publicacion" class="form-control">
                    </div>
                </div>
                
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Imágen
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <input type="file" class="form-control" name="imagen" id="imagen" >
                        <input type="hidden" class="form-control" id="imagenactual">
                        <div class="col-md-12"><img src="" class="img-responsive" id="imagenmuestra"></div>
                    </div>
                </div>
                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Publicacion
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <textarea name="texto" id="textos" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
<!-- /.content -->
<div class="modal" id="modal-agregado">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Publicación</h4>        
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