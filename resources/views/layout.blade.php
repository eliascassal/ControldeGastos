<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="stylesheet" href="">
		<title>gastos - @yield('title')</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="#" class="navbar-brand">@yield('title1')</a>
            <ol>
                <li> <a href="/">--HOME--</a>   <a href="/gastos">--GASTOS--</a> <a href="/ingresos">--INGRESOS--</a>  </li>
            </ol>   
		</nav>
		<div class="container">

			@yield('contenido')
		
		</div>
	</body>
</html>