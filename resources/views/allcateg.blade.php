@extends('layouts.app')

@section('content')
<div class="card mb-3">
  <h6 class="card-header d-flex align-items-center py-2" >
    <span class="mx-1"> <a href="/sort"> Sort by Alphabet</a></span></h6>
</div>
<div class="row row-cols-1 row-cols-md-4">
  @foreach ($books as $book)
  <div class="col mb-5">
    <div class="card h-100">
      <img src="/img/{{ $book->id }}.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <a href="/books/{{ $book->id }}" class="btn btn-dark float-left">Open</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection