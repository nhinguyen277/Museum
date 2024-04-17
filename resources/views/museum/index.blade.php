@extends('layouts/admin')
@section('content')
<?php if(session()->has('message')): ?>

<div class="w3-padding w3-margin-top w3-margin-bottom">
  <div class="text-danger w3-center w3-padding">
    <?= session()->get('message') ?>
  </div>
</div>
<?php endif;?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">

  <h2>Manage Museums</h2>

  <p class="p-3"><a class="btn btn-secondary text-white" href="add"><i class="bi bi-plus-square"></i>&nbsp; Add New Museum</a></p>

  <table class="table">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Summary</th>
      <th scope="col">Edit Museum</th>
      <th scope="col">Delete Museum</th>
    </tr>
  </thead>
  <tbody>
  @foreach($museums as $museum)
      <tr>
        <td>{{$museum->id}}</td>
        <td>
          <img src="{{asset($museum->image)}}" style="max-width:100px;">
        </td>
        <td>
          {{$museum->name}}
      </td>
      <td>
          {{$museum->type}}
      </td>
      <td>
          {{$museum->summary}}
      </td>
      <td>
          <a class="btn btn-secondary text-white" href="edit/{{$museum->id}}"><i class="bi bi-body-text"></i> &nbsp;Edit</a>
      </td>
      <td>
          <a class="btn btn-secondary text-white" href="delete/{{$museum->id}}" onclick="javascript:confirm('Are you sure you want to delete this museum?');"><i class="bi bi-trash3"></i> &nbsp;Delete</i></a>
      </td>
      </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>
  </div>
  @endsection