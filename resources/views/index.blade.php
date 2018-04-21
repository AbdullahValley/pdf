<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="fullscreen-bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Project</title>

</head>
<body>
<div class="container">
<div class="book">
        @yield('content')
    <div class="divFooter">Copyright © 2016 -2018, Redorent Oy. All Rights Reserved.</div>
</div>
</div>
</body>
</html>
