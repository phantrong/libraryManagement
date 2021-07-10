<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" type="text/css">
</head>

<body>
    @include('layouts.navbar')

    <div class="welcome">
        <h1>Đây là nơi viết nội dung trang welcome!</h1>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
