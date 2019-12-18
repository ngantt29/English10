@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" style="display: inline-block;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Exercise
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>title</th>
                        <th>desc</th>
                        <th>avatar</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exercise as $e)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->title }}</td>
                        <td class="description">{{ $e->desc }}</td>
                        <td><img width="100px" src="upload/images/{{ $e->avatar }}"></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Exercise/delete/{{ $e->id }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Exercise/edit/{{ $e->id }}">Edit</a></td>
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