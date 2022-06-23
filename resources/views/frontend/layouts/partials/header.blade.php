<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop" style="background: #303030;">
        <!-- Topbar -->
        {{-- <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        My Account
                    </a>

                    <a href="{{ route('app.setLocale', ['locale' => 'en']) }}" class="flex-c-m trans-04 p-lr-25">
                        EN
                    </a>

                    <a href="{{ route('app.setLocale', ['locale' => 'vi']) }}" class="flex-c-m trans-04 p-lr-25">
                        VI
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        USD
                    </a>
                </div>
            </div>
        </div> --}}

        <div class="wrap-menu-desktop" style="background: #303030;">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="/" class="logo">
                    <img src="/img/logo.png" alt="IMG-LOGO">
                    {{-- <img src="/themes/cozastore/images/logo.jpeg" alt="IMG-LOGO" style="width:150px"> --}}
                    <span style="font-size:20px;margin-left:-30px;color:#333333"></span>
                </a>


                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ Request::is('') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.home') }}">Trang chủ</a>
                        </li>

                        <li class="{{ Request::is('san-pham') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.product') }}">Sản phẩm</a>
                        </li>

                        <li class="{{ Request::is('gioi-thieu') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.about') }}">Giới thiệu</a>
                        </li>

                        <li class="{{ Request::is('lien-he') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.contact') }}">Liên hệ</a>
                        </li>

                        {{-- <li class="{{ Request::is('admin') ? 'active-menu' : '' }}">
                            <a href="{{ route('backend.dashboard') }}">Quản trị</a>
                        </li> --}}
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div> -->
                    <!-- Hiển thị nút summart cart -->
                    <ngcart-summary class="js-show-cart"
                        template-url="{{ asset('vendor/ngCart/template/ngCart/summary.html') }}"></ngcart-summary>

                    <a href="#"
                        class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                        data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile" style="background: #303030;">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="/"><img src="/img/logo.png" alt="IMG-LOGO"></a>
        </div>

        <style>
            .icon-header-item {
                color: #Fff;
            }
        </style>
        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner" style="background:#fff !important"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile" style="background:#303030;">
        {{-- <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>

                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul> --}}

        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>

            <li>
                <a href="#">Shop</a>
            </li>

            <li>
                <a href="#" class="label1 rs1" data-label1="hot">Features</a>
            </li>

            <li>
                <a href="#">Blog</a>
            </li>

            <li>
                <a href="#">About</a>
            </li>

            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                X
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="keyword" placeholder="Search..." id="keyword">
            </form>
            <div id="listSearch">
            </div>
        </div>

    </div>
</header>

