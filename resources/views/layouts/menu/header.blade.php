<!-- 
	AVAILABLE HEADER CLASSES

	Default nav height: 96px
	.header-md 		= 70px nav height
	.header-sm 		= 60px nav height

	.noborder 		= remove bottom border (only with transparent use)
	.transparent	= transparent header
	.translucent	= translucent header
	.sticky			= sticky header
	.static			= static header
	.dark			= dark header
	.bottom			= header on bottom
	
	shadow-before-1 = shadow 1 header top
	shadow-after-1 	= shadow 1 header bottom
	shadow-before-2 = shadow 2 header top
	shadow-after-2 	= shadow 2 header bottom
	shadow-before-3 = shadow 3 header top
	shadow-after-3 	= shadow 3 header bottom

	.clearfix		= required for mobile menu, do not remove!

	Example Usage:  class="clearfix sticky header-sm transparent noborder"
-->

<!--<div id="header" class="sticky transparent header-md clearfix">-->
<div id="header" class="sticky header-sm clearfix" style="background-color: #041333">

	<!-- TOP NAV -->
	<header id="topNav">
		<div class="container">

			<!-- Mobile Menu Button -->
			<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
				<i class="fa fa-bars"></i>
			</button>

			@if (Route::current()->getName() == 'inicio')
				
				<!-- Logo -->
				<a class="logo pull-left scrollTo" href="#">
					<img src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />
				</a>

			@else

				<!-- Logo -->
				<a class="logo pull-left" href="{{route('inicio')}}">
					<img src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />
				</a>

			@endif

			<!-- 
				Top Nav 
				
				AVAILABLE CLASSES:
				submenu-dark = dark sub menu
			-->
			<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
				<nav class="nav-main">

					<!-- 
						.nav-onepage
						Required for onepage navigation links
						
						Add .external for an external link!
					-->
					<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
						
					@if (Route::current()->getName() == 'inicio')

						<li class="active"><!-- INICIO -->							
							<a class="dropdown-toggle" href="#">
								<i class="fa fa-home"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">INICIO</a></li>
								<li><a href="#cryptia">CRYPTIA EXCHANGE</a></li>
								<li><a href="#monedas-inicio">MONEDAS</a></li>
								<li><a href="#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
								<li><a href="#blog-resumen">NUESTRO BLOG</a></li>
							</ul>
						</li>

					@else

						<li><!-- INICIO -->							
							<a class="dropdown-toggle" href="{{route('inicio')}}">
								<i class="fa fa-home"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{route('inicio')}}#">INICIO</a></li>
								<li><a href="{{route('inicio')}}#cryptia">CRYPTIA EXCHANGE</a></li>
								<li><a href="{{route('inicio')}}#monedas-inicio">MONEDAS</a></li>
								<li><a href="{{route('inicio')}}#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
								<li><a href="{{route('inicio')}}#blog-resumen">NUESTRO BLOG</a></li>
							</ul>
						</li>

					@endif

					@if (Route::current()->getName() == 'nosotros')
						
						<li class="active">
							<a class="dropdown-toggle" href="#">
								SOBRE NOSOTROS
							</a>
							<ul class="dropdown-menu">
								<li><a href="#quienes-somos">¿QUIENES SOMOS?</a></li>
								<li><a href="#mision">MISIÓN</a></li>
								<li><a href="#vision">VISIÓN</a></li>
								<li><a href="#valores">VALORES</a></li>
								<li><a href="#servicios">SERVICIOS</a></li>
							</ul>	
						</li>

					@else

						<li><!-- NOSOTROS -->									
							<a class="dropdown-toggle" href="route('nosotros')}}">
								SOBRE NOSOTROS
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{route('nosotros')}}#quienes-somos">¿QUIENES SOMOS?</a></li>
								<li><a href="{{route('nosotros')}}#mision">MISIÓN</a></li>
								<li><a href="{{route('nosotros')}}#vision">VISIÓN</a></li>
								<li><a href="{{route('nosotros')}}#valores">VALORES</a></li>
								<li><a href="{{route('nosotros')}}#servicios">SERVICIOS</a></li>				
							</ul>
						</li>

					@endif

					@if (Route::current()->getName() == 'mercados')
						
						<li class="active">
							<a href="#">MERCADOS</a>
						</li>

					@else

						<li><!-- MERCADOS -->
							<a class="external" href="{{ route('mercados')}}">
								MERCADOS
							</a>
						</li>

					@endif

					@if (Route::current()->getName() == 'monedas')
						
						<li class="active">
							<a class="dropdown-toggle" href="#">
								MONEDAS
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">CRIPTOMONEDAS</a></li>
								<li><a href="#bitcoin">BITCOIN</a></li>
								<li><a href="#ripple">RIPPLE</a></li>
								<li><a href="#ethereum">ETHEREUM</a></li>
								<li><a href="#dash">DASH</a></li>											
								<li><a href="#litecoin">LITECOIN</a></li>
								<li><a href="#petro">PETRO</a></li>
							</ul>	
						</li>

					@else

						<li><!-- MONEDAS -->									
							<a class="dropdown-toggle" href="{{route('monedas')}}">
								MONEDAS
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{route('monedas')}}#">CRIPTOMONEDAS</a></li>
								<li><a href="{{route('monedas')}}#bitcoin">BITCOIN</a></li>
								<li><a href="{{route('monedas')}}#ripple">RIPPLE</a></li>
								<li><a href="{{route('monedas')}}#ethereum">ETHEREUM</a></li>
								<li><a href="{{route('monedas')}}#dash">DASH</a></li>
								<li><a href="{{route('monedas')}}#litecoin">LITECOIN</a></li>
								<li><a href="{{route('monedas')}}#petro">PETRO</a></li>												
							</ul>
						</li>

					@endif								

					@if (Route::current()->getName() == 'noticias')
						
						<li class="active">
							<a href="#">NOTICIAS</a>
						</li>

					@else

						<li><!-- NOTICIAS -->
							<a class="external" href="{{ route('noticias')}}">
								NOTICIAS
							</a>
						</li>

					@endif
						
					@if (Route::current()->getName() == 'tutoriales')
						
						<li class="active"><!-- TUTORIALES -->
							<a href="#">TUTORIALES</a>
						</li>

					@else

						<li><!-- TUTORIALES -->
							<a class="external" href="{{route('tutoriales')}}">
								TUTORIALES
							</a>
						</li>

					@endif

					@if (Route::current()->getName() == 'blog')
						
						<li class="active">
							<a href="#">BLOG</a>
						</li>

					@else

						<li><!-- BLOG -->
							<a class="external" href="{{route('blog')}}">
								BLOG
							</a>
						</li>

					@endif

						<li><!-- CONTACTO -->
							<a href="#contacto">
								CONTACTO
							</a>
						</li>
						<li><!-- EXCHANGE -->
							<a class="external" href="https://exchange.cryptiaexchange.com/en/login" target="_blank">
								EXCHANGE
							</a>
						</li>									
					</ul>

				</nav>
			</div>

		</div>
	</header>
	<!-- /Top Nav -->

	<!-- cinta donde muestra la variacion de las criptomonedas -->
	<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
	<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,eos,ethereum,litecoin,ripple,dash" currency="eur" background-color="#000000" locale="es" font-color="#ffffff"></coingecko-coin-price-marquee-widget>
	<!-- End-->

</div>