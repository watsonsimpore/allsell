<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\CatBanner;
use Livewire\WithFileUploads;

class AdminEditHomeCategoryBannerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $homecategorybanner_id;

    public function mount($homecategorybanner_id)
    {
        $slider = CatBanner::find($homecategorybanner_id);
        $this->title = $slider->title;        
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;

    }
    public function UpdateCatBanner()
    {
        $slider = CatBanner::find($this->homecategorybanner_id);
        $slider->title = $this->title;        
        $slider->link = $this->link;
        if($this->newimage)
        {
            $imagename = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('sliders', $imagename);
            $slider->image = $imagename;
        }
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message_cat', 'La bannière a été modifié avec success' );
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-home-category-banner-component')->layout('layouts.base');
    }
}
