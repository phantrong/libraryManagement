<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Nhà Sách Mũ Rơm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.welcome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container bootstrap snippet profile">
        <div class="profile-heading">
            <h1 class="profile-heading-text">HỒ SƠ CỦA TÔI</h1>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="text-center sub-profile">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                        alt="avatar">
                    <button type="button" class="btn-pro btn-upload-img">Chọn ảnh</button>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="tab-content main-profile">
                    <form class="form" action="" method="post" id="registrationForm" autocomplete="off">
                        <div class="edit-profile">
                            <h3 class="edit-profile-heading section-heading">Chỉnh sửa thông tin</h3>
                            <div class="form-group">
                                <label class="lb account">
                                    <h4>Tên Đăng Nhập</h4>
                                </label>
                                <input type="text" class="form-control" name="account" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb name">
                                    <h4>Họ Tên</h4>
                                </label>
                                <input type="text" class="form-control" name="name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb phone">
                                    <h4>Số Điện Thoại</h4>
                                </label>
                                <input type="phone" class="form-control" name="phone" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb address">
                                    <h4>Địa Chỉ</h4>
                                </label>
                                <input type="text" class="form-control" name="address" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb sex">
                                    <h4>Giới tính</h4>
                                </label>
                                <div class="form-group">
                                    <div class="sex-item">
                                        <input type="radio" class="sex-input" name="sex" value="man" checked> Nam
                                    </div>
                                    <div class="sex-item">
                                        <input type="radio" class="sex-input" name="sex" value="woman"> Nữ
                                    </div>
                                    <div class="sex-item">
                                        <input type="radio" class="sex-input" name="sex" value="other"> Khác
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="lb birth">
                                    <h4>Ngày Sinh</h4>
                                </label>
                                <input type="date" class="form-control" name="birth" autocomplete="off">
                            </div>
                        </div>
                        <div class="change-password">
                            <h3 class="change-password-heading section-heading">Đổi mật khẩu</h3>
                            <div class="form-group">
                                <label class="lb cur-pass">
                                    <h4>Mật Khẩu Hiện Tại</h4>
                                </label>
                                <input type="password" class="form-control" name="cur-pass" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb new-pass">
                                    <h4>Mật Khẩu Mới</h4>
                                </label>
                                <input type="password" class="form-control" name="pass" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="lb pass-confirm">
                                    <h4>Nhập Lại Mật Khẩu</h4>
                                </label>
                                <input type="password" class="form-control" name="pass-confirm" autocomplete="off">
                            </div>
                        </div>
                        <button class="btn-pro" type="submit">
                            <i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>