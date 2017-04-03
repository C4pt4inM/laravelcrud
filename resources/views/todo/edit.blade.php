@extends('layout.app')

@section('title', $todo->todo_title )

@section('body')
    @if(count($errors)>0)
        <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oh snap!</strong>
        <br>
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
        
    @endif
    
    <br>
    <form class="form-horizontal" action="/todo/{{$todo->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
        <fieldset>
            <legend>Edit Todo</legend>
            <div class="form-group">
            <label for="inputTitle" class="col-lg-2 control-label">Title</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="todo_title" id="inputTitle" placeholder="Title" value="{{$todo->todo_title}}">
            </div>
            </div>
        
            <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">To-do What?</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea" name="todo_content" >{{$todo->todo_content}}</textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-2 control-label">Important?</label>
            <div class="col-lg-10">
                <div class="radio">
                <label>
                    <input type="radio" name="todo_importance" id="optionsRadios1" value="yes" checked="">
                    Yes!
                </label>
                </div>
                <div class="radio">
                <label>
                    <input type="radio" name="todo_importance" id="optionsRadios2" value="no">
                    Not Important !
                </label>
                </div>
            </div>
            </div>
            <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <a href="/todo" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
            </div>
        </fieldset>
     </form>
@endsection