<div>
    
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-defaut">
                    <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Modifier Categorie
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">Toutes Les Categories</a>
                        </div>
                    </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateCategory">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom de la Categorie</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom de la catégorie" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
                                    @error('name') <p class ="text-danger">{{$message}}</p> @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom de la slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom de la slug" class="form-control input-md" wire:model="slug"  />
                                    @error('slug') <p class ="text-danger">{{$message}}</p> @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Categorie Parent</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Néant</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('slug') <p class ="text-danger">{{$message}}</p> @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Icon de Category</label>
                                <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="newicon"/>
                                @if($newicon)
                                        <img src="{{$newicon->temporaryUrl()}}" width="120"/>
                                @else
                                        <img src="{{asset('assets/images/icons')}}/{{$icon}}" width="120" />
                                @endif
                                @error('newicon') <p class ="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Action</label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </div>
                            </div>

                        </form>  
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
