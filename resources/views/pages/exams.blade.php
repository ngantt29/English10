@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="h-g-title">
            Kiểm tra năng lực học sinh
        </div>
        <div class="h-best-sale-content">
            <div class="inline-block">
                @foreach ($exams as $exam)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 unit">
                    <div class="unit-sub">
                        <div class="h-best-sale-product h-image-scale">
                            <a href="{{ url("kiem-tra/$exam->id") }}">
                                <img src="{{ asset("upload/images/$exam->avatar") }}" class="img-fluid">
                            </a>
                            <div class="h-best-sale-insert-cart">
                                <div style="border-right: 1px solid #fff;">
                                    <a href="{{url("kiem-tra/$exam->id")}}">Xem bài giảng</a>
                                </div>
                                <div>
                                    <a href=""><i class="far fa-heart"></i></a>
                                </div>
                            </div>
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
            {{ $exams->links() }}
        </div>
    </div>
</div>

@endsection