@extends('layout')

@section('title')
    Commenta
@endsection

@section('content')
<h1 class="font-bold text-blue-800 text-lg"></h1>
<div class="flex  items-center">
    <form action="/comments/store/{{$article->id}}" method="POST">
        @csrf
    <div class="flex flex-col pt-5">
        <div class="flex flex-col pt-5">
            <label for="nome">
            <span class="">Commento</span></label>
            <input class="my-2 border-2 border-blue-800 rounded" type="text" name="content" id="content">         
        </div>
        <div class="flex flex-col pt-2">
            <label for="slug">Autore</label>
            <input class="my-2 border-2 border-blue-800 rounded" type="text" name="author" id="author">
            
        </div>
        <div class="flex mt-2  ">
            <input class="bg-green-400 p-2 text-white rounded" type="submit" value="Commenta">
        </div>
        
   
    </form>
    </div>
    </div>

</div>
@endsection