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
			<p>Desarrollador web y estudiante en ciencias de la computacion.</p>
		</div>
		<!--
		<div class="presentation-contact">
			<a href="#contact"> Contacto </a>
		</div>
		-->
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
					<p>Naci y vivo en Montevideo, tengo 21 años y hace 4 que estudio informatica.</p>
					<p>Me considero una persona autodidacta, me gusta aprender nuevos lenguajes, nuevos conceptos relacionados a la computacion y soy un poco fanatico de los microcontroladores.</p>
					<p>Elegi esta carrera porque me apasiona programar y porque considero que es esencial para complementar con todo lo que se nos ocurra.</p>
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
					  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" six-sec-ease-in-out" style="width: 40%; background-color: #0d0d0d"></div>
					</div>

					PHP
					<div class="progress" style="height: 5px; background-color: #d9d9d9">
					  <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" six-sec-ease-in-out" style="width: 60%; background-color: #0d0d0d"></div>
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
							<p>2012 - 2015</p>
							<p>ESI, Montevideo</p>
						</div>
						<div class="col-md-8">
							<p><b>Bachillerato Tecnologico de Informatica</b></p>
							<p>El bachillerato tecnológico ofrece conocimientos en sistemas operativos (comandos por terminal), bases de datos (MySQL), desarrollo web (PHP, HTML, CSS, JavaScript) y POO.</p>
						</div>
					</div>

					<div class="about-chart-paragraph row">
						<div class="col-md-4">
							<p>2017</p>
							<a href="https://itunes.apple.com/us/course/this-is-cs50-2016/id1191487593" target="_blank">This is CS50 2016</a>
						</div>
						<div class="col-md-8">
							<p><b>CS50</b></p>
							<p>CS50 es un curso de la universidad de Harvard que se libera cada año luego de haber finalizado. Este curso da una introduccion a algoritmos, ingenieria de software y desarollo web entre otras cosas. Incluye lenguajes tales como C, Phyton, SQL, JavaScript, CSS y HTML.</p>
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
							<p>Las tareas realizadas fueron principalmente de backend, corrección de errores, generar reportes y asesorar a merchants sobre APIs propias de la empresa.</p>
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
		<img src="{{asset('images/learning/html5.svg')}}" data-toggle="modal" data-target="#html">

		<!-- html Modal -->
		<div class="modal fade" id="html" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">HTML</h4>
		      </div>
		      <div class="modal-body">
	      		<div class="row">
			      	<div class="col-md-4">
			      		<img src="{{asset('images/pages/codecademy.svg')}}" style="width:140px; height:70px">
			      	</div>
			      	<div class="col-md-8">
			      		<p><b>HTML & CSS</b></p>
			      		<a href="https://www.codecademy.com/learn/web" target="_blank">https://www.codecademy.com/learn/web</a>
			      	</div>
	      		</div>
		      </div>
		    </div>
		  </div>
		</div>

		<img src="{{asset('images/learning/css3.svg')}}" data-toggle="modal" data-target="#css">

		<!-- css Modal -->
		<div class="modal fade" id="css" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">CSS</h4>
		      </div>
		      <div class="modal-body">
	      		<div class="row">
			      	<div class="col-md-4">
			      		<img src="{{asset('images/pages/codecademy.svg')}}" style="width:140px; height:70px">
			      	</div>
			      	<div class="col-md-8">
			      		<p><b>HTML & CSS</b></p>
			      		<a href="https://www.codecademy.com/learn/web" target="_blank">https://www.codecademy.com/learn/web</a>
			      	</div>
	      		</div>
		      </div>
		    </div>
		  </div>
		</div>

		<img src="{{asset('images/learning/javascript.svg')}}" data-toggle="modal" data-target="#js">

		<!-- js Modal -->
		<div class="modal fade" id="js" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">JavaScript</h4>
		      </div>
		      <div class="modal-body">
	      		<div class="row">
			      	<div class="col-md-4">
			      		<img src="{{asset('images/pages/codecademy.svg')}}" style="width:140px; height:70px">
			      	</div>
			      	<div class="col-md-8">
			      		<p><b>JavaScript</b></p>
			      		<a href="https://www.codecademy.com/learn/javascript" target="_blank">https://www.codecademy.com/learn/javascript</a>
			      	</div>
	      		</div>
		      </div>
		    </div>
		  </div>
		</div>

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
					<img src="{{asset('images/social/linkedin.png')}}"> 
					<a href="https://uy.linkedin.com/in/agustin-tosar-494a16b9" target="_blank">
						Agustin Tosar
					</a>
				</div>
			
				<div class="contact-form">
					{!! Form::open(['route' => 'messages.store', 'name' => 'messageForm', 'onsubmit' => "return validateForm()", 'method' => 'POST']) !!}
						

						<div class="error-form">
							<div class="alert alert-danger alert-dismissable fade in">
								<button type="button" onclick="hideForm()" class="close"  aria-hidden="true">&times;</button>
								<div id="error-content"></div>
							</div>
						</div>

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
// Scroll top button
// When the user scrolls down 40px from the top of the document, show the button
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


// Scroll
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


// Validate form
function validateForm() {
  var name = document.forms["messageForm"]["name"].value;
  var email = document.forms["messageForm"]["email"].value;
  var content = document.forms["messageForm"]["content"].value;
  
  if (name == "" || email == "" || content == "") {
    document.getElementById("error-content").innerHTML = 'Debes completar todos los campos.';
	
  	$(".alert").hide().slideDown();
  	
  	return false;
	
	} 

	if (!validateEmail(email)) { 
		document.getElementById("error-content").innerHTML = 'Debes ingresar un email valido.';
	
  	$(".alert").hide().slideDown();

		return false;
	
	} else {
		
		return true;
	} 
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
  return re.test(email);
}

function hideForm() {
	$(".alert").show().slideUp();
  
	return false;
}


// Google map
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