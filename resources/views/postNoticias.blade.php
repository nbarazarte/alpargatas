			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-9 col-sm-9">

							<h1 class="blog-post-title">{{ str_replace("-"," ",$post->str_titulo) }}</h1>
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
									<i class="fa fa-folder-open-o"></i> 

									@foreach($categorias as $categoria)

										@if($categoria->lng_idnoticias == $post->id)

											<a class="category" >
												<span class="font-lato">{{ $categoria->str_categoria }}</span>
											</a>						
											
										@endif

									@endforeach	

								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">{{ $post->autor }}</span>
									</a>
								</li>
							</ul>

						@if($post->str_tipo == 'audio')

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

							<!-- article content -->

								<p class="dropcap" style="text-align: justify;">
									{!! html_entity_decode($post->str_post) !!} 
								</p>
							<!-- /article content -->

							<div class="divider divider-dotted"><!-- divider --></div>

							<!-- SHARE POST -->
							<div class="clearfix margin-top-30">

								<span class="pull-left margin-top-6 bold hidden-xs">
									Compartir Post: 
								</span>

								<div class="fb-share-button" data-href="https://www.cryptiaexchange.com/top-10-en-la-historia-del-bitcoin/" data-layout="button" data-size="large">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.cryptiaexchange.com%2Ftop-10-en-la-historia-del-bitcoin%2F&amp;src=sdkpreparse" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
								</div>	

								<a href="https://twitter.com/intent/tweet" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>											

							</div>
							<!-- /SHARE POST -->


							<div class="divider"><!-- divider --></div>
							
								<div class="fb-comments" data-href="http://localhost:8000/noticia-{{ $post->str_titulo }}" data-width="850" data-numposts="5"></div>

						</div>

						<!-- RIGHT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-30">
								<form action="#" method="get" class="widget_search">
									<input type="search" placeholder="Buscar" id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<hr />

				<!-- HOT -->
				<h3 class="page-header nomargin-top weight-300">
					Te puede <span>Interesar</span>
				</h3>

				@foreach ($blogRecientes as $recientes)

				<!-- No #1 Hot -->
				<div class="item-box nomargin-top">

					<figure>
						<a class="item-hover" href="{{ route('verNoticias',[$recientes->str_titulo])}}">
							<span class="overlay color2"></span>
							<span class="inner">
								<span class="block fa fa-plus fsize20"></span>
								<strong>LEER</strong> MÁS
							</span>
						</a>
					@if($recientes->str_tipo == 'imagen')

						<img alt="" class="img-responsive" src="data:image/jpeg;base64,{{ $recientes->blb_img1 }}" />

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

						<div class="embed-responsive embed-responsive-16by9 margin-top-0">
							{!! html_entity_decode($recientes->str_video) !!}
						</div>

					@elseif($recientes->str_tipo == 'audio')

						<div class="embed-responsive embed-responsive-16by9">
							{!! html_entity_decode($recientes->str_audio) !!} 
						</div>
							
					@endif

				</figure>					

					<div class="item-box-desc padding-10">
						<small>
							
							<?php

						  		$recientes->fecha = substr($recientes->fecha, 0,10);

						        $var = explode('-',$recientes->fecha);

						        $recientes->fecha = "$var[2]-$var[1]-$var[0]";

							?>

							{!! $recientes->fecha !!} 

						</small>
						<h4 style="text-align: justify;">
							<a href="{{ route('verNoticias',[$recientes->str_titulo])}}">
								{{ str_replace("-"," ",$recientes->str_titulo) }}
							</a>
						</h4>
					</div>
				</div>
				<!-- /No #1 Hot -->

				@endforeach

							<!-- TWIITER WIDGET -->
							<h3 class="page-header weight-300 margin-top-60">
								<i class="fa fa-twitter"></i> 
								Últimos <span>Tweets</span> 
							</h3>						
							<ul class="hidden-xs widget-twitter margin-bottom-60" data-php="php/twitter/tweet.php" data-username="cryptiaexchange" data-limit="3">
								<li></li>
							</ul>

							<hr />

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
									<i class="fa fa-instagram"></i>
									<i class="fa fa-instagram"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>						



					</div>

				</div>
			</section>
			<!-- / -->

<!-- Comentarios de facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	