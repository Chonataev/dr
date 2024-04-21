<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <!-- Здесь могут быть ваши стили CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<header>
    <!-- Заголовок вашего сайта или логотип -->
    <h1>Your Website</h1>
    <!-- Навигационное меню -->
    <nav>
        <ul>
            <!-- Дополнительные пункты меню -->
        </ul>
    </nav>
</header>

<main>
    <!-- Здесь будет основное содержимое страницы -->
    @yield('content')
</main>

<footer>
    <!-- Подвал вашего сайта -->
    <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
</footer>

<!-- Здесь могут быть ваши скрипты JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
