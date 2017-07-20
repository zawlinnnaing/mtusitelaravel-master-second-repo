
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mandalay Technological University</title>

        <!-- Fonts -->
       <!--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/blueberry.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css')}}">

    </head>
    <body>
    <!-- navigation bar -->
    <nav class="nav has-shadow">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item is-mobile is-hidden-desktop" href="/">
                    <img src="/img/MTU.png">
                </a>
                <p class="nav-item" style="color: black !important;">
                    Mandalay Technological University
                </p>
                </div>
            
            <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
            </span>
            <div class="nav-right nav-menu">
                <a href="/academic" class="nav-item is-tab is-hidden-tablet
                {{ Request::path() ==  'academic' ? 'is-active' : ''  }}">Academic Plan</a>
                <a href="/campus" class="nav-item is-tab is-hidden-tablet
                {{ Request::path() ==  'campus' ? 'is-active' : ''  }}">Campus</a>
                <a href="/depertments" class="nav-item is-tab is-hidden-tablet
                {{ Request::path() ==  'depertments' ? 'is-active' : ''  }}">Departments</a>
                <a href="/research" class="nav-item is-tab is-hidden-tablet
                {{ Request::path() ==  'research' ? 'is-active' : ''  }}">Research</a>
                <a href="/about" class="nav-item is-tab is-hidden-tablet
                {{ Request::path() ==  'about' ? 'is-active' : ''  }}">About</a>
                <a href="/academic" class="nav-item is-tab is-hidden-mobile 
                {{ Request::path() ==  'academic' ? 'is-active' : ''  }}">Academic Plan</a>
                <a href="/campus" class="nav-item is-tab is-hidden-mobile
                {{ Request::path() ==  'campus' ? 'is-active' : ''  }}">Campus</a>
                <a href="/depertments" class="nav-item is-tab is-hidden-mobile
                {{ Request::path() ==  'depertments' ? 'is-active' : ''  }}">Departments</a>
                <a href="/research" class="nav-item is-tab is-hidden-mobile
                {{ Request::path() ==  'research' ? 'is-active' : ''  }}">Research</a>
                <a href="/about" class="nav-item is-tab is-hidden-mobile
                {{ Request::path() ==  'about' ? 'is-active' : ''  }}">About</a>
            </div>
        </div>
        </nav>
         @yield('content')
        <!-- Footer-->
        

   
    <!-- <script type="text/javascript" src="./bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.blueberry.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js')}}"></script>
</body>
</html>
