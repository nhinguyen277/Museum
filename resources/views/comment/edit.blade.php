@extends('layouts/admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">


<h2>Add Comment</h2>

<p class="pt-3"><a class="btn btn-secondary text-white" href="{{url('comment/index')}}"><i class="bi bi-arrow-bar-left"></i> Return to Comments List</a></p>

<form method="post" action="{{ route('comment.update', $comment->id) }}">
@method('PUT')
@csrf
  <input type="hidden" name="id" id="id">
  
  <label class="form-label" for="user_id">User Name:</label>
  <select class="form-select" name="user_id" id="user_id">
        <option value="" disabled>-- select a User --</option>
        @foreach ($users as $user)
            <option value="{{ $user -> id }}"
                @if($user->id == $comment->user_id)
                selected
                @endif>
                {{ $user -> fname }} {{$user->lname}}
            </option>
        @endforeach
    </select>
  
  <br>
  
  <label class="form-label" for="museum_id">Museum Name:</label>
  <select class="form-select" name="museum_id" id="museum_id">
        <option value="" disabled>-- select a Museum --</option>
        @foreach ($museums as $museum)
            <option value="{{ $museum -> id }}">
                @if($museum->id == $comment->museum_id)
                selected
                @endif
                {{ $museum -> name }}
            </option>
        @endforeach
    </select>
  
  <br>
  <label class="form-label" for="comment">Comment:</label>
  <input class="form-control" type="text" name="comment" id="comment" value="{{$comment->comment}}">
  
  <br>
  
  <input class="btn btn-secondary text-white" type="submit" value="Edit Comment">
  
</form>
</div>
  </div>
</div>
@endsection
