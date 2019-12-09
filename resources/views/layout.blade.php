<!DOCTYPE html>
<html >
    <head>
        <title>Joshua Lucas</title>

        <!-- CSS Style Sheets -->
        <link rel="stylesheet" href="CSS/default.css"/>
        <link rel="stylesheet" href="CSS/fonts.css"/>


    </head>
    <body>
        <!-- IF I NEED A LOGGIN/REGISTRATION FEATURE  -->
            <!-- <div class="flex-center position-ref full-height">
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
            </div>     -->
       
        <header>
            <div class="main-header">
                <div class='brand'> 

                    <a href="/"><img src="img/name_logo1.png" alt="Logo" width='200px'></a>

                </div>  
                
                <div class='main-nav' >
                    <ul class='nav'>
                        <li><a href="#">Bio</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>    
                    </ul>
                </div> 
            </div>
        
        </header>
        <div>
         @yield('content')
        </div>
        <!-- <footer>
        
            <p>created by Joshua M. Lucas all rigths reserved. All parts of this page can not be reporduced for any reason unless granted permission from owner.</p> 

        </footer> -->

    </body>
</html>
