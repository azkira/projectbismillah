@extends('layouts.app')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($posts as $row)
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5><a href="{{ url('/' . $row->slug) }}" style="text-decoration: none">{{ \Str::limit($row->title, 100) }}</a></h5>
                                        <p>{!! $row->content !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection