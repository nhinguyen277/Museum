@extends('layouts/admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">

    <?php if(session()->has('message')): ?>
    <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="text-danger w3-center w3-padding">
      <?= session()->get('message') ?>
    </div>
  </div>
<?php endif;?>
<h2>Manage Comments</h2>

<p class="pt-3"><a class="btn btn-secondary text-white" href="{{route('comment.create')}}"><i class="bi bi-plus-square"></i> &nbsp;Add New Comment</a></p>

<table class="table">
  <thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">User_Id</th>
    <th scope="col">Museum_Id</th>
    <th scope="col">Comment</th>
    <th scope="col">Date Added</th>
    <th scope="col">Edit Comment</th>
    <th scope="col">Delete</th>
  </tr>
  </thead>
  <tbody>
  @foreach($comments as $comment)
    <tr>
    <td>
        {{$comment->id}}
    </td>
      <td>{{$comment->user_id}}</td>
      <td>
      {{$comment->museum_id}}
    </td>
    <td>
        {{$comment->comment}}
    </td>
    <td>
        {{$comment->created_at}}
    </td>

    <td>
        <a class="btn btn-secondary text-white" href="{{route('comment.edit', $comment->id)}}"><i class="bi bi-body-text"></i> &nbsp;Edit</a>
    </td>
    <td>
        <a class="btn btn-secondary text-white" href="{{route('comment.trash', $comment->id)}}" onclick="javascript:confirm('Are you sure you want to delete this museum?');"><i class="bi bi-trash3"></i> &nbsp;Delete</i></a>
    </td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
  </div>
</div>
@endsection
