@extends('layouts.app')

@section('content')

  <div class="card mb-3">
    <h6 class="card-header d-flex align-items-center py-2">
      <span class="mx-1">{{ $user->name }}</span></h6>
      <div class="card-body p-0">
        <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <img class="img-fluid img-thumbnail" src="/images/{{ Auth::user()->avatar }}" alt="Nothing Here">
          <form action="/profile" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="avatar"/>
            <input type="submit" value="upload"/>
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
  </div>
  </div>
@endsection