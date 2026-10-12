<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/fav-Icon.png') }}">
    <title>@yield('title', 'Admin')</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 text-gray-900">
    @yield('content')
</body>

</html>
