<!DOCTYPE html>
<html lang="en">
<title> @yield('title')</title> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
<nav>
    <ol>
        <li> <a href="/">HOME</a>   </li>
        <li> <a href="/gastos">GASTOS</a> </li>
        <li> <a href="/ingresos">INGRESOS</a>  </li>
    </ol>

</nav>
    @yield('contenido')
</body>
</html>