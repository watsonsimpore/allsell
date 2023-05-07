<?php

namespace App\Http\Livewire;
// use Livewire\Product;
use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;
use App\Models\ProductAttribute;


class SearchComponent extends Component
{

    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public $search;
    public $product_cat;
    public $product_cat_id;

    public $slug;


    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;

        $this->min_price = 1;
        $this->max_price = 100000;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));

    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Produit ajouté au panier!');
        return redirect()->route('product.cart');
    }


    use WithPagination;
    public function render()
    {
        // shop page  filter
        if ($this->sorting == 'date') {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == "price") {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == "price-desc") {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->whereBetween('regular_price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        // search filter

        // if ($this->sorting == 'date') {
        //     $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        // } else if ($this->sorting == "price") {
        //     $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        // } else if ($this->sorting == "price-desc") {
        //     $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        // } else {
        //     $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        // }

        $categories = Category::all();
        $producty = Product::where('slug', $this->slug)->first();
        $subcategories = Subcategory::inRandomOrder()->limit(6)->get();
        $p_attributes = ProductAttribute::inRandomOrder()->limit(6)->get();
        $popuplar_products = Product::inRandomOrder()->limit(6)->get();

        // $products = Product::paginate(12);
        return view('livewire.search-component', ['products' => $products, 'categories' => $categories,'producty' => $producty, 'subcategories' => $subcategories, 'p_attributes' => $p_attributes, 'popuplar_products' => $popuplar_products])->layout("layouts.base");
    }
}
