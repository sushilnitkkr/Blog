@extends('layouts.app')
@section('content')
<div class="container">
                <h2>Add New Post</h2>
<form method="POST" action="/task">
    <div class="form-group">
    	<div>
    		Post Title: <input name="title" class="form-control"></input>
    	</div>
      Post Description: <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish Post</button>
    </div>
{{ csrf_field() }}
</form>
</div>
@endsection
