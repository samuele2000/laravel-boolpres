@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <a href="{{route('admin.posts.create')}}" class="btn border border-success text-success">New Post</a>
    </div>
    <div class="row" >
        @forelse ($posts as $post)
        <div class="card col-4 my-4" style="width: 18rem;">
            <img src="{{$post->image}}" class="card-img-top py-2" alt="...">
            <div class="card-body">
                @if( $post->category )
                    <span class="badge badge-{{$post->Category->color}} mb-3">{{$post->Category->label}}</span>
                @else
                    -    
                @endif    
                <div>
                    @forelse ($post->tags as $tag)
                        <span class="badge mb-3" style="background-color: {{$tag->color}}">{{$tag->label}}</span>
                    @empty
                        <span>-</span>
                    @endforelse
                </div>
                
                
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <div class="d-flex">
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn border border-primary text-primary">Show</a> 
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn border border-danger text-danger ml-2" type="submit">Delete</button> 
                    </form> 
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn border border-warning text-warning ml-2">Edit</a> 
                </div>
                
            </div>
        </div>
        @empty
        <h1>Non ci sono post</h1>
        @endforelse
    </div>

    

</div>
@endsection
