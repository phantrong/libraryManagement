@extends('admin.layouts.default')

@section('title', 'ManageOrder')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.orderAdmin.css') }}" type="text/css">
@endsection

@section('content')
<div class="addbook__content" id="list-order">
        <section class="addbook__content-header col-md-12 col-xl-12">
            <div class="addbook__content-header-box">
                <h1 class="addbook__content-header-box-ct">Order Book</h1>
                <span><span>Home</span> / Order book</span>
            </div>
        </section>
        
        <section class="orderbook__content-dashboard"> 
            <div class="row orderbook__content-dashboard-margin pewpew">
                            <div class="col-xl-2">
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

                            <div class="col-xl-2">
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

                            <div class="col-xl-2">
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

                            <div class="col-xl-2">
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

                            <div class="col-xl-2">
                                <button  class="maincontainer__dashboard-typeImg-info-box">
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

        <section class="addbook__content-content order__table">
            

            <!-- <div class="addbook__content-content-boxct  col-md-12 col-xl-12 col-sm-12 col-12"> -->
                <div class="row table__order addbook__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col" >UserId</th>
                    <th scope="col" class="admin__order-col-listbook">
                        <span>ListBook</span>
                        <!-- <button type="button" class="btn btn-secondary">Xem kĩ hơn</button> -->
                    </th>
                    <th scope="col" class="admin__order-col">Ngày mượn</th>
                    <th scope="col" class="admin__order-col">Ngày hứa trả</th>
                    <th scope="col" class="admin__order-col">Ngày trả</th>
                    <th scope="col" class="admin__order-col">Trạng thái</th>
                    <th scope="col" class="admin__order-col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="background-notPay">
                    <th scope="row">1</th>
                    <td>U101</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Quá hạn chưa trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
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
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-borrowed">
                    <th scope="row">2</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai <div class="color-red">x2</div></li>
                                <li class="admin__order-item">rừng nauy <div class="color-red">x2</div></li>
                                <li class="admin__order-item">luật im lặng <div class="color-red">x2</div></li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai <div class="color-red">x2</div></li>
                                <li class="admin__order-item">rừng nauy <div class="color-red">x2</div></li>
                                <li class="admin__order-item">luật im lặng <div class="color-red">x2</div></li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã mượn</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-payed">
                    <th scope="row">3</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-notBorrow">
                    <th scope="row">4</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <button type="button" class="btn btn-primary">Chờ xác nhận</button>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-borrowed">
                    <th scope="row">2</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã mượn</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-payed">
                    <th scope="row">3</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-notPay">
                    <th scope="row">1</th>
                    <td>U101</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Quá hạn chưa trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-borrowed">
                    <th scope="row">2</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã mượn</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-payed">
                    <th scope="row">3</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-notBorrow">
                    <th scope="row">4</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <button type="button" class="btn btn-primary">Chờ xác nhận</button>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-notPay">
                    <th scope="row">1</th>
                    <td>U101</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Quá hạn chưa trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-borrowed">
                    <th scope="row">2</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã mượn</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-payed">
                    <th scope="row">3</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <span>Đã trả</span>
                              <!-- <button type="button" class="btn btn-primary">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
                        </div>
                        
                    </td>
                  </tr>

                  <tr class="background-notBorrow">
                    <th scope="row">4</th>
                    <td>U102</td>
                    <td>
                        <div class="admin__order-listbook cot">
                           <ul class="admin__order-list ">
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                                <li class="admin__order-item">de thui heo ke bat tai</li>
                                <li class="admin__order-item">rừng nauy</li>
                                <li class="admin__order-item">luật im lặng</li>
                                
                           </ul>
                        </div>
                    </td>
                    <td>
                        <div class="admin__order-dateBorrow">
                            <input type="date" disabled name="dateborrow">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            
                        </div>
                        
                    </td>

                   

                    <td>
                        <div class="admin__order-status">
                            <!-- <select name="status">
                                <option value="volvo">Đang mượn</option>
                                <option value="saab">Mượn quá hạn</option>
                                <option value="mercedes">Đã trả</option>
                                <option value="audi">Chưa mượn</option>
                              </select> -->
                              <button type="button" class="btn btn-primary">Chờ xác nhận</button>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Xoas
                            </button> -->
                            
                            
                            
                           
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
    <script src="{{ asset('js/admin/manage_order.js') }}"></script>
   
@endsection
