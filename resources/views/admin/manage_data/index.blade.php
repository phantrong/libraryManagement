@extends('admin.layouts.default')

@section('title', 'ManageData')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.data.css') }}" type="text/css">
@endsection

@section('content')
<div class="dashboard__content">
            <section class="dashboard__content-header col-md-12 col-xl-12">
                <div class="dashboard__content-header-box">
                    <h1 class="dashboard__content-header-box-ct">Dash Board</h1>
                    <span>Home|Dash Board</span>
                </div>
            </section>
            
            <section class="dashboard__content-content">
                <!-- <div class="dashboard__content-content-header">

                </div> -->

                <div class="dashboard__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="maincontainer__dashboard-typeImg-info-box">
                                <div>
                                    <img src="https://img.icons8.com/officel/60/000000/book.png"/>
                                </div>
                                <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                    <span>
                                        T.books
                                    </span>
                                    <span>
                                        59
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="maincontainer__dashboard-typeImg-info-box">
                                <div>
                                    <img src="https://img.icons8.com/cute-clipart/60/000000/money.png"/>
                                </div>
                                <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                    <span>
                                        C.Fine
                                    </span>
                                    <span>
                                        $88
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="maincontainer__dashboard-typeImg-info-box">
                                <div>
                                    <img src="https://img.icons8.com/cute-clipart/60/000000/food-cart.png"/>
                                </div>
                                <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                    <span>
                                        C.Borrowed
                                    </span>
                                    <span>
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="maincontainer__dashboard-typeImg-info-box">
                                <div>
                                    <img src="https://img.icons8.com/clouds/60/000000/groups.png"/>
                                </div>
                                <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                    <span>
                                        User
                                    </span>
                                    <span>
                                        4
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_data.js') }}"></script>
@endsection
