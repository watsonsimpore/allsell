<?php

namespace App\Http\Livewire\Admin;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\support\Str;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $category_id;
    public $icon;

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

    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'icon' => 'required|mimes:svg,png'
        ]);

        if($this->category_id)
        {
            $category = new Subcategory();
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->category_id = $this->category_id;
            $category->save();
        }
        else
        {
            $category= new Category();
            $category->name = $this->name;
            $category->slug = $this->slug;
            
            $iconName = $category->slug.'.'.$this->icon->extension();
            $this->icon->storeAs('icons',$iconName);
            $category->icon = $iconName;
            
            $category->save();
        }        
        session()->flash('message','La Categorie a été créer avec succes!');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
