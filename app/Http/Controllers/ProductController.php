<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\TradeMark;
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
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $trademarks = TradeMark::all();
        return view('admin.products.create',compact('categories','trademarks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $detail = $request->except('_token','product_name','price','category_id','trade_mark_id','description');
        $product = Product::create($input);
        $img = [];
        if(isset($input['image'])) {
                foreach($input['image'] as $image)
                {
                    $file = $image;
                    $fileName = uniqid('_product') . '.' . $file->getClientOriginalName();
                    $filePath = 'images/product/';
                    $fileUpload = $file->move(storage_path('app/public/' . $filePath), $fileName);
                    $fullPath = asset('storage/' . $filePath . $fileName);
                    $img[] = $fullPath;
                }
            }
        $detail['image'] = json_encode($img);
        $product->detail()->create($detail);
        return redirect()->route('products.index');
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
    public function edit($id)
    {
        $categories = Category::all();
        $trademarks = TradeMark::all();
        $product = Product::with('detail')->find($id);
        return view('admin.products.edit',compact('product','categories','trademarks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->detail->delete();
        $product->delete();
        return redirect()->route('products.index');
    }
}
