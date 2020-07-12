<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <meta name="keywords" content="HTML5 Template">
        <meta name="description" content="Responsive HTML5 Template">
        <meta name="author" content="author.com">
        <title>Question Sanber Forum</title>
    
        <!-- STYLESHEET -->
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    
        <!-- icon -->
        <link rel="stylesheet" href="{{asset('template/fonts/icons/main/mainfont/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/fonts/icons/font-awesome/css/font-awesome.min.css')}}">
    
        <!-- Vendor -->
        <link rel="stylesheet" href="{{asset('template/vendor/bootstrap/v4/bootstrap-grid.css')}}">
        <!-- Custom -->
        <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
         @stack('css')
    
        @stack('script-head')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="header js-header js-dropdown">
                <div class="container">
                    <div class="header__logo">
                        <h1>
                            <img src="{{asset('template/fonts/icons/main/Logo_Forum.svg')}}" alt="logo">
                        </h1>
                        <div class="header__logo-btn" data-dropdown-btn="logo">
                            Sanber Forum<i class="icon-Arrow_Below"></i>
                        </div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="logo">
                            <ul class="dropdown__catalog">
                                @if (Route::has('login'))
                                    <div class="links">
                                        @auth
                                            <a href="{{ url('/home') }}">Home Page</a>
                                        @else
                                            <a href="{{ route('login') }}">Login</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="header__menu">
                        <div class="header__menu-btn" data-dropdown-btn="menu">
                            @if (Route::has('login'))
                                @auth
                                    Welcome! {{auth::user()->name}}<i class="icon-Menu_Icon"></i>
                                @else
                                    Menu <i class="icon-Menu_Icon"></i>
                                @endauth
                            @endif
                        </div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="menu">
                            @if (Route::has('login'))
                                    @auth
                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                    </a>
                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endauth
                            @endif
                            <div>
                                <ul class="dropdown__catalog row">
                                    <li class="col-xs-6"><a href="#">New</a></li>
                                    <li class="col-xs-6"><a href="#">Unread</a></li>
                                    <li class="col-xs-6"><a href="#">Groups</a></li>
                                    <li class="col-xs-6"><a href="#">Users</a></li>
                                    <li class="col-xs-6"><a href="#">Tags</a></li>
                                    <li class="col-xs-6"><a href="#">Shortcuts</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Categories</h3>
                                <ul class="dropdown__catalog row">
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>Social</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>Random</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>Arts</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>Tech</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>Gaming</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>Science</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>Exchange</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>Pets</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-a7cdbd"></i>Entertainment</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>Education</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>Q&amp;As</a></li>
                                    <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="dropdown__catalog row">
                                    <li class="col-xs-6"><a href="#">Support</a></li>
                                    <li class="col-xs-6"><a href="#">Forum Rules</a></li>
                                    <li class="col-xs-6"><a href="#">Blog</a></li>
                                    <li class="col-xs-6"><a href="#">About</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="title m-b-md">
                            Sanber Forum
                        </div>

                        <div class="links">
                            <a href="{{route('question.index')}}">Question</a>
                            @if (Route::has('login'))
                                    @auth
                                        <a href="{{route('myquestion.index', Auth::user()->id )}}">MyQuestion</a>
                                    @endauth
                            @endif
                            <a href="{{route('category.index')}}">Category</a>
                            <a href="{{route('tag.index')}}">Tag</a>
                            <a href="{{route('answer.index')}}">Answer</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('template/vendor/velocity/velocity.min.js')}}"></script>
        <script src="{{asset('template/js/app.js')}}"></script>
        @stack('scripts')
    </body>
</html>
