<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('tilte','Blogo')</title>
</head>
<body>
    <div class="flex flex-col min-h-screen">
        <nav class="py-5 px-3 bg-black flex justify-center w-full relative ">
            <span class="text-3xl text-white font-bold "> <a href="/"> BLOGO</a></span>
            <div class="absolute inset-y-7 right-7 flex flex-row">
                <a href="/articles/create">
                    <div class="w-5 h-5 bg-contain bg-center bg-no-repeat px-2" 
                    style="background-image: url(' {{ asset('upload/plus-icon.svg') }}');"></div>
                </a>
                <a href="/login">
                    <div class="w-5 h-5 bg-contain bg-center bg-no-repeat px-2" 
                    style="background-image: url(' {{ asset('upload/user-icon.svg') }}');"></div>
                </a>
            </div>
        </nav>
        
        <div class="w-full mb-10">
            @yield('content')
        </div>
        
    </div>
    <div class="w-full bg-black flex flex-col items-center">
        <div class="w-full p-2 text-center">
            <span class="text-3xl text-white font-bold"> <a href="/"> BLOGO</a></span>
            <p class="text-white text-xs px-40 pt-10 pb-5">
                "Welcome to our realm of style, sounds, and visions. Explore the worlds of fashion, music, and film with us. Discover the latest trends, listen to the melodies that make our hearts beat, and immerse yourselves in the stories that move us. A blend of inspiration and creativity awaits you here."
Let me know if you'd like any further adjustments!
            </p>
        </div>
        <div class="p-2 flex flex-row justify-between w-32 ">
            <a href="https://www.instagram.com/sync_station/">
                <div class="w-6 h-6 bg-contain bg-center" style="background-image: url(' {{ asset('upload/instagram_icon.svg') }}');"></div>
            </a>
            <a href="https://www.linkedin.com/in/tommaso-battistoni/">
                <div class="w-6 h-6 bg-cover bg-center" style="background-image: url(' {{ asset('upload/linkedin_icon.svg') }}');"></div>
            </a>
            <a href="https://github.com/tommasobatt22">
                <div class="w-6 h-6 bg-cover bg-center" style="background-image: url(' {{ asset('upload/github_icon.svg') }}');"></div>
            </a>
        </div>
    </div>
</body>
</html>