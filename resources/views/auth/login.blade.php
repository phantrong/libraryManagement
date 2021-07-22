<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('css/login_register.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
</head>
<body>
<div class="hero" style="background-image: url('{{ asset('images/banner.jpg')}}');">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn login-btn">Đăng nhập</button>
            <button type="button" class="toggle-btn register-btn">Đăng ký</button>
        </div>
        <div class="social-icon">
            <img src="{{asset('images/fb.png')}}"> 
            <img src="{{asset('images/tw.png')}}">
            <img src="{{asset('images/gp.png')}}">
        </div>
        <form id="login" class="input-group">
            <div class="input-group-item">
                <input type="text" class="input-field" placeholder=" ">
                <label class="label-field">Email</label>
            </div>
            <div class="input-group-item">
                <input type="password" class="input-field" placeholder=" ">
                <label class="label-field">Mật khẩu</label>
            </div>
            <div class="input-group-item">
                <a href="#" class="forget-pass">Quên mật khẩu ?</a> 
            </div>
            <button type="submit" class="submit-btn">Đăng nhập</button>
        </form>
        <form id="register" class="input-group">
            <div class="input-group-item">
                <input type="text" class="input-field" placeholder=" ">
                <label class="label-field">Email</label>
            </div>
            <div class="input-group-item">
                <input type="phone" class="input-field" placeholder=" ">
                <label class="label-field">Số điện thoại</label>
            </div>
            <div class="input-group-item">
                <input type="password" class="input-field" placeholder=" ">
                <label class="label-field">Mật khẩu</label>
            </div>
            <div class="input-group-item">
                <input type="password" class="input-field" placeholder=" ">
                <label class="label-field">Nhập lại mật khẩu</label>
            </div>
            <button type="submit" class="submit-btn mt-20">Đăng ký</button>
        </form>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>