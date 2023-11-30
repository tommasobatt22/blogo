@extends('layout')

@section('title')
    Dettaglio
@endsection

@section('content')
<span class="p-5 pt-10 inline-block w-full text-center font-bold text-2xl text-black uppercase">{{$article->title}}</span>
<div class="flex flex-col items-center m-10 ">
    <div class="flex flex-row w-full justify-between"> 
        <div class="h-48 w-32 shadow-lg">
            <div class="w-full bg-black text-center">
                <span class="text-l uppercase text-white font-bold ">INFOS</span> 
            </div>
            <div class=" py-3 pl-1">
                <span class="text-xs uppercase font-bold block">article by:</span>
                <span class="text-xs">{{$article->author->name}} {{$article->author->surname}}</span>
            </div>
            <div class=" py-1 pl-1">
                <span class="text-xs uppercase font-bold block">released in:</span>
                <span class="text-xs">{{$article->created_at}}</span>
            </div>
            <div class=" py-3 pl-1">
                <span class="text-xs uppercase font-bold block">category:</span>
                <span class="text-xs">{{$article->category->name}}</span>
            </div>
        </div>
        <div class="w-64 h-96 bg-cover bg-center mb-10" 
        style="background-image: url('{{ asset($article->img) }}');" ></div>
        <div class=" w-32 shadow-lg">
            <div class="w-full bg-black text-center">
                <span class="text-l uppercase text-white font-bold ">latest articles</span> 
            </div>
            <div class="w-full p-2">
                @foreach ($lastArticles as $lastArticle)
                    <div class="py-1">
                        <div class="bg-cover bg-center h-16" style="background-image: url('{{ asset($lastArticle->img) }}');"></div>
                        <a href="/articles/detail/{{$lastArticle->slug}}/{{ $lastArticle->id }}">
                            <p class="text-bold text-xs font-bold">{{$lastArticle->title}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="w-4/6">
        <p class="text-sm leading-light">{{$article->content}}</p>
    </div>


    <div class="rounded w-5/6 bg-neutral-700 mt-5">
        <div class="w-full text-center py-3 ">
            <span class="font-bold p-2 text-2xl text-white">Comments</span>
        </div>
        @foreach ($article->comment as $comment)
        <div class="m-5  border border-transparent border-b-white">
            <span class="text-xs text-white">{{$comment->author}}</span><br>
            <p class="text-white mb-2">{{$comment->content}}</p>
        </div>
        @endforeach
        <span class="mx-5 text-white text-base font-bold ">Leave a comment </span>
        <form action="/comments/store/{{$article->id}}" method="POST">
            @csrf
            <div class="w-full">
                <textarea type="textarea" name="content" id="content" cols="50" rows="2" placeholder="express your thought"
                class="text-white mb-2 bg-neutral-700 m-5  border border-transparent border-b-white"></textarea>
            </div>
            <input type="submit" value="add comment"
            class="m-5 p-2 bg-slate-200 rounded text-base font-bold">
                
        </form>
    </div>
</div>
@endsection