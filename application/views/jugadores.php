<style>
   .center-container {
  display: flex;
  justify-content: center;
  padding: 0 20%; 
  margin-top: 50px; 
}

.card-container {
  display: flex;
  justify-content: space-between;
}

.card {
  width: calc(33.33% - 20px);
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 8px;
  margin: 10px;
  overflow: hidden;
}

.card-img {
  width: 100%;
  height: auto;
}

.card-content {
  padding: 20px;
}

.card-title {
  margin-top: 0;
}

.card-text {
  margin-bottom: 15px;
}


/** */
.paginator {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.page {
  width: 70px;
  height: 70px;
  background-color: #FFFFFF;
  border-radius: 50% ; 
  border: 3px solid #FF0000;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  cursor: pointer;
}

.page:hover {
    background-color: #FF0000;
  color: #fff;
}
h4{
    font-size: 19px;
    
}
p{
    text-align: center;
}
/*MEDIA QUERY*/
       
        @media screen and (max-width: 700px) {
          .card-container {
            flex-direction: column;
            align-items: center;
          }
          .card {            
            margin-bottom: 20px;
          }
          h4{
            font-size: 20px;
            text-align: center;
          }
          p{
            font-size: 13px;
          }
          .card-button {
            font-size: 13px;
            width: 90px;
            height: 40px;
          }
          .page {
            height: 60px;
            width: 45px;
          }
          .center-container {
            padding: 0 10px;
            margin: 10px 0;
          }
        }

        @media screen and (max-width: 428px) {
          .card-container {
            flex-direction: column;
            align-items: center;
          }
          .card {            
            height: 220px;
            margin-bottom: 20px;
          }
          h4{
            font-size: 20px;
          }
          p{
            font-size: 13px;
          }
          .card-img {
            width: 100%;
            height: 65%;
        }
        }
</style>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| JUGADORES</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>
<div>
<h3 class="text-center mt-5 mb-3"><?= $data[0]->nombre_club ?></h3>

<div class="center-container">
    <div class="card-container">
        <div class="row">
          <?php foreach($data as $row): ?>
            <div class="col-md-3 mt-5">
                <div class="card">
                    <img src="public/img/goleadores.svg" alt="Imagen 1" class="card-img">
                    <div class="card-content">
                        <h4 class="card-title text-center"><?= $row->apellidos_nombres; ?></h4>
                        <p class="card-text"><?= $row->nombre_club; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


</div>
<br><br><br>
