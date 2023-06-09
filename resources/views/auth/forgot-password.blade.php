<x-base-layout>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Acceuil</a></li>
                    <li class="item-link"><span>Mot de Passe Oublier</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">						
                            <div class="login-form form-item form-stl">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login"  method="POST" action="{{route('password.email')}}">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Mot de Passe Oublié</h3>										
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Addresse Email:</label>
                                        <input type="email" id="frm-login-uname" name="email" placeholder="Entrer votre Email" :value="old('email')" required autofocus>
                                    </fieldset>                        
                                    <input type="submit" class="btn btn-submit" value="Lien de Réinitialisation" name="submit">
                                </form>
                            </div>												
                        </div>
                    </div><!--end main products area-->		
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
</x-base-layout>