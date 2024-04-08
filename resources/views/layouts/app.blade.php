<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="shortcut icon" href="/public/assets/media/favicon/ico-02.png" type="image/x-icon">
    <script src="/public/assets/js/script.js" defer></script>
    <title>liebook: @yield('title')</title>
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>
