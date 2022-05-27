<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
            <header>
                @if (Route::has('login'))
                    <nav class="d-flex justify-content-center align-items-center gap-4 fs-2">
                        @auth
                            <a class="text-black text-decoration-none" href="{{ url('/home') }}">Home</a>
                            <a class="text-black text-decoration-none" href="{{route('admin.posts.index')}}">Blog</a>
                        @else
                            <a class="text-black text-decoration-none" href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a class="text-black text-decoration-none" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </nav>
                @endif
    
                    {{--  <div class="content">
                    @if (Auth::check())
                        Benvenuto {{ Auth::user()["name"] }}!
                    @endif
                    
                    <div class="title m-b-md">
                        <a href="{{route('admin.posts.index')}}">Blog</a>
                    </div>
    
                    <div class="links">
        
                    </div>
                    </div> --}}
            </header>

        <div id="root">
            
        </div>

        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>
