@extends('template.main')

@section('content')
<a href="#presentation" id="topBtn"><span class="glyphicon glyphicon-chevron-up"> </span></a>

<!-- presentation -->
<div id="presentation" class="presentation col-md-12">
	<div class="presentation-info col-md-6">
		<div class="presentation-name">
			Agustin <b>Tosar</b>
		</div>
		<div class="presentation-description">
			La programacion esta en cualquier lugar que podamos imaginar y si alli no estuviese tendriamos que seguir programando, hasta lograrlo.
		</div>
		<div class="presentation-contact">
			<a href="#contact"> Contacto </a>
		</div>
	</div>
</div>

<!-- about -->
<div id="about" class="about col-md-12">
	<div class="section-title">
		Sobre mi
	</div>

	<div class="row">
		<div class="about-info col-md-6">
			<div class="col-md-12">
				<div class="about-title">
					Descripcion
				</div>
				<div class="about-description">
					<p>Me considero un persona autodidacta, la mayor parte de lo que se es por iniciativa propia.</p>

					<p>El bachillerato tecnológico me dio conocimientos en sistemas operativos (comandos por terminal), bases de datos (MySQL), desarrollo web (PHP, HTML, CSS, JavaScript) y Programacion orientada a objetos.</p>

					<p>Algunas de las tareas que realice en el trabajo fueron principalmente de backend, corrección de errores, generar informes y asesoramiento a merchants sobre APIs propias de la empresa.</p>
					
					<div class="about-cv">
						<a href="/download"> Descargar CV </a>
					</div>
				</div>
			</div>
		</div>

		<div class="about-info col-md-6">
			<div class="col-md-12">
				<div class="about-title">
					Programando
				</div>
				<div class="about-description">
					HTML & CSS
					<div class="progress" style="height: 5px; background-color: #d9d9d9">
					  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" six-sec-ease-in-out" style="width: 80%; background-color: #0d0d0d"></div>
					</div>

					JS
					<div class="progress" style="height: 5px; background-color: #d9d9d9">
					  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" six-sec-ease-in-out" style="width: 20%; background-color: #0d0d0d"></div>
					</div>

					PHP
					<div class="progress" style="height: 5px; background-color: #d9d9d9">
					  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" six-sec-ease-in-out" style="width: 50%; background-color: #0d0d0d"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="about-info col-md-6">
			<div class="about-chart col-md-12">
				<div class="about-title">
					Educacion
				</div>
				<div class="about-description">
					<div class="about-chart-paragraph row">
						<div class="col-md-4">
							<p>2012 - 1015</p>
							<p>ESI, Montevideo</p>
						</div>
						<div class="col-md-8">
							<p><b>Bachillerato Tecnologico de Informatica</b></p>
							<p>El bachillerato tecnológico me dio conocimientos en sistemas operativos (comandos por terminal), bases de datos (MySQL), desarrollo web (PHP, HTML, CSS, JavaScript) y Programacion orientada a objetos.</p>
						</div>
					</div>

					<!--
					<div class="row">
						<div class="col-md-4">
							<p>2016 - En curso</p>
							<p>FING, Montevideo</p>
						</div>
						<div class="col-md-8">
							<p><b>Facultad de Ingenieria</b></p>
							<p></p>
						</div>
					</div>
					-->
				</div>
			</div>
		</div>

		<div class="about-info col-md-6">
			<div class="about-chart col-md-12">
				<div class="about-title">
					Experiencia
				</div>
				<div class="about-description">
					<div class="row">
						<div class="col-md-4">
							<p>2015 - 2016</p>
							<p>AstroPay, Montevideo</p>
						</div>
						<div class="col-md-8">
							<p><b>Web Developer</b></p>
							<p>Algunas de las tareas que realice fueron principalmente de backend, corrección de errores, generar informes y asesoramiento a merchants sobre APIs propias de la empresa.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- learning -->
<div id="learning" class="learning col-md-12">
	<div class="section-title" style="color: #fff;">
		Aprendiendo
	</div>
	<div class="learning-info">
		<img src="{{asset('images/learning/html5.svg')}}">
		<img src="{{asset('images/learning/css3.svg')}}">
		<img src="{{asset('images/learning/javascript.svg')}}">
		<img src="{{asset('images/learning/bootstrap.svg')}}">
		<img src="{{asset('images/learning/php.svg')}}">
		<img src="{{asset('images/learning/mysql.svg')}}">
	</div>
</div>

<!-- contact -->
<div id="contact" class="contact col-md-12">	
	<div class="section-title">
		Contacto
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="contact-description">
					<span class="glyphicon glyphicon-envelope"></span> <b>agustin.tosar@icloud.com</b>
				</div>
				<div class="contact-description">
					<span class="glyphicon glyphicon-earphone"></span> +598 91 469 429
				</div>
				<div class="contact-description">
					<img src="{{asset('images/social/linkedin.png')}}" class="contact-icon"> Agustin Tosar
				</div>
			
				<div class="contact-form">
					{!! Form::open(['route' => 'messages.store', 'method' => 'POST']) !!}
						<div class="contact-input">
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
						</div>
						<div class="contact-input">
							{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'e-mail']) !!}
						</div>

						<div class="contact-message">
							{!! Form::textarea('content', null, ['class' => 'form-control textarea-limited', 'rows' => '4', 'placeholder' => 'Mensaje']) !!}
						</div>

						<div class="contact-submit">
							{!! Form::submit('Enviar') !!}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="col-md-12">
				<div id="map"></div>
			</div>	
		</div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<script type="text/javascript">
$(document).ready(function() {
  // Add smooth scrolling on all links inside the navbar
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (1200) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

<script type="text/javascript">
function initMap() {
  var uluru = {lat: -34.887469, lng: -56.1886877};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}
</script>
@endsection