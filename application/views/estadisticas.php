<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    .container{
        margin-top: 20px ;
        margin-right:80px;/* Espacio entre tablas */
        display: block;
        align-items: center;
        justify-content: center;
        border: solid 1px rgb(255, 255, 255,0.2);
    }
    table{
        margin-bottom: 20px; 
        font-size: 14px;
        table-layout: fixed;
        border-collapse: collapse;
    }
    thead{
        background-color:#F02323;
    }
    th{
        padding: 20px 15px;
        font-weight: 700;
        text-transform: uppercase;
        color: white;
    }
    td{
        padding: 15px;
        border-bottom: solid 1px rgba(255, 255, 255, 0.2);
    }
    tbody tr:hover{
        background-color: #B0ACAC;
    }
    h6{
        margin-right:15px;
        font-size:12px;
    }
    img{
        height: auto; 
        border-radius: 28px; 
        object-fit: cover;
    }
    .goles{
        margin-right: 20px;
    }
    .nombre{
        margin-right: 240px;
    }
    .jugador{
        margin-right: 390px;
    }
    .jugadorr{
        margin-right: 340px;
    }
    /* Media Query for Responsive Layout */
    @media screen and (max-width: 768px) {
        table{
        margin-top: 20px ;
        width: 100%;
    }
        
        .goles,
        .nombre,
        .jugador,
        .jugadorr {
            margin-right: 10px; /* Adjust margins for smaller screens */
        }

        .nombre {
            margin-right: 100px;
        }

        .jugador {
            margin-right: 200px;
        }

        .jugadorr {
            margin-right: 150px;
        }
    }

</style>
<div class="contenedorr">
    <div class="textoo">
        <h1 class="texto-img">| ESTADISTICAS</h1>
    </div>
    <img src="public/img/portada5.jpg" alt="">
</div>

<div class="container">
    <table>
        <thead>
            <tr>
                <th>Goles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                  <p class="jugador">jugador</p> 
                  <p>Goles</p> 
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">1</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">2</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">3</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">4</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">5</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>ASISTENCIAS</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>
                  <p class="jugador">jugador</p> 
                  <p>Asistencias</p> 
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">1</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">2</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">3</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">4</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">5</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>TARJETAS AMARILLAS</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>
                  <p class="jugadorr">jugador</p> 
                  <p>Tarjetas amarillas</p> 
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">1</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">2</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">3</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">4</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">5</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
            <th>TARJETAS ROJAS</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>
                  <p class="jugadorr">jugador</p> 
                  <p>Tarjetas rojas</p> 
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">1</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">2</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">3</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">4</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
            <tr>
                <td>
                <h6 class="numero">5</h6>
                <img src="public/img/goleadores.svg" alt="">
                 <p class="nombre">Martín Cauteruccio</p>
                <p class="goles">16</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>