@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Unit
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="admin/Unit/add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="require">Type Input</label><br>
                        <label class="radio-inline"><input type="radio" name="type" value="1" checked>Multiple</label>
                        <label class="radio-inline"><input type="radio" name="type" value="2">One by one</label>
                    </div>
                    <div id="type_1">
                        <div class="form-group">
                            <label class="require">Question of ?</label><br>
                            <label class="radio-inline"><input type="radio" name="typeof" value="1"
                                    checked>Exercise</label>
                            <label class="radio-inline"><input type="radio" name="typeof" value="2">Exam</label>
                        </div>
                        <div class="form-group exercise">
                            <label>Exercise</label>
                            <select name="id_exercise" class="form-control">
                                <option value=""></option>
                                @foreach($exercise as $e)
                                    <option value="{{ $e->id }}">{{ $e->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group exam">
                            <label>Exam</label>
                            <select name="id_exam" class="form-control">
                                <option value=""></option>
                                @foreach($exam as $e)
                                    <option value="{{ $e->id }}">{{ $e->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File Excel</label>
                            <div class="form-group"><a href="upload/file/">Form Input NewWord</a></div>
                            <input class="form-control" name="file" type="file">
                        </div>
                    </div>
                    <div id="type_2">
                        <div class="form-group">
                            <label class="require">Question of ?</label><br>
                            <label class="radio-inline"><input type="radio" name="typeof" value="1"
                                    checked>Exercise</label>
                            <label class="radio-inline"><input type="radio" name="typeof" value="2">Exam</label>
                        </div>
                        <div class="form-group">
                            <label class="require">Question</label>
                            <input class="form-control" name="question" placeholder="Please Enter Question">
                        </div>
                        <div class="form-group exercise">
                            <label>Exercise</label>
                            <select name="id_exercise" class="form-control">
                                <option value=""></option>
                                @foreach($exercise as $e)
                                    <option value="{{ $e->id }}">{{ $e->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group exam">
                            <label>Exam</label>
                            <select name="id_exam" class="form-control">
                                <option value=""></option>
                                @foreach($exam as $e)
                                    <option value="{{ $e->id }}">{{ $e->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Answer 1</label>
                            <input required class="form-control" name="ans1" placeholder="Please Enter Answer 1 Of New Word">
                        </div>
                        <div class="form-group">
                            <label>Answer 2</label>
                            <input required class="form-control" name="ans2" placeholder="Please Enter Answer 2 Of New Word">
                        </div>
                        <div class="form-group">
                            <label>Answer 3</label>
                            <input required class="form-control" name="ans3" placeholder="Please Enter Answer 3 Of New Word">
                        </div>
                        <div class="form-group">
                            <label>Answer 4</label>
                            <input required class="form-control" name="ans4" placeholder="Please Enter Answer 4 Of New Word">
                        </div>
                        <div class="form-group">
                            <label class="require">Correct Answer</label>
                            <input required class="form-control" name="correctAnswer"
                                placeholder="Please Enter Spelling Of New Word">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@section('script')
<script type="text/javascript">
    // $(document).ready(function(){
        //     alert("gdfh");
        //     $.get('admin/ajax/topic/'+typeid,{},function(data){
        //             alert(data);
        //         });
        // })
        $(document).ready(function(){
            $("#type_2").hide();
            $(".exam").hide();
            $("input[name=type]:radio").change(function(){
                const type = Number($(this).val());
                if(type === 1){
                    $("#type_1").show();
                    $("#type_2").hide();
                } else if(type === 2){
                    $("#type_1").hide();
                    $("#type_2").show();
                }
            });
            $("input[name=typeof]:radio").change(function(){
                const type = Number($(this).val());
                if(type === 1){
                    $(".exercise").show();
                    $(".exam").hide();
                } else if(type === 2){
                    $(".exercise").hide();
                    $(".exam").show();
                }
            });
        });
        
        // $('#topic').change(function(){
        //         var topicid = $(this).val();
        //         alert(topicid);
        //         $.ajax({
        //             type: "GET",
        //             url: 'admin/ajax/content/'+topicid;,
        //             dataType: "html",
        //             success: function(){
        //                 alert("success");
        //             },
        //             error: function(e){
        //                 console.error(e);
        //             }
        //         });
            
        // })
</script>
@endsection