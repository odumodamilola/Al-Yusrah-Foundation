<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alyusrah Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_/all.min.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="Al Yusrah Foundation">

</head>

<body>
    <section>
        <nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary shadow">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="/">Al Yusrah Foundation</a>

                <button class="navbar-toggler btn-light bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-primary"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarTogglerDemo01">
                    {{-- <a class="navbar-brand" href="/"><img src="{{ asset("images/logo1.png") }}"
																																alt="" width="100px"></a> --}}
                    <ul class="navbar-nav ml-auto py-2">
                        <li class="nav-item"><a href="/" class="nav-link text-light">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link text-light">About</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('vision') }}" class="nav-link text-light">Visions</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('mission') }}" class="nav-link text-light">Missions</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('donate') }}" class="nav-link text-light">Donate</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link text-light">Blog</a>
                        </li>
                        {{-- <li class="nav-item"><a href="{{ route('event') }}" class="nav-link text-light">Events</a> --}}
                        </li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link text-light">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto py-2">
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="fab fa-instagram text-light"></i></a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="fab fa-twitter text-light"></i></a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="fab fa-facebook text-light"></i></a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="fab fa-youtube text-light"></i></a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="fab fa-linkedin text-light"></i></a>
                        </li>
                        {{-- <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li> --}}
                    </ul>
                    <ul class="navbar-nav ms-auto py-2">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            <span class="pt-2 text-light">||</span>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span
                                        class="text-light">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/dashboard">
                                        {{ __('Admin Dashboard') }}
                                    </a>

                                    {{-- <form id="logout-form" action="{{ route('home') }}" metho
                                            class="d-none">
                                            @csrf
                                        </form> --}}
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <main class="py-0">
        @yield('content')
    </main>
    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>[Organization Name] is a catalyst for community success. We empower entrepreneurs with
                            comprehensive support financial aid, mentorship, and resources building a vibrant ecosystem
                            where dreams flourish and businesses thrive.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 d-flex mb-4">
                            <a class="blog-img mr-4"
                                style="background-image: url(https://img.freepik.com/free-photo/medium-shot-african-woman-working_23-2148789684.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no
                                        control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span>Jan. 28, 2024</a>
                                    </div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 d-flex mb-4">
                            <a class="blog-img mr-4"
                                style="background-image: url(https://img.freepik.com/free-photo/happy-people-working-as-team_23-2148931094.jpg?size=626&ext=jpg&ga=GA1.1.2144251463.1701028527&semt=ais);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no
                                        control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span>Jan. 20, 2024</a>
                                    </div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget ml-md-4 mb-4">
                        <h2 class="ftco-heading-2">Site Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="/" class="d-block py-2">Home</a></li>
                            <li><a href="/about" class="d-block py-2">About</a></li>
                            <li><a href="/donate" class="d-block py-2">Donate</a></li>
                            {{-- <li><a href="#" class="d-block py-2">Event</a></li> --}}
                            <li><a href="/blog" class="d-block py-2">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">
                                        Abuja, Nigeria</span></li>
                                <li><a class="nav-link" href="#"><span class="icon icon-phone"></span><span
                                            class="text">+234 701 908 7355</span></a></li>
                                <li><a class="nav-link" href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@alyusrahfoundation.org</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved Alusrah Foundation
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee"></circle>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="blue"></circle>
        </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
