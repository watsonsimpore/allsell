<?php

namespace App\Http\Livewire\Admin;

use App\Models\LastedBanner;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddLastedBannerComponent extends Component
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

   public function addLastedBanner()
   {
       $slider = new LastedBanner();
       $slider->title = $this->title;      
       $slider->link = $this->link;
       $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
       $this->image->storeAs('sliders', $imagename);
       $slider->image = $imagename;
       $slider->status = $this->status;
       $slider->save();
       session()->flash('message','Le Lasted banner a été créer avec Succes!');
   }



    public function render()
    {
        return view('livewire.admin.admin-add-lasted-banner-component')->layout('layouts.base');
    }
}
