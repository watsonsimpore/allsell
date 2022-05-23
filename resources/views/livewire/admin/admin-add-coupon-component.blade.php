<div>
    
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-defaut">
                    <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Ajouter Un Coupon</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.coupons')}}" class="btn btn-success ">Tous Les Coupons</a>
                        </div>
                    </div>
                    </div>
                    <div class="panel-body ">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeCoupon">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Code du Coupon</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Code du Coupon" class="form-control input-md" wire:model="code" />
                                    @error('code') <p class ="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Type du Coupon</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="type">
                                        <option value="">Selectionner</option>
                                        <option value="fixed">Fixée</option>
                                        <option value="percent">Pourcentage</option>
                                    </select>
                                    @error('type') <p class ="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Valeur du Coupon</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Valeur du Coupon" class="form-control input-md" wire:model="value"  />
                                    @error('value') <p class ="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Valeur du Panier</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Valeur du Panier" class="form-control input-md" wire:model="cart_value"  />
                                    @error('cart_value') <p class ="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date d'Expiration</label>
                                <div class="col-md-4" wire:ignore>
                                    <input type="text" id="expiry-date" placeholder="Date d'Expiration" class="form-control input-md" wire:model="expiry_date"/>
                                    @error('expiry_date') <p class ="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom de la Categorie</label>
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


@push('scripts')
    <script>
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change',function(ev){
                var data = $('#expiry-date').val();
                @this.set('expiry_date',data);
            });
        });
    </script>
@endpush