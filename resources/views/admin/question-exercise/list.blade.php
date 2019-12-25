@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Question Exercise
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div style="display: inline-block;">
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
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Exercise</th>
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
                        <td>{{ $q->exercise->title }}</td>
                        <td>{{ $q->question }}</td>
                        <td>{{ $q->ans1 }}</td>
                        <td>{{ $q->ans2 }}</td>
                        <td>{{ $q->ans3 }}</td>
                        <td>{{ $q->ans4 }}</td>
                        <td>{{ $q->correctAnswer }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                href="admin/QuestionExercise/delete/{{ $q->id }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/QuestionExercise/edit/{{ $q->id }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $question->links() }}
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