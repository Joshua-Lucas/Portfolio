<!DOCTYPE html>
<html >
    <head>
 

        <title>Joshua Lucas</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <header>
            <div>
                <div>

                    <h2>Joshua <img src="" alt="(logo)"> Lucas</h2>

                </div>  
                
                <div>
                    <nav>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>    
                        </ul>
                    
                    </nav>
                </div> 
            </div>
        
        </header>
        </div>

        @yield('content')
    </body>
</html>
