<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\TradeMark;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
        $products = Product::all();
        $stt = 0;
        if($request->has('search_category') && $request->get('search_category') != 0){
            $products = Product::searchCategory($request->get('search_category'));
            $stt = 1;
        }
        if($request->has('search_trademark') && $request->get('search_trademark') != 0){
            if($stt == 1){
                $products = $products->searchTrademark($request->get('search_trademark'));
            }else{
                $products = Product::searchTrademark($request->get('search_trademark'));
                $stt = 1;
            }
        }
        if($request->has('search_price') && $request->get('search_price') != 0){
             if($stt == 1){
                $products = $products->searchPrice($request->get('search_price'));
            }else{
                $products = Product::searchPrice($request->get('search_price'));
                $stt = 1;
            }
        }
        if($stt == 1){
            $products = $products->get();
        }
        $categories = Category::all();
        $trademarks = TradeMark::all();
        return view('admin.products.index',compact('products','categories','trademarks'));
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
    public function store(ProductRequest $request)
    {

        $input = $request->all();
        $detail = $request->except('_token','product_name','price','category_id','trade_mark_id','description');
        $product = Product::create($input);
        $img = [];
        if(isset($input['image1'])) {
                    $file = $input['image1'];
                    $fileName = uniqid('_product') . '.' . $file->getClientOriginalName();
                    $filePath = 'images/product/';
                    $fileUpload = $file->move(storage_path('app/public/' . $filePath), $fileName);
                    $fullPath = asset('storage/' . $filePath . $fileName);
                    $img[] = $fullPath;
            }
        if(isset($input['image2'])) {
                    $file = $input['image2'];
                    $fileName = uniqid('_product') . '.' . $file->getClientOriginalName();
                    $filePath = 'images/product/';
                    $fileUpload = $file->move(storage_path('app/public/' . $filePath), $fileName);
                    $fullPath = asset('storage/' . $filePath . $fileName);
                    $img[] = $fullPath;
            }
        if(isset($input['image3'])) {
                    $file = $input['image3'];
                    $fileName = uniqid('_product') . '.' . $file->getClientOriginalName();
                    $filePath = 'images/product/';
                    $fileUpload = $file->move(storage_path('app/public/' . $filePath), $fileName);
                    $fullPath = asset('storage/' . $filePath . $fileName);
                    $img[] = $fullPath;
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
    public function show($id)
    {
        $product = Product::with('detail')->find($id);
        return view('admin.products.show',compact('product'));
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
    public function update(ProductRequest $request,$id)
    {
        $input = $request->all();
        $detail = $request->except('_token','_method','product_name','price','category_id','trade_mark_id','description');
        $product = Product::find($id);
        $product->update($input);
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
        $product->detail()->update($detail);
        return redirect()->route('products.index');
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
