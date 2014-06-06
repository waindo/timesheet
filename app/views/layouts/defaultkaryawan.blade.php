<!doctype html>
<html>
<head>
<title>Tambah Karyawan</title>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 {{ HTML::style('assets/css/bootstrap.min.css') }}
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.header')
		
	</header>

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

	</div>
	
	</br>

<div align="center">
	<footer class="row">
		@include('includes.footer')
	</footer>
	</div>

</div>
</body>
</html>