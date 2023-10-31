@extends('layout')

@section('title')
    Crea
@endsection

@section('content')
<h1 class="font-bold text-blue-800 text-lg">Crea articolo</h1>
<div class="flex  items-center">
    <form action="/articles/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col pt-2">
            <label for="title">Titolo</label>
            <input class="p1 px-2 border-blue-200" type="text" name="title" id="title" placeholder="titolo"
            value="{{old("title") }}"> {{--me lo mantiene quando da errore--}}
            @error('title')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="slug">Slug</label>
            <input class="p1 px-2 border-blue-200" type="text" name="slug" id="slug" placeholder="Slug">
            @error('Slug')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="content">Content</label>
            <textarea class="p1 px-2 border-blue-200" type="text" name="content" id="content" placeholder="testo"></textarea>
            @error('Content')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="category">Categoria:</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col pt-2">
            <label for="author">Autore:</label>
            <select name="author_id" id="author_id">
                @foreach ($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col pt-2">
            <label for="content">Immagine</label>
            <input class="p1 px-2 border-blue-200" type="file" name="img" id="immage" placeholder="Immagine">
            @error('Content')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex mt-2">
            <input class="bg-green-400 p-2 mt-4 text-white rounded" type="submit" value="Crea">
        </div>
   
    </form> 
</div>
@endsection