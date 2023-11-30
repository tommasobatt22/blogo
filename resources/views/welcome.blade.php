@extends('layout')


@section('content')
<div class="flex flex-row w-full mx-0">
    @foreach ($categories as $category)
    <div class="basis-1/3 bg-black border-t border-white  ">
        <span class="flex h-6 font-light justify-center text-white uppercase">{{ $category->name }}</span>
    </div>
    @endforeach
</div>

@include('carousel')
    <div class="flex-row justify-center mt-5 z-10">
        
        <div class="w-full bg-black">
        @foreach ($articlesByCategory as $categoryName => $articles)
            <div class="w-full flex justify-start p-10">
                <span class="text-white text-3xl font-extrabold uppercase">{{ $categoryName }}</span>
            </div>
            <div class="flex justify-around w-full ">
            @foreach ($articles as $article)
                <div class="w-52 h-72 bg-cover bg-center flex flex-row items-end 
                transition duration-700 ease-in-out hover:scale-110" 
                style="background-image: url('{{ asset($article->img) }}');" >
                    <div class="bg-black/50 w-52 h-16 px-3 content-center flex items-center">
                        <span class="text-l text-white inline-block align-middle font-bold hover:underline underline-offset-4">
                            <a href="/articles/detail/{{$article->slug}}/{{ $article->id }}">{{ $article->title }}</a>
                        </span>
                    </div>
                </div>
             @endforeach
            <div class="flex items-center ">
                <div class="w-16 h-16 rounded-full  align-center 
                flex items-center justify-center
                transition duration-700 hover:bg-white">
                    <p class="uppercase font-light text-l"><a href="#">More</a></p>
                </div>
            </div>
            </div>
                       
            @endforeach
        </div>    
    </div>
@endsection
