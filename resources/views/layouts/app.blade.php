<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Цели устойчивого развития - Казахстан</title>
    <meta name="description" content="Обзор прогресса Целей устойчивого развития (ЦУР) в Казахстане"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@300;400;500;700&family=Inter:wght@300;400;500;600;700&&display=swap"
        rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="{{ request()->routeIs('home') || request()->routeIs('home.lang') ? 'page-home' : 'page-inner' }}">
@include('partials.header')


@yield('content')


@include('partials.footer')


<script src="{{ asset('/js/chart.js') }}"></script>
<script src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('/js/slick.min.js') }}"></script>
<script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/js/jquery.inputmask.bundle.js') }}"></script>
<script src='{{ asset('/js/script.js') }}'></script>
</body>
</html>
