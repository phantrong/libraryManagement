@extends('admin.layouts.default')

@section('title', 'ManageOrder')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.orderAdmin.css') }}" type="text/css">
@endsection

@section('content')
<div class="addbook__content">
        <section class="addbook__content-header col-md-12 col-xl-12">
            <div class="addbook__content-header-box">
                <h1 class="addbook__content-header-box-ct">Order Book</h1>
                <span>Home|orderbook</span>
            </div>
        </section>

        <section class="addbook__content-content scroll__table-order">
            <div class="addbook__content-content-header">

            </div>

            <div class="addbook__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
            <div class="row table__order">
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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <button type="button" class="btn btn-danger">Chờ xác nhận</button>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <button type="button" class="btn btn-danger">Chờ xác nhận</button>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <!-- <button type="button" class="btn btn-danger">Chờ xác nhận</button> -->
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePromise">
                            <input type="date" disabled name="datepromise">
                            <span class="admin__order-updateDay">Cập nhật</span>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-datePay">
                            <input type="date" disabled name="datepay">
                            <span class="admin__order-updateDay">Cập nhật</span>
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
                              <button type="button" class="btn btn-danger">Chờ xác nhận</button>
                        </div>
                        
                    </td>

                    <td>
                        <div class="admin__order-handle">
                            <img class="admin__order-button-save" src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png"/>
                            <img class="admin__order-button-edit" src="https://img.icons8.com/windows/32/000000/edit-product.png"/>
                            <img class="admin__order-button-delete" src="https://img.icons8.com/cute-clipart/32/000000/delete-forever.png" data-toggle="modal" data-target="#exampleModal"/>
                           

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
                 
                </tbody>
              </table>
        </div>

               
                
            </div>
            
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/admin/manage_user.js') }}"></script>
@endsection
