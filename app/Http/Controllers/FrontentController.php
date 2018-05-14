<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\TradeMark;
use App\Models\TradeMarkCategory;
use App\Models\Category;
use App\Models\Product;

class FrontentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();

        return view('frontend.trangchu')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
        ]);
    }
    public function products($id)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $products = TradeMark::find($id)->product;
        $aaa = TradeMark::find($id);
        return view('frontend.list')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'products'   => $products,
            'aaa'        => $aaa,
        ]);
    }
    public function details($id)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $products   = Product::find($id);
        $productdetails = Product::find($id)->detail;
        return view('frontend.details')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'products'        => $products,
            'productdetails'  => $productdetails,
        ]);
    }
    public function cart()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        return view('frontend.cart')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
        ]);
    }
    public function cartstore(Request $request)
    {
        Cart::add($request->id, $request->product_name, 1, $request->price)
            ->associate('App\Models\Product');
        session()->flash('notif', 'ĐÃ ĐƯỢC THÊM VÀO GIỎ HÀNG');
        return redirect()->route('cart.index');
    }
    public function cartdelete($id)
    {
        Cart::remove($id);
        return back()->with('notif', 'ĐÃ XÓA SẢN PHẨM');
    }
}
