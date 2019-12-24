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
                <li class="child_c_1" style="z-index: 9997;">
                    <div class="child_nav_left_c">
                        <a href="{{ url("tieng-anh-lop-10/$lesson->id_unit") }}" title="Unit 1">{{ $lesson->unit->title }}</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_2" style="z-index: 999;">
                    <div class="child_nav_left_c">
                        <a href="#" title="Thực hành từ vựng 1">Thực hành từ vựng 1</a>
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
                <h3 class="orange1">{{ $exercise->title }}</h3>
            </div>
            <div class="details" style="padding:0">
                <div class="type_result" style="display:none;"></div>
                <div class="basic_box" id="basic_box">
                    <div style="text-align: center;">
                        <h6 style="font-size: 30px; font-weight: bold;">
                            Chúc mừng bạn đã hoàn thành bài luyện tập
                        </h6>
                        <h3 class="" style="font-size: 35px; font-weight: bold; color:#3be450;">
                            Điểm của bạn là {{ $score }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui segment no-box-shadow">
        <div class="mt-15 mb-1e">
            <h4 class="heading-title">BÌNH LUẬN</h4>
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
        </div>
        <form class="ui form mtb-10"
            action="{{ route('binh-luan',['id_user'=>$user_login->id,'type'=>"exercise",'id_type'=>$exercise->id]) }}"
            method="POST">
            @csrf
            <div class="fields">
                <div class="fourteen wide field"><textarea name="content"
                        placeholder="Trao đổi về nội dung bài học tại đây..." rows="2"></textarea></div>
                <button width="4" class="ui primary button" style="max-height: 50px;">Bình luận</button>
            </div>
        </form>
        <div class="column">
            @foreach ($exercise->comment as $comment)
            <div style="margin: 10px 0px; border-left: 3px solid rgb(197, 197, 197); padding-left: 10px;">
                <div><strong
                        style="display: inline-block; margin: 0px 0px 0px 5px;">{{ $comment->user->fullname }}</strong>
                </div>
                <div style="margin-left: 25px;">
                    <p style="margin: 5px 0px;">{{ $comment->content }}</p>
                    <div>
                        @if($comment->id_user == $user_login->id)
                        <a href="{{ route('xoa-binh-luan',['id'=>$comment->id,'id_user'=>$user_login->id]) }}"
                            style="color: blue; margin: 0px 10px 0px 0px; cursor: pointer;">Xóa</a>
                        @endif
                    </div>
                </div>
                <div
                    style="margin-left: 25px; margin-top: 10px; background-color: rgb(248, 248, 248); padding: 1px 0px 0px 5px;">
                    <div class="text-center mt-1e"></div>
                </div>
                {{-- <form class="ui form"><div class="fields"><div class="fourteen wide field"><textarea name="comment" rows="2">hello</textarea></div><button width="4" class="ui primary button">Sửa</button></div></form> --}}
            </div>
            @endforeach
        </div>
        <div class="text-center mt-1e"></div>
    </div>
</div>
@endsection