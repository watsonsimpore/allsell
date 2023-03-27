<?php

namespace App\Http\Livewire\Admin;

use App\Models\CatBanner;
use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\ShortSlider;
use App\Models\LastedBanner;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlide($slide_id)
    {
        $slider = HomeSlider::find($slide_id);
        $slider->delete();
        session()->flash('message','Le slide a été supprimer Avec Success!');
    }

    public function deleteShortSlide($s_slider_id)
    {
        $s_slider = ShortSlider::find($s_slider_id);
        $s_slider->delete();
        session()->flash('message_short','Le slide a été supprimer Avec Success!');
    }

    public function LastedBanner($lastedbanner_id)
    {
        $banner = LastedBanner::find($lastedbanner_id);
        $banner->delete();
        session()->flash('message_lasted','Le slide a été supprimer Avec Success!');
    }

    public function DeleCatBanner($homecategorybanner_id)
    {
        $homecat = CatBanner::find($homecategorybanner_id);
        $homecat->delete();
        session()->flash('message_lasted','Le slide a été supprimer Avec Success!');
    }

    public function render()
    {
        $sliders = HomeSlider::all();
        $s_sliders = ShortSlider::all();
        $lastedbanners = LastedBanner::all();
        $homecategorybanners = CatBanner::all();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders,'s_sliders'=>$s_sliders,'lastedbanners'=>$lastedbanners,'homecategorybanners'=>$homecategorybanners])->layout('layouts.base');
    }
}
