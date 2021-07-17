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

            <section class="dashboard__content-dashboardMoney"> 
                    <div class="row">
                    <div class="col-xl-12 dashboard-money-content-header"> 
                        <!-- <h1>Thống kê tiền sách theo các phân loại</h1> -->
                        <h1 class="ribbon">
                        <strong class="ribbon-content">Thống kê tiền sách theo các phân loại</strong>
                    </h1>
                    </div>
                    
                    <div class="col-xl-4 dashboard__content-dashboardMoney-search">
                        <div class="dashboard-money-content-search">
                            <div>
                            <label class="input-group-text" for="typeofbook">Tìm theo</label>
                            </div>
                            <select class="custom-select custom-select1" id="typeofbook">
                            <option selected>Chọn</option>
                            <option value="1">Thể loại sách</option>
                            <option value="2">Tác giả</option>
                            <option value="3">Nhà xuất bản</option>
                            </select>

                            <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-primary" type="button">Tìm</button>
                            </div>
                            </div>
                        </div>
                        
                    </div>

                

                    
                    
                    

                    <div class="col-xl-4 dashboard-money-content-total">
                    <div class="col-xl-5">
                        
                    </div>
                        <div class="col-xl-6">
                            <span>Tổng tiền sách:</span>
                            <span>100.000.000</span>
                            <span>đ</span>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_data.js') }}"></script>
@endsection
