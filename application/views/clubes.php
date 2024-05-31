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
    display: flex;
    align-items: center;
    padding: 20px;
    width: 100%;
    height: 360px;
    max-width: 890px;
}

.team-logo {
    width: 30%; 
    height: auto;
    border-radius: 10px 0 0 10px;
    object-fit: cover; 
}

.team-info {
    width: 50%; 
    display: flex;
    flex-direction: column;
    align-items: flex-start;
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
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.view-team:hover {
    background-color: black;
}
@media screen and (max-width: 576px){
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
.team-info {
    width: 30%; 
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 20px; 
    box-sizing: border-box;
}
.team-info h2 {
    margin: 0;
    margin-bottom: 10px;
    font-size: 20px;
    color: #333;
}
@media screen and (max-width: 428px){
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
.team-info {
    width: 30%; 
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 20px; 
    box-sizing: border-box;
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
    <h2>CATEGORÍA <?= $data[0]->categoria; ?></h2>
<?php foreach($data as $row): ?>
        <div class="team">
        <img src="<?= $row->logo; ?>" alt="Imagen 1" class="card-img team-logo">
            <div class="team-info">
                <h2><?= $row->nombre; ?></h2> <br>
                <a href="<?php echo base_url(); ?>jugadores?id_equipo=<?= $row->id_club; ?>&id_subcat=<?= $row->id_subcategoria; ?>"><button class="view-team" >VER EQUIPO</button></a>
            </div>
        </div>
<?php endforeach; ?>
</div>
</div>