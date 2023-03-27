<div>
    
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-defaut">
                    <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Nouvelle Categorie
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">Toutes Les Catégories</a>
                        </div>
                    </div>
                    </div>
                    <div class="panel-body ">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom de la Catégorie</label>
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
                                <label class="col-md-4 control-label">Parent de la Category</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md" wire:model="category_id">
                                        <option value="">Néant</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Icon de la Category</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="icon" />
                                    @if($icon)
                                    <img src="{{$icon->temporaryUrl()}}" width="120" />
                                    @endif
                                    @error('icon') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                                                  
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>
                            </div>

                        </form>  
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
