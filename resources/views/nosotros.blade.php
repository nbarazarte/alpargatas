@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- 
	PAGE HEADER 
	
	CLASSES:
		.page-header-xs	= 20px margins
		.page-header-md	= 50px margins
		.page-header-lg	= 80px margins
		.page-header-xlg= 130px margins
		.dark			= dark page header

		.shadow-before-1 	= shadow 1 header top
		.shadow-after-1 	= shadow 1 header bottom
		.shadow-before-2 	= shadow 2 header top
		.shadow-after-2 	= shadow 2 header bottom
		.shadow-before-3 	= shadow 3 header top
		.shadow-after-3 	= shadow 3 header bottom
-->
<section id="nosotros" class="page-header page-header-md parallax parallax-3" style="background-image:url('assets/images/demo/1200x800/2345634635-2.jpeg')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1>Sobre Nosotros</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="{{ route('inicio')}}">Inicio</a></li>
			<li class="active">Sobre Nosotros</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

<!-- Sobre nosotros-->
<section>
	<div class="container">
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Cryptia Exchange</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<div class="col-sm-6">
				<p style="text-align: justify;">Cryptia Exchange es una casa de cambio digital avalada por la Superintendencia Nacional de Criptoactivos (Sunacrip) que ofrece a sus usuarios una plataforma rápida, sencilla y segura a la hora de comercializar criptomonedas.</p>

				<p style="text-align: justify;">Más que una plataforma de intercambios, somos la mejor alternativa de acceso e incorporación al mundo de la tecnología financiera en Venezuela.
				Orientarte y expandir soluciones financieras son nuestro pilar para llevarte hacia las mejores ofertas.
				¡Nos enorgullece ser pioneros de la era de digitalización económica en Venezuela para el mundo!.</p>
				
			</div>

			<div class="col-sm-6">

				<!-- 
					controlls-over		= navigation buttons over the image 
					buttons-autohide 	= navigation buttons visible on mouse hover only
					
					data-plugin-options:
						"singleItem": true
						"autoPlay": true (or ms. eg: 4000)
						"navigation": true
						"pagination": true
						"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
				-->
				<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": 3400, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
					<div>
						<img class="img-responsive" src="wp-content/uploads/2017/12/logo-Cryptia-Exchange.png" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/index/monedas.png" alt="">
					</div>
				</div>

			</div>

		</div>


<div class="row">
	<div class="col-md-6">
		<h4>Misión</h4>

		<p style="text-align: justify;">Cryptia Exchange nace de la necesidad de desarrollar un sistema financiero tecnológico que pueda contribuir a la transformación digital del capital venezolano. La suma de nuestros esfuerzos se concentra en despertar interés, motivación y confianza en inversores nacionales e internacionales que deseen comercializar criptoactivos mediante una exchange segura, y vanguardista.</p>

		<p style="text-align: justify;">Garantes de las regulaciones y buenas prácticas en el entorno digital y financiero ponemos al alcance de nuestros clientes el medio idóneo para transar en un medio confiable y seguro para tus operaciones. De la mano de un equipo de profesionales especializados en el área financiera, Cryptia Exchange se establece como uno de los principales forjadores de la industria digital del país que ofrece estrategias de crecimiento sostenibles enfocadas en la atención, asesoría y satisfacción del cliente.</p>

	</div>

	<div class="col-md-6">
		<h4>Visión</h4>
		
		<p style="text-align: justify;">Cryptia Exchange aspira liderar la industria comercial de criptoactivos venezolana con alcance internacional.La innovación tecnológica y financiera es un principio activo de nuestra plataforma para expedir soluciones que siempre generen a sus clientes las mejores oportunidades de crecimiento.</p>

		<p style="text-align: justify;">Trabajamos para hacerles sentir que somos la elección correcta cuando de rapidez, soporte y fiabilidad se trate.<br>¡Tus estados de cuenta hablarán por si solos!</p>

	</div>
</div>

	</div>
</section>
<!-- / Sobre nosotros-->

<!-- CALLOUT -->
<section class="callout-dark heading-title heading-arrow-bottom" style="z-index:100; background-color: #041333">
	<div class="container">

		<div class="text-center">
			<h3 class="size-30">Somos el exchange oficial de Venezuela.</h3>
			<p>Sólo nosotros te podemos ofrecer las tasas más competitivas del mercado venezolano.</p>
		</div>

	</div>
</section>
<!-- /CALLOUT -->

<!-- Valores-->
<section id="valores">
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Nuestros Valores</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<div class="col-md-4">

				<div class="box-icon box-icon-side box-icon-color box-icon-round">
					<i class="fa fa-tablet"></i>
					<a class="box-icon-title" href="#">
						<h2>Innovación</h2>
					</a>
					<p>A través de Cryptia Exchange tendrán acceso garantizado a una plataforma tecnológica de primera categoría. Trabajamos arduamente para ser referencia en Venezuela y el mundo entero.</p>
					
				</div>

			</div>

			<div class="col-md-4">

				<div class="box-icon box-icon-side box-icon-color box-icon-round">
					<i class="fa fa-tint"></i>
					<a class="box-icon-title" href="#">
						<h2>Integridad</h2>
					</a>
					<p>Nuestro talante moral y profesional nos permite establecer relaciones comerciales objetivas adaptadas a las regulaciones que se van generando en el tema cripto.</p>
					
				</div>

			</div>

			<div class="col-md-4">

				<div class="box-icon box-icon-side box-icon-color box-icon-round">
					<i class="fa fa-cogs"></i>
					<a class="box-icon-title" href="#">
						<h2>Servicio</h2>
					</a>
					<p>La atención al cliente es nuestra mayor premisa, por ello ofrecemos diversos canales de comunicación entre usuarios y técnicos de la plataforma que permitan atender y procesar la resolución de sus inquietudes.</p>
					
				</div>

			</div>

		</div>

	</div>
</section>
<!-- / Valores-->

@endsection