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
                        <a href="{{ url("tieng-anh-lop-10/$lesson->id_unit") }}" title="Unit 1">{{ $lesson->unit }}</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_2" style="z-index: 999;">
                    <div class="child_nav_left_c">
                        <a href="https://www.tienganh123.com/tieng-anh-lop-10-sach-moi-bai-1-tu-vung-1" title=""></a>
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
                        <div class="title"><span class="v3_bg_icon vocab_icon">{{$lesson->unit}}</span><span
                                class="v3_bg_icon bt_close_open close"></span></div>
                        <div class="detail_cont">
                            <div id="video_vocab"> 
                                <video style="cursor:pointer;display:none" width="720" height="406" id="player1" controls="controls" preload="none">
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
                                <div class="vocab_box">
                                    <div class="vocab_img"><img
                                            src="https://tienganhphothong.tienganh123.com/file/phothong/lop10/unit1/vocab/img/cook.jpg">
                                    </div>
                                    <div class="vocab_word"><span class="word">cook</span></div>
                                    <div class="vocab_word"> <span class="phonetic">/kʊk/</span></div>
                                    <div class="vocab_word vocab_mean">
                                        <div class="vcab_3" word="v."> <span class="vcab_show_box type_w">(v.)</span>
                                            <div class="vcab_3box">
                                                <div class="v3_bg_icon vcab_3box_arrow"></div>
                                                <div class="vcab_3box_content">Verb: Động từ<br> <strong><em>Động từ là
                                                            từ dùng để miêu tả hành động (do, break, walk,...) hay trạng
                                                            thái (be, like, own,...). Trong câu luôn phải có ít nhất một
                                                            động từ.</em></strong><br><a target="_blank"
                                                        href="/dong-tu-video/12924-english-verbs.html">Đọc thêm về động
                                                        từ</a></div>
                                            </div>
                                        </div>
                                        <span>nấu ăn</span>
                                    </div>
                                </div>
                                <div class="vocab_box">
                                    <div class="vocab_img"><img
                                            src="https://tienganhphothong.tienganh123.com/file/phothong/lop10/unit1/vocab/img/do-the-cooking.jpg">
                                    </div>
                                    <div class="vocab_word"><span class="word">do the cooking</span></div>
                                    <div class="vocab_word"> <span class="phonetic">/du ðə ˈkʊkɪŋ/</span></div>
                                    <div class="vocab_word vocab_mean">
                                        <div class="vcab_3" word="v. phr."> <span class="vcab_show_box type_w">(v.
                                                phr.)</span>
                                            <div class="vcab_3box">
                                                <div class="v3_bg_icon vcab_3box_arrow"></div>
                                                <div class="vcab_3box_content">Verb phrase: Cụm động từ<br>
                                                    <strong><em>Cụm động từ là cụm từ bao gồm một động từ chính và thành
                                                            phần trợ động từ, bổ ngữ, tân ngữ hoặc/ và trạng
                                                            ngữ.</em></strong></div>
                                            </div>
                                        </div>
                                        <span>nấu ăn</span>
                                    </div>

                                </div>

                                <div class="v3_bg_icon non_vip_gr">
                                    <div class="non_vip_ex_text">Để học tiếp bài học, bạn hãy là <a
                                            title="Quyền lợi của thành vien VIP"
                                            href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html"
                                            target="_blank" style="text-decoration:underline; color:#2c72b0"
                                            class="f_bold">thành viên VIP</a> của TiếngAnh123</div><a href="/register">
                                        <div class="v3_bt v3_bt_dk">Đăng ký</div>
                                    </a><a href="/clogin">
                                        <div class="v3_bt v3_bt_login">Đăng nhập</div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="xem_luyen_tap"> <a class="btn_xem" target="_blank" href="luyen-tap/1">Mời các bạn làm
                            bài luyện
                            tập</a> </div>
                    <div class="bs_record_dialog">
                        <div class="bs_form_send_rec">
                            <div class="bs_form_top_rec"><img src="//data.tienganh123.com/images/v2/home/icon_voice.png"
                                    class="bs_rec_icon">Thu âm để so sánh<a class="rcd_close_box" href="javascript:;"
                                    style="display: inline;"></a>
                                <div style="float:right;"><img src="/file/common/lesson/images/close.png"
                                        class="close_recorder" style="cursor:pointer"></div>
                                <div class="area_recoder0 bs_rec_box" id="are_recoder">
                                    <div class="bs_rec_title"><strong style="color:#ed1f24"></strong>audio gốc: <span
                                            class="span-audio"><span class="uba_audioButton audio_goc"
                                                media-url=""></span></span></div>
                                    <div class="bs_rec_content">
                                        <div class="bs_box_rec">
                                            <center>
                                                <span id="rs_recorder" style="display: none;"></span>
                                            </center>
                                            <div id="bx_record">
                                                <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
                                                    codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"
                                                    width="200" height="140" id="audioControl" align="middle">
                                                    <param name="allowScriptAccess" value="sameDomain">
                                                    <param name="allowFullScreen" value="false">
                                                    <param name="movie"
                                                        value="/file/common/lesson/js/record.swf?playMediaID=0&amp;autoplay=0">
                                                    <param name="quality" value="high">
                                                    <param name="bgcolor" value="#fff">
                                                    <embed
                                                        src="/file/common/lesson/js/record.swf?playMediaID=0&amp;autoplay=0"
                                                        width="220" height="140" type="application/x-shockwave-flash"
                                                        pluginspage="http://get.adobe.com/flashplayer/">
                                                </object>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <style>
                            /* thu âm*/
                            .recording_user {
                                background-image: url(//noidung.tienganh123.com/file/common/images/user_icon_recording.png);
                                background-repeat: no-repeat;
                                background-position: center;
                                position: relative;
                                cursor: pointer;
                                display: inline-block;
                                height: 18px;
                                width: 18px;
                                vertical-align: middle;
                                margin-left: 5px;
                            }

                            .bs_record_dialog {
                                margin-left: 200px;
                                position: absolute;
                                top: 500px;
                                z-index: 9999;
                                display: none;
                            }

                            .bs_form_send_rec {
                                background: none repeat scroll 0 0 #fff;
                                border: 1px solid #c1c1c1;
                                border-radius: 10px;
                                margin: 0 auto;
                                width: 265px;
                                height: 250px;
                            }

                            .rcd_hover {
                                background-image: url(//www.tienganh123.com/static/images/user_icon_recording_hover.jpg);
                                background-repeat: no-repeat;
                                height: 30px;
                                left: -30px;
                                position: absolute;
                                top: 20px;
                                width: 71px;
                                display: none;
                                z-index: 10
                            }

                            .bs_rec_title {
                                padding: 10px;
                                padding-left: 22px;
                            }

                            .bs_box_rec {
                                margin: 10px;
                                color: red;
                            }

                            .bs_form_top_rec {
                                background-color: #3493bc;
                                border-radius: 8px 8px 0 0;
                                color: white;
                                font-size: 16px;
                                padding-top: 10px;
                                height: 67px;
                                position: relative;
                                text-align: center;
                            }

                            .bs_rec_icon {
                                left: 15px;
                                position: absolute;
                                top: -10px;
                            }

                            .bs_guide_bold {
                                font-weight: bold;
                            }

                            .bs_guide_red {
                                color: #ed1f24;
                            }

                            .bs_recoder_guide {
                                margin: 0 auto;
                                padding: 10px;
                                width: 192px;
                            }

                            .bs_hr_rec {
                                background-color: #a8a8a8;
                                height: 1px;
                                margin: 0 auto;
                                width: 494px;
                            }

                            .bs_rec_contentNaN
                        </style>
                    </div>
                </div>
                <div id="load_file_js">
                    <link type="text/css" href="/file/common/lesson/pho_thong/vocab/css/vocab_card1.css?vs=3"
                        rel="stylesheet">
                </div>
                <script type="text/javascript">
                    var lesson_path="https://tienganhphothong.tienganh123.com/file/phothong/lop10/unit1/vocab/";
            $.getScript("/file/common/lesson/pho_thong/vocab/js/load_data.js",function(){
                load_data();	
            });
                </script>
                <style type="text/css">
                    .qz_button_fixed {
                        font-weight: bold;
                        margin: 0 auto;
                    }

                    .qz_submit,
                    .qz_next {}

                    .qz_bt_orange {
                        padding: 0 10px;
                        background: url(//noidung.tienganh123.com/file/common/quiz/images/bt_submit.jpg) 0px 0px repeat-x;
                        height: 33px;
                        font-weight: bold;
                        line-height: 30px;
                        cursor: pointer;
                        border: 1px solid #f58c09;
                        font-size: 20px;
                        margin: 0 auto;
                        border-radius: 6px;
                        color: #fff;
                        display: block;
                    }
                </style>
                <script type="text/javascript">
                    function reset_game(){
                        var pid = $("#pid").html();
                        if (confirm('Bạn có chắc chắn muốn luyện tập lại các từ vựng?')){
                            $.post( "/ajax/tienganhphothong/reset_game", {pid: pid})
                            .done(function(data){
                                if(data == 'yes')
                                    location.reload();
                            });
                        }
                    }
                </script>

            </div>

        </div>
        <div class="ui segment no-box-shadow">
            <div class="mt-15 mb-1e">
                <h4 class="heading-title">BÌNH LUẬN</h4>
            </div>
            <form class="ui form mtb-10">
                <div class="fields">
                    <div class="fourteen wide field"><textarea placeholder="Trao đổi về nội dung bài học tại đây..."
                            rows="2"></textarea></div>
                    <button width="4" class="ui primary button" style="max-height: 50px;">Bình luận</button>
                </div>
            </form>
            <div class="column">
                <div style="margin: 10px 0px; border-left: 3px solid rgb(197, 197, 197); padding-left: 10px;">
                    <div><strong style="display: inline-block; margin: 0px 0px 0px 5px;">Nguyễn Thành Nam</strong></div>
                    <div style="margin-left: 25px;">
                        <p style="margin: 5px 0px;">hello</p>
                        <div><span style="color: blue; margin: 0px 10px 0px 0px; cursor: pointer;">Sửa</span><span
                                style="color: blue; margin: 0px 10px 0px 0px; cursor: pointer;">Trả lời</span><span
                                style="color: blue; margin: 0px 10px 0px 0px; cursor: pointer;">Xóa</span></div>
                    </div>
                    <div
                        style="margin-left: 25px; margin-top: 10px; background-color: rgb(248, 248, 248); padding: 1px 0px 0px 5px;">
                        <div class="text-center mt-1e"></div>
                    </div>
                    {{-- <form class="ui form"><div class="fields"><div class="fourteen wide field"><textarea name="comment" rows="2">hello</textarea></div><button width="4" class="ui primary button">Sửa</button></div></form> --}}
                </div>
            </div>
            <div class="text-center mt-1e"></div>
        </div>
    </div>
</div>
@endsection