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
use App\Models\Feedback;
use App\Models\Support;
use App\Models\Event;
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
        $supports   = Support::all();
        $product    = Product::inRandomOrder()->take(8)->get();
        return view('frontend.trangchu')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
            'product'    => $product,
        ]);
    }
    public function register()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        return view('frontend.register')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
        ]);
    }
    public function login()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        return view('frontend.login')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
        ]);
    }
    public function products($id, Request $request)
    {
        $products = Product::where('trade_mark_id',$id);
        if($request->has('search_category') && $request->get('search_category') != 0){
            $products = Product::searchCategory($request->get('search_category'));
        }
        
        if($request->has('search_price') && $request->get('search_price') != 0){
                $products = $products->searchPrice($request->get('search_price'));
        }
        if($request->has('search_energy') && $request->get('search_energy') != -1){
                $products = $products->searchEnergy($request->get('search_energy'));
        }
        if($request->has('search_chain') && $request->get('search_chain') != -1){
                $products = $products->searchChain($request->get('search_chain'));
        }
        if($request->has('search_case') && $request->get('search_case') != -1){
                $products = $products->searchCase($request->get('search_case'));
        }
        if($request->has('orderBy') && $request->get('orderBy') != null){
                $products = $products->orderBy('price',$request->get('orderBy'));
        }
        $products = $products->get();
        $categories = Category::all();
        $trademarks = TradeMark::all();
        $supports   = Support::all();
        return view('frontend.products')->with([
                'trademarks' => $trademarks,
                'categories' => $categories,
                'products'   => $products,
                'supports'   => $supports,
        ]);
    }
    
    public function search(Request $request)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
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
            'supports'   => $supports,
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
        $supports   = Support::all();
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
            'supports'   => $supports,
            'products'   => $products,
            'tinhtrang'  => $tinhtrang,
        ]);
    }
    public function cart()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        $todayDate  = date("Y-m-d");
        $events     = Event::all()->where('start_date','<=',$todayDate)->where('end_date','>=',$todayDate);
        if(0==count($events)){
            $discount = 0;
        }
        else{
            foreach ($events as $events) {
                $discount = $events->discount;
            }
        }
        return view('frontend.cart')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
            'discount'     => $discount,
            'todayDate'  => $todayDate,
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
        $todayDate  = date("Y-m-d");
        $events     = Event::all()->where('start_date','<=',$todayDate)->where('end_date','>=',$todayDate);
        if(0==count($events)){
            $discount = 0;
        }
        else{
            foreach ($events as $events) {
                $discount = $events->discount;
            }
        }

        $item = Cart::content();
        $customer = new Order;
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->customer_address = $request->customer_address;
        $customer->customer_phone = $request->customer_phone;
        $customer->billing_discount = $discount;
        $customer->billing_discount_code = 'aut'; 
        $customer->billing_subtotal = Cart::subtotal();
        $customer->billing_tax = 0;
        $customer->billing_total = Cart::total()-Cart::total()*$discount/100;
        $customer->payment_method = $request->payment;
        $customer->save();

        foreach ($item as $item){
            $oderproduct = new OrderProduct;
            $oderproduct->order_id = $customer->id;
            $oderproduct->product_id = $item->id;
            $oderproduct->qty = $item->qty;
            $oderproduct->discount = $discount; 
            $oderproduct->save();


            Cart::remove($item->rowId);
        }
        

        return redirect()->route('thankyou');
    }
    public function thankyou()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        return view ('frontend.thankyou')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
        ]);
    }
    public function feedbacks(Request $request)
    {
        $feedback = new Feedback;
        $feedback->username = $request->username;
        $feedback->email    = $request->email;
        $feedback->content  = $request->content;
        $feedback->status   = 0;
        $feedback->save();

        return redirect()->route('index');
    }
    public function supports($id)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        $spcontent  = Support::find($id);
        return view('frontend.supports')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
            'spcontent'  => $spcontent,
        ]);
    }
    public function events()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        $events   = Event::orderBy('id','DESC')->get();
        return view('frontend.events')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
            'events'   => $events,
        ]);
    }
    public function eventdetail($id)
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        $events   = Event::all();
        $event   = Event::find($id);
        return view('frontend.eventdetail')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
            'events'     => $events,
            'event'      => $event,
        ]);
    }
    public function shoplocation()
    {
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();
        $supports   = Support::all();
        return view('frontend.shoplocation')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
            'supports'   => $supports,
        ]);
    }
}
