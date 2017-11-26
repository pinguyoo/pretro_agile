<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pretro</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


            @yield('content')
            <div id="footer" style="text-align: center; border-top: dashed 3px #eeeeee; margin: 50px 0; padding: 20px;">
                @Agile
            </div>

    </div>

    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">

      $( document ).ready(function() {

        let min, sec;
        let counting;

        $('.timerBox :input[name="time"]').click(function() {
           clearInterval(counting);
           min = $(this).val();
           sec = 00;
           $('.timer').html(min + " : " + "00");
        })

        $('.timerBox :input[name="start"]').click(function() {
           clearInterval(counting);
           counting = setInterval(function() {
             if (sec == 00 && min !== 0) {
               min--;
               sec = 60;
               $('.timer').html(min + " : " + sec);
             }
             sec--;
             $('.timer').html(min + " : " + sec);
             if (min == 0 && sec == 0) {
               clearInterval(counting);
             }
           }, 1000);
        })

        $('.timerBox :input[name="stop"]').click(function() {
            clearInterval(counting);
        })


      });

    </script>
</body>
</html>
