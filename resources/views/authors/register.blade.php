@extends('layout')

@section('title')
    Regirer
@endsection

@section('content')
<h1 class="font-bold text-blue-800 text-lg"></h1>
<div class="flex  items-center">
    <form action="/doRegister" method="POST">
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
            @error('surname')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="slug">E-mail</label>
            <input class="p1 px-2 border-blue-200" type="text" name="email" id="email" placeholder="e-mail"
            value="{{old("email")}}">
            @error('email')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="password">Password</label>
            <input class="p1 px-2 border-blue-200" type="password" name="password" id="password" >
            @error('password')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2">
            <label for="password_confirmation">Conferma Password</label>
            <input class="p1 px-2 border-blue-200" type="password" name="password_confirmation" id="password_confirmation" placeholder="password">
            @error('password_confirmation')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex mt-2  ">
            <input class="bg-green-400 p-2 text-white rounded" type="submit" value="Sign in">
        </div>
        <span><a href="/register">o Log in</a></span>
        
   
    </form>
    </div>
    </div>

</div>
@endsection