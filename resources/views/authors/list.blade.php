@extends('layout')

@section('content')
<div class="flex justify-between items-center">
    <h1 class="font-bold text-blue-800 text-lg">Lista Authori</h1>
    <a class="bg-blue-500 text-white rounded" href="/authors/new">Aggiungi authore</a>
</div>
<div class="flex-row justify-center mt-10">
      
    @foreach ($authors as $author)
    <div class="py-8  font-extrabold">         
        <a href="/authors/{{$author->id}}/articles"> {{$author->name}} {{$author->surname}} </a>
        <a class="bg-blue-400 font-normal text-white"
         href="/authors/edit/{{ $author->id }}">Modifica
        </a>
    </div> 
    @endforeach
</div>
@endsection