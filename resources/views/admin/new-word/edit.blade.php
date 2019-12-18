@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New Book
                    <small>{{ $newWord->ten_sach }}</small>
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
                <form action="admin/NewWord/edit/{{ $newWord->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Lesson</label>
                        <select name="id_lesson" class="form-control">
                            <option value=""></option>
                            @foreach($lesson as $l)
                            <option value="{{ $l->id }}" 
                                @if($newWord->id_lesson != "")
                                    @if($l->id == $newWord->id_lesson)
                                        selected="selected" 
                                    @endif
                                @endif
                                >{{ $l->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="require">New Word</label>
                        <input class="form-control" name="name" placeholder="Please Enter New Word" value="{{ $newWord->name }}">
                    </div>
                    <div class="form-group">
                        <label class="require">Translate</label>
                        <input class="form-control" name="translate" placeholder="Please Enter Translate Of New Word" value="{{ $newWord->translate }}">
                    </div>
                    <div class="form-group">
                        <label>Spelling</label>
                        <input class="form-control" name="spelling" placeholder="Please Enter Spelling Of New Word" value="{{ $newWord->spelling }}">
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