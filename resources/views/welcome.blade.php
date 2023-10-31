@extends('layout')

@section('content')
    <div class="flex flex-row w-full mx-0">
        @foreach ($categories as $category)
            <div class="basis-1/3 bg-black border-t border-white  ">
                <span class="flex h-6 font-light justify-center text-white uppercase">{{ $category->name }}</span>
            </div>
        @endforeach
    </div>
    
    <div class="flex-row justify-center mt-10">
        {{-- @foreach ($articles as $article)
        <form action="articles/delete/{{$article->id}}" method="POST">
            @csrf
            <div class="py-8  font-extrabold">
                <h2 class="mr-auto"><a href="articles/detail/{{$article->slug}}/{{$article->id}}">{{$article->title}}</a> </h2>
                <a class="bg-blue-400 font-normal text-white rounded" href="articles/edit/{{ $article->id }}">Modifica</a>

                @method('DELETE')
            <input type="submit" class="bg-blue-500 text-white font-normal rounded" value="elimina">
            </div>
        </form> --}}
        <div class="w-full">
        @foreach ($articlesByCategory as $categoryName => $articles)
            <div class="w-full flex justify-center p-2">
                <span class="text-black text-center text-xl font-bold uppercase">{{ $categoryName }}</span>
            </div>
            <div class="flex justify-around w-full">
            @foreach ($articles as $article)
                <div class="w-52 h-72 bg-cover bg-center flex flex-row items-end" style="background-image: url('{{ asset($article->img) }}');" >
                    <div class="bg-black/50 w-52 h-16 px-3 content-center flex items-center">
                        <span class="text-l text-white inline-block align-middle font-bold hover:underline underline-offset-4">
                            <a href="/articles/detail/{{$article->slug}}/{{ $article->id }}">{{ $article->title }}</a></span>
                    </div>
                    {{-- <div class="h-8 bg-black/50 w-52 ">
                        <span class="text-m text-white font-bold">Leggi l'articolo</span>
                    </div> --}}
                </div>
             @endforeach
            </div>
                       
            @endforeach
        </div>    
    </div>
@endsection
