@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="navigations clear">
            <ul>
                <li class="child_r"><a class="nav_home" href="#">&nbsp;</a></li>
                <li class="child_c_1" style="z-index: 9998;">
                    <div class="child_nav_left_c">
                        <a href="{{ url("tieng-anh-lop-10") }}" title="Tiếng Anh Lớp 10 - Sách mới">English 10 - New</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_2" style="z-index: 9999;">
                    <div class="child_nav_left_c">
                        <a title="Bài 1">{{ $unit->title }}</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
            </ul>
        </div>
        <div class="comment_bai_hoc clear">
            <div class="clear" style="height:10px;"></div>
            <div class="to_box">
                <div class="to_box_left">
                    @foreach ($lessons as $lesson)
                    <div>
                        <div class="to_box_left_item_pt">
                            <div class="cat_lable">
                                <div class="cat_lable_left"><span>Bài giảng</span></div>
                                <div class="cat_lable_right"></div>
                            </div>
                            <div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="to_unit_img to_unit_img_vocab">
                                                    <a href="{{ url("bai-giang/$lesson->id") }}"
                                                        title="{{ $lesson->title }}">
                                                        <img
                                                            src="{{ asset("upload/images/$lesson->avatar") }}">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="to_unit_content">
                                                    <div class="lng_right_tit"><a
                                                            href="{{ url("bai-giang/$lesson->id") }}"
                                                            title="Từ vựng - Phần 1">{{ $lesson->title }}</a></div>
                                                    <div class="lng_right_content">
                                                        {{ $lesson->desc }}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="to_box_right_item_pt">
                            <a href="{{ route("luyen-tap", ['id_unit'=>$lesson->id_unit,'id_exercise'=>$lesson->id_exercise]) }}"
                                title="Luyện tập {{ $lesson->title }}">
                                <div class="cat_label_prac">
                                    <div class="cat_label_left"><span>Bài tập</span></div>
                                    <div class="cat_label_right"></div>
                                </div>
                                <div class="to_box_left_content" style="">
                                    <!--<img onerror="this.src='http://data.tienganh123.com/images/avatar/ta123_menu.gif';" src="http://data.tienganh123.com/images/avatar/ta123_menu.gif">-->
                                    <div class="cat_title_prac">Luyện tập {{ $lesson->title }}</div>

                                    <div class="cat_content_prac_not_do">
                                        <div class="cat_content_prac_in">
                                            @if(isset($lesson->score) && $user_login)
                                            <span class="not_do">Bạn đã hoàn thành bài tập này với điểm số: <strong>{{ $lesson->score }}</strong></span>
                                            @else
                                            <span class="not_do">Bạn chưa làm bài này</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Toeic 1-->
        </div>
    </div>
</div>
@endsection