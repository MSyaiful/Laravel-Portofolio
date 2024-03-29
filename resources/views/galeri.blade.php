<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gallery</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

</head>

<body class="fixed-sn black-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="{{asset('img/eagle.jpg')}}" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/Social-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('index')}}" style="color: white;"><i
                                    class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('profile')}}" style="color: white;"><i
                                    class="fas fa-user"></i>
                                Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('portofolio')}}" style="color: white;"><i
                                    class="fas fa-tasks"></i>
                                Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('artikel')}}" style="color: white;"><i
                                    class="fas fa-newspaper"></i>
                                Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('galeri')}}" style="color: white;"><i
                                    class="fas fa-images"></i> Gallery</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('index')}}" style="color: white;"><i
                                    class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('profile')}}" style="color: white;"><i
                                    class="fas fa-user"></i>
                                Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('portofolio')}}" style="color: white;"><i
                                    class="fas fa-tasks"></i>
                                Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('artikel')}}" style="color: white;"><i
                                    class="fas fa-newspaper"></i>
                                Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('menuartikel')}}" style="color: white;"><i
                                    class="fas fa-clone"></i>
                                Posting Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('member')}}" style="color: white;"><i
                                    class="fas fa-user-plus"></i>
                                Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('galeri')}}" style="color: white;"><i
                                    class="fas fa-images"></i> Gallery</a>
                        </li>
                        @endguest
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main layout-->
    <main>

        <div class="container-fluid text-center">

            <!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                <div class="view view-cascade overlay wow fadeIn">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(1).jpg" class="img-fluid">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/Card image-->
                @guest
                @else
                <!--Card content-->
                <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                    <!--Title-->
                    <h4 class="card-title"><strong>Posting</strong></h4>
                    <h5 class="blue-text"><strong>Your Image</strong></h5>
                    <a href="{{url('menugaleri')}}" class="btn btn-primary btn-lg">Posting</a>
                </div>
                <!--/.Card content-->
                @endguest

            </div>
            <!--/.Card-->

        </div>

        <div class="container mt-3">
            <div class="row">
                @foreach($galeri as $gallery)
                <div class="col-md-4">
                    <div class="image border shadow mb-4">
                        <img src="{{ asset('uploadimg/'.$gallery->gambar) }}" alt="gambar" style="width:100%;"
                            class="rounded">
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">

        <!--Call to action-->
        <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="{{route('register')}}" class="btn btn-primary">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <hr>

        <!--Social buttons-->
        <div class="social-section text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-gplus"><i class="fab fa-google-plus-g"> </i></a>
                </li>
                <li class="list-inline-item"><a class="btn-floating btn-li"><i class="fab fa-linkedin-in"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-git"><i class="fab fa-github"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2019 Copyright: <a href="http://www.MDBootstrap.com">  MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        new WOW().init();

    </script>

</body>

</html>
