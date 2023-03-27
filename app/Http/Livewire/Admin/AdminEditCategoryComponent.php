<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $scategory_id;
    public $icon;
    public $newicon;

    public function mount($category_slug,$scategory_slug=null)
    {
        if($scategory_slug)
        {
            $this->scategory_slug = $scategory_slug;
            $scategory = Subcategory::where('slug',$scategory_slug)->first();
            $this->scategory_id = $scategory->id;
            $this->category_id = $scategory->category_id;
            $this->name =  $scategory->name;
            $this->slug = $scategory->slug;
        }
        else
        {
            $this->category_slug = $category_slug;
            $category = Category::where('slug',$category_slug)->first();
            $this->category_id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;
            $this->icon = $category->icon;
        }
        
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'icon' => 'required|mimes:svg,png'
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'icon' => 'required|mimes:svg,png'
        ]);
        if($this->scategory_id)
        {
            $scategory = Subcategory::find($this->scategory_id);
            $scategory->name = $this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_id;
            $scategory->save();            
        }
        else
        {
            $category = Category::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;

            if($this->newicon)
            {
                unlink('assets/images/icons'.'/'.$category->icon);
                $iconName = Carbon::now()->timestamp.'.'.$this->newicon->extension();
                $this->newicon->storeAs('icons',$iconName);
                $category->icon = $iconName; 
            }
            $category->save();
        }
        session()->flash('message','La Categorie a été modifier avec success!');

        
    }

    
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
