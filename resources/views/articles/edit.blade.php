@extends('layout')

@section('title')
   Modifica
@endsection

@section('content')
<h1 class="font-bold text-blue-800 text-lg">Modifica articolo</h1>
<div class="flex  items-center">
    <form action="/articles/{{$article->id}}" method="POST">
        @csrf
    <div class="flex flex-col pt-5">
        <div class="flex flex-col pt-2">
            <label for="title">Titolo</label>
            <input class="p1 px-2 border-blue-200" type="text" name="title" id="title" placeholder="titolo"
            value="{{ old("title") ? old('title') : $article->title }}" > {{----}}
            @error('title')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
            

        </div>
        <div class="flex flex-col pt-2">
            <label for="slug">Slug</label>
            <input class="p1 px-2 border-blue-200" type="text" name="slug" id="slug" placeholder="Slug" 
            value="{{$article->slug}}">
            @error('title')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="content">Content</label>
            <textarea class="p1 px-2 border-blue-200" type="text" name="content" id="content" placeholder="testo"
            value="">{{$article->content}}</textarea>
            @error('title')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div>
            <select name="author_id" id="author">
                @foreach ($authors as $author)
                    <option {{($author->id == $article->author->id)? "selected" : "" }} value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex mt-2  ">
            <input class="bg-blue-400 p-2 text-white rounded" type="submit" value="Modifica">
        </div>
   
    </form>
    </div>
    </div>

</div>
@endsection