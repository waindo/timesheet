<!doctype html>
<html>
<head>
<title>Timesheet</title>
	<link rel="stylesheet" type="text/css" href="assets/css/boot.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/date.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styl.css" />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 {{ HTML::style('assets/css/bootlist.min.css') }}
</head>

<body>
	

		@include('includes.menu')
		
<div class="container">	


	<div id="main" class="row">

			@yield('content')
			
		{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/bootstrap.js') }}

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
   
    <script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>

	</div></div> </br>
	
	<div align="center">
	<footer class="row">
		@include('includes.footer')
			<div id="modal" class="modal hide fade" aria-hidden="true" data-backdrop="static"></div>

	

	
	</footer>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/boot.js"></script>
	<script type="text/javascript" src="assets/js/datepicker.js"></script>
	<script type="text/javascript" src="assets/js/datepicker.id.js"></script>
	<script type="text/javascript" src="assets/js/form.js"></script>
	<script type="text/javascript" src="assets/js/underscore.js"></script>
	<script type="text/javascript" src="assets/js/backbone.js"></script>
	<script type="text/javascript" src="assets/js/messenger.js"></script>
	<script type="text/javascript" src="assets/js/future.js"></script>
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script type="text/javascript" src="assets/js/script/layout.js"></script>
	<script type="text/javascript" src="assets/js/script/timesheet.js"></script>

	

</div>


</body>
</html>