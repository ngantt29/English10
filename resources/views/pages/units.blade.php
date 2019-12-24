@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="h-g-title">
            Tiếng anh lớp 10 - sách mới
        </div>
        <div class="h-best-sale-content">
            <div class="inline-block">
                @foreach ($units as $unit)
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 unit">
                    <div class="unit-sub">
                        <div class="h-best-sale-product h-image-scale">
                            <a href="{{ url("tieng-anh-lop-10/$unit->id") }}">
                                <img src="{{ asset('upload/images/'.$unit->avatar) }}" class="img-fluid">
                            </a>
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
            {{ $units->links() }}
        </div>
    </div>
</div>
</div>

@endsection