@extends('layouts.app')
@section('content')
	<div class="container">
	<h1>Edit the Post</h1>
<form method="POST" action="/task/{{ $task->id }}">
	<div class="form-group">
        Post Title: <input name="title" class="form-control" value=" {{$task->title}}"></input><br>
		Post Description: <textarea name="description" class="form-control">{{$task->description }}</textarea>
	</div>
	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update post</button>
	</div>
{{ csrf_field() }}
</form>
</div>
@stop
