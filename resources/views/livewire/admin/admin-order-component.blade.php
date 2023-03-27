<div>
    <div class="container" style="padding:30px 0;">
        <style>
           nav svg{
            height:20px;
           }
           nav .hidden{
               display: block !important;
           }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tous Les Commandes
                    </div>
                    <div class="panel-body">
                        @if(Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sous Total</th>
                                    <th>Reduction</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Code ZIP</th>
                                    <th>Status</th>
                                    <th>Date de Commande</th>
                                    <th colspan="2" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->subtotal}} FCFA</td>
                                        <td>{{$order->discount}} FCFA</td>
                                        <td>{{$order->tax}} FCFA</td>
                                        <td>{{$order->total}} FCFA</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sa">Details</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">livré</a></li>
                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Annulé</a></li>
                                                    </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
