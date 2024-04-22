<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <!-- Здесь могут быть ваши стили CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/dist/images/atom.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('/storage/dist/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('/storage/dist/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/dist/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/storage/dist/css/style.css') }}" rel="stylesheet">
</head>
<body>
<main>
    <!-- Здесь будет основное содержимое страницы -->
    @yield('content')
</main>

<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('/storage/dist/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/settings.js') }}"></script>
<script src="{{ asset('/storage/dist/js/gleek.js') }}"></script>
<script src="{{ asset('/storage/dist/js/styleSwitcher.js') }}"></script>

<script src="{{ asset('/storage/dist/js/dashboard/dashboard-1.js') }}"></script>
</body>
</html>
