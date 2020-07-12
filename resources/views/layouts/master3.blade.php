<!doctype html>
<html lang="en-US">

<!-- Mirrored from www.azyrusthemes.com/forum2/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2020 03:24:19 GMT -->
<head>
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
</head>
<body>
    <!-- HEADER -->
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
                            <li><a href="index-2.html">Home Page</a></li>
                            <li><a href="single-topic.html">Single Topic Page</a></li>
                            <li><a href="simple-signup.html">Sign up Page</a></li>
                            <li><a href="create-topic.html">Create Topic Page</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__search">
                    <form action="#">
                        <label>
                            <i class="icon-Search js-header-search-btn-open"></i>
                            <input type="search" placeholder="Search all forums" class="form-control">
                        </label>
                    </form>
                    <div class="header__search-close js-header-search-btn-close"><i class="icon-Cancel"></i></div>
                    <div class="header__search-btn" data-dropdown-btn="search">
                        Topics<i class="icon-Arrow_Below"></i>
                    </div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="search">
                        <ul>
                            <li>
                                <label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" checked="checked">
                                        <i></i>
                                    </label>Search Titles Only
                                </label>

                            </li>
                            <li>
                                <label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>Show Results as Posts
                                </label>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Advanced_Search"></i>Advanced Search
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__menu">
                    <div class="header__menu-btn" data-dropdown-btn="menu">
                        Latest Topics<i class="icon-Menu_Icon"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="menu">
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
                <div class="header__notification">
                    <div class="header__notification-btn" data-dropdown-btn="notification">
                        <i class="icon-Notification"></i>
                        <span>6</span>
                    </div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="notification">
                        <div>
                            <a href="#">
                                <i class="icon-Favorite_Topic"></i>
                                <p>Roswell . 16 feb, 17<span>Which movie have you watched recently?</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Reply_Empty"></i>
                                <p>Callis . 18 feb, 17<span>I got an amzon thingie!</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Badge"></i>
                                <p>Earned Badge . 19 feb, 17<span><img src="fonts/icons/badges/Lets_talk.svg" alt="Lets Talk">Lets Talk</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Badge"></i>
                                <p>Earned Badge . 21 feb, 17<span><img src="fonts/icons/badges/Intermediate.svg" alt="Intermediate">Intermediate</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Share_Topic"></i>
                                <p>Charlie . 22 feb, 17<span>Need Video file of that cat.</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Pencil"></i>
                                <p>Greentea . 22 feb, 17<span>New Facebook like and share button.</span></p>
                            </a>
                            <span><a href="#">view older notifications...</a></span>
                        </div>
                    </div>
                </div>
                <div class="header__user">
                    <div class="header__user-btn" data-dropdown-btn="user">
                        {{ Auth::user()->name }}<i class="icon-Arrow_Below"></i>
                    </div>
                    <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                        <div>
                            <div class="dropdown__icons">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
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
                        </nav>
                    </div>
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="tags">Tags</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                            <div class="tags">
                                <a href="#" class="bg-4f80b0">gaming</a>
                                <a href="#" class="bg-424ee8">nature</a>
                                <a href="#" class="bg-36b7d7">entertainment</a>
                                <a href="#" class="bg-ef429e">selfie</a>
                                <a href="#" class="bg-7cc576">camera</a>
                                <a href="#" class="bg-3a3a17">username</a>
                                <a href="#" class="bg-6f7e9c">funny</a>
                                <a href="#" class="bg-f26522">photography</a>
                                <a href="#" class="bg-a3d39c">climbing</a>
                                <a href="#" class="bg-92278f">adventure</a>
                                <a href="#" class="bg-8781bd">dreams</a>
                                <a href="#" class="bg-f1ab32">life</a>
                                <a href="#" class="bg-3b96ca">reason</a>
                                <a href="#" class="bg-348aa7">social</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__menu js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                            <ul class="dropdown__catalog">
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Rising</a></li>
                                <li><a href="#">Most Liked</a></li>
                                <li><a href="#">Follow Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul>
                        <li class="active"><a href="{{route('question.index')}}">Question</a></li>
                        <li><a href="{{route('myquestion.index', Auth::user()->id )}}">MyQuestion</a></li>
                        <li><a href="{{route('category.index')}}">Category</a></li>
                        <li><a href="{{route('tag.index')}}">Tag</a></li>
                        <li><a href="{{route('answer.index')}}">Answer</a></li>
                    </ul>
                </div>
            </div>
            <div class="posts">
                <div class="posts__body">
                    @yield('content') 
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer js-dropdown">
            <div class="container">
                <div class="footer__logo">
                    <div>
                        <img src="{{asset('template/fonts/icons/main/Logo_Forum.svg')}}" alt="logo">Unity
                    </div>
                </div>
                <div class="footer__nav">
                    <div class="footer__tline">
                        <i class="icon-Support"></i>
                        <ul class="footer__menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">The Team</a></li>
                        </ul>
                        <div class="footer__language">
                            <div class="footer__language-btn" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                            <div class="footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y" data-dropdown-list="language">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3>Region</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>America</a></li>
                                            <li><a href="#"><i></i>Europe</a></li>
                                            <li><a href="#"><i></i>Asia</a></li>
                                            <li><a href="#"><i></i>China</a></li>
                                            <li><a href="#"><i></i>Australia</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <h3>Language</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>English</a></li>
                                            <li><a href="#"><i></i>Espanol</a></li>
                                            <li><a href="#"><i></i>Portugues</a></li>
                                            <li><a href="#"><i></i>Chinese</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bline">
                        <ul class="footer__menu">
                            <li class="footer__copyright"><span>&copy; 2017 azyrusthemes.com</span></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Send Feedback</a></li>
                        </ul>
                        <ul class="footer__social">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="footer__language-btn-m" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('template/js/app.js')}}"></script>
    @stack('scripts')
</body>

<!-- Mirrored from www.azyrusthemes.com/forum2/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2020 03:25:13 GMT -->
</html>