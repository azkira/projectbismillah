@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>

  <div class="card mb-3">
    <h6 class="card-header">
      <span class="fas fa-user fa-fw" aria-hidden="true"></span>
      <span class="mx-1">{{ $user->name }}</span></h6>
      <div class="card-body p-0">
        <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <img class="img-fluid img-thumbnail" src="/images/{{ Auth::user()->avatar }}" alt="Nothing Here">
          <form action="/profile" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="avatar"/>
            <input type="submit" value="save"/>
          </form>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <div class="row m-0 py-1 px-0">
            <div class="col-lg-3 col-xl-2">ID:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $user->id }}
            </div>
          </div>
          <div class="row m-0 py-1 px-0 border-top">
            <div class="col-lg-3 col-xl-2">NAME:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $user->name }}
            </div>
          </div>
          <div class="row m-0 py-1 px-0 border-top">
            <div class="col-lg-3 col-xl-2">EMAIL:</div>
            <div class="col-lg-9 col-xl-10"> 
              {{ $user->email }}
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="card mb-3">
      <h6 class="card-header d-flex align-items-center py-2">
        <span class="fas fa-book" aria-hidden="true"></span>
        <span class="mx-1">Published Book</span></h6>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Book ID</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Publisher</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr>
              <td>{{ $book->id }}</td>
              <td>{{ $book->title }}</td>
              <td>{{ $book->author }}</td>
              <td>{{ $book->publisher }}</td>
              <td><form action="{{ route('user.delete') }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger"></button>
                </form></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection