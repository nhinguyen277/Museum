@extends('layouts/admin')
@section('content')
<?php if(session()->has('message')): ?>

  <div class="w3-padding w3-margin-top w3-margin-bottom">
    <div class="text-danger w3-center w3-padding">
      <?= session()->get('message') ?>
    </div>
  </div>
<?php endif;?>
<h2>Manage Users</h2>

<p class="pt-3"><a class="btn btn-secondary text-white" href="/user/add"><i class="bi bi-plus-square"></i> &nbsp;Add New User</a></p>

<table class="table">
  <thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Active</th>
    <th scope="col">Admin</th>
    <th scope="col">Edit User</th>
    <th scope="col">Delete User</th>
  </tr>
</thead>
<tbody>
@foreach($users as $user)
    <tr>
      <td>{{ $user -> id }}</td>
      <td>{{ $user -> fname }} {{ $user -> lname }}</td>
      <td><a href="mailto:{{ $user -> email }}'">{{ $user -> email }}</a></td>
      <td>
      {{ $user -> active }}
      </td>
      <td>
      {{ $user -> permission }}
      </td>
      <td><a class="btn btn-secondary text-white" href="/user/edit/{{$user->id}}"><i class="bi bi-body-text"></i> &nbsp;Edit</a></td>
      <td>
          <a class="btn btn-secondary text-white" href="/user/delete/{{$user->id}}" ><i class="bi bi-trash3"></i> &nbsp;Delete</a>
      </td>

    </tr>
    @endforeach
        </tbody>
</table>


</div>
  </div>
</div>
@endsection