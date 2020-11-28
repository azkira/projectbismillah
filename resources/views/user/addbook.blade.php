@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upload</li>
  </ol>
</nav>

<div class="container">
  <form action="/addbook" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="inputTitle">Title</label>
      <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="inputTitle">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAuthor">Author</label>
        <input type="text " class="form-control" id="inputAuthor" placeholder="Author" name="inputAuthor">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPublisher">Publisher</label>
        <input type="text" class="form-control" id="inputPublisher" placeholder="Publisher" name="inputPublisher">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSynopsis">Synopsis</label>
      <textarea class="form-control" id="inputSynopsis" rows="3" name="inputSynopsis"></textarea>
    </div>
    <div class="form-group">
      <label for="inputType">Type</label>
      <input type="text" class="form-control" id="inputType" placeholder="Genre" name="inputType">
    </div>
    <label >choose image</label>
    <input type="file" name="image"/>
    <label >choose pdf</label>
    <input type="file" name="pdf"/>
    <div class="reset-button">
      <button type="submit" class="btn btn-primary btn-block">Upload</button>
    </div>
  </form>
</div>
@endsection