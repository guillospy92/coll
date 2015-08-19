
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('css/bootstrap-cerulean.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/charisma-app.css') }}" rel="stylesheet">
	<link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.css') }}" rel="stylesheet">
	<link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.print.css') }}" rel="stylesheet">
	<link href="{{ asset('bower_components/chosen/chosen.min.css') }}" rel="stylesheet">
	<link href="{{ asset('bower_components/colorbox/example3/colorbox.css') }}" rel="stylesheet">
	<link href="{{ asset('bower_components/responsive-tables/responsive-tables.css') }}" rel="stylesheet">
	<link href="{{ asset('bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/jquery.noty.css') }}" rel="stylesheet">
	<link href="{{ asset('css/noty_theme_default.css') }}" rel="stylesheet">
	<link href="{{ asset('css/elfinder.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/elfinder.theme.css') }}" rel="stylesheet">
	<link href="{{ asset('css/jquery.iphone.toggle.css') }}" rel="stylesheet">
	<link href="{{ asset('css/uploadify.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	

	@yield('content')

	<!-- Scripts -->

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{!!asset('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
	<script src="{!!asset('js/jquery.cookie.js')!!}"></script>
	<script src="{!!asset('bower_components/moment/min/moment.min.js')!!}"></script>
	<script src="{!!asset('bower_components/fullcalendar/dist/fullcalendar.min.js')!!}"></script>
	<script src="{!!asset('js/jquery.dataTables.min.js')!!}"></script>
	<script src="{!!asset('js/jquery.noty.js')!!}"></script>
	<script src="{!!asset('bower_components/responsive-tables/responsive-tables.js')!!}"></script>
	<script src="{!!asset('js/jquery.raty.min.js')!!}"></script>
	<script src="{!!asset('js/jquery.iphone.toggle.js')!!}"></script>
	<script src="{!!asset('js/jquery.autogrow-textarea.js')!!}"></script>
	<script src="{!!asset('js/jquery.uploadify-3.1.min.js')!!}"></script>
	<script src="{!!asset('js/jquery.history.js')!!}"></script>
	<script src="{!!asset('js/charisma.js')!!}"></script>


</body>
</html>
