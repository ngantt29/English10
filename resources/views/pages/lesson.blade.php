@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="navigations clear">
            <ul>
                <li class="child_r"><a class="nav_home" href="#">&nbsp;</a></li>

                <li class="child_c_1" style="z-index: 9998;">
                    <div class="child_nav_left_c">
                        <a href="{{  url("tieng-anh-lop-10") }}" title="Tiếng Anh Lớp 10 - Sách mới">English 10 -
                            New</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_1" style="z-index: 9997;">
                    <div class="child_nav_left_c">
                        <a href="{{ url("tieng-anh-lop-10/$lesson->id_unit") }}"
                            title="Unit 1">{{ $lesson->unit->title }}</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_2" style="z-index: 999;">
                    <div class="child_nav_left_c">
                        <a href="" title=""></a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>

            </ul>
        </div>
        <div class="comment_bai_hoc clear">
            <div class="clear" style="height:10px;"></div>
            <div class="ghichu0 clear bo_goc">
                <h3 class="orange1">{{ $lesson->title }}</h3>
            </div>
            <div class="details" style="padding:0">
                <div class="type_result" style="display:none;"></div>
                <div class="lesson_main">
                    <div class="v3_box_detail">
                        <div class="title"><span class="v3_bg_icon vocab_icon">{{$lesson->unit->title}}</span><span
                                class="v3_bg_icon bt_close_open close"></span></div>
                        <div class="detail_cont">
                            <div id="video_vocab">
                                <video style="cursor:pointer;display:none" width="720" height="406" id="player1"
                                    controls="controls" preload="none">
                                    <source type="video/mp4" src="{{ asset("upload/videos/$lesson->video") }}">
                                    <!-- Flash: --> <object width="720" height="431"
                                        type="application/x-shockwave-flash" data="player.swf">
                                    </object> </video>
                                <div class="img_play_video"
                                    onclick="this.style.display='none'; this.previousElementSibling.style.display = 'block'; this.previousElementSibling.play()"
                                    style="background-image: url({{ asset("upload/images/$lesson->avatar") }}); width: 720px;height: 406px; background-size: 100% 100%; position:relative; cursor: pointer; text-align:center">
                                    <img style="margin-top: 173px" width="60" height="60" src="images/videoplay.png">
                                    <div
                                        style="position:absolute; background-color:#000; opacity:0.5;width: 720px;height: 406px; top:0px">
                                    </div>
                                </div>
                            </div>
                            <div class="v3_title" id="title_vocab">Từ mới trong bài học</div>
                            <div class="list_vocab">
                                @foreach ($newWords as $newWord)
                                <div class="vocab_box">
                                    <div class="vocab_word"><span class="word">{{ $newWord->name }}</span></div>
                                    <div class="vocab_word"> <span class="phonetic">{{ $newWord->spelling }}</span>
                                    </div>
                                    <div class="vocab_word vocab_mean">
                                        <span>{{ $newWord->translate }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="xem_luyen_tap">
                        <a class="btn_xem" target="_blank"
                            href="{{ route('luyen-tap', ['id_unit'=>$lesson->id_unit,'id_exercise'=>$exercise->id])}}">Mời
                            các
                            bạn làm bài luyện tập</a>
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
        <form class="ui form mtb-10" @if($user_login)
            action="{{ route('binh-luan',['id_user'=>$user_login->id,'type'=>"lesson",'id_type'=>$lesson->id]) }}"
            @endif method="POST">
            @csrf
            <div class="fields">
                <div class="fourteen wide field"><textarea name="content"
                        placeholder="Trao đổi về nội dung bài học tại đây..." rows="2"></textarea></div>
                <button width="4" class="ui primary button" style="max-height: 50px;">Bình luận</button>
            </div>
        </form>
        <div class="column">
            @foreach ($lesson->comment as $comment)
            <div style="margin: 10px 0px; border-left: 3px solid rgb(197, 197, 197); padding-left: 10px;">
                <div><strong
                        style="display: inline-block; margin: 0px 0px 0px 5px;">{{ $comment->user->fullname }}</strong>
                </div>
                <div style="margin-left: 25px;">
                    <p style="margin: 5px 0px;">{{ $comment->content }}</p>
                    <div>
                        @if($user_login && $comment->id_user == $user_login->id)
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