<!DOCTYPE html>
    <head>
        <title>Pharmacy</title>
        <link rel="stylesheet"  href={{ URL::asset('css/style.css') }}>
        @if( !(isset($nav_home_active)) )
            <link rel="stylesheet" href={{ URL::asset('css/bootstrap.css') }} >
        @endif
        @if( isset($nav_search_active) )
            <link rel="stylesheet" href={{ URL::asset('css/search.css') }} >
        @endif
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <h2><span>Pharmacy</span>System</h2>
                </div>
                <nav>
                    <ul>
                        <li class=
                        @if( isset($nav_home_active) )
                            {{ $nav_home_active}}
                        @endif
                        ><a href="home">Home</a></li>   
                        
                        <li class=
                        @if(isset($nav_search_active))
                            {{ $nav_search_active}}
                        @endif
                        ><a href="search">Search</a></li>   
                        
                        <li><a href="#">Register</a></li>  
                        
                        <li><a href="login">Login</a></li>   
                        
                        <li><a href="#">About Us</a></li>    
                        
                    </ul>
                </nav>
            </header>
            @yield('content')
        </div>
        @if(!(isset($nav_home_active) ))
        <script src={{ URL::asset('js/jquery.js')}}></script>
            <script src={{ URL::asset('js/bootstrap.js')}}></script>
        @endif
    </body>

</html>