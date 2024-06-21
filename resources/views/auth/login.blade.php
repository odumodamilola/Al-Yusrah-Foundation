<!DOCTYPE html>
<html lang="en">

				<head>
								<title>Alyusrah Foundation</title>
								<meta charset="utf-8">
								<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

								<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
								<link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

								<link rel="stylesheet" href="{{ asset("css/open-iconic-bootstrap.min.css") }}">
								<link rel="stylesheet" href="{{ asset("css/animate.css") }}">

								<link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
								<link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
								<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">

								<link rel="stylesheet" href="{{ asset("css/aos.css") }}">

								<link rel="stylesheet" href="{{ asset("css/ionicons.min.css") }}">

								<link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker.css") }}">
								<link rel="stylesheet" href="{{ asset("css/jquery.timepicker.css") }}">

								<link rel="stylesheet" href="{{ asset("css/flaticon.css") }}">
								<link rel="stylesheet" href="{{ asset("css/icomoon.css") }}">
								<link rel="stylesheet" href="{{ asset("css/style.css") }}">
								<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
				</head>

				<body>
								{{-- <nav class="navbar navbar-expand-lg  ftco_navbar bg-dark ftco-navbar-light m-0 shadow" id="ftco-navbar">
    <div class="container">
      <a class="nav-link text-light px-2 " href="/">Alyusrah Foundation</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="/" class="nav-link text-light">Home</a></li>
          <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-light">About</a></li>
          <li class="nav-item"><a href="{{route('vision')}}" class="nav-link text-light">Visions</a></li>
          <li class="nav-item"><a href="{{route('mission')}}" class="nav-link text-light">Missions</a></li>
          <li class="nav-item"><a href="{{route('donate')}}" class="nav-link text-light">Donate</a></li>
          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link text-light">Blog</a></li>
          <li class="nav-item"><a href="event.html" class="nav-link text-light">Events</a></li>
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-light">Contact</a></li>
        </ul>
        <ul class="navbar-nav ms-auto ">
            <!-- Authentication Links -->
            @guest
                @if (Route::has("login"))
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has("register"))
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav> --}}
								<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
												<div class="container-fluid">
																<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
																				data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
																				aria-label="Toggle navigation">
																				<span class="navbar-toggler-icon"></span>
																</button>
																<div class="navbar-collapse collapse" id="navbarTogglerDemo01">
																				<a class="navbar-brand" href="/">Al Yusrah Foundation</a>
																				<ul class="navbar-nav ml-auto py-2">
																								<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
																								<li class="nav-item"><a href="{{ route("about") }}" class="nav-link">About</a></li>
																								<li class="nav-item"><a href="{{ route("vision") }}" class="nav-link">Visions</a></li>
																								<li class="nav-item"><a href="{{ route("mission") }}" class="nav-link">Missions</a></li>
																								<li class="nav-item"><a href="{{ route("donate") }}" class="nav-link">Donate</a></li>
																								<li class="nav-item"><a href="{{ route("blog") }}" class="nav-link">Blog</a></li>
																								<li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
																								<li class="nav-item"><a href="{{ route("contact") }}" class="nav-link">Contact</a></li>
																				</ul>
																				<ul class="navbar-nav ms-auto py-2">
																								<!-- Authentication Links -->
																								@guest
																												@if (Route::has("login"))
																																<li class="nav-item">
																																				<a class="nav-link" href="{{ route("login") }}">{{ __("Login") }}</a>
																																</li>
																												@endif
																												<span class="pt-2">||</span>
																												@if (Route::has("register"))
																																<li class="nav-item">
																																				<a class="nav-link" href="{{ route("register") }}">{{ __("Register") }}</a>
																																</li>
																												@endif
																								@else
																												<li class="nav-item dropdown">
																																<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
																																				data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																																				{{ Auth::user()->name }}
																																</a>

																																<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
																																				<a class="dropdown-item" href="{{ route("logout") }}"
																																								onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
																																								{{ __("Logout") }}
																																				</a>

																																				<form id="logout-form" action="{{ route("logout") }}" method="POST" class="d-none">
																																								@csrf
																																				</form>
																																</div>
																												</li>
																								@endguest
																				</ul>
																</div>
												</div>
								</nav>
								{{-- @section("content") --}}
								<style>
												.ii {
																margin-top: 100px;
																margin-bottom: 70px;
												}
								</style>
								{{-- <div class="container ii">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6 details">
                                <input id="email" type="email" class="form-control @error("email") is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error("email")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6 details">
                                <input id="password" type="password" class="form-control @error("password") is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error("password")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has("password.request"))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
								<!-- Section: Design Block -->
								<section class="">
												<!-- Jumbotron -->
												<div class="px-md-5 text-lg-start px-4 py-5 text-center" style="background-color: hsl(0, 0%, 96%)">
																<div class="container">
																				<div class="row gx-lg-5 align-items-center">
																								<div class="col-lg-6 mb-lg-0 mb-5">
																												<h1 class="display-3 fw-bold ls-tight mb-5">
																																The Heart of Compassion<br />
																																<span class="text-primary">for Communities </span>
																												</h1>
																												<p style="color: hsl(217, 10%, 50.8%)">
																																"At the Heart of Compassion for Communities, we are dedicated to fostering positive
																																change through empathy, collaboration, and sustainable impact. Join us in creating a
																																ripple effect of compassion, making a lasting difference in the lives of those we touch.
																																Together, we build a brighter future for communities in need"
																												</p>
																								</div>

																								<div class="col-lg-6 mb-lg-0 mb-5">
																												{{-- <h1 class="text-center mb-4" style="font-family: sans-serif; font-size:27px;">"Welcome back! "<span clasprimary>difference!</span></h1> --}}

																												<div class="card">
																																<div class="card-body px-md-5 py-5">
																																				<form method="POST" action="{{ route("login") }}">
																																								@csrf
																																								<h1 class="text-center" style="font-family: sans-serif; font-size:27px;">
																																												Welcome <span class="text-primary">back!</span></h1>
																																								<div class="text-center">
																																												<span class="text-center" style="text-align: center;">Login to access the
																																																heart of our community. </span>

																																								</div>
																																								<!-- Email input -->
																																								<div class="form-outline mb-4 mt-4">
																																												<label for="email"
																																																class="col-form-label">{{ __("Email Address") }}</label>
																																												<div>
																																																<input id="email" type="email"
																																																				class="form-control @error("email") is-invalid @enderror"
																																																				name="email" value="{{ old("email") }}" required
																																																				autocomplete="email" autofocus id="form3Example3"
																																																				class="form-control" style="border-radius: 5px;" />
																																																@error("email")
																																																				<span class="invalid-feedback" role="alert">
																																																								<strong>{{ $message }}</strong>
																																																				</span>
																																																@enderror
																																												</div>

																																								</div>

																																								<div class="row form-outline mb-3 mb-4">
																																												<label for="password" class="col-form-label text-md-start"
																																																for="form3Example4">{{ __("Password") }}</label>

																																												<div>
																																																<input type="password" id="form3Example4" class="form-control"
																																																				style="border-radius: 5px; id="password"
																																																				class="form-control @error("password") is-invalid @enderror"
																																																				name="password" required autocomplete="current-password">

																																																@error("password")
																																																				<span class="invalid-feedback" role="alert">
																																																								<strong>{{ $message }}</strong>
																																																				</span>
																																																@enderror
																																												</div>
																																								</div>

																																								<div class="row mb-3">
																																												<div class="col-md-6">
																																																<div class="form-check">
																																																				<input class="form-check-input" type="checkbox" name="remember"
																																																								id="remember" {{ old("remember") ? "checked" : "" }}>

																																																				<label class="form-check-label" for="remember">
																																																								{{ __("Remember Me") }}
																																																				</label>
																																																</div>
																																												</div>
																																								</div>
																																								<div class="row mb-0">
																																												<div class="col-md-8">
																																																<button type="submit" class="btn btn-primary">
																																																				{{ __("Login") }}
																																																</button>

																																																@if (Route::has("password.request"))
																																																				<a class="" href="{{ route("password.request") }}">
																																																								{{ __("Forgot Your Password?") }}
																																																				</a>
																																																@endif
																																												</div>
																																								</div>

																																								<!-- Checkbox -->

																																								{{-- <div class="form-check d-flex justify-content-center mb-4">
                    <span><input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked /></span><label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div> --}}

																																								{{-- <button type="submit" class="btn  btn-block mb-4" style="">
                    Sign up
                  </button> --}}

																																								<!-- Register buttons -->
																																								<div class="text-center">
																																												<p>or you can</p>

																																												<div style="text-align: center; margin-bottom: 10px;">
																																																<button type="button"
																																																				style="background-color: #4285F4; color: #fff; text-align: center; font-weight: bold; font-size: 14px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
																																																				<img src="https://www.google.com/favicon.ico" alt="Google Logo"
																																																								style="width: 20px; height: 20px; margin-right: 5px;">
																																																				Continue with Google
																																																</button>
																																												</div>

																																												<div style="text-align: center; margin-bottom: 10px;">
																																																<button type="button"
																																																				style="background-color: #1da1f2; color: #fff; text-align: center; font-weight: bold; font-size: 14px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
																																																				<img src="https://bayrivercolleges.ca/files/logo-x-twitter.svg"
																																																								alt="Twitter Logo"
																																																								style="width: 20px; height: 20px; margin-right: 5px;">
																																																				Continue with Twitter
																																																</button>
																																												</div>
																																								</div>

																																				</form>
																																</div>
																												</div>
																								</div>
																				</div>
																</div>
												</div>
												<!-- Jumbotron -->
								</section>
								<!-- Section: Design Block -->
								{{-- @endsection --}}
								<footer class="ftco-footer ftco-section img">
												<div class="overlay"></div>
												<div class="container">
																<div class="row mb-5">
																				<div class="col-md-3">
																								<div class="ftco-footer-widget mb-4">
																												<h2 class="ftco-heading-2">About Us</h2>
																												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
																																there live the blind texts.</p>
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
																																<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
																																<div class="text">
																																				<h3 class="heading"><a href="#">Even the all-powerful Pointing has no
																																												control about</a></h3>
																																				<div class="meta">
																																								<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
																																								</div>
																																								<div><a href="#"><span class="icon-person"></span> Admin</a></div>
																																								<div><a href="#"><span class="icon-chat"></span> 19</a></div>
																																				</div>
																																</div>
																												</div>
																												<div class="block-21 d-flex mb-4">
																																<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
																																<div class="text">
																																				<h3 class="heading"><a href="#">Even the all-powerful Pointing has no
																																												control about</a></h3>
																																				<div class="meta">
																																								<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
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
																																<li><a href="#" class="d-block py-2">Home</a></li>
																																<li><a href="#" class="d-block py-2">About</a></li>
																																<li><a href="#" class="d-block py-2">Donate</a></li>
																																<li><a href="#" class="d-block py-2">Causes</a></li>
																																<li><a href="#" class="d-block py-2">Event</a></li>
																																<li><a href="#" class="d-block py-2">Blog</a></li>
																												</ul>
																								</div>
																				</div>
																				<div class="col-md-3">
																								<div class="ftco-footer-widget mb-4">
																												<h2 class="ftco-heading-2">Have a Questions?</h2>
																												<div class="block-23 mb-3">
																																<ul>
																																				<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
																																												Mountain View, San Francisco, California, USA</span></li>
																																				<li><a href="#"><span class="icon icon-phone"></span><span
																																																class="text">+2 392 3929 210</span></a></li>
																																				<li><a href="#"><span class="icon icon-envelope"></span><span
																																																class="text">info@yourdomain.com</span></a></li>
																																</ul>
																												</div>
																								</div>
																				</div>
																</div>
																<div class="row">
																				<div class="col-md-12 text-center">

																								<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
																												Copyright &copy;
																												<script>
																																document.write(new Date().getFullYear());
																												</script> Alyusrah Foundation<i class="icon-heart" aria-hidden="true"></i>
																												<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
																								</p>
																				</div>
																</div>
												</div>
								</footer>

								<!-- loader -->
								<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
																<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
																				stroke="#eeeeee" />
																<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
																				stroke-miterlimit="10" stroke="#F96D00" />
												</svg></div>

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

				</body>

</html>
