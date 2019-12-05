@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- Noticias -->
<section id="">
	<div class="container">				
			
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Noticias</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<!-- LEFT -->
			<div class="col-sm-9">

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
				<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>

					@foreach ($noticiasRecientes as $noticiaNew)

						<a href="#">
							<!--<img class="img-responsive" src="assets/images/demo/magazine/1-min.jpg" alt="">-->
							<img class="img-responsive" src="data:image/jpeg;base64,{{ $noticiaNew->blb_img1 }}" alt="" title="" >
						</a>

					@endforeach

				</div>

				<!-- breaking news -->
				<div class="alert alert-mini alert-primary margin-bottom-30"><!-- DANGER -->
					<strong>ÚLTIMAS NOTICIAS:</strong>
					<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>

						@foreach ($ultimasNoticias as $ultima)
							<div class="text-left size-14">
								<a href="#">
									<strong style="font-size: 16px">{{ str_replace("-"," ",$ultima->str_titulo) }}</strong> - {!! html_entity_decode($ultima->str_post_resumen) !!} 
								</a>
							</div>
						@endforeach

					</div>
				</div><!-- /breaking news -->

				<!-- TWO COLUMNS -->
				<div class="row">

					<!-- first column -->
					<div class="col-md-8">

						<h3 class="page-header weight-300">
							<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a>
							<strong>Lo más</strong> Reciente
						</h3>

						@foreach ($noticiasRecientes as $recientes)

							<!-- article summary -->
							<div class="row">
								<div class="col-md-4 text-center">

									@if($recientes->str_tipo == 'imagen')

										<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $recientes->blb_img1 }}" />
										<!-- rating -->
										
										<!-- /rating -->

									@elseif($recientes->str_tipo == 'carrusel-imagen')

										<!-- carousel -->
										<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
											<div>
												<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $recientes->blb_img1 }}" />
											</div>
											<div>
												<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $recientes->blb_img2 }}" />
											</div>
										</div>
										<!-- /carousel -->
										<!-- rating -->
										
										<!-- /rating -->
									@elseif($recientes->str_tipo == 'video')

										<div class="embed-responsive embed-responsive-16by9 margin-top-30">
											{!! html_entity_decode($recientes->str_video) !!}
										</div>

									@endif

								</div>
								<div class="col-md-8">
									<h4><a href="#">{{ str_replace("-"," ",$recientes->str_titulo) }}</a></h4>
									<p style="text-align: justify;">
										{!! html_entity_decode($recientes->str_post_resumen) !!} 
										<small class="block">
											
											<?php

										  		$recientes->fecha = substr($recientes->fecha, 0,10);

										        $var = explode('-',$recientes->fecha);

										        $recientes->fecha = "$var[2]-$var[1]-$var[0]";

											?>

											{!! $recientes->fecha !!} 

										</small>
									</p>
								</div>
							</div>
							<!-- /article summary -->

							<hr /><!-- separator -->

						@endforeach

					</div>

					<!-- second column -->
					<div class="col-md-4">

						<h3 class="page-header weight-300">
							<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
							Ésta <strong>Semana</strong>  
						</h3>

						@foreach ($estaSemana as $semana)
						<h4><a href="#">{{ str_replace("-"," ",$semana->str_titulo) }}</a></h4>
						<p style="text-align: justify;">
							{!! html_entity_decode($semana->str_post_resumen) !!} 
							<small class="block">
								
								<?php

							  		$semana->fecha = substr($semana->fecha, 0,10);

							        $var = explode('-',$semana->fecha);

							        $semana->fecha = "$var[2]-$var[1]-$var[0]";

								?>

								{!! $semana->fecha !!} 

							</small>
						</p>

						<hr class="half-margins" /><!-- separator -->

						@endforeach
	
					</div>

				</div>
				<!-- /TWO COLUMNS -->

				<h3 class="page-header weight-300 margin-top-100">
					<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
					Otras <strong>Noticias</strong> 
				</h3>

				<!-- THREE COLUMNS -->
				<div class="row">

					@foreach ($otrasNoticias as $otras)

						<div class="col-md-4">

							<!-- article item -->
							<div class="item-box">
								<figure>

									<a class="item-hover" href="magazine-single.html">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>LEER</strong> MÁS
										</span>
									</a>

									@if($otras->str_tipo == 'imagen')

										<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $otras->blb_img1 }}" width="263" height="147" />

									@elseif($otras->str_tipo == 'carrusel-imagen')

										<!-- carousel -->
										<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
											<div>
												<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $otras->blb_img1 }}" />
											</div>
											<div>
												<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $otras->blb_img2 }}" />
											</div>
										</div>
										<!-- /carousel -->
										<!-- rating -->
										
										<!-- /rating -->
									@elseif($otras->str_tipo == 'video')

										<div class="embed-responsive embed-responsive-16by9 margin-top-0">
											{!! html_entity_decode($otras->str_video) !!}
										</div>

									@endif

								</figure>
								<div class="item-box-desc">
									<h4>{{ str_replace("-"," ",$otras->str_titulo) }}</h4>
									<small>
										
										<?php

									  		$otras->fecha = substr($otras->fecha, 0,10);

									        $var = explode('-',$otras->fecha);

									        $otras->fecha = "$var[2]-$var[1]-$var[0]";

										?>

										{!! $otras->fecha !!} 

									</small>
									<p style="text-align: justify;">{!! html_entity_decode($otras->str_post_resumen) !!} </p>
								</div>
							</div>
							<!-- /article item -->

						</div>

					@endforeach

					<!-- /article item -->
				</div>
				<!-- /THREE COLUMNS -->

			</div>
			<!-- /LEFT -->

			<!-- RIGHT -->
			<div class="col-sm-3">

				<!-- HOT -->
				<h3 class="page-header nomargin-top weight-300">
					Te puede <span>Interesar</span>
				</h3>

				@foreach ($puedeInteresar as $interesar)

				<!-- No #1 Hot -->
				<div class="item-box nomargin-top">

					@if($interesar->str_tipo == 'imagen')

						<figure>
							<a class="item-hover" href="#">
								<span class="overlay color2"></span>
								<span class="inner">
									<span class="block fa fa-plus fsize20"></span>
									<strong>LEER</strong> MÁS
								</span>
							</a>
							<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $interesar->blb_img1 }}" />
						</figure>

					@elseif($interesar->str_tipo == 'carrusel-imagen')

						<!-- carousel -->
						<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
							<div>
								<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $recientes->blb_img1 }}" />
							</div>
							<div>
								<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $recientes->blb_img2 }}" />
							</div>
						</div>
						<!-- /carousel -->
						<!-- rating -->
						
						<!-- /rating -->
					@elseif($interesar->str_tipo == 'video')

						<div class="embed-responsive embed-responsive-16by9 margin-top-30">
							{!! html_entity_decode($interesar->str_video) !!}
						</div>											

					@endif

					<div class="item-box-desc padding-10">
						<small>
							
							<?php

						  		$interesar->fecha = substr($interesar->fecha, 0,10);

						        $var = explode('-',$interesar->fecha);

						        $interesar->fecha = "$var[2]-$var[1]-$var[0]";

							?>

							{!! $interesar->fecha !!} 

						</small>
						<h4 style="text-align: justify;"><a href="#">{!! html_entity_decode($interesar->str_post_resumen) !!}</a></h4>
					</div>
				</div>
				<!-- /No #1 Hot -->

				@endforeach

				<!-- small articles -->
				<div class="row margin-top-30">

					@foreach ($miniNoticias as $mini)

						<div class="col-xs-6 col-md-6">

							@if($mini->str_tipo == 'imagen')

								<a href="#">
									<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $mini->blb_img1 }}" />
									<h6 class="fsize12 font300 padding6">{{ str_replace("-"," ",$mini->str_titulo) }}</h6>
								</a>

							@elseif($mini->str_tipo == 'carrusel-imagen')

								<a href="#">
									<!-- carousel -->
									<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
										<div>
											<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $mini->blb_img1 }}" />
										</div>
										<div>
											<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $mini->blb_img2 }}" />
										</div>
									</div>
									<!-- /carousel -->
									<h6 class="fsize12 font300 padding6">{{ str_replace("-"," ",$mini->str_titulo) }}</h6>
								</a>

							@elseif($mini->str_tipo == 'video')

								<a href="#">
									<div class="embed-responsive embed-responsive-16by9 margin-top-0">
										{!! html_entity_decode($mini->str_video) !!}
									</div>
									<h6 class="fsize12 font300 padding6">{{ str_replace("-"," ",$mini->str_titulo) }}</h6>
								</a>										

							@endif

						</div>

					@endforeach
				</div>
				<!-- /small articles -->

				<!-- TWEETS -->
				<h3 class="page-header weight-300 margin-top-60">
					<i class="fa fa-twitter"></i> 
					Últimos <span>Tweets</span> 
				</h3>

				<!--
					data-php="php/twitter/tweet.php"		- widget php path
					data-username="stepofweb"			- twitter username
					data-limit="3"					- maximum twwts to load
					
					PLEASE NOTE!
					php/_cache/ - folder should be writable by the webserver!
							- it's used to cache tweets
				-->
				<ul class="widget-twitter" data-php="php/twitter/tweet.php" data-username="cryptiaexchange" data-limit="5">
					<li></li>
				</ul>

				<!-- FOLLOW -->
				<h3 class="page-header weight-300 margin-top-60">
					Síguenos<span> en</span> 
				</h3>

				<!-- Social Icons -->
				<div class="margin-top-20 clearfix">
					<a href="https://www.facebook.com/CryptiaExchange/?hc_ref=ARRunlUUrumZJ2D8puynjxgr67QxldbQ372nMx-bW7-dZK2xCWjN5jPlaS44ZNfBONU&fref=nf" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://twitter.com/cryptiaexchange" target="_blank" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="https://www.instagram.com/cryptiaexchange/" target="_blank" class="social-icon social-icon-border social-instagram pull-left" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>
		
				</div>
				<!-- /Social Icons -->

			</div>
			<!-- /RIGHT -->

		</div>
	</div>

</section>
<!-- /Noticias -->

@endsection			