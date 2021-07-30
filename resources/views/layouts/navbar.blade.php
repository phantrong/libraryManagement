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

                    <div class="header__navbar-item header__navbar-item--notify">
                            <a href="#" class="header__navbar-item-link">
                                <a href="#" class="header_navbar-icon-link"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M86,10.75c-4.72832,0 -8.6,3.87168 -8.6,8.6v3.15781c-14.88203,3.39297 -26.58105,15.36914 -29.42812,30.6207c-3.04023,1.6293 -5.4002,4.43438 -5.78652,8.0709l-6.61797,61.18262c-0.5375,5.00547 -4.73672,8.76797 -9.76738,8.76797h-2.15v12.9h47.3c0,8.28926 6.76074,15.05 15.05,15.05c8.28926,0 15.05,-6.76074 15.05,-15.05h47.3v-12.9h-2.15c-5.03066,0 -9.22988,-3.7625 -9.76738,-8.76797l-6.61797,-61.18262c-0.38633,-3.63652 -2.74629,-6.4416 -5.78652,-8.0709c-2.84707,-15.25156 -14.54609,-27.22774 -29.42812,-30.6207v-3.15781c0,-4.72832 -3.87168,-8.6 -8.6,-8.6zM86,15.05c2.40195,0 4.3,1.89805 4.3,4.3v2.41875c-1.41094,-0.15957 -2.84707,-0.26875 -4.3,-0.26875c-1.45293,0 -2.88906,0.10918 -4.3,0.26875v-2.41875c0,-2.40195 1.89805,-4.3 4.3,-4.3zM86,25.8c17.04043,0 31.30098,12.3793 33.99687,28.84863l0.20996,1.22617l1.16738,0.43672c2.23399,0.83145 3.89687,2.84707 4.16562,5.34141l6.61797,61.19102c0.07559,0.68867 0.21836,1.34375 0.39473,1.99043c-0.84824,0.31914 -1.40254,1.11699 -1.40254,2.01563c0,1.18418 0.96582,2.15 2.15,2.15c0.34434,0 0.68867,-0.08398 0.99941,-0.24355c2.1584,3.31738 5.68574,5.63535 9.75059,6.29043v4.70313h-116.1v-4.70312c4.06484,-0.65508 7.59219,-2.97305 9.75059,-6.29043c0.31074,0.15957 0.65508,0.24355 0.99941,0.24355c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-0.89863 -0.5543,-1.69648 -1.40254,-2.01562c0.17637,-0.64668 0.31914,-1.30176 0.39473,-1.99043l6.61797,-61.19102c0.26875,-2.49434 1.93164,-4.50996 4.16562,-5.34141l1.16738,-0.43672l0.20996,-1.22617c2.6959,-16.46934 16.95645,-28.84863 33.99688,-28.84863zM55.9,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM64.5,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM73.1,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM81.7,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM90.3,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM98.9,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM107.5,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM116.1,51.6c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM47.3,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM55.9,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM64.5,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM73.1,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM81.7,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM90.3,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM98.9,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM107.5,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM116.1,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM124.7,124.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM75.25,144.05h21.5c0,5.96289 -4.78711,10.75 -10.75,10.75c-5.96289,0 -10.75,-4.78711 -10.75,-10.75z"></path></g></g></svg></a>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item">
                                        
                                               gốc của các sản phẩm Ohui độc nhất vô nhị
                                              
                                            
                                    </li>

                                    <li class="header__notify-item">
                                        
                                        Xác thực chính hãng nguồn gốc của các sản phẩm Ohui độc nhất vô nhị
                                       
                                     
                                    </li>
                                    <li class="header__notify-item">
                                        
                                               Xác thực chính hãng nguồn gốc của các sản phẩm Ohui độc nhất vô nhị
                                              
                                            
                                    </li>

                                    <li class="header__notify-item">
                                        
                                               Xác thực chính hãng nguồn gốc của các sản phẩm Ohui độc nhất vô nhị
                                              
                                            
                                    </li>
                                    <li class="header__notify-item">
                                        
                                        Xác thực chính hãng nguồn gốc của các sản phẩm Ohui độc nhất vô nhị
                                       
                                     
                                     </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                    </div>









                    <div class="nav-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="icon-cart bi bi-cart-plus-fill" viewBox="0 0 16 16">
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                        </svg>
                        <span class="nav-cart-notice">{{ count($cart) }}</span>
                        <div class="nav-cart-list">
                            <div class="nav-no-cart">
                                <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/cart/9bdd8040b334d31946f49e36beaf32db.png"
                                    alt="" class="nav-cart--no-cart-img">
                                <p class="nav-cart--no-cart-text">Chưa Có Sản Phẩm</p>
                            </div>
                            @if (count($cart))
                                <h3 class="nav-cart-heading">Sản phẩm đã thêm</h3>
                                <ul class="nav-cart-list-item">
                                    @foreach ($cart as $item)
                                        <li class="nav-cart-item">
                                            <img src="{{ asset($item->book->images()->get()[0]->path) }}" alt=""
                                                class="nav_cart-item-img">
                                            <div class="nav-cart-item-info">
                                                <div class="nav-cart-item-heading">
                                                    <h5 class="nav-cart-item-name">
                                                        {{ $item->book->name }}</p>
                                                    </h5>
                                                </div>
                                                <div class="nav-cart-item-body">
                                                    <span class="nav-cart-item-desc">{{ $item->book->auth }}</span>
                                                    <span class="nav-cart-item-remove">Xóa</span>
                                                    <input type="hidden" name='cart' value={{ $item->id }}>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <button class="btn-primary nav-view-list">Đơn mượn</button>
                                <button class="btn-primary nav-cart-view">Xem giỏ hàng</button>
                            @else
                                <div class="nav-no-cart-2">
                                    <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/cart/9bdd8040b334d31946f49e36beaf32db.png"
                                        alt="" class="nav-cart--no-cart-img">
                                    <p class="nav-cart--no-cart-text">Chưa Có Sản Phẩm</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="nav-user">
                        <img src="{{ Auth::user()->images ? asset(Auth::user()->images) : asset('images/avatar-default.png') }}"
                            alt="" class="nav-user-img">
                        <span class="nav-user-name">{{ Auth::user()->name }}</span>
                        <ul class="nav-user-menu">
                            <li class="nav-user-item">
                                <a href="">Thông tin cá nhân</a>
                            </li>
                            <li class="nav-user-item">
                                <a href="">Đơn mượn</a>
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

@section('script')
    <script src="{{ asset('js/navbar.js') }}"></script>
@endsection

