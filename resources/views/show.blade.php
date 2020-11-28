@extends('layouts.app')
@section('title', 'Read')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ $book->type }}">{{ $book->type }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $book->title }}</li>
  </ol>
</nav>

<div class="card mb-3">
    <h4 class="card-header">
      <span class="fas fa-book fa-fw" aria-hidden="true"></span>
      <span class="mx-1">{{ $book->title }}</span></h4>
      <div class="card-body py-2">
        <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <img class="card-img-top rounded mx-auto d-flex" style="height: 300px; width: auto;" src="/img/{{ $book->image }}" alt="Card image cap">
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <div class="row m-0 py-1 px-0">
            <div class="col-lg-3 col-xl-2">BOOK ID:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $book->id }}
            </div>
          </div>
          <div class="row m-0 py-1 px-0 border-top">
            <div class="col-lg-3 col-xl-2">TITLE:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $book->title }}
            </div>
          </div>
          <div class="row m-0 py-1 px-0 border-top">
            <div class="col-lg-3 col-xl-2">AUTHOR:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $book->author }}
            </div>
          </div>
          <div class="row m-0 py-1 px-0 border-top">
            <div class="col-lg-3 col-xl-2">PUBLISHER:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $book->publisher }}
            </div>
          </div>
          <div class="row m-0 py-1 px-0 border-top">
            <div class="col-lg-3 col-xl-2">SYNOPSIS:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $book->synopsis }}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="card mb-4">
  <div class="card-header">
    <button data-toggle="collapse" data-target="#open">
      <span class="fas fa-book-open fa-fw" aria-hidden="true"></span>
    <span class="mx-1">Read</span></h6>
    </button>
  </div>
  <div id="open" class="collapse card-body">
    <div class="embed-responsive embed-responsive-4by3">
      <iframe class="responsive-iframe" src="/pdf/{{ $book->pdf }}" frameborder="0"></iframe>
      </div>
  </div>
</div>

  <div class="card mb-4">
    <div class="card-header">
      <button data-toggle="collapse" data-target="#review">
        <span class="fas fa-comment" aria-hidden="true"></span>
        <span class="mx-1"> Reviews</span>
      </button>
      </div>
    <div id="review" class="collapse card-body">
      @foreach ($reviews as $review)
      <div class="row m-0 py-1 px-0 border-top border-bottom">
        <div class="col-lg-3 col-xl-2"><i class="fas fa-user"></i> {{ $review->person_name }}</div>
        <div class="col-lg-3 col-xl-2"><i class="fas fa-clock"></i> {{ date('H: i', strtotime($review->created_at)) }}</div>
        <div class="col-lg-3 col-xl-3"><i class="fas fa-calendar"></i> {{ date('F j, Y', strtotime($review->created_at)) }}</div>
        <div class="col-lg-9 col-xl-10"> 
          ->{{ $review->review_content }}
        </div>
      </div>
      @endforeach
      <form action="/books/{book}" method="post">
          <div class="form-group">
            <label for="InputWhich" id="InputWhich">BOOK ID</label>
            <input type="text" class="form-control" id="InputWhich" name="InputWhich">
          </div>
        <div class="form-group">
          <label for="InputReview" id="InputReview">Review</label>
          <textarea class="form-control" id="InputReview" name="InputReview" rows="3"></textarea>
        </div>
        <div class="reset-button">
          @csrf
          <button type="submit" class="btn btn-primary btn-block">Post</button>
        </div>
      </form>
    </div>
    </div>

    
@endsection

