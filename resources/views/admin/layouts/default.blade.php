<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', env("APP_NAME"))
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/navbar.admin.css') }}" type="text/css">
    @yield('css')
</head>

<body>
    <div class="main-page">
        @include('admin.layouts.navbar')

        <div class="container">
            @include('admin.layouts.header')
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
