<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(18);
        if (!$products) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->SKU = $request->SKU;
        $product->stock_status = $request->stock_status;
        $product->featured = $request->featured;
        $product->quantity = $request->quantity;

        $imageName = Carbon::now()->timestamp . '.' . $request->image->extension();
        $request->image->storeAs('products', $imageName);
        $product->image = $imageName;
        $product->image = asset('assets/images/products/'.$product->image);


            if($request->images)
            {
                $imagesname = '';
                foreach($request->images as $key=>$image)
                {
                    $imgName = Carbon::now()->timestamp. $key. '.' .$image->extension();
                    $image->storeAs('products',$imgName);
                    $imagesname = $imagesname.','.$imgName;
                }
                $product->images =$imagesname;
            }

        $product->category_id = $request->category_id;
        if ($request->scategory_id) {
            $product->subcategory_id = $request->scategory_id;
        }

        if ($product->save()) {
            return new ProductResource($product);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showBySlug($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return new ProductResource($product);
    }

    public function showByCategory_ID($category_id)
    {
        $products= Product::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate(18);
        if (!$products) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return new ProductResource($products);
    }

    public function popular_products()
    {
        $products = Product::popular()->get();
        if (!$products) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return new ProductResource($products);
    }


    public function sale_products()
    {
        $products = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        if (!$products) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return new ProductResource($products);
    }

    public function lasted_products()
    {
        $products = Product::orderBy('created_at','DESC')->get()->take(8);
        if (!$products) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return new ProductResource($products);
    }
}
