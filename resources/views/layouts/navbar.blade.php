<div id="header" class="header">
    <nav class="nav container">
        <a href="{{ route('home') }}" class="logo"><img src="{{ asset('images/logo.png') }}"></a>
        <div class="wrapper-nav">
            <ul class="nav_list">
                <li><a class="home smooth nav_list_link active" href="#home">TRANG CHỦ</a></li>
                <li><a class="content smooth nav_list_link" href="#content">TỦ SÁCH</a></li>
                @guest
                    <li><a class="smooth nav_list_link login nav-not-logged-in" href="{{ route('user.login') }}">ĐĂNG
                            NHẬP</a></li>
                @endguest
                <li><a class="contact smooth nav_list_link" href="#contact">LIÊN HỆ</a></li>
            </ul>
            @auth
                <div class="nav-logged-in">
                    <div class="nav-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="icon-cart bi bi-cart-plus-fill" viewBox="0 0 16 16">
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                        </svg>
                        <span class="nav-cart-notice">3</span>
                        <div class="nav-cart-list">
                            <div class="nav-no-cart">
                                <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/cart/9bdd8040b334d31946f49e36beaf32db.png"
                                    alt="" class="nav-cart--no-cart-img">
                                <p class="nav-cart--no-cart-text">Chưa Có Sản Phẩm</p>
                            </div>
                            <h3 class="nav-cart-heading">Sản phẩm đã thêm</h3>
                            <ul class="nav-cart-list-item">
                                <li class="nav-cart-item">
                                    <img src="{{ asset('images/book1.jpg') }}" alt="" class="nav_cart-item-img">
                                    <div class="nav-cart-item-info">
                                        <div class="nav-cart-item-heading">
                                            <h5 class="nav-cart-item-name">A short history of everything</h5>
                                        </div>
                                        <div class="nav-cart-item-body">
                                            <span class="nav-cart-item-desc">Tác giả: Phan Đức Trung</span>
                                            <span class="nav-cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-cart-item">
                                    <img src="{{ asset('images/book1.jpg') }}" alt="" class="nav_cart-item-img">
                                    <div class="nav-cart-item-info">
                                        <div class="nav-cart-item-heading">
                                            <h5 class="nav-cart-item-name">A short history of everything</h5>
                                        </div>
                                        <div class="nav-cart-item-body">
                                            <span class="nav-cart-item-desc">Tác giả: Phan Đức Trung</span>
                                            <span class="nav-cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-cart-item">
                                    <img src="{{ asset('images/book1.jpg') }}" alt="" class="nav_cart-item-img">
                                    <div class="nav-cart-item-info">
                                        <div class="nav-cart-item-heading">
                                            <h5 class="nav-cart-item-name">A short history of everything</h5>
                                        </div>
                                        <div class="nav-cart-item-body">
                                            <span class="nav-cart-item-desc">Tác giả: Phan Đức Trung</span>
                                            <span class="nav-cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button class="nav-cart-view">Xem giỏ hàng</button>
                        </div>
                    </div>
                    <div class="nav-user">
                        <img src="{{ Auth::user()->images ? asset(Auth::user()->images) : asset('images/avatar-default.png') }}"
                            alt="" class="nav-user-img">
                        <span class="nav-user-name">{{ Auth::user()->name }}</span>
                        <ul class="nav-user-menu">
                            <li class="nav-user-item">
                                <a href="">Dashboard</a>
                            </li>
                            <li class="nav-user-item">
                                <a href="{{ route('user.logout') }}">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
</div>
