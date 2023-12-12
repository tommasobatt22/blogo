<div class="w-full p-5 flex flex-row overflow-hidden static">
    <div class="w-2/5 flex  justify-center">
        <div class=" bg-cover bg-top w-64 h-96  
        transition duration-700 ease-in-out hover:scale-110 " 
        style="background-image: url('{{ asset($lastArticle->img) }}');"></div>
    </div>
    <div class="w-3/5 flex flex-col h-80 ">
        <div class="py-5 text-center">
            <span class="w-full text-center font-extrabold text-4xl text-black uppercase">{{$lastArticle->title}}</span>
            <p class="px-5 line-clamp-6 text-base font-base overflow-hidden text-justify">{{$lastArticle->content}}</p>
        </div>
        <div class="flex flex-row w-full justify-center  ">
            <div class="p-4 border-4 border-black 
            transition duration-700 hover:text-white hover:bg-black ">
                <a href="/articles/detail/{{$lastArticle->slug}}/{{ $lastArticle->id}}">
                    <span class="text-m font-bold uppercase">
                    Read More</span>
                </a>
            </div> 
        </div>
    </div>
</div>
