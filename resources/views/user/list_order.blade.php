@inject('ModelBook', 'App\Models\Book')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/footer.welcome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/book_interface.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/navbar.book.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/content.book.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slider-view-img.book.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/manage.orderAdmin.css') }}" type="text/css">
</head>

<body>
    @include('book_interface.navbar')
    <div id="home" class="section"></div>
    <div class="addbook__content" id="list-order">
        <section class="addbook__content-header col-md-12 col-xl-12">
            <div class="addbook__content-header-box">
                <h1 class="addbook__content-header-box-ct">Order Book</h1>
                <span><span>Home</span> / Order book</span>
            </div>
        </section>


        <section class="orderbook__content-dashboard">
            <form action="{{ route('admin.order.index') }}">
                <div class="row selection">
                    <div class="col-sm-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">Từ</label>
                            <input type="date" class="form-control" name="day-start" min="2021-01-01"
                                value="{{ $day_start }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label class="control-label">Đến</label>
                            <input type="date" class="form-control" name="day-end" max="{{ now()->format('Y-m-d') }}"
                                value="{{ $day_end }}">
                        </div>
                    </div>
                    <div class=" col-sm-6 form-input-name">
                        <div class="form-search-book">
                            <input type="text" name="user" class="search-input" placeholder="Tìm kiếm theo tên" value="">
                            <button class="btn-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke-width="6"
                                    fill="currentColor" class="icon-search bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row orderbook__content-dashboard-margin pewpew">
                <div class="col-xl-2">
                    <button class="maincontainer__dashboard-typeImg-info-box ">
                        <div>
                            <img src="https://img.icons8.com/officel/60/000000/book.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng số đơn
                            </span>
                            <span>
                                {{ count($listOrder) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-2">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/cute-clipart/60/000000/money.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng đơn chờ xác nhận
                            </span>
                            <span>
                                {{ count($listOrderConfirm) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-2">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/cute-clipart/60/000000/food-cart.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng đơn quá hạn trả
                            </span>
                            <span>
                                {{ count($listOrderOverdue) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-2">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/clouds/60/000000/groups.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng đơn đang mượn
                            </span>
                            <span>
                                {{ count($listOrderBorrowing) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-2">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/clouds/60/000000/groups.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng đơn đã trả
                            </span>
                            <span>
                                {{ count($listOrderBorrowed) }}
                            </span>
                        </div>
                    </button>
                </div>


            </div>
        </section>

        <section class="addbook__content-content order__table">
            <div class="table__order addbook__content-content-boxct container-fluid">
                <table class="table table-striped">
                    <thead>
                        <tr class="row row-tb">
                            <th scope="col" class="per-4">STT</th>
                            <th scope="col" class="per-5">UserId</th>
                            <th scope="col" class="admin__order-col-listbook per-15">ListBook</th>
                            <th scope="col" class="admin__order-col per-11">Ngày mượn</th>
                            <th scope="col" class="admin__order-col per-11">Ngày hẹn</th>
                            <th scope="col" class="admin__order-col per-11">Ngày trả</th>
                            <th scope="col" class="admin__order-col per-15">Địa chỉ</th>
                            <th scope="col" class="admin__order-col per-10">Note</th>
                            <th scope="col" class="admin__order-col per-5">Trạng thái</th>
                            <th scope="col" class="admin__order-col per-10">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($listOrderConfirm as $order)
                            <tr class="background-notBorrow row row-tb">
                                <td scope="col" class="per-4">{{ $i }}</td>
                                <td scope="col" class="per-5">{{ $order->user_id }}</td>
                                <td scope="col" class="admin__order-col-listbook per-15">
                                    <div class="admin__order-listbook">
                                        <ul class="admin__order-list cot">
                                            @foreach ($order->orderdetails()->get() as $oderdetail)
                                                <li class="admin__order-item">
                                                    {{ $ModelBook->getName($oderdetail->book_id) }} <span
                                                        class="color-red">x{{ $oderdetail->quantity }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-dateBorrow">
                                        <input type="text" disabled name="dateborrow" value="{{ $order->time_borrow }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePromise">
                                        <input type="text" disabled name="datepromise"
                                            value="{{ $order->time_promise_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePay">
                                        <input type="text" disabled name="datepay" value="{{ $order->time_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-15">{{ $order->address }}</td>
                                <td scope="col" class="admin__order-col per-10">{{ $order->note }}</td>
                                <td scope="col" class="admin__order-col per-10">
                                    <button type="button" class="btn btn-primary btn-confirm"
                                        attr-order="{{ $order->id }}">Chờ xác nhận</button>
                                </td>
                                <td scope="col" class="admin__order-col per-5">
                                    <div class="admin__order-handle">
                                        <img class="admin__order-button-save"
                                            src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png" />
                                        <img class="admin__order-button-edit"
                                            src="https://img.icons8.com/windows/32/000000/edit-product.png" />
                                        <img class="admin__order-button-delete"
                                            src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png"
                                            data-toggle="modal" data-target="#exampleModal" />
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        @foreach ($listOrderOverdue as $order)
                            <tr class="background-notPay row row-tb">
                                <td scope="col" class="per-4">{{ $i }}</td>
                                <td scope="col" class="per-5">{{ $order->user_id }}</td>
                                <td scope="col" class="admin__order-col-listbook per-15">
                                    <div class="admin__order-listbook">
                                        <ul class="admin__order-list cot">
                                            @foreach ($order->orderdetails()->get() as $oderdetail)
                                                <li class="admin__order-item">
                                                    {{ $ModelBook->getName($oderdetail->book_id) }} <span
                                                        class="color-red">x{{ $oderdetail->quantity }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-dateBorrow">
                                        <input type="text" disabled name="dateborrow" value="{{ $order->time_borrow }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePromise">
                                        <input type="text" disabled name="datepromise"
                                            value="{{ $order->time_promise_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePay">
                                        <input type="text" disabled name="datepay" value="{{ $order->time_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-15">{{ $order->address }}</td>
                                <td scope="col" class="admin__order-col per-10">{{ $order->note }}</td>
                                <td scope="col" class="admin__order-col per-5">Quá hạn chưa trả</td>
                                <td scope="col" class="admin__order-col per-10">
                                    <div class="admin__order-handle">
                                        <img class="admin__order-button-save"
                                            src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png" />
                                        <img class="admin__order-button-edit"
                                            src="https://img.icons8.com/windows/32/000000/edit-product.png" />
                                        <img class="admin__order-button-delete"
                                            src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png"
                                            data-toggle="modal" data-target="#exampleModal" />
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        @foreach ($listOrderBorrowing as $order)
                            <tr class="background-borrowed row row-tb">
                                <td scope="col" class="per-4">{{ $i }}</td>
                                <td scope="col" class="per-5">{{ $order->user_id }}</td>
                                <td scope="col" class="admin__order-col-listbook per-15">
                                    <div class="admin__order-listbook">
                                        <ul class="admin__order-list cot">
                                            @foreach ($order->orderdetails()->get() as $oderdetail)
                                                <li class="admin__order-item">
                                                    {{ $ModelBook->getName($oderdetail->book_id) }} <span
                                                        class="color-red">x{{ $oderdetail->quantity }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-dateBorrow">
                                        <input type="text" disabled name="dateborrow" value="{{ $order->time_borrow }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePromise">
                                        <input type="text" disabled name="datepromise"
                                            value="{{ $order->time_promise_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePay">
                                        <input type="text" disabled name="datepay" value="{{ $order->time_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-15">{{ $order->address }}</td>
                                <td scope="col" class="admin__order-col per-10">{{ $order->note }}</td>
                                <td scope="col" class="admin__order-col per-5">Đang mượn</td>
                                <td scope="col" class="admin__order-col per-10">
                                    <div class="admin__order-handle">
                                        <img class="admin__order-button-save"
                                            src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png" />
                                        <img class="admin__order-button-edit"
                                            src="https://img.icons8.com/windows/32/000000/edit-product.png" />
                                        <img class="admin__order-button-delete"
                                            src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png"
                                            data-toggle="modal" data-target="#exampleModal" />
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                        @foreach ($listOrderBorrowed as $order)
                            <tr class="background-payed row row-tb">
                                <td scope="col" class="per-4">{{ $i }}</td>
                                <td scope="col" class="per-5">{{ $order->user_id }}</td>
                                <td scope="col" class="admin__order-col-listbook per-15">
                                    <div class="admin__order-listbook">
                                        <ul class="admin__order-list cot">
                                            @foreach ($order->orderdetails()->get() as $oderdetail)
                                                <li class="admin__order-item">
                                                    {{ $ModelBook->getName($oderdetail->book_id) }} <span
                                                        class="color-red">x{{ $oderdetail->quantity }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-dateBorrow">
                                        <input type="text" disabled name="dateborrow" value="{{ $order->time_borrow }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePromise">
                                        <input type="text" disabled name="datepromise"
                                            value="{{ $order->time_promise_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-11">
                                    <div class="admin__order-datePay">
                                        <input type="text" disabled name="datepay" value="{{ $order->time_pay }}">
                                    </div>
                                </td>
                                <td scope="col" class="admin__order-col per-15">{{ $order->address }}</td>
                                <td scope="col" class="admin__order-col per-10">{{ $order->note }}</td>
                                <td scope="col" class="admin__order-col per-5">Đã trả</td>
                                <td scope="col" class="admin__order-col per-10">
                                    <div class="admin__order-handle">
                                        <img class="admin__order-button-save"
                                            src="https://img.icons8.com/ios-glyphs/32/000000/save--v1.png" />
                                        <img class="admin__order-button-edit"
                                            src="https://img.icons8.com/windows/32/000000/edit-product.png" />
                                        <img class="admin__order-button-delete"
                                            src="https://img.icons8.com/ios-filled/32/000000/delete-forever.png"
                                            data-toggle="modal" data-target="#exampleModal" />
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
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
            </div>
        </section>
    </div>
    @include('layouts.footer')
    <a class="toTop smooth" href="#home">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="toTop-icon bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/book_interface.js') }}"></script>
    <script src="{{ asset('js/admin/manage_order.js') }}"></script>
</body>

</html>
