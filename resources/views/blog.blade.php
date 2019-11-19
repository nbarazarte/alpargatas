@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- Blog -->
<section id="">
	<div class="container">				
			
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Blog</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

		@foreach ($posts as $post) 
    
			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				@if($post->str_audio)

					<div class="margin-bottom-20">
						<div class="embed-responsive embed-responsive-16by9">
							{!! html_entity_decode($post->str_audio) !!} 
						</div>
					</div>									

				@endif

				@if($post->str_tipo == 'video')

					<div class="margin-bottom-20">
						<div class="embed-responsive embed-responsive-16by9">
							{!! html_entity_decode($post->str_video) !!}
						</div>
					</div>									

				@endif

				@if ($post->str_tipo == 'imagen')
				
					<div class="margin-bottom-20">
						<div class="embed-responsive embed-responsive-16by9">
							<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img1 }}" alt="" title="" >
						</div>
					</div>						

				@endif					

				@if($post->str_tipo == 'carrusel-imagen')

					<!-- OWL SLIDER -->
					<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>								

						@if(!empty($post->blb_img1))

							<div>
								<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img1 }}" alt="" title="" >
							</div>

						@endif	

						@if(!empty($post->blb_img2))

							<div>
								<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img2 }}" alt="" title="" >
							</div>

						@endif		

						@if($post->blb_img3)
						
							<div>
								<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img3 }}" alt="" title="" >
							</div>
						
						@endif

					</div>
					<!-- /OWL SLIDER -->

				@endif

				<h2 ><a href="#">{{ str_replace("-"," ",$post->str_titulo) }}</a></h2>
				<hr>
				<i class="fa fa-tags" aria-hidden="true"></i>

				@foreach($categorias as $categoria)

					@if($categoria->lng_idpost == $post->id)

						<span class="font-lato" style="font-size: 12px">{{ $categoria->str_categoria }}</span>
						
					@endif

				@endforeach				

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">
								
								<?php

							  		$post->fecha = substr($post->fecha, 0,10);

							        $var = explode('-',$post->fecha);

							        $post->fecha = "$var[2]-$var[1]-$var[0]";

								?>

								{!! $post->fecha !!} 

							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-user"></i> 
							<span class="font-lato">{{ $post->autor }}</span>
						</a>
					</li>
					
				</ul>

				<div class="news-text" style="text-align: justify;">
					{!! html_entity_decode($post->str_post_resumen) !!} 
				</div>

				<a href="#" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>
					
			</div>
			<!-- /POST ITEM -->

		@endforeach

		</div>

		<!-- PAGINATION -->
		<ul class="pager">
		  <li class="previous"><a class="radius-0" href="#">&larr; Anterior</a></li>
		  <li class="next"><a class="radius-0" href="#">Siguiente &rarr;</a></li>
		</ul>
		<!-- /PAGINATION -->

	</div>

</section>
<!-- /Blog -->

@endsection			