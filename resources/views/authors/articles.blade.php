@extends('layout')

@section('content')
<div class="flex justify-between items-center">
    <h1 class="font-bold text-blue-800 text-lg">Lista articoli di {{$author->name}}</h1>
    <a class="bg-blue-500 text-white rounded" href="articles/create">Crea articolo</a>
</div>
<div class="flex-row justify-center mt-10">
        @foreach ($articles as $article)
        <form action="articles/delete/{{$article->id}}" method="POST">
            @csrf
            <div class="py-8  font-extrabold">
                <h2 class="mr-auto"><a href="articles/detail/{{$article->slug}}">{{$article->title}}</a> </h2> 
                <a class="bg-blue-400 font-normal text-white rounded" href="articles/edit/{{ $article->id }}">Modifica</a>
            
                @method('DELETE')
            <input type="submit" class="bg-blue-500 text-white font-normal rounded" value="elimina">
            </div>
        </form>
            
        @endforeach
</div>
@endsection