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
<section id="mercados" class="page-header page-header-md parallax parallax-3" style="background-image:url('assets/images/demo/1200x800/2345634635-2.jpeg')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1>Mercados</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="{{ route('inicio')}}">Inicio</a></li>
			<li class="active">Mercados</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

<!-- Mercados -->
<section id="">
	<div class="container">				
			
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Mercados</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<div class="col-sm-12">

				<div class="embed-responsive embed-responsive-16by9">
				  <iframe class="embed-responsive-item" src="https://cryptowat.ch/assets" allowfullscreen></iframe>
				</div>

			</div>

		</div>

	</div>

</section>
<!-- /Mercados -->

@endsection