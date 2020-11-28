@extends('layouts.app')
@section('title', 'Psychology')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/allcateg">Categories</a></li>
    <li class="breadcrumb-item active" aria-current="page">Psychology</li>
  </ol>
</nav>

<div class="card mb-3">
  <h6 class="card-header d-flex align-items-center py-2">
    <span class="fas fa-filter" aria-hidden="true"></span>
    <span class="mx-1">Filter</span></h6>
  <div class="card-body">
    <ul class="nav">
      <li class="nav-item">
        <span class="mx-3"> <a href="/psychology/alphabetsort"> <i class="fas fa-sort"> A-Z</i></a></span>
      </li>
      <li class="nav-item">
        <span class="mx-3"> <a href="/psychology/reversesort"> <i class="fas fa-sort"> Z-A</i></a></span>
      </li>
      <li class="nav-item">
        <span class="mx-3"> <a href="/psychology"> <i class="fas fa-sort"> Default</i></a></span>
      </li>
    </ul>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-4">
  @foreach ($books as $book)
  <div class="col mb-5">
    <div class="card h-100">
      <img src="/img/{{ $book->image }}" class="card-img-top" style="height: 350px; width: auto;" alt="...">
      <div class="card-body flex-column d-flex">
        <h5 class="card-title">{{ $book->title }}</h5>
        <a href="/books/{{ $book->id }}" class="btn btn-dark float-left mt-auto">Open</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection