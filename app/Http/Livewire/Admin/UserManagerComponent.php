<?php

namespace App\Http\Livewire\Admin;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserManagerComponent extends Component
{
    use WithPagination;

    public $searchTerm;

    public function deleteUser($id)
    {
        $user = User::find($id);        
        $user->delete();
        session()->flash('message','Utilisateur supprimer avec sucess!');
    }



    
    public function render()
    {
        $search = '%'. $this->searchTerm . '%';        
        $users = User::Where('name','LIKE',$search)
                        ->orWhere('email','LIKE',$search)                                                
                        ->orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.user-manager-component',['users'=>$users])->layout('layouts.base');
    }
}
