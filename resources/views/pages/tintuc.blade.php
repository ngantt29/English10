@extends('master-layout')
@section('content')
<div class="container">
        <section class="bread-crumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb">
                                <a class="breadcrumb-item" href="#">trang chủ</a>
                                <a class="breadcrumb-item" href="#">tin tức</a>

                            </nav>
                        </div>
                    </div>
                </div>
            </section>
    <div class="tintuc">Tin Tức</div>
    <div class="row tintuc-item">

        <div class="col-md-6">
            <div class="menu-left d-flex" style="height: 100%;">
                <img src="images/sungmay1.png">
            </div>
        </div>

        <div class="col-md-6">
            <div class="right">
            <a href="{{ url('chitiettin') }}" class="text-top">CÓ THỂ BẠN CHƯA BIẾT -<br> CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                <p class="text-content"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                        class="fas fa-user-cog"></i> Admin</p>
                <p class="text-bot">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt ut laoreet dolore magna aliq...</p>
                <div class="chitiet">
                    <a href="{{ url('chitiettin') }}">CHI TIẾT</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row tintuc-item">

            <div class="col-md-6">
                <div class="menu-left d-flex" style="height: 100%;">
                    <img src="images/sungmay1.png">
                </div>
            </div>

            <div class="col-md-6">
                <div class="right">
                <a href="{{ url('chitiettin') }}" class="text-top">CÓ THỂ BẠN CHƯA BIẾT -<br> CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                    <p class="text-content"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                            class="fas fa-user-cog"></i> Admin</p>
                    <p class="text-bot">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliq...</p>
                    <div class="chitiet">
                        <a href="{{ url('chitiettin') }}">CHI TIẾT</a>
                    </div>
                </div>
            </div>
        </div>
</div>


<div class="container mb-5">
    <ul class="pagination">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Tiếp</a></li>
    </ul>
</div>
@endsection
