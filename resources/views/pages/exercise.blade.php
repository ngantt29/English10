@extends('master-layout')
@section('content')
<div class="container">
    <div class="h-best-sale h-g">
        <div class="navigations clear">
            <ul>
                <li class="child_r"><a class="nav_home" href="#">&nbsp;</a></li>

                <li class="child_c_1" style="z-index: 9998;">
                    <div class="child_nav_left_c">
                        <a href="https://www.tienganh123.com/tieng-anh-lop-10-sach-moi"
                            title="Tiếng Anh Lớp 10 - Sách mới">Tiếng Anh Lớp 10 - Sách mới</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_1" style="z-index: 9997;">
                    <div class="child_nav_left_c">
                        <a href="https://www.tienganh123.com/tieng-anh-lop-10-sach-moi-bai-1" title="Unit 1">Unit 1</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>
                <li class="child_c_2" style="z-index: 999;">
                    <div class="child_nav_left_c">
                        <a href="https://www.tienganh123.com/tieng-anh-lop-10-sach-moi-bai-1-thuc-hanh-tu-vung-1"
                            title="Thực hành từ vựng 1">Thực hành từ vựng 1</a>
                    </div>
                    <div class="child_nav_right_c">&nbsp;</div>
                </li>

            </ul>
        </div>
        <div class="comment_bai_hoc clear">
            <div class="clear" style="height:10px;"></div>
            <div class="nl_notes nl_notes_te">
                <!--<img src="https://data.tienganh123.com/images/v2/home/banner_toeic.jpg">-->
            </div>

            <div class="ghichu0 clear bo_goc">
                <h3 class="orange1">{{ $exercise->title }}</h3>
            </div>
            <div class="details" style="padding:0">
                <div class="type_result" style="display:none;"></div>
                <div class="basic_box" id="basic_box">
                    <div id="pt_box" style="display: block;">
                        <div id="basic_main" class="container">
                            <div class="basic_segment active" id="basic_segment_0">
                                <div class="part">
                                    <div class="title">Choose the best options to fill in the blanks.<div
                                            class="title_trans">(Chọn đáp án đúng để điền vào chỗ trống.)</div>
                                    </div>
                                    @for($i = 0; $i < count($question); $i++)
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">{{ $i+1. }}</div>
                                        <div class="basic_q_title">
                                            My mother is__________ for taking care of the home and the family.</div>
                                        <div class="basic_select basic_elm" inx="1_0" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" inx="1_0" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. responsible</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" inx="1_0" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. takes the responsibility</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" inx="1_0" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. take the duty</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_0" inx="1_0" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. Both B &amp; C are correct.</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Ta có "be responsible for + V-ing/N": chịu trách
                                            nhiệm cho việc gì, điều gì. Câu có nghĩa là: <em>Mẹ tớ <strong>chịu trách
                                                    nhiệm</strong> cho việc chăm sóc nhà cửa, gia đình.</em></div>

                                    </div>
                                    @endfor

                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">2.</div>
                                        <div class="basic_q_title">
                                            Women usually manage __________ better than men do.</div>
                                        <div class="basic_select basic_elm" inx="1_1" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_1" inx="1_1" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. household finances</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_1" inx="1_1" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. household machines</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_1" inx="1_1" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. housewives</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_1" inx="1_1" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. houseplants</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa: <em>Phụ nữ thường quản lí <strong>các
                                                    khoản chi tiêu trong gia đình</strong> giỏi hơn đàn ông.</em></div>

                                    </div>
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">3.</div>
                                        <div class="basic_q_title">
                                            My parents __________. My mother usually does more housework than my father.
                                        </div>
                                        <div class="basic_select basic_elm" inx="1_2" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_2" inx="1_2" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. divide chores equally</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_2" inx="1_2" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. split chores unequally</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_2" inx="1_2" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. don't share housework equally</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_2" inx="1_2" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. Both B &amp; C are correct.</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa là: <em>Bố mẹ tớ không phân chia công
                                                việc nhà công bằng. Mẹ tớ thường làm nhiều việc nhà hơn bố tớ.</em>
                                        </div>

                                    </div>
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">4.</div>
                                        <div class="basic_q_title">
                                            Equal share of household duties helps increase __________.</div>
                                        <div class="basic_select basic_elm" inx="1_3" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_3" inx="1_3" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. job satisfaction</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_3" inx="1_3" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. couple satisfaction</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_3" inx="1_3" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. wedding satisfaction</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_3" inx="1_3" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. marital satisfaction</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa là: <em>Phân chia công việc nhà công
                                                bằng giúp tăng <strong>sự hài lòng trong cuộc sống hôn
                                                    nhân</strong>.</em></div>

                                    </div>
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">5.</div>
                                        <div class="basic_q_title">
                                            It's not easy to gain __________ between husbands and wives, even in
                                            developed countries.</div>
                                        <div class="basic_select basic_elm" inx="1_4" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_4" inx="1_4" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. equal chore</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_4" inx="1_4" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. chore equally</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_4" inx="1_4" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. chore equal</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_4" inx="1_4" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. chore equity</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa: <em>Thật là không dễ để đạt được
                                                <strong>sự công bằng trong công việc nhà</strong> giữa chồng và vợ, ngay
                                                cả ở những nước phát triển.</em></div>

                                    </div>
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">6.</div>
                                        <div class="basic_q_title">
                                            He decided that he wanted to be a __________ while his wife worked
                                            full-time.</div>
                                        <div class="basic_select basic_elm" inx="1_5" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_5" inx="1_5" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. homemaker</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_5" inx="1_5" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. house husband</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_5" inx="1_5" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. housewife</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_5" inx="1_5" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. Both A &amp; B are correct.</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa là: <em>Anh ấy quyết định rằng anh ấy
                                                muốn trở thành <strong>người nội trợ</strong> trong khi vợ mình làm việc
                                                toàn thời gian.</em></div>

                                    </div>
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">7.</div>
                                        <div class="basic_q_title">
                                            Negotiation and conflict __________ skills are very important to every woman
                                            in modern life.</div>
                                        <div class="basic_select basic_elm" inx="1_6" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_6" inx="1_6" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. resolution</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_6" inx="1_6" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. revolution</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_6" inx="1_6" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. renovation</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col2">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_6" inx="1_6" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. communication</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa: <em>Các kĩ năng thương lượng và
                                                <strong>giải quyết xung đột</strong> rất quan trọng đối với bất cứ người
                                                phụ nữ nào trong cuộc sống hiện đại.</em></div>

                                    </div>
                                    <div class="basic_question basic_multiple_choice" type="text/x-jsmart-tmpl">
                                        <div class="basic_index">8.</div>
                                        <div class="basic_q_title">
                                            My sunflower seeds must be __________ twice a day so that they will sprout
                                            in a few days.</div>
                                        <div class="basic_select basic_elm" inx="1_7" value="0" tpl="multiple_choice">

                                            <div class="basic_radio basic_col4">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_7" inx="1_7" value="1">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">A. watered</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col4">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_7" inx="1_7" value="2">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">B. dried</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col4">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_7" inx="1_7" value="3">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">C. picked</span>
                                                </span>
                                            </div>


                                            <div class="basic_radio basic_col4">
                                                <span class="item_radio_check"></span>
                                                <span class="item_radio item_radio_1_7" inx="1_7" value="4">
                                                    <span class="item_radio_click"></span> <span
                                                        class="item_radio_text">D. spread</span>
                                                </span>
                                            </div>


                                        </div>
                                        <div class="basic_explain">Câu có nghĩa: <em>Hạt hướng dương của tớ cần phải
                                                được tưới nước 2 lần 1 ngày để chúng có thể nảy mầm trong vài ngày
                                                tới.</em></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basic_box_control" style="display: block;">
                            <div class="basic_alert_note">Sau khi hoàn thiện bài làm hãy bấm vào
                                "<strong>Submit</strong>" bên dưới</div>
                            <div class="box_bt_ctrl"><button type="button" class="basic_bt_ctrl basic_bt_sb"
                                    onclick="testAction(this)">Submit</button></div>
                        </div>
                        <div id="load_file_js">
                            <script type="text/javascript" async=""
                                src="/file/common/lesson/pho_thong/js/item/multiple_choice.js"></script>
                            <script type="text/javascript" async=""
                                src="/file/common/lesson/pho_thong/js/action.js?vs=5"></script>
                        </div>
                    </div>
                </div>
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