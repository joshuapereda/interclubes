<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
<script src=<?php echo base_url()."js/admin/redes.js";?>></script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Redes Sociales
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">redes sociales</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <button id="btn-redes" class="btn btn-primary btn-lg">Guardar</button>
            <form id="form_redes" action="<?php echo base_url(); ?>admin/addRedes" method="POST">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Titulo
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <label>Facebook</label>                        
                        <input type="text" id="facebook" class="form-control" value="<?php if(count($data)>0){  echo $data[0]->link ;}?>">
                    </div>
                    <div class="box-body pad">
                        <label>Instagram</label>                        
                        <input type="text" id="instagram" class="form-control" value="<?php if(count($data)>0){ echo $data[1]->link ;}?>">
                    </div>
                    <div class="box-body pad">
                        <label>Youtube</label>                        
                        <input type="text" id="youtube" class="form-control" value="<?php if(count($data)>0){ echo $data[2]->link ;}?>">
                    </div>
                    <div class="box-body pad">
                        <label>Twitter</label>                        
                        <input type="text" id="twitter" class="form-control" value="<?php if(count($data)>0){ echo $data[3]->link ;}?>">
                    </div>
                    <div class="box-body pad">
                        <label>Flickr</label>                        
                        <input type="text" id="flickr" class="form-control" value="<?php if(count($data)>0){ echo $data[4]->link ;}?>">
                    </div>
                </div>
                <!-- /.box -->
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
<!-- /.content -->
<script>
    
</script>