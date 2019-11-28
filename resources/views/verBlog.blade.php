@extends('layouts.appCryptiaSmarty')

@section('content')

@foreach ($posts as $post) 

@endforeach

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

									<a class="category" href="#">
										<span class="font-lato">Design</span>
									</a>
									<a class="category" href="#">
										<span class="font-lato">Photography</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">{{ $post->autor }}</span>
									</a>
								</li>
							</ul>

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

							<!-- article content -->

								<p style="text-align: justify;">
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

							<ul class="pager">
								<li class="previous"><a class="noborder" href="#">&larr; Anterior Post</a></li>
								<li class="next"><a class="noborder" href="#">Siguiente Post &rarr;</a></li>
							</ul>

							<div class="divider"><!-- divider --></div>
							
								<div class="fb-comments" data-href="http://localhost:8000/blog-{{ $post->str_titulo }}" data-width="850" data-numposts="5"></div>

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

							<!-- JUSTIFIED TAB -->
							<div class="tabs nomargin-top hidden-xs margin-bottom-60">

								<!-- tabs -->
								<ul class="nav nav-tabs nav-bottom-border nav-justified">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
											Lo más reciente
										</a>
									</li>

								</ul>

								<!-- tabs content -->
								<div class="tab-content margin-bottom-60 margin-top-30">

									<!-- POPULAR -->
									<div id="tab_1" class="tab-pane active">

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa, sodales</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

									</div>
									<!-- /POPULAR -->

								</div>

							</div>
							<!-- JUSTIFIED TAB -->

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
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
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
@endsection		