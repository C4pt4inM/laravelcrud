@extends('layout.app')

@section('title','Files')
@section('body')
    <br>

    <div class="col-log-12">
        <center><h1>Todo Lists</h1></center>
         <ul class="list-group">
        @foreach($todos as $todo)
             <li class="list-group-item clearfix">
                <span class="list-group-item-heading" style="font-size:25px">{{$todo->todo_title}}</span>
                <span class="pull-right">
                    <span style="padding-right:20px">{{$todo->created_at->diffForHumans()}}</span>
                    <a href="todo/{{$todo->id}}" class="btn  btn-info">View</a>
                    <a href="todo/{{$todo->id}}/edit" class="btn  btn-primary">Edit</a>
                    <a href="todo/{{$todo->id}}" class="btn  btn-danger">Delete</a>
                </span>
            </li>
        @endforeach
       
        </ul>
    </div>
@endsection
