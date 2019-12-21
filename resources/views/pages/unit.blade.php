@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="navigations clear">
            <ul>
                <li class="child_r"><a class="nav_home" href="#">&nbsp;</a></li>
                <li class="child_c_1" style="z-index: 9998;">
                    <div class="child_nav_left_c">
                        <a href="{{ url("bai-giang/2") }}" title="Tiếng Anh Lớp 10 - Sách mới">English 10 - New</a>
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
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="to_unit_img to_unit_img_vocab">
                                                    <a href="{{ url("bai-giang/$lesson->id") }}" title="{{ $lesson->title }}">
                                                        <img
                                                            src="https://tienganhphothong.tienganh123.com/file/phothong/lop10/unit1/vocab/vocab.png">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="to_unit_content" style="width: 300px;">
                                                    <div class="lng_right_tit"><a href="{{ url("bai-giang/$lesson->id") }}"
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
                        <a href="https://www.tienganh123.com/tieng-anh-lop-10-sach-moi-bai-1-thuc-hanh-tu-vung-1"
                            title="Thực hành từ vựng 1">
                            <div class="to_box_right_item_pt">
                                <div class="cat_label_prac">
                                    <div class="cat_label_left"><span>Bài tập</span></div>
                                    <div class="cat_label_right"></div>
                                </div>
                                <div class="to_box_left_content" style="">
                                    <!--<img onerror="this.src='http://data.tienganh123.com/images/avatar/ta123_menu.gif';" src="http://data.tienganh123.com/images/avatar/ta123_menu.gif">-->
                                    <div class="cat_title_prac">Thực hành từ vựng 1</div>
                                </div>
                            </div>
                        </a>
                    </div>    
                    @endforeach
                </div>
            </div>
            <!-- Toeic 1-->
        </div>
    </div>
</div>
@endsection