<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\LastedBanner;
use Livewire\WithFileUploads;

class AdminEditLastedBannerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $lastedbanner_id;

    public function mount($lastedbanner_id)
    {
        $slider = LastedBanner::find($lastedbanner_id);
        $this->title = $slider->title;        
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;

    }
    public function UpdateLastedBanner()
    {
        $slider = LastedBanner::find($this->lastedbanner_id);
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
        session()->flash('message', 'La bannière a été modifié avec success' );
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-lasted-banner-component')->layout('layouts.base');
    }
}
