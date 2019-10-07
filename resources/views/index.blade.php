@extends('layouts.appCryptia')

@section('content')
<div class="tmpl-home home-template ">
	<div class="container">

	<!-- Sliders section -->
		@include('slidersSection')
	<!-- End Sliders section -->

	<!-- welcome-section -->
		@include('welcomeSection')
	<!-- End welcome-section -->

		<div class="vc_row_anchor js_stretch_anchor">
			<div class="wrap-anchor">
				<a class="striped-icon divider scroll">
					<div class="top-block-icon">
						<i class="finance-templ-money-8"></i>
					</div>
				</a>
			</div>
		</div>

	<!-- Calculator section -->
		@include('calculatorSection')
	<!-- End Calculator section-->

	<!-- Counters section -->
		@include('countersSection')
	<!-- End Counters section -->

	<!-- Free Apps section -->
		@include('freeAppsSection')
	<!-- End Free Apps section -->

	<!-- Testimonials section -->
		@include('testimonialsSection')
	<!-- End Testimonials section -->

	<!-- Team section -->
		@include('teamSection')
	<!-- End Team section -->

	<!-- Contact section -->
		@include('contactSection')
	<!-- End Contact section -->

	<!-- News section -->
		@include('newsSection')
	<!-- End News section -->

	<!-- Logos section -->
		@include('logosSection')
	<!-- End Logos section -->

	</div>
</div>

@endsection