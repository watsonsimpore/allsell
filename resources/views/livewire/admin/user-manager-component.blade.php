<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important; 
        }
    </style>
    <div class="container" style="padding:30px 0">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-defaut">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-4">
                           Tous Les Utilisateurs
                       </div>
                       <div class="col-md-4">
                           <a href="#" class="btn btn-success pull-right">Ajouter</a>
                       </div>
                       <div class="col-md-4">
                           <input type="text" class="form-control" placeholder="Rechercher..." wire:model="searchTerm"/>
                       </div>
                   </div> 
                </div>
                <div class ="panel-body ">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class= "table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Profil</th>
                                <th>Nom & Prenom</th>                                
                                <th>Email</th>                                                                                                
                                <th>Utype</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                    @if($user->profile)
                                        <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="40" />
                                    @else
                                        <img src="{{asset('assets/images/profile/default.png')}}" width="40" />
                                    @endif
                                    </td>                                    
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>                                    
                                    <td>{{$user->utype}}</td>
                                   
                                    <td>
                                        <a href="#"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        <a href="#" onclick="confirm('Etes vous sur, de vouloir Supprimer ce Utilisateur?') || event.stopImmediatePropagation()" style="margin-left:10px;" wire:click.prevent="deleteUser({{$user->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                       {{$users->links()}}
                </div>  
            </div>
        </div>
    </div>
</div>
