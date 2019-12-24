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
                        <th>Lesson</th>
                        <th>New Word </th>
                        <th>Translate </th>
                        <th>Spelling </th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newWord as $n)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $n->id }}</td>
                        <td>{{ $n->lesson->title }}</td>
                        <td>{{ $n->name }}</td>
                        <td class="description">{{ $n->translate }}</td>
                        <td>{{ $n->spelling }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/NewWord/delete/{{ $n->id }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/NewWord/edit/{{ $n->id }}">Edit</a></td>
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