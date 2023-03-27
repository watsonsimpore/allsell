 <div>
    <!-- Home Slider -->
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tous Les Slides
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Ajouter Un Slider</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Sous-titre</th>
                                    <th>Prix</th>
                                    <th>Lien</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                    <t>
                                        <td>{{$slider->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{$slider->image}}" width="120" /></td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->subtitle}}</td>
                                        <td>{{$slider->price}}</td>
                                        <td>{{$slider->link}}</td>
                                        <td>{{$slider->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{$slider->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.edithomeslider',['slide_id'=>$slider->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" wire:click.prevent="deleteSlide({{$slider->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Home Slider -->


    <!-- Home Banner -->
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Toutes Les Bannières
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addshortslider')}}" class="btn btn-success pull-right">Ajouter Une Bannière</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message_short'))
                            <div class="alert alert-success" role="alert">{{Session::get('message_short')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Sous-titre</th>
                                    <th>Prix</th>
                                    <th>Lien</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($s_sliders as $s_slider)
                                    <t>
                                        <td>{{$s_slider->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{$s_slider->image}}" width="120" /></td>
                                        <td>{{$s_slider->title}}</td>
                                        <td>{{$s_slider->subtitle}}</td>
                                        <td>{{$s_slider->price}}</td>
                                        <td>{{$s_slider->link}}</td>
                                        <td>{{$s_slider->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{$s_slider->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.editshortslider',['s_slide_id'=>$s_slider->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Etes vous sur, de vouloir Supprimer cette Bannière?') || event.stopImmediatePropagation()" wire:click.prevent="deleteShortSlide({{$s_slider->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div></div><!-- End Home Banner -->

    <!-- Lasted Banner -->
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Toutes Bannieres de Nouveaux produits
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addlastedbaner')}}" class="btn btn-success pull-right">Ajouter Une Lasted Bannière</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message_lasted'))
                            <div class="alert alert-success" role="alert">{{Session::get('message_lasted')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Titre</th>                                    
                                    <th>Lien</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lastedbanners as $lastedbanner)
                                    <t>
                                        <td>{{$lastedbanner->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{$lastedbanner->image}}" width="120" /></td>
                                        <td>{{$lastedbanner->title}}</td>                                        
                                        <td>{{$lastedbanner->link}}</td>
                                        <td>{{$lastedbanner->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{$lastedbanner->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.editlastedbanner',['lastedbanner_id'=>$lastedbanner->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Etes vous sur, de vouloir Supprimer cette LastedBannière?') || event.stopImmediatePropagation()" wire:click.prevent="LastedBanner({{$lastedbanner->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div></div><!-- End Lasted Banner -->


    <!-- Categoy Banner -->
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Toutes Bannieres de Nouveaux produits
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addhomecategorybanner')}}" class="btn btn-success pull-right">Ajouter Un CategoryBanner</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message_cat'))
                            <div class="alert alert-success" role="alert">{{Session::get('message_cat')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Titre</th>                                    
                                    <th>Lien</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($homecategorybanners as $homecategorybanner)
                                    <t>
                                        <td>{{$homecategorybanner->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{$homecategorybanner->image}}" width="120" /></td>
                                        <td>{{$homecategorybanner->title}}</td>                                        
                                        <td>{{$homecategorybanner->link}}</td>
                                        <td>{{$homecategorybanner->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{$homecategorybanner->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.edithomecategorybanner',['homecategorybanner_id'=>$homecategorybanner->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Etes vous sur, de vouloir Supprimer cette Bannière?') || event.stopImmediatePropagation()" wire:click.prevent="DeleCatBanner({{$homecategorybanner->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div></div><!-- End Lasted Banner -->

</div>
