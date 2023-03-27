<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('order_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Details de Commande
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('user.orders')}}" class="btn btn-success pull-right">Mes Commandes</a>
                                @if($order->status == 'ordered')
                                    <a href="#" onclick="confirm('Etes vous sur, de vouloir Annuler la Commande ?') || event.stopImmediatePropagation()" wire:click.prevent="cancelOrder" style="margin-right:20px;" class="btn btn-warning pull-right">Annuler la commande</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <th>Id Commande</th>
                            <td>{{$order->id}}</td>
                            <th>Date Commande</th>
                            <td>{{$order->created_at}}</td>
                            <th>Status</th>
                            <td>{{$order->status}}</td>
                            @if($order->status == 'delivered')
                                <th>Date de livraison</th>
                                <td>{{$order->delivered_date}}</td>
                            @elseif($order->status == 'canceled')
                                <th>Date d'Annulation</th>
                                <td>{{$order->canceled_date}}</td>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Article de Commande
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                                <h3 class="box-title">Nom des Produits</h3>
                                <ul class="products-cart">
                                    @foreach($order->orderItems as $item)
                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product" href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                            </div>
                                            @if($item->options)
                                            {
                                                <div class="product-name">
                                                    @foreach(unserialize($item->options) as $key => $value)
                                                        <p><b>{{$key}}:{{$value}}</b></p>
                                                    @endforeach
                                                </div>
                                            }
                                            @endif
                                            <div class="price-field produtc-price"><p class="price">{{$item->price}} FCFA</p></div>
                                            <div class="quantity">                                            
                                                <h5>{{$item->quantity}}</h5>
                                            </div>
                                            <div class="price-field sub-total"><p class="price">{{$item->price * $item->quantity}} FCFA</p></div>
                                            @if($order->status == 'delivered' && $item->rstatus == false)
                                                <div class="price-field sub-total"><p class="price"><a href="{{route('user.review',['order_item_id'=>$item->id])}}">Donner un Avis</a></p></div>
                                            @endif                                                                                
                                        </li>
                                    @endforeach                										
                                </ul>                            
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4>Recapitulatifs Commandes</h4>
                                <p class="summary-info"><span class="title">Sous Total</span><b class="index">{{$order->subtotal}} FCFA</b></p>
                                <p class="summary-info"><span class="title">Taxe</span><b class="index">{{$order->tax}} FCFA</b></p>
                                <p class="summary-info"><span class="title">Livraison</span><b class="index">Livraison Gratuite</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">{{$order->total}} FCFA</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details de Billings
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Nom</th>
                                <td>{{$order->firstname}}</td>
                                <th>Prenom</th>
                                <td>{{$order->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>{{$order->mobile}}</td>
                                <th>Email</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Ligne 1</th>
                                <td>{{$order->line1}}</td>
                                <th>Ligne 2</th>
                                <td>{{$order->line2}}</td>
                            </tr>
                            <tr>
                                <th>Ville</th>
                                <td>{{$order->city}}</td>
                                <th>Province</th>
                                <td>{{$order->province}}</td>
                            </tr>
                            <tr>
                                <th>Pays</th>
                                <td>{{$order->country}}</td>
                                <th>Code ZIP</th>
                                <td>{{$order->zipcode}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($order->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details de Livraison
                        </div>
                        <div class="panel-body">
                        <table class="table">
                                <tr>
                                    <th>Nom</th>
                                    <td>{{$order->shipping->firstname}}</td>
                                    <th>Prenom</th>
                                    <td>{{$order->shipping->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Telephone</th>
                                    <td>{{$order->shipping->mobile}}</td>
                                    <th>Email</th>
                                    <td>{{$order->shipping->email}}</td>
                                </tr>
                                <tr>
                                    <th>Ligne 1</th>
                                    <td>{{$order->shipping->line1}}</td>
                                    <th>Ligne 2</th>
                                    <td>{{$order->shipping->line2}}</td>
                                </tr>
                                <tr>
                                    <th>Ville</th>
                                    <td>{{$order->shipping->city}}</td>
                                    <th>Province</th>
                                    <td>{{$order->shipping->province}}</td>
                                </tr>
                                <tr>
                                    <th>Pays</th>
                                    <td>{{$order->shipping->country}}</td>
                                    <th>Code ZIP</th>
                                    <td>{{$order->shipping->zipcode}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Les Transactions
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Mode de Transaction</th>
                                <td>{{$order->transaction->mode}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$order->transaction->status}}</td>
                            </tr>
                            <tr>
                                <th>Date de Transaction</th>
                                <td>{{$order->transaction->created_at}}</td>
                            </tr>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
