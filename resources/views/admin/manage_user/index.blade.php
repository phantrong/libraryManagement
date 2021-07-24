@extends('admin.layouts.default')

@section('title', 'ManageUser')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.user.css') }}" type="text/css">
@endsection

@section('content')
<div class="manageuser__content">
        <section class="manageuser__content-header col-md-12 2">
            <div class="manageuser__content-header-box">
                <h1 class="manageuser__content-header-box-ct">Manage User</h1>
                <span><span>Home</span> / User</span>
            </div>
        </section>
        
        <section class="manageuser__content-dashboard"> 
            <div class="row manageuser__content-dashboard-margin pewpew">
                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box ">
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
                    </button>
                </div>

                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box">
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
                    </button>
                </div>

                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box">
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
                    </button>
                </div>

                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box">
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
                    </button>
                </div>
            </div>
        </section >

        <section class="manageuser__content-content user__table">
            
            <div class="manageuser__content-content-searchUser">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Tìm kiếm</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <!-- <div class="manageuser__content-content-boxct  col-md-12 2 col-sm-12 col-12"> -->
            <div class="container-fluid table__order manageuser__content-content-boxct">
                <table class="table ">
                    <thead>
                    <tr class="row row-tb">
                        <th scope="col" class= "per-5">STT</th>
                        <th scope="col" class="admin__order-col-listbook per-15">Họ tên</th>
                        <th scope="col" class="admin__order-col per-10">Username</th>
                        <th scope="col" class="admin__order-col per-20">Email</th>
                        <th scope="col" class="admin__order-col per-10">Phone</th>
                        <th scope="col" class="admin__order-col per-10">Ngày sinh</th>
                        <th scope="col" class="admin__order-col per-10">Số đơn</th>
                        <th scope="col" class= "per-10">Trạng thái</th>
                        <th scope="col" class="admin__order-col per-10">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="background-notBorrow row row-tb">
                            <td class="per-5" scope="row">4</td>
                            <td class="per-15">Nguyễn Văn Hùng</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">
                                <div class="manageuser__content-table-quantityrow">
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="per-10">Đang mượn</td>
                            <td class="per-10">
                                <div class="admin__order-handle">
                                    <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="background-notBorrow row row-tb">
                            <td class="per-5" scope="row">4</td>
                            <td class="per-15">Nguyễn Văn Hùng</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">
                                <div class="manageuser__content-table-quantityrow">
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="per-10">Đang mượn</td>
                            <td class="per-10">
                                <div class="admin__order-handle">
                                    <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="background-notBorrow row row-tb">
                            <td class="per-5" scope="row">4</td>
                            <td class="per-15">Nguyễn Văn Hùng</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">
                                <div class="manageuser__content-table-quantityrow">
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="per-10">Đang mượn</td>
                            <td class="per-10">
                                <div class="admin__order-handle">
                                    <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="background-notBorrow row row-tb">
                            <td class="per-5" scope="row">4</td>
                            <td class="per-15">Nguyễn Văn Hùng</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">
                                <div class="manageuser__content-table-quantityrow">
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="per-10">Đang mượn</td>
                            <td class="per-10">
                                <div class="admin__order-handle">
                                    <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="background-notBorrow row row-tb">
                            <td class="per-5" scope="row">4</td>
                            <td class="per-15">Nguyễn Văn Hùng</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">
                                <div class="manageuser__content-table-quantityrow">
                                    <span>30</span>
                                </div>
                            </td>
                            <td class="per-10">Đang mượn</td>
                            <td class="per-10">
                                <div class="admin__order-handle">
                                    <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- </div> -->
            
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_user.js') }}"></script>
@endsection
