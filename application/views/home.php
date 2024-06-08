<style>
    /* ********************************** */
/*                BLOGS               */
/* ********************************** */
.blogs {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.container-blogs {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 3rem;
}

.card-blog {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.card-blog .container-img {
	border-radius: 2rem;
	cursor: pointer;
	position: relative;
	overflow: hidden;
}

.button-group-blog {
	position: absolute;
	bottom: 1.5rem;
	right: -2.5rem;

	display: flex;
	gap: 0.7rem;
	z-index: -1;
	transition: all 0.3s ease;
}

.card-blog:hover .button-group-blog {
	z-index: 0;
	right: 1.5rem;
}

.button-group-blog span {
	background-color: #fff;
	padding: 1rem;
	border-radius: 50%;
	transition: all 0.4s ease;

	display: flex;
	align-items: center;
	justify-content: center;
}

.button-group-blog span i {
	font-size: 1.3rem;
}

.button-group-blog span:hover {
	background-color: var(--primary-color);
}

.button-group-blog span:hover i {
	color: #fff;
}

.content-blog h3 {
	font-size: 1.8rem;
	margin-bottom: 1.7rem;
	color: var(--dark-color);
	font-weight: 500;
}

.content-blog h3:hover {
	color: var(--primary-color);
	cursor: pointer;
}

.content-blog p {
	margin-top: 1rem;
	font-size: 1.4rem;
	color: #777;
}

.content-blog span {
	color: var(--primary-color);
	font-size: 1.3rem;
}

.btn-read-more {
	padding: 1rem 3rem;
	background-color: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 1.4rem;
	border-radius: 2rem;
	margin: 3rem 0 5rem;
	display: inline-block;
	cursor: pointer;
}

.btn-read-more:hover {
	background-color: var(--dark-color);
}
/* ********************************** */
/*               GALLERY              */
/* ********************************** */
.gallery {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-template-rows: repeat(2, 30rem);
	gap: 1.5rem;
	margin-bottom: 3rem;
}

.gallery img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.gallery-img-3 {
	grid-column: 2/4;
	grid-row: 1/3;
}
/* ********************************** */
/*             CATEGORIES             */
/* ********************************** */

.top-categories {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

.container-categories {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 3rem;
}

.card-category {
	height: 20rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-radius: 2rem;
	gap: 2rem;
}

.category-moca {
	background-image: linear-gradient(#00000080, #00000080),
		url('public/img/portada5.jpg');
	background-size: cover;
	background-position: bottom;
	background-repeat: no-repeat;
    
}

.category-capuchino {
	background-image: linear-gradient(#00000080, #00000080),
    url('public/img/portada5.jpg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.category-expreso {
	background-image: linear-gradient(#00000080, #00000080),
    url('public/img/portada5.jpg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    
}

.card-category p {
	font-size: 2.5rem;
	color: #fff;
	text-transform: capitalize;
	position: relative;
}

.card-category p::after {
	content: '';
	width: 2.5rem;
	height: 2px;
	background-color: #fff;
	position: absolute;
	bottom: -1rem;
	left: 50%;
	transform: translate(-50%, 50%);
}

.card-category span {
	font-size: 1.6rem;
	color: #fff;
	cursor: pointer;
}

.card-category span:hover {
	color: var(--primary-color);
}
 /* ********************************** */
/*       MEDIA QUERIES -- 768px       */
/* ********************************** */
@media (max-width: 768px) {
	html {
		font-size: 55%;
	}

	.hero {
		padding: 2rem;
	}

	.customer-support {
		display: none;
	}

	.content-shopping-cart {
		display: none;
	}

	.navbar {
		padding: 1rem 2rem;
	}

	.navbar .fa-bars {
		display: block;
		color: #fff;
		font-size: 3rem;
	}

	.menu {
		display: none;
	}

	.content-banner {
		max-width: 50rem;
		margin: 0 auto;
		padding: 25rem 0;
	}

	.container-features {
		grid-template-columns: repeat(2, 1fr);
		padding: 3rem 2rem;
	}

	.card-feature {
		padding: 2rem;
	}

	.heading-1 {
		font-size: 2.4rem;
	}

	.card-category {
		height: 12rem;
	}

	.card-category p {
		font-size: 2rem;
		text-align: center;
		line-height: 1;
	}

	.card-category span {
		font-size: 1.4rem;
	}

	.container-options {
		align-items: center;
	}

	.container-options span {
		text-align: center;
		padding: 1rem 2rem;
	}

	.container-products {
		grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
	}

	.gallery {
		grid-template-rows: repeat(2, 15rem);
	}

	.container-blogs {
		overflow: hidden;
		grid-template-columns: 1fr 1fr;

		height: 52rem;
	}

	.menu-footer {
		grid-template-columns: repeat(2, 1fr);
	}

	.copyright {
		flex-direction: column;
		justify-content: center;
		align-items: center;
		gap: 1.5rem;
	}
}

/* ********************************** */
/*       MEDIA QUERIES -- 468px       */
/* ********************************** */
@media (max-width: 468px) {
	html {
		font-size: 42.5%;
	}

	.content-banner {
		max-width: 50rem;
		padding: 22rem 0;
	}

	.heading-1 {
		font-size: 2.8rem;
	}

	.card-feature {
		flex-direction: column;
		border-radius: 2rem;
	}

	.feature-content {
		align-items: center;
	}

	.feature-content p {
		font-size: 1.4rem;
		text-align: center;
	}

	.feature-content span {
		font-size: 1.6rem;
		text-align: center;
	}

	.container-options span {
		font-size: 1.8rem;
		padding: 1rem 1.5rem;
		font-weight: 500;
	}

	.container-products {
		grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
		gap: 1rem;
	}

	.container-img .discount {
		font-size: 2rem;
	}

	.content-card-product h3 {
		font-size: 2.2rem;
	}

	.gallery {
		grid-template-rows: repeat(2, 20rem);
	}

	.blogs {
		padding: 2rem;
	}

	.container-blogs {
		grid-template-columns: 1fr;
		height: 75rem;
	}

	.content-blog h3 {
		font-size: 2.4rem;
	}

	.content-blog span {
		font-size: 1.8rem;
	}

	.content-blog p {
		font-size: 2.2rem;
	}

	.btn-read-more{
		font-size: 1.8rem;
	}

	.contact-info ul,
	.information ul,
	.my-account ul{
		display: none;
	}

	.contact-info {
		align-items: center;
	}

	.menu-footer{
		grid-template-columns: 1fr;
	}

	.content p{
		font-size: 1.6rem;
	}
}   
</style>
<?php $CI = &get_instance(); ?>
<!--
    <img class="img-fluid" src="<?php echo base_url() . "public/img/portada0.jpg"; ?>">
-->
<!-- Alex metio mano y la cago -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img class="d-block w-100 img-banner"  src="<?php echo base_url() . "public/img/portada5.jpg"; ?>" alt="First slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100 img-banner"  src="<?php echo base_url() . "public/img/portada1.jpg"; ?>" alt="Second slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100 img-banner" src="<?php echo base_url() . "public/img/portada.jpg"; ?>" alt="Third slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    -->
</div>

<!-- Fin Alex metio mano y la cago -->
<br><!--
<div class="" id="publicaciones">
    <br>
    <hr>
</div>
<h3  class="text-center">Publicaciones</h3>
<hr><br>
<div class="row">-->

    <!--<?php foreach ($data['publicacion'] as $row) : ?>
        <div class="col-md-4">
            <div class="card">
            <img src="public/img/portada5.jpg" alt="">
                <img class="card-img-top" height="250" src="<?php echo $row->imagen; ?>"
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->titulo; ?></h5>
                    <p class="card-text"><?php echo substr(strip_tags($row->texto), 0, 150); ?>...</p> <br>
                    <a href="<?php echo base_url() . "publicacion/ver/" . $row->id; ?>" class="btn bg-secundario">Ver más ...</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>--><br><br>
                <!--PUBLICACIONES-->
<section class="container blogs">
				<h1 class="heading-1">Publicaciones</h1>
				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
                        <img src="public/img/portada5.jpg" alt="">
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
                        <h3 class="card-title"><?php echo $row->titulo; ?></h3>
							<span>29 Noviembre 2022</span>
							<p class="card-text"><?php echo substr(strip_tags($row->texto), 0, 150); ?>...</p> 
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
                        <img src="public/img/portada5.jpg" alt="">
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
                            <h3 class="card-title"><?php echo $row->titulo; ?></h3>
							<p class="card-text"><?php echo substr(strip_tags($row->texto), 0, 150); ?>...</p> 
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
                        <img src="public/img/portada5.jpg" alt="">
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
                            <h3 class="card-title"><?php echo $row->titulo; ?></h3>
							<span>29 Noviembre 2022</span>
							<p class="card-text"><?php echo substr(strip_tags($row->texto), 0, 150); ?>...</p> 
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
				</div>
			</section>

             <!--GALERIA FOTOS-->

            <section class="gallery">
				<img
					src="public/img/noticias1.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="public/img/noticias2.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="public/img/noticias3.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="public/img/noticias4.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="public/img/noticias5.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>

            <!--NOTICIAS-->

            <section class="container top-categories">
				<h1 class="heading-1">Noticias</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Noticias </p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-expreso">
						<p>Noticias  </p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-capuchino">
						<p>Noticias </p>
						<span>Ver más</span>
					</div>
				</div>
			</section>
            <br><br><br><br>

<script>
    $("#cbocategoria").change(function(e) {
        var id_cat = $("#cbocategoria").val();
        var url = "<?php echo base_url(); ?>home/index/" + id_cat;
        window.location.href = url;
    });
</script>