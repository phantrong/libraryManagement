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
                <span><span>Home</span> / Dash Board</span>
            </div>
        </section>

        <section class="dashboard__content-content">

            <div class="dashboard__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="maincontainer__dashboard-typeImg-info-box">
                            <div>
                                <img src="https://img.icons8.com/officel/60/000000/book.png" />
                            </div>
                            <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                <span>
                                    T.books
                                </span>
                                <span>
                                    {{ $totalBook[0]->totalBook }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="maincontainer__dashboard-typeImg-info-box">
                            <div>
                                <img src="https://img.icons8.com/cute-clipart/60/000000/money.png" />
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
                                <img src="https://img.icons8.com/cute-clipart/60/000000/food-cart.png" />
                            </div>
                            <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                <span>
                                    C.Borrowed
                                </span>
                                <span>
                                    {{ $totalOrder[0]->totalOrder }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="maincontainer__dashboard-typeImg-info-box">
                            <div>
                                <img src="https://img.icons8.com/clouds/60/000000/groups.png" />
                            </div>
                            <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                                <span>
                                    User
                                </span>
                                <span>
                                    {{ $totalUser[0]->totalUser }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <canvas id="myChart">

                        </canvas>
                        <div class="chooseTypeChart row no-gutters">
                            <div class="chartTypeDashBoard col-xl-sefl-5">
                                <img src="https://img.icons8.com/fluent-systems-regular/20/000000/financial-changes.png" />
                                <input type="month" name="month">
                                ,<select name="year" id="yearBoard">
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                </select>
                                <button class="btn btn-info">Xem</button>
                            </div>

                            <div class="chartTypeDashBoard2 col-xl-sefl-7">
                                <div>
                                    <span>Từ</span>
                                    <input type="date" name="fromdate">
                                    <span>Đến</span>
                                    <input type="date" name="todate">
                                    <button type="button" class="btn btn-info">Tìm</button>
                                </div>

                                <div>
                                    <img src="https://img.icons8.com/material-two-tone/24/000000/chevron-left.png" />
                                    <button class="btn btn-dark">Ngày</button>
                                    <img src="https://img.icons8.com/material-two-tone/24/000000/chevron-right.png" />
                                    <button class="btn btn-dark" id="yearButton">Năm</button>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6">
                        <canvas id="mayChart1">

                        </canvas>
                    </div>
                </div>
            </div>


            <label class="dashboard__content-dashboardMoney col-xl-12">
                <div class="row">
                    <div class="col-xl-12 dashboard-money-content-header">
                        <h1 class="ribbon">
                            <strong class="ribbon-content">Thống kê tiền sách theo các phân loại</strong>
                        </h1>
                    </div>

                    <div class="col-xl-4 ssss">
                        <div class="dashboard-money-content-search">
                            <div>
                                <label class="input-group-text" for="typeofbook">Tìm theo</label>
                            </div>
                            @csrf
                            <select class="custom-select custom-select1" id="typeofbook" name="category">
                                <option selected value="0">Chọn</option>
                                <option value="category">Thể loại sách</option>
                                <option value="auth">Tác giả</option>
                                <option value="publisher">Nhà xuất bản</option>
                            </select>

                            <div class="input-group mb-3" id="input__search-money">
                                
                                <textarea type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" id="searchinput"></textarea>
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button" id="btn2">Tìm</button>
                                </div>
                                <div class="dashboard-money-content-search-listsearch">
                                    <ul class="dashboard-money-content-search-listsearch-list">

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6 dashboard-money-content-total">

                        <div class="col-xl-4">
                            <span>Tổng tiền sách:</span>
                            <span>0</span>
                            <span>đ</span>
                        </div>
                    </div>
                </div>
            </label>
        </section>


    </div>
@endsection

@section('script')

    <script src="{{ asset('js/admin/manage_show_data.js') }}"></script>
@endsection
