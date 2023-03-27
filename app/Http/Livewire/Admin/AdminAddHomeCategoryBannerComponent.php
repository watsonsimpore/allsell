<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\CatBanner;
use Livewire\WithFileUploads;

class AdminAddHomeCategoryBannerComponent extends Component
{

   use WithFileUploads;
   public $title;   
   public $link;
   public $image;
   public $status;
   
   public function mount()
   {
        $this->status = 0;
   }

   public function addHomeCategoryBanner()
   {
       $slider = new CatBanner();
       $slider->title = $this->title;       
       $slider->link = $this->link;
       $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
       $this->image->storeAs('sliders', $imagename);
       $slider->image = $imagename;
       $slider->status = $this->status;
       $slider->save();
       session()->flash('message','Le slide a été créer avec Succes!');
   }


    public function render()
    {
        return view('livewire.admin.admin-add-home-category-banner-component')->layout('layouts.base');
    }
}
