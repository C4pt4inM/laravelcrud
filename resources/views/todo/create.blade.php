@extends('layout.app')

@section('title','Create New Todo')

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
    <form class="form-horizontal" action="/todo" method="post">
    {{csrf_field()}}
  <fieldset>
    <legend>Create new Todo</legend>
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="todo_title" id="inputTitle" placeholder="Title">
      </div>
    </div>
   
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">To-do What?</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="todo_content"></textarea>
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
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
@endsection