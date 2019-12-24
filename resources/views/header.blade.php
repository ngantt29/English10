{{-- <div class="container-fluid p-0 m-0">
    <div class="title-head">
        Đăng ký thành viên để nhận có trải nghiệm tốt hơn
    </div>
</div>
<div class="container-fluid p-0 m-0">
    <div class="title-head2">
        Đăng ký thành viên ngay
    </div>
</div> --}}
<header class="">
    {{-- <div class="container-fluid">
        <div class="container an d-flex justify-content-end">
            <div class="head d-flex justify-content-start mt-3">
                <div class="search">
                    <div>
                        <input type="text" placeholder="Tìm kiếm tại đây...">
                    </div>
                    <div>
                        <img src="images/search.png" alt="">
                    </div>
                </div>
                <div class="dn">
                    <img src="images/heath.png" alt="">
                    <a href="" style="font-size: 14px;">Mục Yêu Thích</a>
                </div>
                <div class="dn">
                    <img src="images/user.png" alt="">
                    <a href="#login" data-toggle="modal">Đăng Nhập</a>
                    <span class="text-lowercase" style="padding: 0 10px;color : grey">hoặc</span>
                    <a href="#signUp" data-toggle="modal">Đăng Ký</a>
                </div>
            </div>
        </div>
    </div> --}}
    <nav class="nav-horizontal container-fluid">
        <div class="nav-horizontal-container container">
            <div class="nav-horizontal-content">
                <a href="{{ url('/') }}">
                    <img style="height: 50px;" src="images/main_logo.png" alt="">
                </a>
                <ul class="nav-ul-lv-1">
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    {{-- <li><a href="{{ url('tintuc') }}">Kỹ Năng<i class="fas fa-chevron-down"></i></a>
                    <div class="menu-lv-2">
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li><a href="">Nghe</a></li>
                                    <li><a href="">Nói</a></li>
                                    <li><a href="">Đọc</a></li>
                                    <li><a href="">Viết</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </li> --}}
                    <li><a href="{{ url('tieng-anh-lop-10') }}">Bài Giảng Tiếng Anh lớp 10</a></li>
                    <li><a href="{{ url('kiem-tra') }}">Kiểm Tra</a>
                        {{-- <div class="menu-lv-2">
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li><a href="">Từ vựng</a></li>
                                        <li><a href="">Ngữ pháp</a></li>
                                        <li><a href="">Giữa kì</a></li>
                                        <li><a href="">Cuối kì</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </li>
                    <li class="profile-header">
                        @if(isset($user_login))
                        <div>
                            <a href="{{ url("trang-ca-nhan") }}">{{ $user_login->fullname }}</a>
                        </div>
                        <div class="profile-menu">
                            <ul>
                                <li>
                                    <a href="{{ route("trang-ca-nhan") }}">Trang cá nhân</a>
                                </li>
                                <li>
                                    <a href="{{ route('thay-doi-thong-tin') }}">Thay đổi thông tin</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('doi-mat-khau') }}">Đổi mật khẩu</a>
                                </li> --}}
                                <li>
                                    <a href="{{ url("dang-xuat") }}">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                        @else
                        <a href="{{ url("dang-nhap") }}">Đăng Nhập</a>
                        @endif
                    </li>
                </ul>
                <div class="menu-mobile-button"><i class="fas fa-bars"></i>
                    <div class="menu-mobile">

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript" src="js/nav-horizontal.js"></script>

    <section class="menu-mobile">
        <div class="menu-mobile-bg"></div>
        <div class="menu-mobile-box">
            <div class="menu-mobile-info">

            </div>
            <div class="menu-mobile-content">
                <div class="menu-left">
                    <div class="menu-left-title">
                        <h3>Menu</h3>
                    </div>
                    <div class="menu-left-content">

                        <ul class="menu-left-ul-lv-1">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="{{ url('tieng-anh-lop-10') }}">Bài Giảng</a></li>
                            <li><a href="{{ url('kiem-tra') }}">Kiểm Tra</a></li>

                            @if(isset($user_login))
                            <li><a href="{{ url("trang-ca-nhan") }}">{{ $user_login->fullname }}</a>
                                <i class="fas fa-plus"></i>
                                <ul class="menu-left-ul-lv-child">
                                    <li>
                                        <a href="{{ route("trang-ca-nhan") }}">Trang cá nhân</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('thay-doi-thong-tin') }}">Thay đổi thông tin</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ route('doi-mat-khau') }}">Đổi mật khẩu</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ url("dang-xuat") }}">Đăng xuất</a>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li><a href="{{ url("dang-nhap") }}">Đăng Nhập</a></li>
                            <li><a href="#">Đăng Ký</a></li>
                            @endif



                        </ul>

                    </div> <!-- menu-left-content -->
                </div> <!-- menu-left -->
                <script type="text/javascript" src="js/menu-left-js.js"></script>
            </div>
        </div>
        <script type="text/javascript" src="js/menu-mobile.js"></script>
    </section>

</header>