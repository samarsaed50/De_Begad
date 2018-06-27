@extends('layouts.app')
@section('content')
<div class="container">
<h1>All info</h1>
<a class="btn btn-success" href="{{route('info.create')}}">Create Info</a>
<div class="row justify-content-center"> 
<div class="col-md-11">
<div class="card">
<div class="card-header text-center">Recent Info</div>
<div class="card-body">
       @foreach($info as $component) 
       <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <strong class="d-block text-gray-dark">{{  $component->user->name }}</strong>
                       <a href="/info/{{ $component->id }}">{{ $component->title }}</a>
                    </p>
                </div>         
       @endforeach           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection