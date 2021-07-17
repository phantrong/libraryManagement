<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/footer.welcome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/book_interface.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/navbar.book.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/content.book.css')}}" type="text/css">

</head>

<body>
    @include('book_interface.navbar')
    <div id="home" class="section"></div>
    @include('book_interface.content')
    @include('layouts.footer')
    <a class="toTop smooth" href="#home">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="toTop-icon bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/book_interface.js')}}"></script>
</body>

</html>