@extends('layouts.app')

@section('content')

<div class="text-center" style="width: 80%; margin: 0 auto;">
    <img src="{{asset("storage/$post->image")}}" alt="{{$post->title}}">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->description}} {{$post->description}} {{$post->description}} {{$post->description}}</p>
</div>

@endsection
