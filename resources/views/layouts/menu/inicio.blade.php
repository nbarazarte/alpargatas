@if (Route::current()->getName() == 'inicio')

	<li class="active"><!-- INICIO -->							
		<a href="#">
			INICIO
		</a>
		<ul class="dropdown-menu">
			<li><a href="#cryptia">CRYPTIA EXCHANGE</a></li>
			<li><a href="#monedas-inicio">MONEDAS</a></li>
			<li><a href="#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
			<li><a href="#blog-resumen">NUESTRO BLOG</a></li>
		</ul>
	</li>

@else

	@if(($_SERVER['SERVER_NAME'] == 'localhost' ) || ( $_SERVER['SERVER_NAME'] == '127.0.0.1'))

		<li><!-- INICIO -->							
			<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#">
				INICIO
			</a>
			<ul class="dropdown-menu">
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#cryptia">CRYPTIA EXCHANGE</a></li>
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#monedas-inicio">MONEDAS</a></li>
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#blog-resumen">NUESTRO BLOG</a></li>
			</ul>
		</li>
	
	@else

		<li><!-- INICIO -->							
			<a href="http://{{ $_SERVER['SERVER_NAME'] }}">
				INICIO
			</a>
			<ul class="dropdown-menu">
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}#cryptia">CRYPTIA EXCHANGE</a></li>
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}#monedas-inicio">MONEDAS</a></li>
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}#noticias-resumen">RESUMEN DE NOTICIAS</a></li>
				<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}#blog-resumen">NUESTRO BLOG</a></li>
			</ul>
		</li>

	@endif

@endif