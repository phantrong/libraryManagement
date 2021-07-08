@extends('layouts.default')

@section('content')
    <h1>Đây là trang quản lý sách, đi kèm với file ManageBook/index.js</h1>
    <div id='ManageBook'></div>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
