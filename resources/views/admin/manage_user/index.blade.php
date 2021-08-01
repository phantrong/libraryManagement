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
                            <img src="https://img.icons8.com/officel/60/000000/book.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng người mượn
                            </span>
                            <span>
                                {{ count($listUser) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/cute-clipart/60/000000/money.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng người mượn (tuần)
                            </span>
                            <span>
                                {{ count($listUserWeek) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/cute-clipart/60/000000/food-cart.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng người mượn (tháng)
                            </span>
                            <span>
                                {{ count($listUserMonth) }}
                            </span>
                        </div>
                    </button>
                </div>

                <div class="col-xl-3">
                    <button class="maincontainer__dashboard-typeImg-info-box">
                        <div>
                            <img src="https://img.icons8.com/clouds/60/000000/groups.png" />
                        </div>
                        <div class="maincontainer__dashboard-typeImg-info-box-quantity">
                            <span>
                                Tổng người mượn (năm)
                            </span>
                            <span>
                                {{ count($listUserYear) }}
                            </span>
                        </div>
                    </button>
                </div>
            </div>
        </section>
        @if (count($listUser))
            <section class="manageuser__content-content user__table">
                <form action="{{ route('admin.user.index') }}">
                    <div class="manageuser__content-content-searchUser">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Tìm kiếm</span>
                            </div>
                            <input type="text" name="name" value="{{ $name }}" class="form-control"
                                aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </form>
                <div class="container-fluid table__order manageuser__content-content-boxct">
                    <table class="table ">
                        <thead>
                            <tr class="row row-tb">
                                <th scope="col" class="per-5">STT</th>
                                <th scope="col" class="admin__order-col-listbook per-15">Họ tên</th>
                                <th scope="col" class="admin__order-col per-10">Username</th>
                                <th scope="col" class="admin__order-col per-20">Email</th>
                                <th scope="col" class="admin__order-col per-10">Phone</th>
                                <th scope="col" class="admin__order-col per-10">Ngày sinh</th>
                                <th scope="col" class="admin__order-col per-10">Số đơn</th>
                                <th scope="col" class="per-10">Trạng thái</th>
                                <th scope="col" class="admin__order-col per-10">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($listUser as $user)
                                <tr class="background-notBorrow row row-tb">
                                    <td class="per-5" scope="row">{{ $i }}</td>
                                    <td class="per-15">{{ $user->name }}</td>
                                    <td class="per-10">{{ $user->username }}</td>
                                    <td class="per-20">{{ $user->email }}</td>
                                    <td class="per-10">{{ $user->phone }}</td>
                                    <td class="per-10">{{ $user->birth }}</td>
                                    <td class="per-10">
                                        <div class="manageuser__content-table-quantityrow">
                                            <span>{{ $user->countOrder }}</span>
                                        </div>
                                    </td>
                                    <td class="per-10">{{ $user->is_borrow ? 'Đang mượn' : 'Không mượn' }}</td>
                                    <td class="per-10">
                                        <div class="admin__order-handle">
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
                </div>
                <!-- </div> -->

            </section>
        @endif
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
    <script src="{{ asset('js/admin/manage_user.js') }}"></script>
@endsection
