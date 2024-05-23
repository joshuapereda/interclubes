<nav class="navbar navbar-expand-lg navbar-light nav-transparent menu-pc" id="navbarNavDropdown">
    <div class="col-md-5 text-left">
        <a class="text-left" href="<?php echo base_url(); ?>">
            <img class="img-fluid menu-logo" src="<?php echo base_url() . 'public/img/logo_inter_clubes.png'; ?>">
        </a>
    </div>


    <div class="display_block text-center">
        <ul class="navbar-nav float-right">


            <li class="nav-item">
                <a class="nav-link link-hover text-uppercase tipografia" href="<?php echo base_url(); ?>">Inicio </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link link-hover dropdown-toggle tipografia" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nosotros
                </a>
                <div class="dropdown-menu color-texto" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>juntaDirectiva">Junta Directiva</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>proposito">Propósito</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>noticias">Noticias</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link link-hover dropdown-toggle tipografia" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=  $torneo[0]->Nombre; ?>
                </a>
                <div class="dropdown-menu color-texto" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>categoria">Categorías</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>clubes">Clubes</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>bases">Bases</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>resultados">Resultados</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>tablaPosiciones">Tabla de posiciones</a>
                    <a class="dropdown-item color-texto" href="">Estadísticas</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle tipografia" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Campeonatos
                </a>
                <div class="dropdown-menu color-texto" aria-labelledby="navbarDropdownMenuLink">
                    
                    <ul class="show" aria-labelledby="navbarDropdownMenuLink">
                   <!-- <a class="dropdown-item color-texto" href="">Clubes</a>-->
                   <?php foreach($torneosAnteriores as $row): ?> 
                   <li class="nav-item dropdown dropdown-submenu">
                        <a class="dropdown-item"><?= $row->Nombre; ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="nav-item dropdown dropdown-submenu">
                                <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>categoria">Categorías</a>
                                <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>clubes">Clubes</a>
                                <a class="dropdown-item color-texto" href="#">Bases</a>
                                <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>resultados">Resultados</a>
                                <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>tablaPosiciones">Tabla de posiciones</a>
                                <a class="dropdown-item color-texto" href="#">Estadísticas</a>
                            </li>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $redes[0]->link; ?>><i class="fa fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $redes[1]->link; ?>><i class="fa fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo $redes[2]->link; ?>><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>
    </div>
</nav>


<nav style="display: none;" class="navbar navbar-expand-lg navbar-dark bg-black justify-content-sm-start  menu-mobile">
  
  <a class="navbar-brand order-0 order-lg-0 ml-lg-0 mr-2" href="<?php echo base_url(); ?>">
    <img class="img-fluid logo-menu-mobile" src="<?php echo base_url() . 'public/img/logo_inter_clubes.png'; ?>">  
  </a>
  <button class="navbar-toggler align-self-start float-right mxy-5" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse bg-dark p-3 p-lg-0 mt-lg-0 justify-content-lg-end  d-flex flex-column flex-lg-row flex-xl-row mobileMenu onRight" id="navbarSupportedContent">
    <ul class="navbar-nav align-self-stretch">
      <li class="text-right">
        <a class="h1 navbar-toggler navbar-toggler-close" type="button"><i class="fa fa-close text-white"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nosotros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>juntaDirectiva">Junta Directiva</a>
            <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>proposito">Propósito</a>
            <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>noticias">Noticias</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?=  $torneo[0]->Nombre; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item color-texto" href="">Categorías</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>clubes">Clubes</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>bases">Bases</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>resultados">Resultados</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>tablaPosiciones">Tabla de posiciones</a>
                    <a class="dropdown-item color-texto" href="">Estadísticas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Campeonatos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item color-texto" href="">Categorías</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>clubes">Clubes</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>bases">Bases</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>resultados">Resultados</a>
                    <a class="dropdown-item color-texto" href="<?php echo base_url(); ?>tablaPosiciones">Tabla de posiciones</a>
                    <a class="dropdown-item color-texto" href="">Estadísticas</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>
<script>
    $(document).ready(function(){
  var fixHeight = function(){
    $(".navbar-nav").css("max-height",document.documentElement.clientHeight -150);
  }
  fixHeight();
  $(window).resize(function(){
   fixHeight();
  });
  $(".navbar .navbar-toggler").on("click",function(){
    fixHeight();
  });
  $(".navbar-toggler, .overlay").on("click",function(){
    $(".mobileMenu, .overlay").toggleClass("open");
  });
});
</script>