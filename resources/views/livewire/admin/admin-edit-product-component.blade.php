<div>
    <div class="container" style="padding:30px 0;">
        <div class="col-md-12">
            <div class="pannel-heading">
                <div class="row">
                    <div class="col-md-6">
                        Modifier Un produit
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Tous Les Produits</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nom de Produit</label>
                        <div class="col-md-4">
                           <input type="text" placeholder="Nom de Produit" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                           @error('name') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Slug de Produit</label>
                        <div class="col-md-4">
                           <input type="text" placeholder="Slug de Produit" class="form-control input-md" wire:model="slug"/>
                           @error('slug') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Petite Description</label>
                        <div class="col-md-4" wire:ignore>
                           <textarea class="form-control" id="short_description" placeholder="Petite Description" wire:model="short_description"></textarea>
                           @error('short_description') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-4" wire:ignore>
                           <textarea class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                           @error('description') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Prix regulier</label>
                        <div class="col-md-4">
                           <input type="text" placeholder="Prix regulier" class="form-control input-md" wire:model="regular_price"/>
                           @error('regular_price') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Prix de Promo</label>
                        <div class="col-md-4">
                           <input type="text" placeholder="Prix de Vente" class="form-control input-md" wire:model="sale_price"/>
                           @error('sale_price') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">SKU</label>
                        <div class="col-md-4">
                           <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                           @error('SKU') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Stock</label>
                        <div class="col-md-4">
                           <select class="form-control" wire:model="stock_status">
                               <option value="instock">En Stock</option>
                               <option value="outofstock">hors stock</option>
                           </select>
                           @error('stock_status') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Featured</label>
                        <div class="col-md-4">
                           <select class="form-control" wire:model="featured">
                               <option value="0">Non</option>
                               <option value="1">Oui</option>
                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Quantité</label>
                        <div class="col-md-4">
                           <input type="text" placeholder="Quantité" class="form-control input-md" wire:model="quantity"/>
                           @error('quantity') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Image du Produit</label>
                        <div class="col-md-4">
                           <input type="file" class="input-file" wire:model="newimage"/>
                           @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                           @else
                                <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />
                           @endif
                           @error('newimage') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Galerie du Produit</label>
                        <div class="col-md-4">
                           <input type="file" class="input-file" wire:model="newimages" multiple/>
                           @if($newimages)
                                @foreach($newimages as $newimage)
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                                    @endif
                                @endforeach
                           @else
                                @foreach($images as $image)
                                    @if($image)
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />
                                    @endif
                                @endforeach
                           @endif                           
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Categorie</label>
                        <div class="col-md-4">
                           <select class="form-control" wire:model="category_id"  wire:change="changeSubcategory">
                               <option value="">Selectionner la Categorie</option>
                               @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                               @endforeach
                               @error('category_id') <p class ="text-danger">{{$message}}</p> @enderror                               
                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Sous Categorie</label>
                        <div class="col-md-4">
                           <select class="form-control" wire:model="scategory_id" >
                               <option value="0">Selectionner la Categorie</option>
                               @foreach ($scategories as $scategory)
                                    <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                               @endforeach                               
                           </select>
                           @error('scategory_id') <p class ="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Attributs de Ptoduits</label>
                        <div class="col-md-3">
                           <select class="form-control" wire:model="attr">
                               <option value="0">Selectionner l'Attibut</option>
                               @foreach ($pattributes as $pattribute)
                                    <option value="{{$pattribute->id}}">{{$pattribute->name}}</option>
                               @endforeach                               
                           </select>                           
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-info" wire:click.prevent="add">Ajouter</button>
                        </div>
                    </div>

                    @foreach($inputs as $key => $value)
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}</label>
                            <div class="col-md-3">
                            <input type="text" placeholder="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" class="form-control input-md" wire:model="attribute_values.{{$value}}"/>                            
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="delete({{$key}})">Supprimer</button>
                            </div>
                        </div>
                    @endforeach

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

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description',sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description',d_data);
                    });
                }
            });
        });
    </script>
@endpush