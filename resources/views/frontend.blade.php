<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">


<head>
	<!-- Basic need -->
	<title>Dolphin Channel</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="{{ asset('css/plugins.css')}}">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>
<!--preloading-->
<div id="preloader">
     <img class="logo" src="{{ asset('images/logoab.png')}}" alt="" width="150" height="70">
     <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="form-group">
				<label class="small mb-1" for="inputEmailAddress">Email</label>
				<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
			</div>

			<div class="form-group">
				<label class="small mb-1" for="inputPassword">Password</label>
				<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
			</div>

			<div class="form-group">
				<div class="custom-control custom-checkbox">
					<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
					<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
				</div>
				<a class="small" href="#">Forgot Password?</a><a href="#">Register!</a>
			</div>
			<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
				<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
			</div>
		</form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="POST" action="{{ route('register') }}">
			@csrf
			<div class="form-row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="small mb-1" for="inputName"> Name</label>
						<input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				<label class="small mb-1" for="inputEmailAddress">Email</label>
				<input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
			</div>
				</div>
			</div>

			
			<div class="form-row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="small mb-1" for="inputPassword">Password</label>
						<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
						<font id="error" color="red"></font>
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
						<input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" />
						<font id="cerror" color="red"></font>

					</div>
				</div>
			</div>

			{{-- <div class="form-group">
				<label class="small mb-1" for="address"> Address </label>
				<textarea class="form-control" name="address"></textarea>
			</div> --}}

			<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0 ml-5">

				<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block"> Create Account </button>
			</div>
		</form>
    </div>
</div>
<!--end of signup form popup-->
<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="{{route('homepage')}}"><img class="logo" src="{{ asset('images/logoab.png')}}" alt="" width="150" height="80"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent tab-content" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							
							<a class="nav-item nav-link  text-white mx-3 active" href="{{ route('moviepage')}}">Movies</a>

						</li>


						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Movie Type<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								@foreach($genres as $genre)
								<li><a href="{{ route('typepage',$genre->id)}}">{{$genre->title}}</a></li>
								@endforeach
							</ul>
						</li>

						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								@foreach($actors as $actor)
								<li><a href="{{ route('celepage',$actor->id)}}">{{$actor->name}}</a></li>
								@endforeach
							</ul>
						</li>
					</ul> 
					<ul class="nav navbar-nav flex-child-menu menu-right">
						
							@role('User')
							<span classs="float-right d-xl-block d-lg-block d-md-block d-none">
								{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle loginLink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a> --}}

								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown"> --}}
									<a class="btn text-light" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							{{-- </div> --}}
						</span>
						@else
						<span classs="float-right d-xl-block d-lg-block d-md-block d-none">
							<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="signupLink"><a href="#">sign up</a></li>
						</span>
						@endrole
							
					{{-- </div> --}}
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    <form method="get" action="{{ url('/search')}}">
	    <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for" name="query">
	    </div>
	    </form>
	</div>
</header>
<!-- END | Header -->


@yield('maincontent')

<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="{{ asset('images/logoab.png')}}" alt="" width="150" height="70"></a>
				 <p>Yandanar st, SanChaung<br>
				Yangon</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="{{route('homepage')}}">About</a></li> 
					<li><a href="{{route('homepage')}}">Dolphin Channel</a></li>
					<li><a href="#">Contact Us</a></li>
					{{-- <li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li> --}}
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="https://megaup.net/terms.html">Terms of Use</a></li> 
					<li><a href="https://megaup.net/terms.html">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					{{-- <li><a href="#">My Account</a></li>  --}}
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>
<script src="{{ asset('js/plugins2.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
</body>


</html>
