@extends('admin.layouts.default')

@section('title', 'ManageUser')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.contact.css') }}" type="text/css">
@endsection

@section('content')
<div class="managecontact__content">
        <section class="managecontact__content-header col-md-12 2">
            <div class="managecontact__content-header-box">
                <h1 class="managecontact__content-header-box-ct">Manage contact</h1>
                <span><span>Home</span> / Contact</span>
            </div>
        </section>
        
        <section class="managecontact__content-dashboard"> 
            <div class="row managecontact__content-dashboard-margin pewpew">
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

        <section class="managecontact__content-content user__table">
            
            <div class="managecontact__content-content-searchUser">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Tìm kiếm</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <!-- <div class="managecontact__content-content-boxct  col-md-12 2 col-sm-12 col-12"> -->
            <div class="container-fluid table__order managecontact__content-content-boxct">
                <table class="table ">
                    <thead>
                    <tr class="row row-tb">
                        <th scope="col" class= "per-5">STT</th>
                        <th scope="col" class="admin__order-col-listbook per-15">Họ tên</th>
                        <th scope="col" class="admin__order-col per-20">Email</th>
                        <th scope="col" class="admin__order-col per-10">Phone</th>
                        <th scope="col" class="admin__order-col per-10">Địa Chỉ</th>
                        <th scope="col" class="admin__order-col per-10">Chủ đề</th>
                        <th scope="col" class="admin__order-col per-10">Message</th>
                        <th scope="col" class= "per-10">Trạng thái</th>
                        <th scope="col" class="admin__order-col per-10">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="background-notBorrow row row-tb">
                            <td class="per-5" scope="row">4</td>
                            <td class="per-15">Nguyễn Văn Hùng</td>
                            
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-10">
                                <div class="managecontact__content-table-quantityrow">
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
                            
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-10">
                                <div class="managecontact__content-table-quantityrow">
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
                            
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-10">
                                <div class="managecontact__content-table-quantityrow">
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
                            
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-10">
                                <div class="managecontact__content-table-quantityrow">
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
                            
                            <td class="per-20">nguyenvanhung@gmail.com</td>
                            <td class="per-10">0945621977</td>
                            <td class="per-10">01/01/2000</td>
                            <td class="per-10">hung hi hung</td>
                            <td class="per-10">
                                <div class="managecontact__content-table-quantityrow">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xóa dịch vụ</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc muốn xóa ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Xóa bỏ</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_contact.js') }}"></script>
@endsection
