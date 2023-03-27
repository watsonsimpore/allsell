<div>
   <div class="container" style="padding:30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ajouter Une Bannière Lasted
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">Tous les Slides</a>
                            </div>
                        </div>
                   </div>
                   <div class="panel-body">
                       @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</di>
                       @endif
                        <form class="form-horizontal" wire:submit.prevent="addLastedBanner">
                            <div class="form-group">
                              <label class="col-md-4 control-label">Titre</label>  
                              <div class="col-md-4">
                                  <input type="text" placeholder="Titre" class="form-control input-md" wire:model="title"/>
                              </div>
                            </div>
                              
                            <div class="form-group">
                              <label class="col-md-4 control-label">Lien</label>  
                              <div class="col-md-4">
                                  <input type="text" placeholder="Lien" class="form-control input-md" wire:model="link"/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Image</label>  
                              <div class="col-md-4">
                                  <input type="file" class="input-file" wire:model="image"/>
                                  @if($image)
                                  <img src="{{$image->temporaryUrl()}}" width="120" />
                                  @endif
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Status</label>  
                              <div class="col-md-4">
                                  <select class="form-control" wire:model="status">
                                      <option value="0">Inactive</option>
                                      <option value="1">Active</option>
                                  </select>
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

