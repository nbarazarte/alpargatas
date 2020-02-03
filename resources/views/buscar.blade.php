@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- Noticias -->
<section id="">
	<div class="container">				
			
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 64px">Buscar Noticias</h2>
			<h2 class="weight-300 letter-spacing-1 size-13">
				<span>
					<b>
						LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS
					</b>
				</span>
			</h2>
			<hr />
		</header>

		<div class="col-md-2">

		</div>

		<div class="col-md-8">

			<!-- INLINE SEARCH -->
			<div class="inline-search clearfix margin-bottom-30">
				
				<form action="{{ route('buscar') }}" method="post" class="widget_search" enctype="multipart/form-data">
					<input type="search" placeholder="Buscar" id="s" name="s" class="serch-input">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</form>
				
			</div>
			<!-- /INLINE SEARCH -->


		</div>

		<div class="col-md-2">

		</div>	

		<div class="col-md-2">

		</div>	

		<div class="col-md-8">

			@foreach ($posts as $post)

			@endforeach

			@if( !isset($post->id) )

				<b>No hay resultados</b>

			@else

				<!-- -->
				<section>
					<div class="container">

					@foreach ($posts as $post)

						<div class="clearfix search-result"><!-- item -->
							<h4 class="margin-bottom-0">
								<a href="{{ route('verNoticias',[$post->str_titulo])}}">{{ str_replace("-"," ",$post->str_titulo) }}</a>
							</h4>
							<small class="text-muted">
							<i class="fa fa-folder-open-o"></i>

								@foreach($categorias as $categoria)

									@if($categoria->lng_idnoticias == $post->id)

										{{ $categoria->str_categoria }}																
										
									@endif

								@endforeach	

							</small>

							@if( ($post->str_tipo == 'imagen') || ($post->str_tipo == 'carrusel-imagen'))

								<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img1 }}" width="120" height="60"  />

							@endif

							<p>
								<?php

						  		$post->fecha = substr($post->fecha, 0,10);

						        $var = explode('-',$post->fecha);

						        $post->fecha = "$var[2]-$var[1]-$var[0]";

							?>

							<i class="fa fa-clock-o"></i> {!! $post->fecha !!} - <i class="fa fa-user"></i> Fuente: <b>{{ $post->autor }}</b></p>
							<p>{{ $post->str_post_resumen }}.</p>
						</div><!-- /item -->

						<!-- /SEARCH RESULTS -->

					@endforeach
						
					</div>
				</section>
				<!-- / -->

			@endif

		</div>

		<div class="col-md-2">

		</div>

</section>
<!-- /Noticias -->

@endsection			