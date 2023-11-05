<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="{{asset('front/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet"  href="{{asset('front/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet"  href="{{asset('front/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet"  href="{{asset('front/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet"  href="{{asset('front/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet"  href="{{asset('front/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet"  href="{{asset('front/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>
<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{asset('front/img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                @auth
                                @if(Auth::user()->isadmin ==1)
                                <li class="nav-item">
                                    <a class="nav-link" href={{ url('entrysection/index') }}>Dashboard</a>
                                </li>
                                @endif
                                @endauth
                                @if(!Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('login') }}>LogIn</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ url('/logout') }}>LogOut</a>
                                    </li>
                                @endif
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Get a Quote</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->




    @yield('content')





    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->


    <!-- jquery plugins here-->
    <!-- jquery -->
    <script  src="{{asset('front/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script  src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script  src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script  src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script  src="{{asset('front/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script  src="{{asset('front/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script  src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script  src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script  src="{{asset('front/js/slick.min.js')}}"></script>

    <script  src="{{asset('front/js/jquery.counterup.min.js')}}"></script>

    <script  src="{{asset('front/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script  src="{{asset('front/js/custom.js')}}"></script>
</body>

</html>
