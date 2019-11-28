@extends('layouts.appCryptiaSmarty')

@section('content')

<!-- TUTORIALES -->
<section id="" class="nopadding-bottom">
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Tutoriales</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>LA MÁS NOVEDOSA TECNOLOGÍA BLOCKCHAIN DEL MERCADO VENEZOLANO</b></span></h2>
			<hr />
		</header>

		<div class="text-center">
			<p class="lead">
				Ingresa a la plataforma de mayor seguridad Exchange de Venezuela, conoce los tutoriales que hacen fácil tu ingreso.
			</p>

		</div>
	</div>
</section>
<!-- /TUTORIALES -->

<!-- -->
<section>
	<div class="container">

		<div id="portfolio_ajax_container">
			<!-- 
				AJAX CONTAINER 

				See included JS file: "assets/js/view/demo.portfolio.js"
					at the bottom of this page!
			-->
		</div>


		<!--
			Please note: .infinite-scroll class
			
			data-nextSelector="#inf-load-next" - see the bottom of portfolio
			data-itemSelector="portfolio-item" - item class - should be common on all pages.
			
		-->
		<div id="portfolio" class="clearfix portfolio-isotope portfolio-isotope-4">

		@foreach ($tutoriales as $tutorial) 

			<div class="portfolio-item photography"><!-- item -->

				<div class="item-box">
					<figure>
						<span class="item-hover">
							<span class="overlay dark-5"></span>
							<span class="inner">

								<!-- ajax page -->
								<a class="ico-rounded lightbox" href="{{route('tutoriales-ajax',[$tutorial->id])}}" data-plugin-options='{"type":"ajax", "closeOnBgClick":false}'>
									<span class="fa fa-eye size-20"></span>
								</a>

								<!-- video play -->
								<a class="ico-rounded lightbox" href="{{ $tutorial->str_src }}" data-plugin-options='{"type":"iframe"}'>
									<span class="fa fa-play size-20"></span>
								</a>

							</span>
						</span>

						
						<img class="img-responsive" src="data:image/jpeg;base64,{{ $tutorial->blb_img1 }}" alt="" title="" width="600" height="399" alt="">
					</figure>

					<div class="item-box-desc">

						<h3 style="font-size: 14px;text-align: center;"> {{ str_replace("-"," ",$tutorial->str_titulo) }} </h3>

					</div>

				</div>

			</div><!-- /item -->

		@endforeach	

		</div>

	</div>
</section>
<!-- / -->

@endsection			