<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .contenedorrr {
    position: relative;
    width: 26%; /* Ajusta el ancho al 24% para que 4 elementos entren en una fila */
    margin-bottom: 35px; /* Espacio inferior entre los contenedores */
    overflow: hidden; 
  }

  .contenedorrr img {
    width: 100%;
    display: block; 
    max-height: 450px; 
  }

  .textooo {
    position: absolute;
    top: 80%; 
    left: 50px;
    color: white !important;
    z-index: 1;
  }

  .textooo-img {
    font-size: 30px;
    font-family: "Roboto", arial, sans-serif;
    font-weight: 700;
    font-style: normal;
  }

  .contenedorrr img {
    width: 100%; 
    display: block;
    max-height: 400px; 
  }

  .contenedorrr::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7)); /* Color degradado */
    z-index: 0; 
  }
  .cl{
    background-color: #7D7272;
  }
  @media screen and (max-width: 428px) {
    .textooo-img{
        font-size: 13px;
    }
    .textooo{
        left: 20px;
    }
  }
</style>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| CATEGORIA</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>
<br>
<div class="container">
  <?php foreach($data as $row): ?>
    
    <div class="contenedorrr">
    <a href="clubes?id_categoria=<?= $row->id_subcategoria; ?>">
      <div class="textooo">
        <h1 class="textooo-img cl"><?= $row->subcategoria; ?></h1>
      </div>
      <img src="public/img/login.jpg" alt="">
      </a>
    </div>
   
  <?php endforeach; ?>
</div>