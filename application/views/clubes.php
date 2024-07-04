<style>
 body {
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.team-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    padding: 40px;
}

.team {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);    
    align-items: center;
    padding: 20px;
}

.team-logo {
    width: 80px; 
    height: 80px;
    border-radius: 10px 0 0 10px;
    object-fit: cover; 
}

.team-info {
    padding-left: 70px; 
    box-sizing: border-box;
}

.team-info h2 {
    margin: 0;
    margin-bottom: 10px;
    font-size: 24px;
    color: #333;
}

.view-team {
    background-color: #FF0000;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    font-size: 13px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.view-team:hover {
    background-color: black;
}
@media screen and (max-width: 576px){
    .team {
        text-align:center;
    }
    button.view-team{
        width: 140px;
        font-size: 10px;
    }
    .team-logo {
    width: 50%; 
    height: auto;
    border-radius: 10px 0 0 10px;
    object-fit: cover; 
}
.team-info h2 {
    margin: 0;
    margin-bottom: 10px;
    font-size: 20px;
    color: #333;
}
@media screen and (max-width: 428px){
    .team {
        text-align:center;
    }
    button.view-team{
        width: 120px;
        font-size: 10px;
    }
    .view-team{
        font-size: 10px;
    }
    .team-logo {
    width: 50%; 
    height: auto;
    border-radius: 10px 0 0 10px;
    object-fit: cover; 
}
.team-info h2 {
    margin: 0;
    margin-bottom: 10px;
    font-size: 15px;
    color: #333;
}
}
}
</style>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| CLUBES</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>
<div class="team-container">    
    <h2>CATEGORÍA <?= $data[0]->subcategoria ?></h2>
    <div class="row">    
<?php foreach ($data as $row): ?>    
        <div class=" col-md-3 mb-5">
        <div class="p-5 team">
        <img  src="<?= $row->logo ?>" alt="Imagen 1" class="card-img team-logo">
        <label><b><?= $row->nombre ?></b></label> <br><br>
            <div class="text-center">                
                <a href="<?php echo base_url(); ?>jugadores?id_equipo=<?= $row->id_club ?>&id_subcat=<?= $row->id_subcategoria ?>"><button class="view-team" >VER EQUIPO</button></a>
            </div>
        </div>
        </div>
<?php endforeach; ?>
</div>
</div>
</div>