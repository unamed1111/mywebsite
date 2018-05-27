<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\TradeMark;
use App\Models\TradeMarkCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\collection;
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
        $product    = Product::inRandomOrder()->take(8)->get();
        return view('frontend.trangchu')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'product'    => $product,
        ]);
    }
    public function register()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        return view('frontend.register')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
        ]);
    }
    public function login()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        return view('frontend.login')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
        ]);
    }
    public function products($id_category, $id_trademark, $value, $price, $energy)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        if ($value==1) {
            if($energy==2){
                $products = Product::where('category_id',$id_category)->where('trade_mark_id',$id_trademark)->orderBy('price', 'DESC')->get();
            }
            else{
                $detail = ProductDetail::where('energy',$energy)->pluck('product_id')->toArray();
                $products = Product::where('category_id',$id_category)->where('trade_mark_id',$id_trademark)->whereIn('id',$detail)->orderBy('price', 'DESC')->get();
            }         
            return view('frontend.products')->with([
                    'trademarks' => $trademarks,
                    'categories' => $categories,
                    'products'   => $products,
                    'id_category'=> $id_category,
                    'id_trademark'=>$id_trademark,
                    'value'      => $value,
                    'energy'     => $energy,
            ]);
        }
        else{

            if($energy==2){
                $products = Product::where('category_id',$id_category)->where('trade_mark_id',$id_trademark)->orderBy('price', 'ASC')->get();
            }
            else{
                $detail = ProductDetail::where('energy',$energy)->pluck('product_id')->toArray();
                $products = Product::where('category_id',$id_category)->where('trade_mark_id',$id_trademark)->whereIn('id',$detail)->orderBy('price', 'ASC')->get();
            }
            return view('frontend.products')->with([
                    'trademarks' => $trademarks,
                    'categories' => $categories,
                    'products'   => $products,
                    'id_category'=> $id_category,
                    'id_trademark'=>$id_trademark,
                    'value'      => $value,
                    'energy'     => $energy,
            ]);
        }
    }
    public function list($id, $value)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        if ($value==2) {
            $products = Product::where('trade_mark_id',$id)->orderBy('price', 'ASC')->get();
            return view('frontend.list')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'products'   => $products,
            'id'         => $id,
        ]);
        }
        else{
        $products = Product::where('trade_mark_id',$id)->orderBy('price', 'DESC')->get();
        return view('frontend.list')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'products'   => $products,
            'id'         => $id,
        ]);
        }
    }
    public function search(Request $request)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();

        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $products = Product::where('product_name', 'like', "%$query%")
                            ->orWhere('price', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")->get();
        return view('frontend.search-results')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'products'   => $products,
        ]);;
    }
    public function sortby()
    {

    }
    public function details($id)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $products   = Product::find($id);
        if ($products->detail->total_qty>=10) {
            $tinhtrang = 'còn hàng';
        }
        elseif ($products->detail->total_qty>0 && $products->detail->total_qty<10) {
            $tinhtrang = 'sắp hết hàng';
        }
        else {
            $tinhtrang = 'hết hàng';
        }
        return view('frontend.details')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'products'   => $products,
            'tinhtrang'  => $tinhtrang,
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
        $qty = $request->qty;
        if ($qty>0) {
            Cart::add([
            'id'      => $request->id, 
            'name'    => $request->product_name,
            'qty'     => 1,
            'price'   => $request->price,
            'options' => ['img' => $request->img]
        ])->associate('App\Models\Product');
        session()->flash('notif', 'ĐÃ ĐƯỢC THÊM VÀO GIỎ HÀNG');
        return redirect()->route('cart.index');
        }
        session()->flash('notif', 'ĐÃ ĐƯỢC THÊM VÀO GIỎ HÀNG');
        return back()->with('notif', 'SẢN PHẨM ĐÃ HẾT HÀNG');
    }
    public function cartdelete($id)
    {
        Cart::remove($id);
        return back()->with('notif', 'ĐÃ XÓA SẢN PHẨM');
    }
    public function cartupdate(Request $request)
    {   
        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId,$qty);
        return back()->with('notif', 'ĐÃ CẬP NHẬT');
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


            Cart::remove($item->rowId);
        }
        

        return redirect()->route('thankyou');
    }
    public function thankyou()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        return view ('frontend.thankyou')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
        ]);
    }
}
