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

				<img src="assets/images/1x1.png" data-lazyload="" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

				<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
				<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="tp-caption"
					data-x="0"
					data-y="center"
					style="z-index: 10;width: 1200px; height: 1200px">
					<div id="particles" style="width: 1200px; height: 1200px"></div>	
				</div>

				<div class="tp-caption lft start" 
					data-x="center" 
					data-y="0" 
					data-speed="750" 
					data-start="750" 
					data-easing="easeOutExpo" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300"
					data-endeasing="Power4.easeIn" style="z-index: 10;">
						<img src="assets/images/1x1.png" alt="" data-lazyload="assets/images/caption_bg.png" width="1200px">
				</div>								

				<div class="tp-caption customin ltl tp-resizeme text_white"
					data-x="center"
					data-y="10"
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
					data-x="center"
					data-y="60"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1200"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10; font-size: 80px">
					CRIPTOMONEDAS
				</div>

				<div class="tp-caption customin ltl tp-resizeme small_light_white"
					data-x="center"
					data-y="550"
					data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
					data-speed="800"
					data-start="1400"
					data-easing="easeOutQuad"
					data-splitin="none"
					data-splitout="none"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1000"
					data-endeasing="Power4.easeIn" style="z-index: 10; white-space: normal; text-align:center; font-size: 35px;">
					Cryptia Exchange utiliza la más novedosa tecnología blockchain <br><br>adaptada al mercado venezolano.
				</div>

				<div class="tp-caption tp-fade fadeout fullscreenvideo"
					data-x="0"
					data-y="0"
					data-speed="1000"
					data-start="1100"
					data-easing="Power4.easeOut"
					data-elementdelay="0.01"
					data-endelementdelay="0.1"
					data-endspeed="1500"
					data-endeasing="Power4.easeIn"
					data-autoplay="true"
					data-autoplayonlyfirsttime="false"
					data-nextslideatend="true"
					data-volume="mute" 
					data-forceCover="1" 
					data-aspectratio="16:9" 
					data-forcerewind="on" style="z-index: 2;">

					<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>

					<video class="img-responsive" preload="none" width="100%" height="100%" poster="" >
						<source src="assets/images/demo/video/cryptocurrencyIntro.mp4" type="video/mp4" />
					</video>

				</div>

				<div class="tp-caption lfb" 
					data-x="right" data-hoffset="-70" 
					data-y="90" 
					data-speed="2000" 
					data-start="500" 
					data-easing="easeOutExpo" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10;">
					<img class="img-responsive" src="assets/images/1x1.png" alt="" data-lazyload="wp-content/uploads/2017/12/logo-Cryptia-Exchange.png">
				</div>

			</li>

			<!-- SLIDE  -->
			<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" style="background-color: #F6F6F6;">							

				<img src="assets/images/1x1.png" data-lazyload="assets/images/demo/1200x800/2345634635-2.jpeg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />
				
				<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
				<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="tp-caption"
					data-x="0"
					data-y="center"
					style="z-index: 10;width: 1200px; height: 1200px">
					<div id="particles" style="width: 1200px; height: 1200px"></div>	
				</div>

				<div class="tp-caption mediumlarge_light_white lft tp-resizeme" 
					data-x="left" data-hoffset="70"
					data-y="85" 
					data-speed="1000" 
					data-start="1200" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size:60px">+ A través de CRYPTIA EXCHANGE
				</div>

				<div class="tp-caption mediumlarge_light_white lfb tp-resizeme" 
					data-x="left" data-hoffset="150"
					data-y="133" 
					data-speed="1000" 
					data-start="1400" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size:60px">+ tendrás acceso a
				</div>				

				<div class="tp-caption block_white sfl tp-resizeme" 
					data-x="70" 
					data-y="216" 
					data-speed="750" 
					data-start="1900" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Ordenes de compra y venta
				</div>

				<div class="tp-caption block_theme_color sfr tp-resizeme" 
					data-x="120" 
					data-y="260" 
					data-speed="750" 
					data-start="2200" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">precios ofertados y
				</div>

				<div class="tp-caption block_white sfb tp-resizeme" 
					data-x="170" 
					data-y="306" 
					data-speed="750" 
					data-start="2500" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">volúmenes intercambiados
				</div>

				<div class="tp-caption block_theme_color sfr tp-resizeme" 
					data-x="220" 
					data-y="350" 
					data-speed="750" 
					data-start="2800" 
					data-easing="easeOutExpo" 
					data-splitin="none" 
					data-splitout="none" 
					data-elementdelay="0.1" 
					data-endelementdelay="0.1" 
					data-endspeed="300" 
					style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">en tiempo real
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
			<h3 class="size-30">Somos el exchange oficial de Venezuela.</h3>
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
			<h2 style="font-size: 60px">Cryptia <span>Exchange</span></h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<div class="col-sm-6">
				<img class="img-responsive" src="assets/images/demo/laptopCryptowatch.png" alt="" />
			</div>

			<div class="col-sm-6">
				<p class="dropcap" style="text-align: justify;">Nuestra plataforma ha sido diseñada específicamente para inversores de criptoactivos. Somos el vehículo mas importante de masificación e incorporación en el uso de las criptomonedas en Venezuela. <br> Estamos orientados a proporcionar a sus usuarios la plataforma mas rápida y segura para la comercialización de monedas digitales como bitcoin, etheriumm y proximamente petro, entre otros.</p>

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

			<h3>Proporcionamos a nuestros usuarios la plataforma mas rápida y segura</h3>
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
			<h2 style="font-size: 60px">Monedas</h2>
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
<section id="noticias-resumen" class="parallax parallax-2" style="background-image: url('assets/images/demo/1200x800/bg-bitcoin345-2.jpg');">
	<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2>Resumen de Noticias</h2>
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
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/24-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/17-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/30-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/26-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/18-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/34-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/37-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/23-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#" style="color: #ffffff">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
		</div>

	</div>

</section>
<!-- /NOTICIAS -->

<!-- BLOG -->
<section id="blog-resumen">
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Nuestro <span>Blog</span></h2>
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
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/24-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/17-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/30-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/26-min.jpg" alt="">
				</a>

				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/18-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/34-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/37-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
			<div class="img-hover">
				<a href="#">
					<img class="img-responsive" src="assets/images/demo/451x300/23-min.jpg" alt="">
				</a>
				<h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
				<ul class="text-left size-12 list-inline list-separator">
					<li>
						<i class="fa fa-calendar"></i> 
						29th Jan 2015
					</li>
					<li>
						<a href="##comments">
							<i class="fa fa-comments"></i> 
							3
						</a>
					</li>
				</ul>
			</div>
		</div>

	</div>
</section>
<!-- /BLOG -->

@endsection