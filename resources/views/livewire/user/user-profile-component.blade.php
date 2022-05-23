<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profil
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($user->profile->image)
                            <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="100%" />
                        @else
                            <img src="{{asset('assets/images/profile/default.png')}}" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><b>Nom: </b>{{$user->name}}</p>
                        <p><b>Email: </b>{{$user->email}}</p>
                        <p><b>Telephone: </b>{{$user->profile->mobile}}</p>
                        <hr>
                        <p><b>Ligne 1: </b>{{$user->profile->line1}}</p>
                        <p><b>Ligne 2: </b>{{$user->profile->line2}}</p>
                        <p><b>Ville: </b>{{$user->profile->city}}</p>
                        <p><b>Province: </b>{{$user->profile->province}}</p>
                        <p><b>Pays: </b>{{$user->profile->country}}</p>
                        <p><b>Code ZIP: </b>{{$user->profile->zipcode}}</p>
                        <a href="{{route('user.editprofile')}}" class="btn btn-info pull-right">Mettre à jour le Profil</a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
