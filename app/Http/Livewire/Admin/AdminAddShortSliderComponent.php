<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ShortSlider;
use Livewire\WithFileUploads;

class AdminAddShortSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount()
   {
        $this->status = 0;
   }

   public function addShortSlide()
   {
       $slider = new ShortSlider();
       $slider->title = $this->title;
       $slider->subtitle = $this->subtitle;
       $slider->price = $this->price;
       $slider->link = $this->link;
       $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
       $this->image->storeAs('sliders', $imagename);
       $slider->image = $imagename;
       $slider->status = $this->status;
       $slider->save();
       session()->flash('message','Le short slide a été créer avec Succes!');
   }


    public function render()
    {
        return view('livewire.admin.admin-add-short-slider-component')->layout('layouts.base');
    }
}
