@extends('layout')

@section('title')
    Crea
@endsection

@section('content')
<h1 class="font-bold text-blue-800 text-lg"></h1>
<div class="flex  items-center">
    <form action="/authors/store" method="POST">
        @csrf
    <div class="flex flex-col pt-5">
        <div class="flex flex-col pt-2">
            <label for="nome">Nome</label>
            <input class="p1 px-2 border-blue-200" type="text" name="name" id="name" placeholder="Nome"
            value="{{old("name")}}"> {{--me lo mantiene quando da errore--}}
            @error('name')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="slug">Cognome</label>
            <input class="p1 px-2 border-blue-200" type="text" name="surname" id="surname" placeholder="Ingnazio il surname">
            @error('name')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex mt-2  ">
            <input class="bg-green-400 p-2 text-white rounded" type="submit" value="Crea">
        </div>
        
   
    </form>
    </div>
    </div>

</div>
@endsection