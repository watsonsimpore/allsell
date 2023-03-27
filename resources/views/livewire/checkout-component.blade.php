<main id="main" class="main-site">
	<style>
		.summary-item .row-in-form input[type="password"],
		.summary-item .row-in-form input[type="text"],
		.summary-item .row-in-form input[type="tel"] {
			font-size: 13px;
			line-height: 19px;
			display: inline-block;
			height: 43px;
			padding: 2px 20px;
			max-width: 300px;
			width: 100%;
			border: 1px solid #e6e6e6;
		}
	</style>

	<div class="container">

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="/" class="link">Accueil</a></li>
				<li class="item-link"><span>COMMANDE</span></li>
			</ul>
		</div>
		<div class=" main-content-area">
			<form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-address-billing">
							<h3 class="box-title">Addresse de Facturation</h3>
							<div class="billing-adress">
								<p class="row-in-form">
									<label for="fname">Nom<span>*</span></label>
									<input type="text" name="fname" value="" placeholder="Votre Nom" wire:model="firstname">
									@error('firstname') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="lname">Prénom<span>*</span></label>
									<input type="text" name="lname" value="" placeholder="Votre Prénom" wire:model="lastname">
									@error('lastname') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="email">Adresse Email:</label>
									<input type="email" name="email" value="" placeholder="Saisissez votre email" wire:model="email">
									@error('email') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="phone">Numéro de Téléphone<span>*</span></label>
									<input type="number" name="phone" value="" placeholder="format Complet" wire:model="mobile">
									@error('mobile') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="add">Ligne 1</label>
									<input type="text" name="add" value="" placeholder="Secteur" wire:model="line1">
									@error('line1') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="add">Ligne 2</label>
									<input type="text" name="add" value="" placeholder="Secteur" wire:model="line2">
								</p>
								<p class="row-in-form">
									<label for="country">Pays<span>*</span></label>
									<input type="text" name="country" value="" placeholder="Burkina Faso" wire:model="country">
									@error('country') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="city">Province<span>*</span></label>
									<input type="text" name="province" value="" placeholder="Province" wire:model="province">
									@error('province') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="city">Ville<span>*</span></label>
									<input type="text" name="city" value="" placeholder="Nom de la Ville" wire:model="city">
									@error('city') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="zip-code">Code postal/ ZIP:</label>
									<input type="number" name="zip-code" value="" placeholder="Votre code postal" wire:model="zipcode">
									@error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form fill-wife">
									<label class="checkbox-field">
										<input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
										<span>Expédier à une Addresse differente ?</span>
									</label>
								</p>
							</div>
						</div>
					</div>

					@if($ship_to_different)
						<div class="col-md-12">
							<div class="wrap-address-billing">
								<h3 class="box-title">Addresse Livraison</h3>
								<div class="billing-adress">
									<p class="row-in-form">
										<label for="fname">Nom<span>*</span></label>
										<input type="text" name="fname" value="" placeholder="Votre Nom" wire:model="s_firstname">
										@error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="lname">Prénom<span>*</span></label>
										<input type="text" name="lname" value="" placeholder="Votre Prénom" wire:model="s_lastname">
										@error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="email">Adresse Email:</label>
										<input type="email" name="email" value="" placeholder="Saisissez votre email" wire:model="s_email">
										@error('s_email') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="phone">Numéro de Téléphone<span>*</span></label>
										<input type="number" name="phone" value="" placeholder="format Complet" wire:model="s_mobile">
										@error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Ligne 1</label>
										<input type="text" name="add" value="" placeholder="Secteur 1" wire:model="s_line1">
										@error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Ligne 2</label>
										<input type="text" name="add" value="" placeholder="Secteur 2" wire:model="s_line2">
									</p>
									<p class="row-in-form">
										<label for="country">Pays<span>*</span></label>
										<input type="text" name="country" value="" placeholder="Burkina Faso" wire:model="s_country">
										@error('s_country') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">Province</label>
										<input type="text" name="province" value="" placeholder="province" wire:model="s_province">
										@error('s_province') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">Ville<span>*</span></label>
										<input type="text" name="city" value="" placeholder="Nom de la Ville" wire:model="s_city">
										@error('s_city') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="zip-code">Code postal/ ZIP:</label>
										<input type="number" name="zip-code" value="" placeholder="Votre code postal" wire:model="s_zipcode">
										@error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
									</p>
								</div>
							</div>
						</div>
					@endif


					<div class="summary summary-checkout">
						<div class="summary-item payment-method">
							<h4 class="title-box">Mode de paiement</h4>
							@if($paymentmode == 'card')
							<div class="wrap-address-billing">
								@if(Session::has('stripe_error'))
								<div class="alert alert-danger" role="alert">{{Session::get('stripe_error')}}</div>
								@endif
								<p class="row-in-form">
									<label for="card-no">Numéro de la Carte:</label>
									<input type="text" name="zip-code" value="" placeholder="Numéro de la Carte:" wire:model="card_no">
									@error('card_no') <span class="text-danger">{{$message}}</span> @enderror
								</p>

								<p class="row-in-form">
									<label for="exp-month">Mois d'Expiration</label>
									<input type="text" name="zip-code" value="" placeholder="MM" wire:model="exp_month">
									@error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
								</p>

								<p class="row-in-form">
									<label for="exp-year">Année d'Expiration</label>
									<input type="text" name="zip-code" value="" placeholder="AAAA" wire:model="exp_year">
									@error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
								</p>

								<p class="row-in-form">
									<label for="cvc">CVC:</label>
									<input type="password" name="zip-code" value="" placeholder="CVC:" wire:model="cvc">
									@error('cvc') <span class="text-danger">{{$message}}</span> @enderror
								</p>
							</div>
							@endif
							<div class="choose-payment-methods">
								<label class="payment-method">
									<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
									<span>Payment à la Livraison</span>
									<span class="payment-desc">Commander maintenant et Payer à la livraison</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
									<span>Debit / Credit Card</span>
									<span class="payment-desc">Payez via votre Carte de credit</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
									<span>Paypal</span>
									<span class="payment-desc">Vous pouvez payer avec votre carte de crédit</span>
									<span class="payment-desc">carte si vous n'avez pas de Copte PayPal</span>
								</label>
								@error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
							</div>
							@if(Session::has('checkout'))
							<p class="summary-info grand-total"><span>Total</span> <span class="grand-total-price">{{Session::get('checkout')['total']}} FCFA</span></p>
							@endif

							@if($errors->isEmpty())
								<div wire:ignore id="processing" style="font-size: 22px; margin-bottom:20px; padding-left:37px;color:green;display:none;">
									<i class="fa fa-spinner fa-pulse fa-fw"></i>
									<span>Chargement...</span>
								</div>
							@endif

							<button type="submit" class="btn btn-medium">Passer une commande</button>
						</div>
						<div class="summary-item shipping-method">
							<h4 class="title-box f-title">Mode d'expédition</h4>
							<p class="summary-info"><span class="title">Tarif fixe</span></p>
							<p class="summary-info"><span class="title">Fixe 0 FCFA</span></p>

						</div>
					</div>
				</div>
			</form>
		</div>
		<!--end main content area-->
	</div>
	<!--end container-->

</main>