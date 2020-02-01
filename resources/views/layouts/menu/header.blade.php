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
<div id="header" class="sticky header-sm clearfix" style="background-color: #041333">

	<!-- TOP NAV -->
	<header id="topNav">
		<div class="container text-center" style="font-size: 18px;">

			<a id="sidepanel_btn" href="#" class="logo pull-left" style="color:#ffffff;">
				<i class="icon-reorder"></i> Menú
			</a>

			@if (Route::current()->getName() == 'inicio')
				
				<!-- Logo -->
				<a class="logo" href="#">
					<img src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />
				</a>

			@else

				<!-- Logo -->
				<a class="logo" href="{{route('inicio')}}">
					<img src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />
				</a>

			@endif

			<a class="logo pull-right" href="https://exchange.cryptiaexchange.com/en/login" target="_blank" style="color:#ffffff">
				Exchange
			</a>

		</div>
	</header>
	<!-- /Top Nav -->

</div>

<!-- cinta donde muestra la variacion de las criptomonedas -->
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,eos,ethereum,litecoin,ripple,dash" currency="eur" background-color="#000000" locale="es" font-color="#ffffff"></coingecko-coin-price-marquee-widget>
<!-- End-->