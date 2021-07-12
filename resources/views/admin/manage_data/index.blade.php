@extends('admin.layouts.default')

@section('title', 'ManageData')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.data.css') }}" type="text/css">
@endsection

@section('content')
    <div class="ManageData">
        <h1>Đây là nơi viết nội dung trang thống kê!</h1>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_data.js') }}"></script>
@endsection
