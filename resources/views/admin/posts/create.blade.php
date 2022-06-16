@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="title" name="title">
            <small id="title" class="form-text text-muted">Inserisci il titolo</small>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="ml-3 bg-transparent border-0" name="category_id" id="category_id">
                <option value="1">Film</option>
                <option value="2">Tech</option>
                <option value="3">Lifestyle</option>
                <option value="4">Photo</option>
                <option value="">Nessuna</option>
            </select>
            <small id="title" class="form-text text-muted">Inserisci una categoria</small>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
            <small id="description" class="form-text text-muted">Inserisci la descrizione</small>
        </div>
        {{-- <div class="form-group">
            <label>Image</label>
            <input type="text" class="form-control" id="image" name="image">
            <small id="image" class="form-text text-muted">Inserisci l'Url dell'immagine</small>
        </div> --}}

        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control-file " id="image" name="image">
            <small id="image" class="form-text text-muted">Scegli un file</small>
        </div>


        <label>Tags</label><br>

        @foreach ($tags as $tag)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}">
            <label class="form-check-label" for="inlineRadio1">{{$tag->label}}</label>
        </div>
        @endforeach
        <small id="image" class="form-text text-muted">Inserisci i tags</small>


        <div>
            <button type="submit" class="btn border border-success text-success mt-3">Crea</button>
        </div>
    </form>
</div>

@endsection
