@extends('admin.layouts.default')

@section('title', 'ManageUser')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.user.css') }}" type="text/css">
@endsection

@section('content')
    <div class="ManageUser">
        <h1>Đây là nơi viết nội dung trang quản lý người mượn!</h1>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_user/index.js') }}"></script>
@endsection
