<x-base-layout>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Acceuil</a></li>
                    <li class="item-link"><span>Réinitialiser Mot de Passe</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">						
                            <div class="login-form form-item form-stl">
                           
                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login"  method="POST" action="{{route('password.update')}}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Réinitialiser Mot de Passe</h3>										
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Addresse Email:</label>
                                        <input type="email" id="frm-login-uname" name="email" placeholder="Entrer votre Email" value="{{$request->email}}" required autofocus>
                                    </fieldset>  
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="password">Mot de passe *</label>
                                        <input type="password" id="password" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="password_confirmation">Confirmer le mot de passe *</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required autocomplete="new-password">
                                    </fieldset>                      
                                    <input type="submit" class="btn btn-submit" value="Réinitialiser le Mot de Passe" name="submit">
                                </form>
                            </div>												
                        </div>
                    </div><!--end main products area-->		
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
</x-base-layout>