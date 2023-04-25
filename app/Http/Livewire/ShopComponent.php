<?php

namespace App\Http\Livewire;
// use Livewire\Product;
use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\ProductAttribute;
use App\Models\Subcategory;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;


class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public $slug;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 18;

        $this->min_price = 1;
        $this->max_price = 100000;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Produit ajouté au panier!');
        return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                return;
            }
        }
    }


    use WithPagination;
    public function render()
    {

        if ($this->sorting == 'date') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == "price") {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == "price-desc") {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        $categories = Category::all();
        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }
        $producty = Product::where('slug', $this->slug)->first();
        $popuplar_products = Product::inRandomOrder()->limit(8)->get();
        $subcategories = Subcategory::inRandomOrder()->limit(6)->get();
        $p_attributes = ProductAttribute::inRandomOrder()->limit(6)->get();

        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories, 'producty' => $producty, 'popular_products' => $popuplar_products, 'subcategories' => $subcategories, 'p_attributes' => $p_attributes])->layout("layouts.base");
    }
}
