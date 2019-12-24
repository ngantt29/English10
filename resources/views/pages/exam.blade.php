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
    </div>
</div>
@endsection