@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Unit
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Avatar</th>
                        <th>Video</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lesson as $l)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $l->id }}</td>
                        <td>{{ $l->title }}</td>
                        <td class="description">{{ $l->desc }}</td>
                        <td><img width="100px" src="upload/images/{{ $l->avatar }}"></td>
                        <td><video style="width: 100px;"><source src="upload/videos/{{ $l->video }}"></video></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Lesson/delete/{{ $l->id }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Lesson/edit/{{ $l->id }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            
            
            //   var element = document.getElementsByClassName('description')
              
            //   for (var i = 0; i < element.length; i++) {

            //       truncated = element[i].innerText;
                  
                      
            //     if (truncated.length > 107) {
                    
            //         truncated = truncated.substr(0,107) + '...';
            //                             }
                
            //     }
            
            });   
    </script>
    
@endsection