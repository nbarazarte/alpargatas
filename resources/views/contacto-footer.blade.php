<!-- CALLOUT -->
<div class="callout callout-theme-color alert alert-warning">
	<div class="container">

		<div class="row">

			<div class="col-md-10"><!-- title + shortdesc -->
				<h3><strong>Cryptia Exchange</strong> es la forma segura y confiable de intercambiar criptomonedas.</h3>
			</div>

			<div class="col-md-2"><!-- button -->
				<a href="https://exchange.cryptiaexchange.com/en/login" target="_blank" class="btn btn-primary btn-lg">Ingresar ahora</a>
			</div>

		</div>

	</div>
</div>
<!-- /CALLOUT -->

<!-- CONTACTO -->
<section id="contacto">
	<div class="container">
		<br>
		<header class="text-center margin-bottom-60">
			<h2 style="font-size: 60px">Contacto</h2>
			<h2 class="weight-300 letter-spacing-1 size-13"><span><b>COMO CLIENTE DE CRYPTIA EXCHANGE ERES EL MAYOR VALOR</b></span></h2>
			<hr />
		</header>

		<div class="row">

			<!-- FORM -->
			<div class="col-md-8 col-sm-8">

				<h3>Si tienes dudas, comentarios o quieres ser parte de nuestro equipo <strong><em>¡contáctanos!</em></strong></h3>

				
				<!--
					MESSAGES
					
						How it works?
						The form data is posted to php/contact.php where the fields are verified!
						php.contact.php will redirect back here and will add a hash to the end of the URL:
							#alert_success 		= email sent
							#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
							#alert_mandatory	= email not sent - required fields empty
							Hashes are handled by assets/js/contact.js

						Form data: required to be an array. Example:
							contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
							Also, add `required` to input fields if is a mandatory field. 
							Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

						PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
									 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

						WARNING! Do not change the `email` and `name`!
									contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
									contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
				-->

				<!-- Alert Success -->
				<div id="alert_success" class="alert alert-success margin-bottom-30">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Thank You!</strong> Your message successfully sent!
				</div><!-- /Alert Success -->


				<!-- Alert Failed -->
				<div id="alert_failed" class="alert alert-danger margin-bottom-30">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>[SMTP] Error!</strong> Internal server error!
				</div><!-- /Alert Failed -->


				<!-- Alert Mandatory -->
				<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
				</div><!-- /Alert Mandatory -->


				<form action="php/contact.php" method="post" enctype="multipart/form-data">
					<fieldset>
						<input type="hidden" name="action" value="contact_send" />

						<div class="row">
							<div class="form-group">
								<div class="col-md-4">
									<label for="contact:name">Nombre y Apellido *</label>
									<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
								</div>
								<div class="col-md-4">
									<label for="contact:email">Dirección de Correo Electrónico *</label>
									<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
								</div>
								<div class="col-md-4">
									<label for="contact:phone">Teléfono</label>
									<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label for="contact:subject">Asunto *</label>
									<input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
								</div>

							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label for="contact:message">Mensaje *</label>
									<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12">
									<label for="contact:attachment">Archivo adjunto</label>

									<!-- custom file upload -->
									<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Buscar" />
									<small class="text-muted block">Tamaño máximo: 10Mb (zip/pdf/jpg/png)</small>

								</div>
							</div>
						</div>

					</fieldset>

					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> ENVIAR MENSAJE</button>
						</div>
					</div>
				</form>

			</div>
			<!-- /FORM -->

			<!-- INFO -->
			<div class="col-md-4 col-sm-4">

				<h2>Visítanos</h2>

				<!-- 
				Available heights
					height-100
					height-150
					height-200
					height-250
					height-300
					height-350
					height-400
					height-450
					height-500
					height-550
					height-600
				-->
				<!--
				<div id="map2" class="height-400 grayscale"></div>

				<hr />
				-->
				<p>
					<span class="block"><strong><i class="fa fa-map-marker"></i> Dirección:</strong> Av. Francisco de Miranda con Mohedano, Edif. Centro de Seguros Sudamérica, piso 11, oficina 11-B2, Urb. El Rosal, Caracas (Chacao), Miranda Zona Postal 1060 Caracas, Venezuela</span>
					<span class="block">
						<strong><i class="fa fa-phone"></i> Teléfonos:</strong>
						<a href="tel:+58-0212-953-5109">+58-0212-953-5109</a></span>
						
						<strong><i class="fa fa-phone"></i> Teléfonos:</strong>
						<a href="tel:+58-0212-953-7412">+58-0212-953-7412</a></span>
						<br>
						<strong><i class="fa fa-phone"></i> Teléfonos:</strong>
						<a href="tel:+58-0212-953-8130">+58-0212-953-8130</a></span>
						<br>
						<strong><i class="fa fa-phone"></i> Teléfonos:</strong>
						<a href="tel:+58-0212-953-6733">+58-0212-953-6733</a></span>
					<span class="block"><strong><i class="fa fa-envelope"></i> Correo Electrónico:</strong> <a href="mailto:atencionalcliente@cryptiaexchange.com">atencionalcliente@cryptiaexchange.com</a></span>
				</p>

			</div>
			<!-- /INFO -->


		</div>

	</div>
</section>
<!-- /CONTACT -->

<!-- FOOTER -->
<footer id="footer">
	<div class="container">

		<div class="row">
			
			<div class="col-md-3">
				<!-- Footer Logo -->
				<img class="footer-logo" src="wp-content/uploads/2017/12/logo-Cryptia-Exchange-menu.png" alt="" />

				<!-- Small Description -->
				<p>La forma más segura y confiable de intercambiar criptomonedas.</p>

				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						<li class="footer-sprite address">
							Av. Francisco de Miranda con Mohedano, Edif. Centro de Seguros Sudamérica, piso 11, oficina 11-B2, Urb. El Rosal, Caracas (Chacao), <br>
							Miranda Zona Postal 1060 Caracas, Venezuela
						</li>
						<li class="footer-sprite phone">
							Teléfonos: +58-0212-953-5109 / 7412 / 8130 / 6733
						</li>
						<li class="footer-sprite email">
							<a href="mailto:atencionalcliente@cryptiaexchange.com">atencionalcliente@cryptiaexchange.com</a>
						</li>
					</ul>
				</address>
				<!-- /Contact Address -->

			</div>

			<div class="col-md-3">

				<!-- Latest Blog Post -->
				<h4 class="letter-spacing-1">ÚLTIMAS NOTICIAS</h4>
				<ul class="footer-posts list-unstyled">

					@foreach ($ultimasNoticiasFooter as $ultimaFooter)

						<li>
							<a href="{{ route('verNoticias',[$ultimaFooter->str_titulo])}}" target="_blank">{{ str_replace("-"," ",$ultimaFooter->str_titulo) }}</a>
							<small>
								
								<?php

							  		$ultimaFooter->fecha = substr($ultimaFooter->fecha, 0,10);

							        $var = explode('-',$ultimaFooter->fecha);

							        $ultimaFooter->fecha = "$var[2]-$var[1]-$var[0]";

								?>

								{!! $ultimaFooter->fecha !!} 
											
							</small>
						</li>

					@endforeach

				</ul>
				<!-- /Latest Blog Post -->

			</div>

			<div class="col-md-2">

				<!-- Links -->
				<h4 class="letter-spacing-1">CRYPTIA EXCHANGE</h4>
				<ul class="footer-links list-unstyled">
					<li><a href="{{ route('inicio')}}">Incio</a></li>
					<li><a href="{{ route('nosotros')}}">Sobre Nosotros</a></li>
					<li><a href="{{ route('mercados')}}">Mercados</a></li>
					<li><a href="{{ route('monedas')}}">Monedas</a></li>
					<li><a href="{{ route('noticias')}}">Noticias</a></li>
					<li><a href="{{ route('tutoriales')}}">Tutoriales</a></li>
					<li><a href="{{ route('blog')}}">Blog</a></li>
					<li><a href="#contacto">Contacto</a></li>
					<li><a href="https://exchange.cryptiaexchange.com/en/login" target="_blank">Exchange</a></li>
				</ul>
				<!-- /Links -->

			</div>

			<div class="col-md-4">

				<!-- Newsletter Form -->
				<h4 class="letter-spacing-1">MANTENTE EN CONTACTO</h4>
				<p>Subscríbete a nuestro boletín para mantenerte informado</p>

				<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input type="email" id="email" name="email" class="form-control required" placeholder="Tu dirección correo electrónico">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">Subscríbete</button>
						</span>
					</div>
				</form>
				<!-- /Newsletter Form -->

				<!-- Social Icons -->
				<div class="margin-top-20">
					<a href="https://www.facebook.com/CryptiaExchange/?hc_ref=ARRunlUUrumZJ2D8puynjxgr67QxldbQ372nMx-bW7-dZK2xCWjN5jPlaS44ZNfBONU&fref=nf" class="social-icon social-icon-border social-facebook pull-left" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://twitter.com/cryptiaexchange" class="social-icon social-icon-border social-twitter pull-left" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="https://www.instagram.com/cryptiaexchange/" class="social-icon social-icon-border social-instagram pull-left" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="fa fa-instagram"></i>
						<i class="fa fa-instagram"></i>
					</a>
		
				</div>
				<!-- /Social Icons -->

			</div>

		</div>

	</div>

	<div class="copyright" style="background-color: #000000">
		<div class="container">
			<ul class="pull-right nomargin list-inline mobile-block">
				<li><a href="#">Tarifas</a></li>
			</ul>
			&copy; All Rights Reserved, Cryptia Exchange
		</div>
	</div>
</footer>
<!-- /FOOTER -->