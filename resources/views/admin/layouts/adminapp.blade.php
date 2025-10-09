<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Admin | 8 Dragons heart')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js CDN for toggling menu -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex">
    <div class="flex-shrink-0 w-64">
        @include('admin.navigation.sidebar')
    </div>
    <main class="flex-1 overflow-auto">
        @yield('admin-content')
    </main>
</body>

</html>

<style>
    * {
        font-family: "Roboto", sans-serif;
    }
</style>
