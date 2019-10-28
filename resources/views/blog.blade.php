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
<section id="blog" class="page-header page-header-md parallax parallax-3" style="background-image:url('assets/images/demo/1200x800/2345634635-2.jpeg')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1>Blog</h1>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="{{ route('inicio')}}">Inicio</a></li>
			<li class="active">Blog</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->

<!-- Blog -->
<section id="">
	<div class="container">				
			
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Blog</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA FORMA SEGURA Y CONFIABLE DE INTERCAMBIAR CRIPTOMONEDAS</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				<!-- OWL SLIDER -->
				<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
					<div>
						<img class="img-responsive" src="assets/images/demo/720x400/1-min.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/720x400/2-min.jpg" alt="">
					</div>
				</div>
				<!-- /OWL SLIDER -->

				<h2><a href="blog-single-default.html">EJEMPLO CON CARRUSEL</a></h2>

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">31/10/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
							<span class="font-lato">28</span>
						</a>
					</li>
				</ul>

				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many.</p>

				<a href="blog-single-default.html" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>

			</div>
			<!-- /POST ITEM -->


			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				<!-- IMAGE -->
				<figure class="margin-bottom-20">
					<img class="img-responsive" src="assets/images/demo/720x400/3-min.jpg" alt="">
				</figure>

				<h2><a href="blog-single-default.html">EJEMPLO CON IMAGEN</a></h2>

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">31/10/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
							<span class="font-lato">28</span>
						</a>
					</li>
				</ul>

				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many.</p>

				<a href="blog-single-default.html" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>

			</div>
			<!-- /POST ITEM -->


			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				<!-- IMAGE -->
				<figure class="margin-bottom-20">
					<img class="img-responsive" src="assets/images/demo/720x400/4-min.jpg" alt="">
				</figure>

				<h2><a href="blog-single-default.html">EJEMPLO CON IMAGEN</a></h2>

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">31/10/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
							<span class="font-lato">28</span>
						</a>
					</li>
				</ul>

				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many.</p>

				<a href="blog-single-default.html" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>

			</div>
			<!-- /POST ITEM -->


			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				<!-- IMAGE -->
				<figure class="margin-bottom-20">
					<img class="img-responsive" src="assets/images/demo/720x400/5-min.jpg" alt="">
				</figure>

				<h2><a href="blog-single-default.html">EJEMPLO CON IMAGEN</a></h2>

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">31/10/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
							<span class="font-lato">28</span>
						</a>
					</li>
				</ul>

				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many.</p>

				<a href="blog-single-default.html" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>

			</div>
			<!-- /POST ITEM -->


			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				<!-- IMAGE -->
				<figure class="margin-bottom-20">
					<img class="img-responsive" src="assets/images/demo/720x400/6-min.jpg" alt="">
				</figure>

				<h2><a href="blog-single-default.html">EJEMPLO CON IMAGEN</a></h2>

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">31/10/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
							<span class="font-lato">28</span>
						</a>
					</li>
				</ul>

				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many.</p>

				<a href="blog-single-default.html" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>

			</div>
			<!-- /POST ITEM -->


			<!-- POST ITEM -->
			<div class="blog-post-item col-md-4 col-sm-4">

				<!-- IMAGE -->
				<figure class="margin-bottom-20">
					<img class="img-responsive" src="assets/images/demo/720x400/7-min.jpg" alt="">
				</figure>

				<h2><a href="blog-single-default.html">EJEMPLO CON IMAGEN</a></h2>

				<ul class="blog-post-info list-inline">
					<li>
						<a href="#">
							<i class="fa fa-clock-o"></i> 
							<span class="font-lato">31/10/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-comment-o"></i> 
							<span class="font-lato">28</span>
						</a>
					</li>
				</ul>

				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many.</p>

				<a href="blog-single-default.html" class="btn btn-reveal btn-default">
					<i class="fa fa-plus"></i>
					<span>Leer más</span>
				</a>

			</div>
			<!-- /POST ITEM -->

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