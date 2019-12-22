@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Question Exam
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
                <form action="admin/QuestionExam/edit/{{ $unit->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label>Question (*)</label>
                            <input class="form-control" name="question" placeholder="Please Enter Question" value="{{ $question->question }}">
                        </div>
                        <div class="form-group exam">
                            <label>Exam</label>
                            <select name="id_exam">
                                <option value=""></option>
                                @foreach($exam as $e)
                                <option value="{{ $e->id }}">{{ $e->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Answer 1</label>
                            <input required class="form-control" name="ans1" placeholder="Please Enter Answer 1 Of New Word" value="{{ $question->ans1 }}">
                        </div>
                        <div class="form-group">
                            <label>Answer 2</label>
                            <input required class="form-control" name="ans2" placeholder="Please Enter Answer 2 Of New Word" value="{{ $question->ans2 }}">
                        </div>
                        <div class="form-group">
                            <label>Answer 3</label>
                            <input required class="form-control" name="ans3" placeholder="Please Enter Answer 3 Of New Word" value="{{ $question->ans3 }}">
                        </div>
                        <div class="form-group">
                            <label>Answer 4</label>
                            <input required class="form-control" name="ans4" placeholder="Please Enter Answer 4 Of New Word" value="{{ $question->ans4 }}">
                        </div>
                        <div class="form-group">
                            <label>Correct Answer (*)</label>
                            <input required class="form-control" name="correctAnswer"
                                placeholder="Please Enter Spelling Of New Word" value="{{ $question->correcrAnswer }}">
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
            $('#type').change(function(){
                var typeid = $(this).val();
                $.get('admin/ajax/topic/'+typeid,function(data){
                    
                    $('#topic').html(data);
                });
            });
            $('#topic').change(function(){
                var topicid = $(this).val();
                $.get('admin/ajax/content/'+topicid,function(data){
                    
                    $('#content').html(data);
                });
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