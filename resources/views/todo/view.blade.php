@extends('layout.app')

@section('title','{{$todo->todo_title}}')
@section('body')
    <br>

    <div class="col-log-12">
        <h2><strong>Title:</strong> {{$todo->todo_title}}</h2>
        <h4><strong>ToDo: </strong>
        <p>{{$todo->todo_content}}</p>
        <h4><strong>Created at: </strong></h4> <p>{{$todo->created_at->diffForHumans()}}</p>
    </div>
    <a href="/todo" class="btn btn-primary">Back</a>
@endsection
