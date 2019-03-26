@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
                @if (Auth::check())
                        <h2>Wel Blogs</h2>
                        <a href="/task" class="task fa">Add new Post</a>
                        <table class="table">
                            <thead><tr>
                            </tr>
                        </thead>
                        <tbody>@foreach($user->tasks as $task)
                            <tr style="border-bottom: 1px solid #dee2e6;border-top: 1px solid #dee2e6;">
                                <td>
                                 <p><strong>Post Title:</strong>   <a href="/task/{{ $task->id }}">{{$task->title}}</a></p>

                                       <a href="/task/{{ $task->id }}" class="task fa fa-edit"> Edit Post</a>
                                  <p><strong>Post Description:</strong>   {{$task->description}}</p>

                                   <a href="/task/{{ $task->id }}" id='delete'class="task fa fa-edit"> Delete Post</a>

               {{--                      <form action="/task/{{$task->id}}">

                                        <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                        {{ csrf_field() }}

                                    </form> --}}

                                    </td>
                             </tr>
                        @endforeach
                      </tbody>
                        </table>
             @else
              @include('frontend.home')
             @endif
</div>
</div>
<div class="col-lg-3">

</div>
</div>
@endsection
