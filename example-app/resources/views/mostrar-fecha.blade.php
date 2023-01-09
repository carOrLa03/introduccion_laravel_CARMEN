<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-fecha</title>
</head>
<body>
<div><a href="/">home</a></div>
<div>
    <h2>Fecha</h2>
    <?php
    $fecha = date('d-m-Y');
    echo $fecha;
    ?>
</div>
</body>
</html>
