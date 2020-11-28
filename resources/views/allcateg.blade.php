@extends('layouts.app')
@section('title', 'All Categories')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Categories</li>
  </ol>
</nav>

<div class="container">
  <div class="card-deck my-2">
    <div class="card">
      <img class="card-img-top" src="/img/categ.jpg" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Novels</h2>
        <p class="card-text">A novel is a relatively long work of narrative fiction, normally written in prose form, and which is typically published as a book.</p>
      </div>
      <div class="card-footer flex-column d-flex">
        <a href="/novels" class="btn btn-dark float-left mt-auto">Go</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="/img/categ.jpg" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Philosophy</h2>
        <p class="card-text">Philosophy s the study of general and fundamental questions, such as those about existence, knowledge, values, reason, mind, and language. Such questions are often posed as problems</p>
      </div>
      <div class="card-footer flex-column d-flex">
        <a href="/philosophy" class="btn btn-dark float-left mt-auto">Go</a>
      </div>
    </div>
  </div>

  <div class="card-deck my-2">
    <div class="card">
      <img class="card-img-top" src="/img/categ.jpg" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Comics</h2>
        <p class="card-text">Comics is a medium that expresses narratives or other ideas using a series of still images, usually combined with text.</p>
      </div>
      <div class="card-footer flex-column d-flex">
        <a href="/comics" class="btn btn-dark float-left mt-auto">Go</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="/img/categ.jpg" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Psychology</h2>
        <p class="card-text">Psychology is the science of mind and behavior. Psychology includes the study of conscious and unconscious phenomena, as well as feeling and thought.</p>
      </div>
      <div class="card-footer flex-column d-flex">
        <a href="/psychology" class="btn btn-dark float-left mt-auto">Go</a>
      </div>
    </div>
</div>
@endsection
