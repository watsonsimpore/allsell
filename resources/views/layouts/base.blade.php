<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AllSell</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/di st/css/select2.min.css" rel="stylesheet" />
	<link href="path/to/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha512-63+XcK3ZAZFBhAVZ4irKWe9eorFG0qYsy2CaM5Z+F3kUn76ukznN0cp4SArgItSbDFD1RrrWgVMBY9C/2ZoURA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    @livewireStyles

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+226) 65 25 52 19" href="#" ><span class="icon label-before fa fa-mobile"></span>(+226) 64 41 42 88</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>

								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="Francais" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-bf.png')}}" alt="lang-en"></span>Français<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-hun.png')}}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-ger.png')}}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}" alt="lang-en"></span>Anglais</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-can.png')}}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Francs CFA<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Dollar (USD)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</li>
								@if(Route::has('login'))
									@auth
											@if(auth()->user()->utype === 'ADM')
												<li class="menu-item menu-item-has-children parent" >
													<a title="My Account" href="#">Mon Compte ({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
													<ul class="submenu curency" >
														<li class="menu-item" >
															<a title="Dashboard" href="{{ route('admin.dashboard') }}">Tableau de Bord</a>
														</li>
														<li class="menu-item" >
															<a title="Categories" href="{{route('admin.categories')}}"> Les Categories</a>
														</li>
														<li class="menu-item" >
															<a title="Les Attributs" href="{{route('admin.attributes')}}"> Les Attributs</a>
														</li>
														<li class="menu-item" >
															<a title="Products" href="{{route('admin.products')}}"> Les Produits</a>
														</li>
														<li class="menu-item" >
															<a href="{{route('admin.homeslider')}}">Les Slides</a>
														</li>
														<li class="menu-item" >
															<a title="Gerer Categorie D'accueil" href="{{route('admin.homecategories')}}">Categorie D'accueil</a>
														</li>
														<li class="menu-item" >
															<a title="Paramètre Promo" href="{{route('admin.sale')}}">Paramètre Promo</a>
														</li>
														<li class="menu-item" >
															<a title="Les Coupons" href="{{route('admin.coupons')}}">Les Coupons</a>
														</li>
														<li class="menu-item" >
															<a title="Les Commandes" href="{{route('admin.orders')}}">Les Commandes</a>
														</li>
														<li class="menu-item" >
															<a title="Message de Contact" href="{{route('admin.contact')}}">Message de Contact</a>
														</li>
														<li class="menu-item" >
															<a title="Paramètre" href="{{route('admin.settings')}}">Paramètres</a>
														</li>
														<li class="menu-item" >
															<a title="Gestion Utilisateur" href="{{route('admin.user_manager')}}">Gestion Utilisateur</a>
														</li>
														<li class="menu-item" >
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconexion</a>
														</li>
														<form id="logout-form" method="POST" action="{{ route('logout') }}">
															@csrf

														</form>
													</ul>
												</li>

                                                {{-- Chat Message --}}
												<li class="menu-item" ><a class="nav-link nav-icon" href="{{ route('chat') }}" data-bs-toggle="dropdown"> <i class="fa fa-envelope" aria-hidden="true"></i></i> <span class="badge bg-success badge-number">3</span> </a></li>
											@else
												<li class="menu-item menu-item-has-children parent" >
														<a title="My Account" href="#">Mon Compte ({{Auth::user()->name}}) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
														<ul class="submenu curency" >
															<li class="menu-item" >
																<a title="Dashboard" href="{{ route('user.dashboard') }}">Tableau de bord</a>
															</li>
															<li class="menu-item" >
																<a title="Mes commandes" href="{{ route('user.orders') }}">Mes commandes</a>
															</li>
															<li class="menu-item" >
																<a title="Mon Profile" href="{{ route('user.profile') }}">Mon Profil</a>
															</li>
															<li class="menu-item" >
																<a title="Changer le mot de passse" href="{{ route('user.changepassword') }}">Changer le mot de passe</a>
															</li>

															<li class="menu-item" >
																<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se Déconnecter</a>
															</li>
																<form id="logout-form" method="POST" action="{{ route('logout') }}">
																@csrf

																</form>
														</ul>
												</li>
												<li class="menu-item" ><a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="fa fa-envelope" aria-hidden="true"></i></i> <span class="badge bg-success badge-number">3</span> </a></li>

											@endif
									@else
											<li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Se Connecter</a></li>
											<li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Créer un Compte</a></li>



									@endif

								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.png')}}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">

							@livewire('wishlist-count-component')

							@livewire('cart-count-component')

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>



					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="{{route('hebdomadaire')}}" class="link-term">Hebdomadaire</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="{{route('hebdomadaire')}}" class="link-term">Article HOT</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="{{route('hebdomadaire')}}" class="link-term">Top nouveaux Articles</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="{{route('hebdomadaire')}}" class="link-term">Top Vente</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="{{route('hebdomadaire')}}" class="link-term">Les plus notés</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/aboutus" class="link-term mercado-item-title">A propos</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Boutique</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Panier</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Commande</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Nous Contacter</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{$slot}}

	@livewire('footer-component')

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="{{ asset('assets/js/select2.min.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- <script src="https://cdn.tiny.cloud/1/3vxi554fg5ie68sfcq07o9dd46prqbjzqj7br66tsfw0jnx8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
	<script src="https://cdn.tiny.cloud/1/xtp65i8sttdiby192ub38m3j0uoedye2ongm5vu2d52hrtqu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>


	@livewireScripts
	@stack('scripts')

</body>
</html>
