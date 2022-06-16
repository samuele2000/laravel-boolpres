@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            <small id="title" class="form-text text-muted">Modifica il titolo</small>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="ml-3 bg-transparent border-0" name="category_id" id="category">

                @foreach ($categories as $category)
                <option @if( old('category_id', $post->category_id) == $category->id) selected @endif
                    value="{{$category->id}}">{{$category->label}}</option>
                @endforeach

                <option value="">Nessuna</option>
            </select>
            <small id="title" class="form-text text-muted">Inserisci una categoria</small>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" id="description"
                name="description">{{old('description', $post->description)}}</textarea>
            <small id="description" class="form-text text-muted">Modifica la descrizione</small>
        </div>
        {{-- <div class="form-group">
            <label>Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
            <small id="image" class="form-text text-muted">Modifica l'Url dell'immagine</small>
        </div> --}}

        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control-file " id="image" name="image">
            <small id="image" class="form-text text-muted">Scegli un file</small>
        </div>

        @foreach ($tags as $tag)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}" @if( in_array($tag->id, old('tags', $post_tag_id)) ) checked @endif>
            <label class="form-check-label" for="inlineRadio1">{{$tag->label}}</label>
        </div>
        @endforeach
        <small id="tag-{{$tag->id}}" class="form-text text-muted"> Modifica i tags</small>

        <div>
          <button type="submit" class="btn border border-warning text-warning">Submit</button>
        </div>
        
    </form>
</div>

@endsection
