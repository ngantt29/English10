@extends('master-layout')
@section('content')
<div class="container">
    <div style="width: 100%; display: inline-block;">
        <img src="{{ asset("upload/images/".$banner[0]->avatar) }}" style="width: 100%;" class="img-slide">
    </div>
    <div class="h-best-sale h-g">
        <div class="h-g-title">
            <a href="{{ url('tieng-anh-lop-10') }}">
                Tiếng anh lớp 10 - sách mới
            </a>
        </div>
        <div class="h-best-sale-content">
            <div class="row">
                @foreach ($units as $unit)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 unit">
                    <div class="unit-sub">
                        <div class="h-best-sale-product h-image-scale">
                            <a href="{{ url("tieng-anh-lop-10/$unit->id") }}">
                                <img src="{{ asset('upload/images/'.$unit->avatar) }}" class="img-fluid">
                            </a>
                            {{-- <div class="h-best-sale-insert-cart">
                                <div style="border-right: 1px solid #fff;">
                                    <a href="{{url("tieng-anh-lop-10/$unit->id")}}">Xem bài giảng</a>
                        </div>
                        <div>
                            <a href="{{url("tieng-anh-lop-10/$unit->id")}}"><i class="far fa-heart"></i></a>
                        </div>
                    </div> --}}
                </div>
                <div class="h-best-sale-product-content">
                    <div class="product-name">
                        <a href="">{{ $unit->title }}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
<div class="h-best-sale h-g">
    <div class="h-g-title">
        Các bài kiểm tra trình độ tiếng anh lớp 10
    </div>
    <div class="h-best-sale-content">
        <div class="row">
            @foreach ($exams as $exam)
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 unit">
                <div class="unit-sub">
                    <div class="h-best-sale-product h-image-scale">
                        <a href="{{ url("kiem-tra/$exam->id") }}">
                            <img src="{{ asset("upload/images/$exam->avatar") }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="h-best-sale-product-content">
                        <div class="product-name">
                            <a href="{{url("kiem-tra/$exam->id")}}">{{ $exam->title }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/home.js"></script>
@endsection
