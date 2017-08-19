@extends('template.main')

@section('content')
<!-- Presentacion -->
<div id="presentation" class="presentation col-md-12">
	<div class="presentation-info col-md-6">
		<div class="presentation-name">
			<span style="color: #fbf8f1">Manos</span> <b style="color: #61ba66">Pequeñas</b>
		</div>
		<!--
		<div class="presentation-description">
			<p>Frasecita linda</p>
		</div>
		-->
	</div>
</div>

<!-- Quienes somos? -->
<div id="quienesSomos" class="about col-md-12">
	<div class="section-title">
		Quienes somos?
	</div>

	<div class="col-md-6 col-md-offset-3 text-center">
		<p>
		Somos un equipo de jóvenes con historias diferentes pero con un interés en
		común: el aportar algo a la situación social actual de la que todos somos parte.
		Nos pareció que la manera más grande de hacerlo empezar por gestos chicos, para
		así acercarnos con nuestras propias manos a la necesidad del otro.
		</p>

		<p>
		Comenzamos este emprendimiento con la intención de extender una mano a la
		gente que se encuentra en situación de calle.

		Para esto nos propusimos, en primer lugar, juntar ropa, zapatos y cualquier
		elemento de abrigo que podamos compartir con quien más lo necesita.
		Por otra parte, nos juntamos a cocinar todas las semanas, para además del
		abrigo, salir a repartir un plato de comida y bebida caliente, por las zonas del
		centro y tres cruces, para ayudando, disfrutar de cada encuentro.
		Necesitamos tu ayuda para que el proyecto siga creciendo.
		Con cualquier granito de arena podes ser parte.
		</p>

		<p>
		Si querés colaborar con nosotros, contactanos por nuestro mail o en
		nuestras redes sociales.
		Gracias!
		</p>

		<div class="row">
			<p class="pull-right" style="font-weight: bold; font-size: 14px"> “Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas puede cambiar el mundo”.</p>
		</div>
		<div class="row">
			<p class="pull-right" style="font-weight: bold; font-size: 14px">E. Galeano</p>
		</div>
	</div>
</div>

<!-- Participa -->
<div id="participa" class="join col-md-12">
	<div class="section-title">
		Participa !
	</div>

	<div class="col-md-8 col-md-offset-4">
		<div class="col-md-2 btn-mobile text-center">
			<a href="#" id="dona-form" class="btn-form" data-toggle="modal" data-target="#myModal" onclick="formType('dona')">Dona</a>
		</div>

		<div class="col-md-2 col-md-offset-2 btn-mobile text-center">
			<a href="#" id="sumate-form" class="btn-form" data-toggle="modal" data-target="#myModal" onclick="formType('sumate')">Sumate</a>
		</div>
	</div>

	<!-- Modal form -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="formTitle"></h4>
	      </div>
	      <div class="modal-body">
	        <div class="contact-form">
				{!! Form::open(['route' => 'messages.store', 'name' => 'messageForm', 'onsubmit' => "return validateForm()", 'method' => 'POST']) !!}
					<p id="formDescription"></p>

					<div class="error-form">
						<div class="alert alert-danger alert-dismissable fade in">
							<!-- <button type="button" onclick="hideForm()" class="close"  aria-hidden="true">&times;</button> -->
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

					<div class="contact-submit pull-right">
						{!! Form::submit('Enviar') !!}
					</div>
				{!! Form::close() !!}
			</div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<!-- Refugios -->
<div id="refugios" class="refugios col-md-12">
	<div class="section-title">
		Refugios
	</div>

	<div class="col-md-6 col-md-offset-3">
		<div id="map"></div>
	</div>
</div>

<!-- Redes -->
<div id="redes" class="social col-md-12">
	<div class="section-title">
		Redes
	</div>

	<div class="col-md-8 col-md-offset-2">
		<div id="instafeed" class="text-center"></div>
	</div>
</div>

<!-- Integrantes -->
<div id="integrantes" class="people col-md-12">
	<div class="section-title">
		Gracias por las pequeñas manos:
	</div>

	<div class="col-md-6 col-md-offset-3">
		Agustin Goyetche • Lucila • Lucia B • Agustina Lucena • Agustin Tosar • Sofía Proverbio • Agustina Duría • Mariana Alvarez • Victoria Isi • Maria Bentancor • Florencia Luzon • Natalia Acevedo • Malena Gonzalez • Camila Revello • Sofía Fossemale • Victoria Brusich • Luna Aldaya • Julieta Gonzalez • Julieta Rebollo • Mariana Rodriguez • Aylen da Silva • Paula Guillemette • Agustina Velázquez • Agustín Toledo • Natalia Bartesaghi • Martina Bentancor • Inés Miranda • Agustín Pomies • Karin do Valle Peixoto • Iara Mandressi • Magdalena Goñi • Micaela González • Julia Godin • Federico Lopez • Joaquin Bergeret • Maite Martirena • Bruno Long • Gonzalo Ferrés • Giancarlo Martino • Agustina Franco • Felipe Cañadas • Pedro Paz • Cecilia García • Santiago Morales • Sara Pigola • Clara alvarez • Chiara Cal • Juan Traversa • Renzo De Marco • Rocío Gómez
	</div>
</div>

<!-- Contacto -->
<div id="contacto" class="contact col-md-12">
	<div class="section-title">
		Contacto
	</div>

	<div class="col-md-12 contact-mobile">
		<div class="col-md-2 col-md-offset-3 contact-description">
			<span class="glyphicon glyphicon-envelope"></span> <b>manos.peque@gmail.com</b>
		</div>
	
		<div class="col-md-2 text-center">
			<div class="contact-description">
				<a href="https://www.instagram.com/manospequenas/" target="_blank" style="text-decoration: none;">
					<img src="{{asset('images/social/instagram.png')}}">
				</a>

				<a href="https://m.facebook.com/profile.php?id=161513514412630" target="_blank" style="text-decoration: none;">
					<img src="{{asset('images/social/facebook.png')}}"> 
				</a>
			</div>
		</div>		

		<div class="col-md-2 contact-description">
			<span class="glyphicon glyphicon-earphone"></span> +598 98 121 579
		</div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
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

	      // Header height
	      var headerHeight = $(".navbar-header").height();

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (1200) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top - headerHeight
	      }, 1200, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash - headerHeight;
	      });
	    }  // End if
	  });
	});

	// Modal
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	});

	// Form
	function formType(type) {
		var title = document.getElementById("formTitle");
		var description = document.getElementById("formDescription");

		if (type == 'sumate') {
			title.innerHTML = "Escribinos para sumarte a nuestro equipo!";
			description.innerHTML = "Si querés sumarte a nuestro equipo para salir repartir abrigos y comida caliente dejanos un mensaje y un número de teléfono para contactarte";

		} else {
			title.innerHTML = "Escribinos para donar abrigos o alimentos!";
			description.innerHTML = "Si deseas donar abrigos dejanos un mensaje con la descripción de lo que quieres donar, una fecha y horario para pasar a buscar tu donación y un número de teléfono para contactarte";
		}
	}

	function validateForm() {
	  var name = document.forms["messageForm"]["name"].value;
	  var email = document.forms["messageForm"]["email"].value;
	  var content = document.forms["messageForm"]["content"].value;

	  if (name == "" || email == "" || content == "") {
	    document.getElementById("error-content").innerHTML = 'Debes completar todos los campos.';
		
	  		$(".error-form").hide().slideDown();
	  			return false;
		} 

		if (!validateEmail(email)) { 
			document.getElementById("error-content").innerHTML = 'Debes ingresar un email valido.';
		
	  		$(".error-form").hide().slideDown();
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

	// Instafeed
    var feed = new Instafeed({
 		get: 'user',
        userId: '5699479491',
        accessToken: '5699479491.1677ed0.6d20f6e98ad842a2b82773f3f318dc78',
    	sortBy: 'most-recent',
    	limit: 32
    });
    feed.run();

    // Google map
	function initMap() {
	  	var center = {lat: -34.8998641, lng: -56.1807477};
  	  
  	  	// refugios
	  	var estrellaDelSur = {lat: -34.9096835, lng: -56.1986386};
	  	var pabloVI = {lat: -34.8967999, lng: -56.1823948};
	  	var quebracho = {lat: -34.9087278, lng: -56.2057136};
	  	var mundoAfro = {lat: -34.9097106, lng: -56.200136};
	  	var lucero = {lat: -34.9038791, lng: -56.1898438};
	  	var padreHurtado = {lat: -34.8926772, lng: -56.1782756};
	  	var sanLuis = {lat: -34.9051307, lng: -56.1850076};
	  	var albertoHein = {lat: -34.9030762, lng: -56.1714003};
	  	var aRedoblar = {lat: -34.9022844, lng: -56.196992};
	  	var sanVicente = {lat: -34.8944656, lng: -56.1838198};
	  	var andares = {lat: -34.9041251, lng: -56.1853697};

  		var contentEstrellaDelSur = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Estrella del sur</h3>' + '<div id="bodyContent">' + '<p>Refugio nocturno para familias (padres o madres con hijos) con 50 plazas, en convenio con el Centro de Investigación y Promoción Franciscano y Ecológico (CIPFE).</p>' + '<p>Funciona de 18 a 8 hs. y está ubicado en <b>Florida 1178</b>.</p>' + '</div>' + '</div>';
   
   		var contentPabloVI = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Albergue Pablo VI</h3>' + '<div id="bodyContent">' + '<p>Albergue Pablo VI. Pertenece a la Obra Social Pablo VI, una asociación civil que asiste a las personas sin techo de Montevideo. El Mides financia unos 55 cupos para madres con hijos (con un aporte de $ 190.000 mensuales) y el BPS aporta fondos para unos 25 adultos mayores de 60 años. Está ubicado en <b>9 de Abril 11800</b>.</p>' + '</div>' + '</div>';

   		var contentQuebracho = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Quebracho</h3>' + '<div id="bodyContent">' + '<p>Quebracho. Refugio nocturno para madres con hijos ubicado en <b>Buenos Aires 440</b>, con lugar para 50 personas. Es gestionado por la ONG Coordinación Promoción Humana de Quebracho y el Mides aporta unos $ 611.000 mensuales.</p>' + '</div>' + '</div>';

   		var contentMundoAfro = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Mundo afro</h3>' + '<div id="bodyContent">' + '<p>Mundo Afro. Inaugurado el año pasado, tiene 35 plazas. Está ubicado en <b>Ciudadela 1229</b>.</p>' + '</div>' + '</div>';
   
   		var contentLucero = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Lucero</h3>' + '<div id="bodyContent">' + '<p>Lucero. Refugio nocturno para mujeres solas con 40 camas. Es atendido por el Centro de Investigación y Promoción Franciscano y Ecológico (CIPFE) en convenio con el Mides. Atiende a mujeres solas en situación de calle de entre 18 y 55 años. Ubicado en <b>Mercedes 1227</b>.</p>' + '</div>' + '</div>';
   
   		var contentPadreHurtado = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Padre Hurtado</h3>' + '<div id="bodyContent">' + '<p>Padre Hurtado. Refugio mixto abierto las 24 horas, para adultos mayores de 55 años en situación de calle. Es gestionado por la ONG Padre Alberto Hurtado, fundada por un grupo de laicos y religiosos, "inspirados en la espiritualidad del sacerdote chileno jesuita San Alberto Hurtado", según consta en el sitio web del refugio. Funciona en el barrio <b>La Comercial (Lima 1832)</b>.</p>' + '</div>' + '</div>';

   		var contentSanLuis = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">San Luis Orione</h3>' + '<div id="bodyContent">' + '<p>Hogar para adultos mayores abierto las 24 horas, con 30 lugares. Es el único que permite que los usuarios lleven sus perros. Gestionado en forma conjunta por el Mides y el Cottolengo Don Orione. Ubicado en <b>Propios 5481</b>.</p>' + '</div>' + '</div>';

   		var contentAlbertoHein = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Alberto Hein</h3>' + '<div id="bodyContent">' + '<p>Alberto Hein. Refugio mixto para 30 personas, que atiende las 24 horas, gestionado por la ONG Factor Solidaridad. Está ubicado en <b>Dr Pablo De María 1366</b>.</p>' + '</div>' + '</div>';

   		var contentARedoblar = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">A redoblar</h3>' + '<div id="bodyContent">' + '<p>A Redoblar. Refugio nocturno del Mides para hombres solos con cupo para 70 personas. Ubicado en Paysandú 919 esquina Convención. Para la gestión del refugio el Mides cuenta con la asistencia de una cooperativa de educadores y un psicólogo. El refugio funciona desde 2005, y en 2010 el Mides le expropió el inmueble al Banco Mercantil del Río de la Plata. Está ubicado en <b>Paysandú 919</b>.</p>' + '</div>' + '</div>';

   		var contentSanVicente = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">San Vicente</h3>' + '<div id="bodyContent">' + '<p>San Vicente. Refugio para hombres solos con 50 camas. En <b>Fernández Crespo 2131</b>.</p>' + '</div>' + '</div>';
   
   		var contentAndares = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h3 id="firstHeading" class="firstHeading">Andares</h3>' + '<div id="bodyContent">' + '<p>Andares. Refugio para hombres solos en situación de calle, con 50 cupos. Gestionado por la ONG Factor Solidaridad y ubicado en <b>Barrios Amorín 1416</b>.</p>' + '</div>' + '</div>';

      	// map  	
	  	var map = new google.maps.Map(document.getElementById('map'), {
	    	zoom: 14,
	    	center: center
	  	});

	  	// makers
	  	var markerEstrellaDelSur = new google.maps.Marker({
	    	position: estrellaDelSur,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerPabloVI = new google.maps.Marker({
		    position: pabloVI,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerQuebracho = new google.maps.Marker({
		    position: quebracho,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerMundoAfro = new google.maps.Marker({
		    position: mundoAfro,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerLucero = new google.maps.Marker({
		    position: lucero,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerPadreHurtado = new google.maps.Marker({
		    position: padreHurtado,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerSanLuis = new google.maps.Marker({
		    position: sanLuis,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerAlbertoHein = new google.maps.Marker({
		    position: albertoHein,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerARedoblar = new google.maps.Marker({
		    position: aRedoblar,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerSanVicente = new google.maps.Marker({
		    position: sanVicente,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	var markerAndares = new google.maps.Marker({
		    position: andares,
		    map: map,
	    	animation: google.maps.Animation.DROP
	  	});

	  	// listeners
	  	markerEstrellaDelSur.addListener('click', function() {
	        infowindowEstrellaDelSur.open(map, markerEstrellaDelSur);
      	});

      	markerPabloVI.addListener('click', function() {
	        infowindowPabloVI.open(map, markerPabloVI);
      	});

      	markerQuebracho.addListener('click', function() {
	        infowindowQuebracho.open(map, markerQuebracho);
      	});

      	markerMundoAfro.addListener('click', function() {
	        infowindowMundoAfro.open(map, markerMundoAfro);
      	});

      	markerLucero.addListener('click', function() {
	        infowindowLucero.open(map, markerLucero);
      	});

      	markerPadreHurtado.addListener('click', function() {
	        infowindowPadreHurtado.open(map, markerPadreHurtado);
      	});

      	markerSanLuis.addListener('click', function() {
	        infowindowSanLuis.open(map, markerSanLuis);
      	});

      	markerAlbertoHein.addListener('click', function() {
	        infowindowAlbertoHein.open(map, markerAlbertoHein);
      	});

      	markerARedoblar.addListener('click', function() {
	        infowindowARedoblar.open(map, markerARedoblar);
      	});

      	markerSanVicente.addListener('click', function() {
	        infowindowSanVicente.open(map, markerSanVicente);
      	});

      	markerAndares.addListener('click', function() {
	        infowindowAndares.open(map, markerAndares);
      	});

	  	// infoWindows
	  	var infowindowEstrellaDelSur = new google.maps.InfoWindow({
	      	content: contentEstrellaDelSur,
	      	maxWidth: 240
	  	});

	  	var infowindowPabloVI = new google.maps.InfoWindow({
	      	content: contentPabloVI,
	      	maxWidth: 240
	  	});

	  	var infowindowQuebracho = new google.maps.InfoWindow({
	      	content: contentQuebracho,
	      	maxWidth: 240
	  	});

	  	var infowindowMundoAfro = new google.maps.InfoWindow({
	      	content: contentMundoAfro,
	      	maxWidth: 240
	  	});

	  	var infowindowLucero = new google.maps.InfoWindow({
	      	content: contentLucero,
	      	maxWidth: 240
	  	});

	  	var infowindowPadreHurtado = new google.maps.InfoWindow({
	      	content: contentPadreHurtado,
	      	maxWidth: 240
	  	});

	  	var infowindowSanLuis = new google.maps.InfoWindow({
	      	content: contentSanLuis,
	      	maxWidth: 240
	  	});

	  	var infowindowAlbertoHein = new google.maps.InfoWindow({
	      	content: contentAlbertoHein,
	      	maxWidth: 240
	  	});

	  	var infowindowARedoblar = new google.maps.InfoWindow({
	      	content: contentARedoblar,
	      	maxWidth: 240
	  	});

	  	var infowindowSanVicente = new google.maps.InfoWindow({
	      	content: contentSanVicente,
	      	maxWidth: 240
	  	});

	  	var infowindowAndares = new google.maps.InfoWindow({
	      	content: contentAndares,
	      	maxWidth: 240
	  	});
	}
</script>
@endsection