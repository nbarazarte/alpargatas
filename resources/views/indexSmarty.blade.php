@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- REVOLUTION SLIDER -->
<section id="slider" class="slider fullwidthbanner-container roundedcorners">
	<!--
		Navigation Styles:
		
			data-navigationStyle="" theme default navigation
			
			data-navigationStyle="preview1"
			data-navigationStyle="preview2"
			data-navigationStyle="preview3"
			data-navigationStyle="preview4"
			
		Bottom Shadows
			data-shadow="1"
			data-shadow="2"
			data-shadow="3"
			
		Slider Height (do not use on fullscreen mode)
			data-height="300"
			data-height="350"
			data-height="400"
			data-height="450"
			data-height="500"
			data-height="550"
			data-height="600"
			data-height="650"
			data-height="700"
			data-height="750"
			data-height="800"
	-->
	<div class="fullscreenbanner" data-navigationStyle="">
		<ul class="hide">

			<!-- SLIDE  -->
			<li data-transition="fade" data-slotamount="7" data-masterspeed="800"  data-saveperformance="off" >

			<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/1200x800/Cabecera_Mesa.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />				

				<div class="tp-caption"
					data-x="-275"
					data-y="center"
					style="z-index: 10;width: 1600px; height: 1200px">
					<div id="particles" style="width: 1600px; height: 1200px"></div>	
				</div>

				<div class="tp-caption lft start" 
					data-x="center" 
					data-y="-850" 
					data-speed="750" 
					data-start="750" 
					data-easing="easeOutExpo" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300"
					data-endeasing="Power4.easeIn" style="z-index: 10;">
						<img src="assets/images/1x1.png" alt="" data-lazyload="assets/images/caption_bg.png" width="3000px">
				</div>								

				<div class="tp-caption customin ltl tp-resizeme text_white"
					data-x="800"
					data-y="200"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1000"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10;font-size: 40px">
					<span class="weight-300">COMPRA Y VENDE</span>
				</div>

				<div class="tp-caption customin ltl tp-resizeme large_bold_white"
					data-x="520"
					data-y="260"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1200"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10; font-size: 75px; color: #DCC857">
					CRIPTOMONEDAS
				</div>

				<div class="tp-caption customin ltl tp-resizeme small_light_white"
					data-x="667"
					data-y="330"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1400"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10; white-space: normal; text-align:center; font-size: 27px;">
					a través de la más novedosa tecnología
				</div>

				<div class="tp-caption customin ltl tp-resizeme small_light_white"
					data-x="603"
					data-y="360"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1400"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10; white-space: normal; text-align:center; font-size: 27px;">
					blockchain adaptada al mercado venezolano.
				</div>

				<div class="tp-caption customin ltl tp-resizeme small_light_white"
					data-x="1035"
					data-y="415"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1400"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10; white-space: normal; text-align:center; font-size: 33px;">
					
					<a href="https://exchange.cryptiaexchange.com/en/login" target="_blank" style="color: #DCC857">
						<b>Ingresar</b>
					</a>
					
				</div>

			</li>

			<!-- SLIDE  -->
			
			<li data-transition="fade" data-slotamount="7" data-masterspeed="800" data-link="" data-title="Slide 4" data-target="_blank" data-saveperformance="off">

				<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/1200x800/Cabecera_Mesa.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

				<div class="tp-caption"
					data-x="-275"
					data-y="center"
					style="z-index: 10;width: 1600px; height: 1200px">
					<div id="particles2" style="width: 1600px; height: 1200px"></div>	
				</div>

				<div class="tp-caption lft start" 
					data-x="center" 
					data-y="-850" 
					data-speed="750" 
					data-start="750" 
					data-easing="easeOutExpo" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300"
					data-endeasing="Power4.easeIn" style="z-index: 10;">
						<img src="assets/images/1x1.png" alt="" data-lazyload="assets/images/caption_bg.png" width="3000px">
				</div>												

				<div class="tp-caption lfb" 
					data-x="right" data-hoffset="-20" 
					data-y="120" 
					data-speed="2000" 
					data-start="500" 
					data-easing="easeOutExpo" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10;">
					<img class="img-responsive" src="assets/images/1x1.png" alt="" data-lazyload="assets/images/demo/desktop_empty.png">
				</div>

				<div class="tp-caption mediumlarge_light_white lft tp-resizeme" 
					data-x="left" data-hoffset="30"
					data-y="135" 
					data-speed="1000" 
					data-start="1200" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 60px">A través de <b style="color: #DCC857">CRYPTIA</b>
				</div>

				<div class="tp-caption mediumlarge_light_white lfb tp-resizeme" 
					data-x="left" data-hoffset="30"
					data-y="193" 
					data-speed="1000" 
					data-start="1400" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 60px">trendrás acceso a
				</div>

				<div class="tp-caption mediumlarge_light_white sfl tp-resizeme" 
					data-x="70" 
					data-y="276" 
					data-speed="750" 
					data-start="1900" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 35px"><b>Órdenes de compra y venta</b>
				</div>

				<div class="tp-caption mediumlarge_light_white sfr tp-resizeme" 
					data-x="70" 
					data-y="320" 
					data-speed="750" 
					data-start="2200" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;font-size: 35px"><b>Precios ofertados</b>
				</div>

				<div class="tp-caption mediumlarge_light_white sfb tp-resizeme" 
					data-x="70" 
					data-y="366" 
					data-speed="750" 
					data-start="2500" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;font-size: 35px"><b>Volúmenes intercambiados</b>
				</div>
			</li>			
			
		</ul>
		<div class="tp-bannertimer"></div>
	</div>
</section>
<!-- /REVOLUTION SLIDER -->

<!-- CALLOUT -->
<section class="callout-dark heading-title heading-arrow-bottom" style="z-index:100; background-color: #041333">
	<div class="container">

		<div class="text-center">
			<h3 class="" style="font-size: 33px;">Somos el exchange oficial de Venezuela.</h3>
			<p>Sólo nosotros te podemos ofrecer las tasas más competitivas del mercado venezolano.</p>
		</div>

	</div>
</section>
<!-- /CALLOUT -->

<!-- Cryptia Exchange -->
<section id="cryptia">
	<div class="container">				
		<br>		
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 64px">Cryptia <span>Exchange</span></h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<div class="col-sm-6">
				<img class="img-responsive" src="assets/images/demo/laptopCryptowatch.png" alt="" />
			</div>

			<div class="col-sm-6">
				<p class="dropcap font-lato size-20" style="text-align: justify;">Nuestra plataforma ha sido diseñada específicamente para inversores de criptoactivos. Somos el vehículo más importante de masificación e incorporación en el uso de las criptomonedas en Venezuela. <br> Estamos orientados a proporcionar a sus usuarios la plataforma más rápida y segura para la comercialización de monedas digitales como bitcoin, ethereum y próximamente petro, entre otros.</p>

				<hr />

				<div class="row countTo-sm text-center">

					<div class="col-xs-4 col-sm-4">
						<i class="fa fa-users size-20"></i> &nbsp; 
						<span class="countTo" data-speed="3000" style="color:#59BA41">1303</span>
						<h6>CLIENTES SATISFECHOS</h6>
					</div>

					<div class="col-xs-4 col-sm-4">
						<i class="fa fa-briefcase size-20"></i> &nbsp; 
						<span class="countTo" data-speed="3000" style="color:#774F38">56000</span>
						<h6>OPERACIONES REALIZADAS</h6>
					</div>

					<div class="col-xs-4 col-sm-4">
						<i class="fa fa-twitter size-20"></i> &nbsp; 
						<span class="countTo" data-speed="3000" style="color:#C02942">1137</span>
						<h6>SEGUIDORES EN TWITTER</h6>
					</div>

				</div>

			</div>

		</div>


	</div>

	<div class="callout callout-theme-color alert alert-warning noborder margin-top-60 margin-bottom-60">

		<div class="text-center">

			<h3><b>Proporcionamos a nuestros usuarios la plataforma más rápida y segura<b></h3>
			<p class="font-lato size-20">
				El mercado de criptomonedas está en constante expansión produciendo nuevas oportunidades de negocio a nivel mundial. <br>A través de la tecnología blockchain ofrecemos una forma segura y confiable de intercambiar criptomonedas.
			</p>
			
			<a style="" href="{{ route('mercados')}}" rel="nofollow" target="_blank" class="btn btn-warning btn-lg margin-top-30">Ver Mercados</a>
		</div>

	</div>			
</section>
<!-- /Cryptia Exchange -->

<!-- MONEDAS -->
<section id="monedas-inicio" class="nopadding-bottom">
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 64px">Monedas</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA MÁS NOVEDOSA TECNOLOGÍA BLOCKCHAIN DEL MERCADO VENEZOLANO</b></span></h2>
			<hr />
		</header>

		<div class="text-center">
			<p class="lead">
				El mercado de criptomonedas está en constante expansión produciendo nuevas oportunidades de negocio a nivel mundial. A través de la tecnología blockchain ofrecemos una forma segura y confiable de intercambiar criptomonedas.
			</p>

			<div class="margin-top-30">
				<img class="img-responsive" src="assets/images/demo/index/monedas.png" alt="monedas" />
			</div>

		</div>
	</div>
</section>
<!-- /MONEDAS -->

<!-- NOTICIAS -->
<section id="noticias-resumen" class="parallax parallax-2" style="background-color: #041333">
	<div class=""><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 64px">Resumen de Noticias</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>CONOCE LAS NOTICIAS VINCULADAS AL MERCADO CAMBIARIO ACTUALIZADO DE CRIPTOACTIVOS</b></span></h2>
			<hr />
		</header>	

		<!-- 
			controlls-over		= navigation buttons over the image 
			buttons-autohide 	= navigation buttons visible on mouse hover only
			
			data-plugin-options:
				"singleItem": true
				"autoPlay": true (or ms. eg: 4000)
				"navigation": true
				"pagination": true
				"items": "4"

			owl-carousel item paddings
				.owl-padding-0
				.owl-padding-3
				.owl-padding-6
				.owl-padding-10
				.owl-padding-15
				.owl-padding-20
		-->
		<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": false, "pagination": false}'>

			@foreach($ultimasNoticias as $noticias)

			<div class="img-hover">

				@if($noticias->str_audio)

					<div class="margin-bottom-20">
						<div class="embed-responsive embed-responsive-16by9">
							{!! html_entity_decode($noticias->str_audio) !!} 
						</div>
					</div>									

				@elseif($noticias->str_tipo == 'imagen')

					<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $noticias->blb_img1 }}" />
					<!-- rating -->
					
					<!-- /rating -->

				@elseif($noticias->str_tipo == 'carrusel-imagen')

					<!-- carousel -->
					<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000,"items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
						<div>
							<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $noticias->blb_img1 }}" />
						</div>
						<div>
							<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $noticias->blb_img2 }}" />
						</div>
					</div>
					<!-- /carousel -->
					<!-- rating -->
					
					<!-- /rating -->
				@elseif($noticias->str_tipo == 'video')

					<div class="embed-responsive embed-responsive-16by9 margin-top-0">
						{!! html_entity_decode($noticias->str_video) !!}
					</div>

				@endif

				<h4 class="text-left margin-top-20">
					<a href="{{ route('verNoticias',[$noticias->str_titulo])}}" target="_blank" title="{{ str_replace("-"," ",$noticias->str_titulo) }}" style="color: #ffffff">
						{{ str_replace("-"," ",$noticias->str_titulo) }}
					</a>
				</h4>

				<p style="text-align: justify;">
					{!! html_entity_decode($noticias->str_post_resumen) !!}
				</p>

				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 

							<?php

						  		$noticias->fecha = substr($noticias->fecha, 0,10);

						        $var = explode('-',$noticias->fecha);

						        $noticias->fecha = "$var[2]-$var[1]-$var[0]";

							?>

							{!! $noticias->fecha !!} 

					</li>

				</ul>
			</div>

			@endforeach

		</div>

	</div>

</section>
<!-- /NOTICIAS -->

<!-- BLOG -->
<section id="blog-resumen">
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 64px">Nuestro <span>Blog</span></h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>SOMOS LA CASA DE INTERCAMBIO DE CRIPTOMONEDAS MÁS EFECTIVA</b></span></h2>
			<hr />
		</header>

		<!-- 
			controlls-over		= navigation buttons over the image 
			buttons-autohide 	= navigation buttons visible on mouse hover only
			
			data-plugin-options:
				"singleItem": true
				"autoPlay": true (or ms. eg: 4000)
				"navigation": true
				"pagination": true
				"items": "4"

			owl-carousel item paddings
				.owl-padding-0
				.owl-padding-3
				.owl-padding-6
				.owl-padding-10
				.owl-padding-15
				.owl-padding-20
		-->
		<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>

			@foreach($ultimosBlog as $blog)
			
			<div class="img-hover">

				@if($blog->str_audio)

					<div class="margin-bottom-20">
						<div class="embed-responsive embed-responsive-16by9">
							{!! html_entity_decode($blog->str_audio) !!} 
						</div>
					</div>									

				@elseif($blog->str_tipo == 'imagen')

					<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $blog->blb_img1 }}" />
					<!-- rating -->
					
					<!-- /rating -->

				@elseif($blog->str_tipo == 'carrusel-imagen')

					<!-- carousel -->
					<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000,"items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
						<div>
							<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $blog->blb_img1 }}" />
						</div>
						<div>
							<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $blog->blb_img2 }}" />
						</div>
					</div>
					<!-- /carousel -->
					<!-- rating -->
					
					<!-- /rating -->
				@elseif($blog->str_tipo == 'video')

					<div class="embed-responsive embed-responsive-16by9 margin-top-0">
						{!! html_entity_decode($blog->str_video) !!}
					</div>

				@endif

				<h4 class="text-left margin-top-20">
					<a href="{{ route('verBlog',[$blog->str_titulo])}}" target="_blank" title="{{ str_replace("-"," ",$blog->str_titulo) }}" style="color: #000000">
						{{ str_replace("-"," ",$blog->str_titulo) }}
					</a>
				</h4>

				<p style="text-align: justify;">
					{!! html_entity_decode($blog->str_post_resumen) !!}
				</p>

				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 

							<?php

						  		$blog->fecha = substr($blog->fecha, 0,10);

						        $var = explode('-',$noticias->fecha);

						        $blog->fecha = "$var[2]-$var[1]-$var[0]";

							?>

							{!! $blog->fecha !!} 

					</li>

				</ul>
			</div>

			@endforeach

		</div>

	</div>
</section>
<!-- /BLOG -->

@endsection