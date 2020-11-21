@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Review</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/pdf/{{ $book->id }}.pdf">Read Now</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
      <div class="col-lg-4"><img class="card-img-top" style="height: 200px; width: auto;" src="/img/{{ $book->id }}.jpg" alt="Card image cap"></div>
      <div class="col-lg-8">
        <h5 class="card-title text-justify">{{ $book->title }}</h5>
        <h6 class="card-title text-justify">{{ $book->author }}</h6>
        <h6 class="card-title text-justify">{{ $book->publisher }}</h6>
    <p class="card-text text-justify">
      {{ $book->synopsis }}
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="col-sm-12">
      <ul>
        <li><a href=""><i class="fa fa-user"></i>Azkira</a></li>
      </ul>
      <p>Great Book!</p>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
      <div class="form-group">
        <div class="form-group">
          <label for="comment">Review:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div> 
        @csrf
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </div>
</div>
@endsection


