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
                           Tous Les Produits
                       </div>
                       <div class="col-md-4">
                           <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Ajouter</a>
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
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Stock</th>
                                <th>Prix</th>
                                <th>Prix Promo</th>
                                <th>Categorie</th>
                                <th>Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"/></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        <a href="#" onclick="confirm('Etes vous sur, de vouloir Supprimer ce Produit?') || event.stopImmediatePropagation()" style="margin-left:10px;" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                    {{$products->links()}}   
                </div>  
            </div>
        </div>
    </div>
</div>
