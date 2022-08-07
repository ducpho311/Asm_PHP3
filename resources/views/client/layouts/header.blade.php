<header>
    <div id="header-sticky" class="header__area box-25">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
                    <div class="logo">
                        <a href="{{route('client.home')}}"><img style="width: 200px"  src="{{asset('img/logo/Logo3.jpg')}}" alt=""></a>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-2 col-sm-1 col-2">
                    <div class="header__right p-relative">
                        <div class="main-menu main-menu-2 d-none d-lg-block text-center">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('client.home') }}">Trang chủ</a></li>
                                    <li><a href="{{ route('client.product.list') }}">Sản phẩm</a></li>
                                    {{-- <li><a href="{{ route('client.product.detail') }}">Chi tiết sản phẩm</a></li> --}}
                                    <li><a href="{{ route('client.contact') }}">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu-btn text-center d-lg-none">
                            <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-7 col-10">
                    <div class="header__action header__action-2 f-right">
                        <ul>
                            <li><a href="#" class="search-toggle"> Tìm kiếm</a></li>
                            <li><a href="{{ route('client.cart') }}" class="cart"> Giỏ hàng <span>(01)</span></a>
                            </li>
                            <li> <a href="javascript:void(0);">|||</a>
                                <ul class="extra-info">
                                    <li>
                                        <div class="my-account">
                                            <div class="extra-title">
                                                <h5 style="font-weight: bolder;">Menu</h5>
                                                <hr>
                                            </div>
                                            <ul>
                                                @if (Auth::check())
                                                <li><a href="">
                                                    
                                                        {{Auth::user()->name}} 
                                                   </a>
                                                </li>
                                                <li><a href="{{route('logout')}}">Logout</a></li>
                                                
                                                @else
                                                <li><a href="{{ route('auth.login') }}">Đăng nhập</a></li>
                                                <li><a href="{{ route('auth.signup') }}">Đăng ký</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- scroll up area start -->
<div class="scroll-up" id="scroll" style="display: none;">
    <a href="javascript:void(0);">^</a>
</div>
<!-- scroll up area end -->

<!-- search area start -->
<section class="header__search white-bg transition-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__search-inner text-center">
                    <form action="#">
                        <div class="header__search-btn">
                            <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="header__search-header">
                            <h3>Search</h3>
                        </div>
                        <div class="header__search-input p-relative">
                            <input type="text" placeholder="Search for products... ">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                    </form>
        
                    
                </div>
            </div>
        </div>
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- search area end -->

<!-- extra info area start -->

<div class="body-overlay transition-3"></div>
<!-- extra info area end -->