@extends('layouts/user')
@section('content');
<section>
    <div class="container-fluid">
      <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-3 fw-bold lh-1">Welcome to the Toronto Gallery Guide</h1>
            <p class="lead">Leave a review of your favourite museums and galleries in the city.</p>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a id="user/login" class="btn btn-outline-secondary btn-lg px-4" href="login" >Login</a>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
              <img class="rounded-lg-3" src="{{asset('uploads/museum-7409275_1280.jpg')}}" alt="" width="720">
          </div>
        </div>
      </div>
    </div>
  </section>
  <main>
    <div class="container">
      <div class="row p-3">
        <div class="col">
          <h2>Most Commented Museums</h2>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($museums as $museum) 
            <div class='col'>
              <div class='card h-100 d-flex flex-column'>
                  <img src="{{asset($museum->image)}} " class='card-img-top museum-image' alt='{{$museum->name}}'>
                  <div class='card-body'>
                    <h5 class='card-title'>{{$museum->name}}</h5>
                    <p class='card-text'>{{$museum->summary}}</p>
                  </div>
                  <div class='mt-auto'>
                  <form class='card-button p-3'>
                    <input type='hidden' value='{{$museum->id}}'>
                    <a class='btn btn-outline-dark' href="#">Museum Details</a>
                  </form>
                  </div>
                  <div class='card-footer'>
                  <p class='card-text'>Total Comments: {{$museum->comment_count}}</p>
                  <p class='card-text'>Most Recent Comment:{{$museum->latest_comment}}</p>
              </div>
              </div>
            </div>
            @endforeach
      </div>
    </div>
  </main>
 
  @endsection
