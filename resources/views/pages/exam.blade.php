@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="navigations clear">
            <ul>
                <li class="child_r"><a class="nav_home" href="#">&nbsp;</a></li>
                <li class="child_c_2" style="z-index: 999;">
                    <div class="child_nav_left_c">
                        <a href="#"
                            title="Thực hành từ vựng 1">{{ $exam->title }}</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>

            </ul>
        </div>
        <div class="comment_bai_hoc clear">
            <div class="clear" style="height:10px;"></div>
            <div class="ghichu0 clear bo_goc">
                <h3 class="orange1">{{ $exam->title }}</h3>
            </div>
            <div class="details" style="padding:0">
                <div class="type_result" style="display:none;"></div>
                <div class="basic_box" id="basic_box">
                    <div id="pt_box" style="display: block;">
                        <div id="basic_main">
                            <div class="basic_segment active" id="basic_segment_0">
                                <form class="part"
                                    action="{{ route("cham-diem-kiem-tra", ['id_exam'=>$exam->id]) }}"
                                    method="POST">
                                    @csrf
                                    <div class="title">Choose the best options to fill in the blanks.
                                        <div class="title_trans">(Chọn đáp án đúng để điền vào chỗ trống.)</div>
                                    </div>
                                    @for($i = 0; $i < count($questions); $i++) <div
                                        class="basic_question basic_multiple_choice">
                                        <div class="basic_index">{{ $i+1. }}</div>
                                        <div class="basic_q_title">
                                            {{ $questions[$i]->question }}
                                        </div>
                                        <div class="basic_select basic_elm">
                                            <div class="basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" value="1">
                                                    {{-- <span class="item_radio_click"></span> --}}
                                                    <label class="radio-inline">
                                                        <input type="radio" name="{{ $i }}" value="1">
                                                        <span class="item_radio_text">{{ $questions[$i]->ans1 }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" value="2">
                                                    <input type="radio" name="{{ $i }}" value="2">
                                                    <span class="item_radio_text">{{ $questions[$i]->ans2 }}</span>
                                                </span>
                                            </div>
                                            <div class="basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" value="3">
                                                    <input type="radio" name="{{ $i }}" value="3">
                                                    <span class="item_radio_text">{{ $questions[$i]->ans3 }}</span>
                                                </span>
                                            </div>
                                            <div class="basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" value="4">
                                                    <input type="radio" name="{{ $i }}" value="4">
                                                    <span class="item_radio_text">{{ $questions[$i]->ans4 }}</span>
                                                </span>
                                            </div>
                                        </div>
                            </div>
                            @endfor
                            <div class="basic_box_control" style="display: block;">
                                <div class="basic_alert_note">Sau khi hoàn thiện bài làm hãy bấm
                                    vào"<strong>Submit</strong>" bên
                                    dưới
                                </div>
                                <div class="box_bt_ctrl">
                                    <button type="submit" class="basic_bt_ctrl basic_bt_sb" onclick="">Submit</button>
                                </div>
                            </div>
                            </form>
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
                action="{{ route('binh-luan',['id_user'=>$user_login->id,'type'=>"exam",'id_type'=>$exam->id]) }}"
                method="POST">
                @csrf
                <div class="fields">
                    <div class="fourteen wide field"><textarea name="content"
                            placeholder="Trao đổi về nội dung bài học tại đây..." rows="2"></textarea></div>
                    <button width="4" class="ui primary button" style="max-height: 50px;">Bình luận</button>
                </div>
            </form>
            <div class="column">
                @if(isset($exam))
                @foreach($exam->comment as $comment)
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
                @endif
            </div>
            <div class="text-center mt-1e"></div>
        </div>
    </div>
</div>
@endsection