<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ShortSlider;
use Livewire\WithFileUploads;

class AdminEditShortSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $s_slide_id;

    public function mount($s_slide_id)
    {
        $slider = ShortSlider::find($s_slide_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;

    }
    public function UpdateShortSlide()
    {
        $slider = ShortSlider::find($this->s_slide_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
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
        return view('livewire.admin.admin-edit-short-slider-component')->layout('layouts.base');
    }
}
