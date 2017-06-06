<!DOCTYPE html>
<html land="es">
<head>
	<main charset="UTF=8">   
	<title> Agustin Tosar </title>

	<link href="{{ asset('css/general.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>

<body>
	<!-- nav -->
	@include ('template.nav')

	<!-- container -->
	<section>
		<!-- notifications -->
	 	@include('flash::message')

		@yield('content')
	</section>
		
	<script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvY6kfitlGIBhfiXpW6PuEuqHTQ4EE0-A&callback=initMap"></script>


	<script>
    $('#flash-overlay-modal').modal();
	</script>
	
	@yield('js')
</body>
</html>