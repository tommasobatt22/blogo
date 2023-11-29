@extends('layout')

@section('title')
    Login
@endsection

@section('content')
<div class="flex flex-col items-center">
    <h1 class="font-bold text-black text-2xl mt-5"> Log in </h1>
    <form action="/doLogin" method="POST">
        @csrf
    <div class="flex flex-col items-center mt-5 p-5 rounded bg-neutral-700">
        
        <div class="flex flex-col pt-2 text-white ">
            <label for="Email">E-mail</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white" 
            type="text" name="email" id="email" placeholder="E-mail"
            value="{{old("email")}}">
            @error('email')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="flex flex-col pt-2 text-white ">
            <label for="slug">Password</label>
            <input class="m-2 px-1 bg-neutral-700 border border-transparent border-b-white" 
            placeholder="Password" type="password" name="password"  >
            @error('password')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        </div>
        @error('login')
                <span class="font-bold text-red-500">{{$message}}</span>
            @enderror
        <div class="flex  mt-5">
            <input class="bg-slate-200 rounded text-base font-bold text-black rounded p-2" 
            type="submit" value="Log in">
        </div>
    </div>    
    <span class="text-sm ">No account?<a class="font-bold" href="/register"> Sign in!</a></span>
    </form>
    

</div>
@endsection