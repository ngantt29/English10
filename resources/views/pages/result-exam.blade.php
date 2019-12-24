@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="navigations clear">
            <ul>
                <li class="child_r"><a class="nav_home" href="#">&nbsp;</a></li>

                <li class="child_c_1" style="z-index: 9998;">
                    <div class="child_nav_left_c">
                        <a href="{{ url("tieng-anh-lop-10") }}" title="Tiếng Anh Lớp 10 - Sách mới">Tiếng Anh Lớp 10 -
                            Sách mới</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_2" style="z-index: 999;">
                    <div class="child_nav_left_c">
                        <a href="#" title="Thực hành từ vựng 1">{{ $exam->title }}</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>

            </ul>
        </div>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif
        @if(session('Information'))
        <div class="alert alert-success">
            {{ session('Information') }}
        </div>
        @endif
        @if(session('Warning'))
        <div class="alert alert-danger">
            {{ session('Warning') }}
        </div>
        @endif
        <div class="comment_bai_hoc clear">
            <div class="clear" style="height:10px;"></div>
            <div class="ghichu0 clear bo_goc">
                <h3 class="orange1">{{ $exam->title }}</h3>
            </div>
            <div class="details" style="padding:0">
                <div class="type_result" style="display:none;"></div>
                <div class="basic_box" id="basic_box">
                    <div style="text-align: center;">
                        <h6 style="font-size: 30px; font-weight: bold;">
                            Chúc mừng bạn đã hoàn thành bài kiểm tra
                        </h6>
                        <h3 class="" style="font-size: 35px; font-weight: bold; color:#3be450;">
                            Điểm của bạn là {{ $score }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection