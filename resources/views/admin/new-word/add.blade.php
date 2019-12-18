@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New Word
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
                <form action="admin/NewWord/add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Type Input (*)</label><br>
                        <label class="radio-inline"><input type="radio" name="type" value="1" checked>Multiple</label>
                        <label class="radio-inline"><input type="radio" name="type" value="2">One by one</label>
                    </div>
                    <div class="form-group">
                        <label>Lesson</label>
                        <select name="id_lesson" class="form-control">
                            <option value="">Choose Lesson</option>
                            @foreach($lesson as $l)
                            <option value="{{ $l->id }}">{{ $l->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="type_1">
                        <div class="form-group">
                            <label>File Excel</label>
                            <div class="form-group"><a href="NewWordForm.xlsx">Form Input NewWord</a></div>
                            <input class="form-control" name="file" type="file">
                        </div>
                    </div>
                    <div id="type_2">
                        <div class="form-group">
                            <label>New Word (*)</label>
                            <input class="form-control" name="name" placeholder="Please Enter New Word">
                        </div>
                        {{-- <div class="form-group">
                            <label>Lesson</label>
                            <select name="id_lesson">
                                <option value=""></option>
                                @foreach($Lesson as $l)
                                <option value="{{ $l->id }}">{{ $l->title }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label>Translate</label>
                            <input class="form-control" name="translate" placeholder="Please Enter Translate Of New Word">
                        </div>
                        <div class="form-group">
                            <label>Spelling (*)</label>
                            <input class="form-control" name="spelling" placeholder="Please Enter Spelling Of New Word">
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
            $("input[name=type]:radio").change(function(){
                const type = Number($(this).val());
                if(type === 1){
                    $("#type_1").show();
                    $("#type_2").hide();
                } else if(type === 2){
                    $("#type_1").hide();
                    $("#type_2").show();
                }
            })
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