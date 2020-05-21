<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>KerjaYuk!</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.html" class="logo"><img src="{{ asset('kerjayuk.png') }}" alt="Image" style="width: 150px"></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{ route('blog.cari') }}" method="get">
								<input class="input" name="cari" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->
		
			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
					<li><a href="{{ url('/blog') }}">Beranda</a></li>
					<li><a href="{{ url('/list-post') }}">List Post </a></li>
					<li class="has-dropdown">
							<a href="#">Rekomendasi Lowongan Kerja</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										<li><a href="{{ url('/match') }}">Berdasarkan Kompetensi Anda</a></li>
										<li><a href="{{ url('/matchloc') }}">Berdasarkan Lokasi Anda</a></li>
									</ul>
								</div>
							</div>
						</li>
					<li><a href="{{ url('/blog/about') }}">About Us</a></li>
						<li class="has-dropdown">
							<a href="#">Categories</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
									@foreach($category_widget as $hasil2)
										<li><a href="{{ route('blog.category', $hasil2->nama) }}">{{ $hasil2->nama }}</a></li>
									@endforeach
									</ul>
								</div>
							</div>
						</li>
						<li class="has-dropdown">
							
						</li>
						
					</ul>
					<!-- /nav -->
					
				
			</div>
			<div id="nav-aside">
				<ul class="nav-aside-menu">
				@if (Route::has('login'))
                
				@auth
				
				@else
					<li><a href="{{ route('login') }}">Login</a></li>

					@if (Route::has('register'))
						<li><a href="{{ route('register') }}">Register</a></li>
					@endif
				@endauth
			
		@endif

				<li class="has-dropdown">
					@guest('web')
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
                                <a  href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class=""></span>
                                </a



							<ul>
                                <div class="dropdown-list" >
										<a href="{{ route('blog') }}" >
										Beranda
										</a>
										<a href="{{ route('cv') }}" >
										Biodata
										</a>
										<a href="{{ route('profile.edit') }}">
										Edit Profile
										</a>
										<a href="{{ route('password.edit') }}" >
										Edit Password
										</a>
										<a class="dropdown" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
                                </div>
								</ul>
                            </li>
                        @endguest('web')
						</li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
		</div>
		<!-- /NAV -->
	</header>