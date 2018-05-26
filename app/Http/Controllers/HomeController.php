<?php

namespace App\Http\Controllers;

use App\Charts\SellingTotalChart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Feedback;
use Carbon\Carbon;
use Charts;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *ie
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin/');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $array = [];
        $i = 1;
        while ($i <= 12) {
            $orders = Order::whereRaw('EXTRACT(MONTH FROM created_at) ='. $i)->sum('billing_total');
            $array = array_add($array, $i-1, $orders);
            $i++;
        }
            
        $chart = new SellingTotalChart;
        $chart->labels(['Tháng 1', 'Tháng 2', 'Tháng 3','Tháng 4','Tháng 5', 'Tháng 6', 'Tháng 7','Tháng 8','Tháng 9', 'Tháng 10', 'Tháng 11','Tháng 12']);
        $chart->dataset('Triệu đồng ','line', $array)->color('#00c0ef')->backgroundColor('#f39c12')->lineTension(0.4);
        $chart->height(200);
        $chart->title('Doanh thu trong năm');
        // $chart = Charts::database(Order::all()->sum('billing_total'),'line','chartjs')->grouByMonth();

        $qty_customer = Customer::all()->count();
        $qty_order = Order::all()->count();
        $qty_feedback = FeedBack::where('status', FEEDBACK_UNSEEN)->count();
        $qty_product = Product::all()->count();
        $last_orders = Order::orderBy('created_at','asc')->take(5)->get();
        $last_customers = Customer::orderBy('created_at','asc')->take(8)->get();
        $last_products = Product::with('detail')->orderBy('created_at','asc')->take(4)->get();


        return view('admin.index',compact('chart','qty_product','qty_feedback','qty_order','qty_customer','last_orders','last_customers','last_products'));
    }
}
