<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@section('header')
    <h1>Bienvenido</h1>
@show

@yield('content')

@section('footer')
    <footer>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <a href="/">Home</a>
        </div>
        <p>by Carmen Ortiz</p>
    </footer>
@show

</body>
</html>
