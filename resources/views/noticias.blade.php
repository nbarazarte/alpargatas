@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- 
	PAGE HEADER 
	
	CLASSES:
		.page-header-xs	= 20px margins
		.page-header-md	= 50px margins
		.page-header-lg	= 80px margins
		.page-header-xlg= 130px margins
		.dark			= dark page header

		.shadow-before-1 	= shadow 1 header top
		.shadow-after-1 	= shadow 1 header bottom
		.shadow-before-2 	= shadow 2 header top
		.shadow-after-2 	= shadow 2 header bottom
		.shadow-before-3 	= shadow 3 header top
		.shadow-after-3 	= shadow 3 header bottom
-->
<section id="noticias" class="page-header page-header-md parallax parallax-3" style="background-image:url('assets/images/demo/1200x800/2345634635-2.jpeg')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1>Noticias</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="{{ route('inicio')}}">Inicio</a></li>
			<li class="active">Noticias</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

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
				<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
					<a href="#">
						<img class="img-responsive" src="assets/images/demo/magazine/1-min.jpg" alt="">
					</a>
					<a href="#">
						<img class="img-responsive" src="assets/images/demo/magazine/2-min.jpg" alt="">
					</a>
					<a href="#">
						<img class="img-responsive" src="assets/images/demo/magazine/3-min.jpg" alt="">
					</a>
				</div>

				<!-- breaking news -->
				<div class="alert alert-mini alert-primary margin-bottom-30"><!-- DANGER -->
					<strong>ÚLTIMAS NOTICIAS:</strong>
					<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
						<div class="text-left size-14">
							<a href="#">1/3 Potential for the contamination of forensic DNA evidence has been highlighted by the Meredith Kercher murder trial.</a>
						</div>
						<div class="text-left size-14">
							<a href="#">2/3 Australia thrash England to win T20 series in Melbourne</a>
						</div>
						<div class="text-left size-14">
							<a href="#">3/3 China's bulldozer mayor kicked out of party, handed to prosecutors</a>
						</div>
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

						<!-- article summary -->
						<div class="row">
							<div class="col-md-4 text-center">
								<!-- carousel -->
								<div class="owl-carousel controlls-over nomargin" data-plugin-options='{"items": 1, "singleItem": true, "navigation": false, "pagination": true, "transitionStyle":"fadeUp", "itemsScaleUp":true}'>
									<div>
										<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_1-min.jpg" />
									</div>
									<div>
										<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_2-min.jpg" />
									</div>
									<div>
										<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_3-min.jpg" />
									</div>
								</div>
								<!-- /carousel -->
								<!-- rating -->
								<div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
								<!-- /rating -->
							</div>
							<div class="col-md-8">
								<h4><a href="#">Boulder smashes through Italian farm</a></h4>
								<p>
									Dramatic pictures are released showing the destruction wrought by a huge boulder that smashed through a farm in northern Italy after being dislodged by a landslide.
									<small class="block">31/10/2019, 9:55</small>
								</p>
							</div>
						</div>
						<!-- /article summary -->


						<hr /><!-- separator -->


						<!-- article summary -->
						<div class="row">
							<div class="col-md-4 text-center">
								<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_6-min.jpg" />
								<!-- rating -->
								<div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
								<!-- /rating -->
							</div>
							<div class="col-md-8">
								<h4><a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></h4>
								<p>
									Calls for European Central Bank action to help protect the eurozone's fragile recovery have grown after the release of inflation and jobless data.
									<small class="block">31/10/2019, 9:55</small>
								</p>
							</div>
						</div>
						<!-- /article summary -->


						<hr /><!-- separator -->


						<!-- article summary -->
						<div class="row">
							<div class="col-md-4 text-center">
								<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_7-min.jpg" />
								<!-- rating -->
								<div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
								<!-- /rating -->
							</div>
							<div class="col-md-8">
								<h4><a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></h4>
								<p>
									Australia's government approves plan to dump millions of tons of spoil at the Great Barrier Reef.
									<small class="block">31/10/2019, 9:55</small>
								</p>
							</div>
						</div>
						<!-- /article summary -->

					</div>

					<!-- second column -->
					<div class="col-md-4">

						<h3 class="page-header weight-300">
							<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
							Ésta <strong>Semana</strong>  
						</h3>

						<h4><a href="#">Chinese New Year by the numbers</a></h4>
						<p>
							Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
							<small class="block">31/10/2019, 9:55</small>
						</p>

						<hr class="half-margins" /><!-- separator -->

						<h4><a href="#">Chinese New Year by the numbers</a></h4>
						<p>
							Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
							<small class="block">31/10/2019, 9:55</small>
						</p>

						<hr class="half-margins" /><!-- separator -->

						<h4><a href="#">Chinese New Year by the numbers</a></h4>
						<p>
							Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.
							<small class="block">31/10/2019, 9:55</small>
						</p>
					</div>

				</div>
				<!-- /TWO COLUMNS -->




				<h3 class="page-header weight-300 margin-top-100">
					<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
					Otras <strong>Noticias</strong> 
				</h3>


				<!-- THREE COLUMNS -->
				<div class="row">

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
								<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_1-min.jpg" width="263" height="147" />
							</figure>
							<div class="item-box-desc">
								<h4>Chinese New Year by the numbers</h4>
								<small>31/10/2019, 9:55</small>
								<p>Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.</p>
							</div>
						</div>
						<!-- /article item -->

					</div>


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
								<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_2-min.jpg" width="263" height="147" />
							</figure>
							<div class="item-box-desc">
								<h4>Chinese New Year by the numbers</h4>
								<small>31/10/2019, 9:55</small>
								<p>Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.</p>
							</div>
						</div>
						<!-- /article item -->

					</div>

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
								<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_3-min.jpg" width="263" height="147" />
							</figure>
							<div class="item-box-desc">
								<h4>Chinese New Year by the numbers</h4>
								<small>31/10/2019, 9:55</small>
								<p>Billions of people travel in China during Lunar New Year. Check out the mind-boggling figures.</p>
							</div>
						</div>
						<!-- /article item -->

					</div>

					<!-- /article item -->
				</div>
				<!-- /THREE COLUMNS -->



			</div>
			<!-- /LEFT -->

			<!-- RIGHT -->
			<div class="col-sm-3">

				<!-- HOT -->
				<h3 class="page-header nomargin-top weight-300">
					Lo más <span>Viral</span>
				</h3>

				<!-- No #1 Hot -->
				<div class="item-box nomargin-top">
					<figure>
						<a class="item-hover" href="#">
							<span class="overlay color2"></span>
							<span class="inner">
								<span class="block fa fa-plus fsize20"></span>
								<strong>LEER</strong> MÁS
							</span>
						</a>
						<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_4-min.jpg" />
					</figure>
					<div class="item-box-desc padding-10">
						<small>31/10/2019, 08:33</small>
						<h4><a href="#">World's most polluted...</a></h4>
					</div>
				</div>
				<!-- /No #1 Hot -->



				<!-- video -->
				<div class="embed-responsive embed-responsive-16by9 margin-top-30">
					<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
				</div>
				<h5 class="weight-300 padding-top-10 size-13">
					<i class="fa fa-comments"></i> <a href="#">Comment this video</a> 
					<small class="pull-right margin-top-3">(0 comments)</small>
				</h5>
				<!-- /video -->



				<!-- small articles -->
				<div class="row margin-top-30">
					<div class="col-xs-6 col-md-6">
						<a href="#">
							<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_3-min.jpg" />
							<h6 class="fsize12 font300 padding6">Horses hypnotized by the sea</h6>
						</a>							
					</div>
					<div class="col-xs-6 col-md-6">
						<a href="#">
							<img alt="" class="img-responsive" src="assets/images/demo/magazine/thumbs/thumb_4-min.jpg" />
							<h6 class="fsize12 font300 padding6">Sochi protesters fight to be heard</h6>
						</a>							
					</div>
				</div>
				<!-- /small articles -->

				<!-- LATEST -->
				<h3 class="page-header weight-300 margin-top-60">
					También <span>es noticia</span>
				</h3>

				<div class="panel-group" id="accordion">
		
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									<i class="fa fa-star"></i>
									Lo más Votado
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="accordion-body collapse in">
							<div class="panel-body">
								<ul class="list-unstyled list-icons margin-bottom-10">
									<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
									<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
									<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									<i class="fa fa-comment"></i>
									Lo más Comentado
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="accordion-body collapse">
							<div class="panel-body">
								<ul class="list-unstyled list-icons margin-bottom-10">
									<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Boulder smashes through Italian farm</a></li>
									<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Fall in eurozone inflation rate fuels deflation concerns</a></li>
									<li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

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
				<ul class="widget-twitter" data-php="php/twitter/tweet.php" data-username="cryptiaexchange" data-limit="3">
					<li></li>
				</ul>

				<!-- FOLLOW -->
				<h3 class="page-header weight-300 margin-top-60">
					
					Síguenos<span> en</span> 
				</h3>

				<!-- Social Icons -->
				<div class="margin-top-20 clearfix">
					<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon social-icon-border social-instagram pull-left" data-toggle="tooltip" data-placement="top" title="Instagram">
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