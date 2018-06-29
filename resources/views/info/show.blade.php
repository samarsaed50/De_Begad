@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:40px; width:80%;">
<div class="card">
<div class="card-header text-center">
Info
</div>
<div class="card-body">
<p>
<span class="card-title font-weght-bold">
Title:-
</span>{{$info->title}}
</p>
<p>
<span class="card-title font-weght-bold">
Title:-
</span>{{$info->title}}
</p>
<p>
<span class="card-title font-weght-bold">
Details:-
</span>{{$info->description}}
</p>
<p>
<span class="card-title font-weght-bold">
Image:-
</span><img src="/storage/images/{{$info->image}}"/>
</p>
<p>
<span class="card-title font-weght-bold">
Author:-
</span>{{$info->user->name}}
</p>
<p>
<span class="card-title font-weght-bold">
Category:-
</span>{{$info->category->name}}
</p>
</div>
</div>
</div>
@endsection