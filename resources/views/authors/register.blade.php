@extends('layout')

@section('title')
    Regirer
@endsection

@section('content')
<div class="flex flex-col items-center">
    <h1 class="font-bold text-black text-2xl mt-5"> Sign in </h1>
    <form action="/doRegister" method="POST">
        @csrf
    <div class="flex flex-col items-center mt-5 p-5 rounded bg-neutral-700">
        
        <div class="flex flex-col pt-2  text-white">
            <label for="nome">Nome</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white" 
            type="text" name="name" id="name" placeholder="Nome"
            value="{{old("name")}}"> {{--me lo mantiene quando da errore--}}
            @error('name')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2  text-white">
            <label for="slug">Cognome</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white"
            type="text" name="surname" id="surname" placeholder="Ingnazio il surname">
            @error('surname')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2  text-white">
            <label for="slug">E-mail</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white" 
            type="text" name="email" id="email" placeholder="e-mail"
            value="{{old("email")}}">
            @error('email')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2  text-white">
            <label for="password">Password</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white" 
            type="password" name="password" id="password" >
            @error('password')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-col pt-2  text-white">
            <label for="password_confirmation">Conferma Password</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white" 
            type="password" name="password_confirmation" id="password_confirmation" placeholder="password">
            @error('password_confirmation')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex  mt-5">
            <input class="bg-slate-200 rounded text-base font-bold text-black rounded p-2" 
            type="submit" value="Sign in">
        </div>
    </div>
    <span class="text-sm ">Already have an account?<a class="font-bold" href="/login"> Log in</a></span>
    </form>

</div>
@endsection