@extends('layouts/admin')
@section('content');
<div class="container" style="min-height:65vh;">
  <div class="row g-1">

    <div class="col-lg-4">
      <a href="{{url('museum/index')}}" class="dashboard-link">
      <i class="bi bi-bank2"></i> &nbsp; 
        Manage Museums
      </a>
    </div>

    <div class="col-lg-4">
      <a href="{{url('comment/index')}}" class="dashboard-link">
      <i class="bi bi-chat-right-text-fill"></i> &nbsp; 
        Manage Comments
      </a>
    </div>

    <div class="col-lg-4">
      <a href="{{url('user/list')}}" class="dashboard-link">
      <i class="bi bi-people"></i> &nbsp; 
        Manage Users
      </a>
    </div>
    
  </div>
  <div class="row g-1 mt-5">

    <div class="col-lg-4">
      <a href="{{url('user/logout')}}" class="dashboard-link">
      <i class="bi bi-box-arrow-right"></i> &nbsp; 
        Logout
      </a>
    </div>
  </div>

</div>
@endsection
