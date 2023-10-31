@extends('layout')

@section('title')
    Login
@endsection

@section('content')
<h1 class="font-bold text-blue-800 text-lg"></h1>
<div class="flex  items-center">
    <form action="/doLogin" method="POST">
        @csrf
    <div class="flex flex-col pt-5">
        
        
        <div class="flex flex-col pt-2">
            <label for="slug">E-mail</label>
            <input class="p1 px-2 border-blue-200" type="text" name="email" id="email" placeholder="E-mail"
            value="{{old("email")}}">
            @error('email')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="flex flex-col pt-2">
            <label for="slug">Password</label>
            <input class="p1 px-2 border-blue-200" type="password" name="password"  >
            @error('password')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        @error('login')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        <div class="flex mt-2  ">
            <input class="bg-green-400 p-2 text-white rounded" type="submit" value="Accedi">
        </div>
    </form>
    <span><a href="/register">o Registrati</a></span>
    

</div>
@endsection