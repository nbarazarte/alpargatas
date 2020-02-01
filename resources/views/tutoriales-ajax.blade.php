<!--
	Used By:
		portfolio-loading-ajax-modal.html
-->
<div class="lightbox-ajax">

	<!-- title -->
	<h4>Tutoriales</h4>
	
	<!-- body -->
	<div class="lightbox-ajax-body">

		<div class="row">


			@foreach ($tutoriales as $tutorial) 

			<!-- left column -->
			<div class="col-md-7 col-sm-7">

				<!-- YOUTUBE VIDEO -->
				<div class="embed-responsive embed-responsive-16by9">
					
					<!--
					<iframe width="560" height="315" src="https://www.youtube.com/embed/2Ls2pNe1ghc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				-->

					{!! html_entity_decode($tutorial->str_video) !!}
			
				</div>

				<!-- Social Icons -->
				<div class="margin-top-20">
					<a href="https://www.facebook.com/CryptiaExchange/?hc_ref=ARRunlUUrumZJ2D8puynjxgr67QxldbQ372nMx-bW7-dZK2xCWjN5jPlaS44ZNfBONU&fref=nf" target="_blank" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://twitter.com/cryptiaexchange" target="_blank" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="https://www.instagram.com/cryptiaexchange/" target="_blank" class="social-icon social-icon-sm social-icon-transparent social-instagram pull-left" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>
		
				</div>
				<!-- /Social Icons -->

			</div>

			<!-- right column -->
			<div class="col-md-5 col-sm-7">
				
				<!-- description -->
				<p class="lead">{{ $tutorial->str_titulo }}</p>
				<p>{!! html_entity_decode($tutorial->str_post) !!}</p>

				<hr />

				<!-- details -->
				<ul class="list-unstyled">

					<li>
						<i class="fa fa-check"></i> 
						<strong>Autor:</strong> Cryptia Exchange
					</li>
				</ul>
				<!-- /details -->

			</div>

			@endforeach
		</div>

	</div>
	<!-- /body -->

</div>