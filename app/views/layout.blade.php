<!DOCTYPE html>
<html lang='en'>
<head>
 <meta charset='utf-8' />
 <title>Tambah Project</title>

<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 {{ HTML::style('css/bootstrap.min.css') }}

</head>;
<body>

@yield('content')

{{ HTML::script('js/jquery.min.js') }}
{{ HTML::script('js/bootstrap.js') }}

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>

</body>
</html>