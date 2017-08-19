<!DOCTYPE html>
<html land="es">
<head>
	<main charset="UTF=8">   
	<title> Manos Pequenas </title>

	<link href="{{ asset('css/general.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

	<link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
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

	<script>
  		$('#flash-overlay-modal').modal();
	</script>

	<script type="text/javascript" src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>

  	<script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDw3LCIyhjwpqT8EtIFVJYs705fIQG7Gjk&callback=initMap" type="text/javascript"></script>
	@yield('js')
</body>
</html>