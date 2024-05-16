<section id="galeria">
    <header>
        <h1 class="titulo_club centrar-texto">Categoria por Clubes</h1>
    </header>
    <?php foreach($data as $row){   ?>
    <article>
        <a href="<?php echo base_url().'equipo/ver/'.$row->id; ?>">  <!-- target="_blank" -->
            <figure class="no_txt_corte">
                <img src="<?php  echo $row->logo;?>" />
                <figcaption class="centrar-texto">
                <?php  echo $row->descripcion; ?>
                </figcaption>
            </figure>
        </a>
    </article>
    <?php }?>
</section>
<script>
    $("#cbocategoria").change(function(e) {
        var id_cat = $("#cbocategoria").val();
        var url = "<?php echo base_url(); ?>equipo/index/" + id_cat;
        window.location.href = url;
    });
</script>