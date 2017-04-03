@extends('layout.app')

@section('title','Files')
@section('body')
    <br>
    @if(session()->has('udmess'))
        <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{session()->get('udmess')}}</p>
        </div>   
    @endif
    @if(session()->has('delmess'))
        <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{session()->get('delmess')}}</p>
        </div>   
    @endif

    <div class="col-log-12">
        <center><h1>Todo Lists</h1></center>
         <ul class="list-group">
        @foreach($todos as $todo)
             <li class="list-group-item clearfix">
                <span class="list-group-item-heading" style="font-size:25px">{{$todo->todo_title}}</span>
                <span class="pull-right">
                    <span style="padding-right:20px">Created: {{$todo->created_at->diffForHumans()}}</span>
                     <span style="padding-right:20px">Updated: {{$todo->updated_at->diffForHumans()}}</span>
                    <a href="todo/{{$todo->id}}" class="btn  btn-info">View</a>
                    <a href="todo/{{$todo->id}}/edit" class="btn  btn-primary">Edit</a>
                    <button class="btn  btn-danger" data-toggle='modal' data-target='#myModal'>Delete</button>

                             <!-- Modal -->
                            <div id='myModal' class='modal fade' role='dialog'>
                            <div class='modal-dialog'>
                                <form action ="/todo/{{$todo->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <!-- Modal content-->
                                    <div class='modal-content'>
                                    <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        <h4 class='modal-title'>Are you sure?</h4>
                                    </div>
                                    <div class='modal-body'>
                                        <p>Are you sure to want to delete this todo?.</p>
                                        <p><strong>Title:</strong> {{$todo->todo_title}}</p>
                                        <p><strong>Content:</strong> {{$todo->todo_content}}</p>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                    </div>
                                    </div>
                                </form>

                            </div>
                            </div>

                </span>
            </li>
        @endforeach
       
        </ul>
    </div>
@endsection
