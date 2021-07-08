@extends('layouts.default')

@section('content')
    <h1>Đây là trang thống kê, đi kèm với file ShowData/index.js</h1>
    <div id='ShowData'></div>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
