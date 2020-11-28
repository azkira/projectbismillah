@extends('layouts.app')
@section('title', 'Search')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Search</li>
  </ol>
</nav>

<div class="row row-cols-1 row-cols-md-4">
  @foreach ($books as $book)
  <div class="col mb-5">
    <div class="card h-100">
      <img src="/img/{{ $book->image }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <a href="/books/{{ $book->id }}" class="btn btn-dark float-left">Open</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
