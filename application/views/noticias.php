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
  border: 1px solid #ccc;
  border-radius: 8px;
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

.card-button {
  padding: 10px 20px;
  background-color: #E5DDDD;
  color: #000000;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.card-button:hover {
  background-color: #FF0000;
  color: #fff;
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
/*MEDIA QUERY*/
@media screen and (max-width: 1300px) {
            .card {
                width: calc(50% - 20px);
                 margin-right: 10px; 
            }
            h2{
              font-size: 25px;
            }
            p{
              font-size: 15px;
            }
            button{
              width: 100px;
              height: 40px;
            }
            .page{
              height:75px;
              width: 55px;
            }
        }
@media screen and (max-width: 1200px) {
         .card {
             width: calc(50% - 20px);
                 margin-right: 10px; 
            }
            h2{
              font-size: 25px;
            }
            p{
              font-size: 15px;
            }
            button{
              width: 100px;
              height: 40px;
            }
            .page{
              height:75px;
              width: 55px;
            }
        }

        @media screen and (max-width: 768px) {
          .card {
             width: calc(50% - 20px);
                 margin-right: 10px; 
            }
            h2{
              font-size: 25px;
            }
            p{
              font-size: 13px;
            }
            button{
              font-size: 16px;
              width: 100px;
              height: 40px;
            }
            .page{
              height:60px;
              width: 45px;
            }
        }

        @media screen and (max-width: 576px) {
            .card {
                width: calc(100% - 20px);
                margin: 10px;
            }
            .center-container {
                padding: 0 10px;
                margin: 10px;
            }
            h2{
              font-size: 20px;
            }
            
        }
</style>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| NOTICIAS</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>
<div>
<div class="center-container">
  <div class="card-container">
    <div class="card">
      <img src="public/img/loginnn.jpg" alt="Imagen 1" class="card-img">
      <div class="card-content">
        <h2 class="card-title">Noticias InterClubes</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="card-button">Botón 1</button>
      </div>
    </div>

    <div class="card">
      <img src="public/img/noticias3.jpg" alt="Imagen 1" class="card-img">
      <div class="card-content">
        <h2 class="card-title">Noticias InterClubes</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="card-button">Botón 1</button>
      </div>
    </div>
    <div class="card">
      <img src="public/img/noticias4.jpg" alt="Imagen 1" class="card-img">
      <div class="card-content">
        <h2 class="card-title">Noticias InterClubes</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="card-button">Botón 1</button>
      </div>
    </div>
  </div>
</div>

<div class="center-container">
  <div class="card-container">
    <div class="card">
      <img src="public/img/noticias5.jpg" alt="Imagen 1" class="card-img">
      <div class="card-content">
        <h2 class="card-title">Noticias InterClubes</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="card-button">Botón 1</button>
      </div>
    </div>

    <div class="card">
      <img src="public/img/noticias6.jpg" alt="Imagen 1" class="card-img">
      <div class="card-content">
        <h2 class="card-title">Noticias InterClubes</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="card-button">Botón 1</button>
      </div>
    </div>
    <div class="card">
      <img src="public/img/noticias7.jpg" alt="Imagen 1" class="card-img">
      <div class="card-content">
        <h2 class="card-title">Noticias InterClubes</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="card-button">Botón 1</button>
      </div>
    </div>
  </div>
</div>
<br><br><br>

<div class="paginator">
  <span class="page"style="font-size: 30px;"><</span>
  <span class="page">1</span>
  <span class="page">2</span>
  <span class="page">3</span>
  <span class="page" style="font-size: 30px;">></span>
</div>
<br><br><br>
</div>