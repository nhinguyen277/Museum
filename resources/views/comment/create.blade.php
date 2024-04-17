@extends('layouts/admin')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12">


<h2>Add Comment</h2>

<p class="pt-3"><a class="btn btn-secondary text-white" href="{{url('comment/index')}}"><i class="bi bi-arrow-bar-left"></i> Return to Comments List</a></p>

<form method="post" action="{{ route('comment.store') }}">
{{csrf_field()}}
  <input type="hidden" name="id" id="id">
  
  <label class="form-label" for="user_id">User Name:</label>
  <select class="form-select" name="user_id" id="user_id" required>
        <option value="" disabled selected>-- select a User --</option>
        @foreach ($users as $user)
            <option value="{{ $user -> id }}">
                {{ $user -> fname }} {{$user->lname}}
            </option>
        @endforeach
    </select>
    <?php if($errors->first('user_id')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('user_id')?></span>
        <?php endif;?>
  <br>
  
  <label class="form-label" for="museum_id">Museum Name:</label>
  <select class="form-select" name="museum_id" id="museum_id" required>
        <option value="" disabled selected>-- select a Museum --</option>
        @foreach ($museums as $museum)
            <option value="{{ $museum -> id }}">
                {{ $museum -> name }}
            </option>
        @endforeach
    </select>
    <?php if($errors->first('museum_id')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('museum_id')?></span>
        <?php endif;?>
  <br>
  <label class="form-label" for="comment">Comment:</label>
  <input class="form-control" type="text" name="comment" id="comment" required>
  <?php if($errors->first('comment')): ?>
        <br>
        <span class="text-danger"><?= $errors->first('comment')?></span>
        <?php endif;?>
  
  <br>
  
  <input class="btn btn-secondary text-white" type="submit" value="Add Comment">
  
</form>
</div>
  </div>
</div>
@endsection
