@extends('admin.layout.index')
@section('content')
<div id="page-wrapper" style="display: inline-block;">
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
                        <th>Question</th>
                        <th>Answer 1</th>
                        <th>Answer 2</th>
                        <th>Answer 3</th>
                        <th>Answer 4</th>
                        <th>Correct Answer</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($question as $q)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $q->id }}</td>
                        <td>{{ $q->question }}</td>
                        <td>{{ $q->ans1 }}</td>
                        <td>{{ $q->ans2 }}</td>
                        <td>{{ $q->ans3 }}</td>
                        <td>{{ $q->ans4 }}</td>
                        <td><img width="100px" src="upload/images/{{ $q->correctAnswer }}"></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Question/delete/{{ $q->id }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Question/edit/{{ $q->id }}">Edit</a></td>
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