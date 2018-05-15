<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\TradeMark;
use App\Models\TradeMarkCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use Session;
class FrontentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
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
    public function cartupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }
    public function checkout(Request $request)
    {   
        $item = Cart::content();
        $customer = new Order;
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->customer_address = $request->customer_address;
        $customer->customer_phone = $request->customer_phone;
        $customer->billing_discount = 20;
        $customer->billing_discount_code = 'aut'; 
        $customer->billing_subtotal = Cart::subtotal();
        $customer->billing_tax = 10.00;
        $customer->billing_total = Cart::total();
        $customer->payment_method = $request->payment;
        $customer->save();

        foreach ($item as $item){
            $oderproduct = new OrderProduct;
            $oderproduct->order_id = $customer->id;
            $oderproduct->product_id = $item->id;
            $oderproduct->qty = $item->qty;
            $oderproduct->discount = 0; 
            $oderproduct->save();
        }
        return redirect()->route('cart.index')->with('notif', 'ĐẶT HÀNG THÀNH CÔNG');
    }
}
