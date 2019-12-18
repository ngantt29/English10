@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Exercise
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
                <form action="admin/Exercise/add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title (*)</label>
                        <input class="form-control" name="title" placeholder="Please Enter Exercise Title">
                    </div>
                    <div class="form-group">
                        <label>Lesson</label>
                        <select name="id_lesson" class="form-control">
                            <option value=""></option>
                            @foreach($lesson as $l)
                                <option value="{{ $l->id }}">{{ $l->title }}</option>
                            @endforeach
                        </select>
                    </div>                            
                    <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" name="Avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description (*)</label>
                        <textarea class="form-control {{-- ckeditor --}}" rows="6" name="desc"></textarea>
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