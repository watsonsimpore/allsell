<div>
    <footer id="footer">
		<div class="wrap-footer-content footer-style-1">
			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Expédition gratuite</h4>
								<p class="fc-desc">Gratuit sur commande</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantie</h4>
								<p class="fc-desc">30 jours de remboursement</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Payment Sécurisé</h4>
								<p class="fc-desc">Securisé votre Payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Support en ligne</h4>
								<p class="fc-desc">nous avons un support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!-- End function info -->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Details de nos Contact</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">{{$setting->adress}}</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">{{$setting->phone}}</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">{{$setting->email}}</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Ligne Fixe</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Nous Contacter</span>
										<b class="phone-number">{{$setting->phone2}}</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">S'abonner à la newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Entrer votre adresse E-mail">
											<button class="btn-submit">S'abonner</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Mon Compte</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="{{route('user.profile')}}" class="link-term">Mon Compte</a></li>
												<li class="menu-item"><a href="#" class="link-term">Marque</a></li>
												<li class="menu-item"><a href="#" class="link-term">Certificat de Cadeaux</a></li>
												<li class="menu-item"><a href="#" class="link-term">Filiates</a></li>
												<li class="menu-item"><a href="{{route('product.wishlist')}}" class="link-term">Favoris</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Information</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="{{route('contact')}}" class="link-term">Nous contacter</a></li>
												<li class="menu-item"><a href="#" class="link-term">Retours</a></li>
												<li class="menu-item"><a href="{{route('contact')}}" class="link-term">Localisation</a></li>
												<li class="menu-item"><a href="#" class="link-term">Speciales</a></li>
												<li class="menu-item"><a href="/aboutus" class="link-term">Histoire</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

		<div class="wrap-footer-content footer-style-1">
			<!--End function info-->
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Réseaux Sociaux</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="{{$setting->twitter}}" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="{{$setting->facebook}}" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="{{$setting->pinterest}}" class="link-to-item" title="pinterest"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
											<li><a href="{{$setting->instagram}}" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="{{$setting->youtube}}" class="link-to-item" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Teclecharger notre App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="notre application sur App Store"><figure><img src="{{asset('assets/images/brands/apple-store.png')}}" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="notre application sur Play Store"><figure><img src="{{asset('assets/images/brands/google-play-store.png')}}" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title"></h3>
							<div class="back-link-row">
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2023 ALLSELL SHOP. Tous Droits Reservés</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">A propos</a></li>
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Politique de confidentailité</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Termes & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Politique de Retours</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
</div>
