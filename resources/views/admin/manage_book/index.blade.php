@extends('admin.layouts.default')

@section('title', 'ManageBook')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.list.book.css') }}" type="text/css">
@endsection

@section('content')
    <div class="manage-list-book">Nội dung màn l</div>
@endsection

@section('script')
    <script src="{{ asset('js/manage_book.js') }}"></script>
@endsection
