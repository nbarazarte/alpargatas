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

							@if(($_SERVER['SERVER_NAME'] == 'localhost' ) || ( $_SERVER['SERVER_NAME'] == '127.0.0.1'))

								<!-- Logo -->
								<a class="logo pull-left" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000">
									<img src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />
								</a>

							@else

								<!-- Logo -->
								<a class="logo pull-left" href="http://{{ $_SERVER['SERVER_NAME'] }}">
									<img src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />
								</a>

							@endif

						@endif

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									
								@include('layouts.menu.inicio')

								@if (Route::current()->getName() == 'nosotros')
									
									<li class="active">
										<a href="#">
											SOBRE NOSOTROS
										</a>
										<ul class="dropdown-menu">
											<li><a href="#mision">MISIÓN</a></li>
											<li><a href="#vision">VISIÓN</a></li>
											<li><a href="#valores">VALORES</a></li>
											<li><a href="#servicios">SERVICIOS</a></li>
										</ul>	
									</li>

								@else

									@if(($_SERVER['SERVER_NAME'] == 'localhost' ) || ( $_SERVER['SERVER_NAME'] == '127.0.0.1'))

										<li><!-- NOSOTROS -->									
											<a class="external" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/sobre-nosotros">
												SOBRE NOSOTROS
											</a>
											<ul class="dropdown-menu">
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/sobre-nosotros#mision">MISIÓN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/sobre-nosotros#vision">VISIÓN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/sobre-nosotros#valores">VALORES</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/sobre-nosotros#servicios">SERVICIOS</a></li>												
											</ul>
										</li>

									@else

										<li><!-- NOSOTROS -->									
											<a class="external" href="http://{{ $_SERVER['SERVER_NAME'] }}/sobre-nosotros">
												SOBRE NOSOTROS
											</a>
											<ul class="dropdown-menu">
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/sobre-nosotros#mision">MISIÓN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/sobre-nosotros#vision">VISIÓN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/sobre-nosotros#valores">VALORES</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/sobre-nosotros#servicios">SERVICIOS</a></li>			
											</ul>
										</li>									

									@endif

								@endif

								@if (Route::current()->getName() == 'mercados')
									
									<li class="active"><a href="#">MERCADOS</a></li>

								@else

									<li><!-- MERCADOS -->
										<a class="external" href="{{ route('mercados')}}">
											MERCADOS
										</a>
									</li>

								@endif

								@if (Route::current()->getName() == 'monedas')
									
									<li class="active">
										<a href="#">
											MONEDAS
										</a>
										<ul class="dropdown-menu">
											<li><a href="#bitcoin">BITCOIN</a></li>
											<li><a href="#ripple">RIPPLE</a></li>
											<li><a href="#ethereum">ETHEREUM</a></li>
											<li><a href="#dash">DASH</a></li>											
											<li><a href="#litecoin">LITECOIN</a></li>
											<li><a href="#petro">PETRO</a></li>
										</ul>	
									</li>

								@else

									@if(($_SERVER['SERVER_NAME'] == 'localhost' ) || ( $_SERVER['SERVER_NAME'] == '127.0.0.1'))

										<li><!-- MONEDAS -->									
											<a class="external" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas">
												MONEDAS
											</a>
											<ul class="dropdown-menu">
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas#bitcoin">BITCOIN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas#ripple">RIPPLE</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas#ethereum">ETHEREUM</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas#dash">DASH</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas#litecoin">LITECOIN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000/monedas#petro">PETRO</a></li>												
											</ul>
										</li>

									@else

										<li><!-- MONEDAS -->									
											<a class="external" href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas">
												MONEDAS
											</a>
											<ul class="dropdown-menu">
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas#bitcoin">BITCOIN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas#ripple">RIPPLE</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas#ethereum">ETHEREUM</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas#dash">DASH</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas#litecoin">LITECOIN</a></li>
												<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}/monedas#petro">PETRO</a></li>												
											</ul>
										</li>								

									@endif

								@endif								

								@if (Route::current()->getName() == 'noticias')
									
									<li class="active"><a href="#">NOTICIAS</a></li>

								@else
									<li><!-- NOTICIAS -->
										<a href="{{ route('noticias')}}">
											NOTICIAS
										</a>
									</li>

								@endif
									
								@if (Route::current()->getName() == 'tutoriales')
									
									<li class="active"><a href="#">TUTORIALES</a></li>

								@else

									<li><!-- TUTORIALES -->
										<a class="external" href="{{ route('tutoriales')}}">
											TUTORIALES
										</a>
									</li>

								@endif

								@if (Route::current()->getName() == 'blog')
									
									<li class="active"><a href="#">BLOG</a></li>

								@else

									<li><!-- BLOG -->
										<a class="external" href="{{ route('blog')}}">
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
				<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,eos,ethereum,litecoin,ripple,dash" currency="eur" background-color="#000000" locale="en" font-color="#ffffff"></coingecko-coin-price-marquee-widget>
				<!-- End-->

			</div>