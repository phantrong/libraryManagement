@extends('admin.layouts.default')

@section('title', 'ManageUser')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.user.css') }}" type="text/css">
@endsection

@section('content')
<div class="manageuser__content">
        <section class="manageuser__content-header col-md-12 col-xl-12">
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
            <!-- <div class="manageuser__content-content-boxct  col-md-12 col-xl-12 col-sm-12 col-12"> -->
                <div class="row table__order manageuser__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col" >UserId</th>
                    <th scope="col" class="admin__order-col-listbook">Họ tên</th>
                    <th scope="col" class="admin__order-col">Username</th>
                    <th scope="col" class="admin__order-col">Email</th>
                    <th scope="col" class="admin__order-col">Phone</th>
                    <th scope="col" class="admin__order-col">Ngày sinh</th>
                    <th scope="col" class="admin__order-col">Số đơn hàng</th>
                    <th scope="col" class="admin__order-col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <tr class="background-notBorrow">
                        <th scope="row">4</th>

                        <td>U102</td>

                        <td>
                        Nguyễn Văn Hùng
                        </td>

                        <td>
                        hung hi hung
                        </td>

                        
                        <td>
                        nguyenvanhung@gmail.com
                        </td>

                        <td>
                        0945621977
                        </td>

                        <td>
                            01/01/2000        
                        </td>

                        <td> 30</td>

                        <td>
                            <div class="admin__order-handle">
                                <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                                <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                                <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                            
                            </div>
                        </td>
                    </tr>
                    <tr class="background-notBorrow">
                        <th scope="row">4</th>

                        <td>U102</td>

                        <td>
                        Nguyễn Văn Hùng
                        </td>

                        <td>
                        hung hi hung
                        </td>

                        
                        <td>
                        nguyenvanhung@gmail.com
                        </td>

                        <td>
                        0945621977
                        </td>

                        <td>
                            01/01/2000        
                        </td>

                        <td>
                            <div class="manageuser__content-table-quantityrow">
                                <span>30</span>
                                <a href="">
                                    <button type="button" class="btn btn-success">Submit</button>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="admin__order-handle">
                                <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                                <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                                <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                            
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        </td>
                    </tr>

                    <tr class="background-notBorrow">
                        <th scope="row">4</th>

                        <td>U102</td>

                        <td>
                        Nguyễn Văn Hùng
                        </td>

                        <td>
                        hung hi hung
                        </td>

                        
                        <td>
                        nguyenvanhung@gmail.com
                        </td>

                        <td>
                        0945621977
                        </td>

                        <td>
                            01/01/2000        
                        </td>

                        <td>
                            <div class="manageuser__content-table-quantityrow">
                                <span>30</span>
                                <a href="">
                                    <button type="button" class="btn btn-success">Submit</button>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="admin__order-handle">
                                <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                                <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
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
