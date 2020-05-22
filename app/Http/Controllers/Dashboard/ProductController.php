<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $imageNames = [];
        $this->validate($request, [
            'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $this->validateAttributes();
        //dd('validation done');
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'volume' => $request->volume,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'image1' => '',
            'image2' => '',
            'image3' => '',
            'category_id' => $request->category_id,
        ]);
        $this->fileProcess($imageNames, $request, $product);
        return redirect(route('dashboard.products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('dashboard.products.edit', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ?Product $product)
    {
        $imageNames = [];
        
        $this->validate($request, [
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $this->validateAttributes();
        
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'volume' => $request->volume,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        $this->fileProcess($imageNames, $request, $product);

        return redirect(route('dashboard.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('dashboard.products.index'));
    }

    public function validateAttributes() {
        return request()->validate([
            'name' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'volume' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }

    public function fileProcess(&$imageNames, Request $request, Product $product) {
        //check
        //process images
        // store them
        if(isset($request->image1)){
            $imageNames['image1'] = $request->file('image1')->getClientOriginalName() . '.' . $request->file('image1')->extension();
            $request->file('image1')->storeAs('public/products/', $imageNames['image1']);
            $product->image1 = 'storage/products/' . $imageNames['image1'];
            $product->save();
        }
        if(isset($request->image2)){
            $imageNames['image2'] = $request->file('image2')->getClientOriginalName() . '.' . $request->file('image2')->extension();
            $request->file('image2')->storeAs('public/products/', $imageNames['image2']);
            $product->image2 = 'storage/products/' . $imageNames['image2'];
            $product->save();
        }
        if(isset($request->image3)){
            $imageNames['image3'] = $request->file('image3')->getClientOriginalName() . '.' . $request->file('image3')->extension();
            $request->file('image3')->storeAs('public/products/', $imageNames['image3']);
            $product->image3 = 'storage/products/' . $imageNames['image3'];
        }   $product->save();
        return $imageNames;

    } 

    public function deleteProduct($id){
        // dd('kahled');
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
        // Product::destroy($id);
    }
}
