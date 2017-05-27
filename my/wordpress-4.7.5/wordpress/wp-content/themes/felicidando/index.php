<?php get_header(); ?>
	<!--<h1><?php the_title(); ?></h1>-->
<div class="container-fluid">
	<div class="row header">
		<div class="col-md-1"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/facebook.png"></div>
		<div class="col-md-1"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/twitter.png"></div>
		<div class="col-md-1"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/youtube.png"></div>
		<div class="col-md-5" style="font-size:25px">Ahora tus compras crean oportunidades!</div>
		<div class="col-md-2">INGRESA A TU CUENTA</div>
		<div class="col-md-2">REGISTRATE</div>
	</div>
	<div class="row menu">
		<div class="col-md-2"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/felicidando.png"></div>
		<div class="col-md-2">QUÉ ES FELICIDANDO?</div>
		<div class="col-md-2">QUÉ HACEMOS?</div>
		<div class="col-md-2">CAMPAÑAS SOCIALES</div>
		<div class="col-md-1">CATÁLOGO</div>
		<div class="col-md-1">BLOG</div>
		<div class="col-md-1">CONTÁCTANOS</div>
	</div>
	<div class="muestra">
      <img class="d-block img-fluid img-responsive" src="<?php bloginfo('template_directory');?>/felicidando/elementos/muestra/girl.jpg" alt="First slide">
      <img class="d-block img-fluid img-responsive" src="<?php bloginfo('template_directory');?>/felicidando/elementos/muestra/girl.jpg" alt="Second slide">
      <img class="d-block img-fluid img-responsive" src="<?php bloginfo('template_directory');?>/felicidando/elementos/muestra/girl.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	
	<script>
		$(document).ready(initPage);

		function initPage()
	{
			$('.muestra').slick(
				{
					autoplay:true,
					arrows:false,
					nextArrow:'.flecha'
				});
	}
	</script>
	<div class="fila3">
		<div class="col-md-8"><h3>¡Encuentra una CAMPAÑA que apoyar o elige un producto de nuestro CATÁLOGO,donde tus compras crean sonrisas!</h3></div>
		<div class="col-md-4">
			<button class="boton a"><a href="#">¡CONTÁCTANOS!</a></button><br><br>
			<button class="boton b"><a href="#">¡TU CUENTA!</a></button>
		</div>
	</div>
	<div class="informacion">
		<div class="col-md-4"><p>PARA TU EMPRESA</p><img class="img-responsive imgcircular" src="<?php bloginfo('template_directory'); ?>/felicidando/elementos/muestra/girl.jpg"><button class="btn btn-primary">MÁS INFORMACIÓN</button></div>
		<div class="col-md-4"><p>PARA TI</p><img class="img-responsive imgcircular" src="<?php bloginfo('template_directory'); ?>/felicidando/elementos/muestra/girl.jpg"><button class="btn btn-primary">MÁS INFORMACIÓN</button></div>
		<div class="col-md-4"><p>PUNTOS FELICIDANDO</p><img class="img-responsive imgcircular" src="<?php bloginfo('template_directory'); ?>/felicidando/elementos/muestra/girl.jpg"><button class="btn btn-primary">MÁS INFORMACIÓN</button></div>
	</div>
<?php get_footer(); ?>