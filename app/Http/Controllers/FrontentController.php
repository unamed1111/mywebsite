<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TradeMark;
use App\Models\TradeMarkCategory;
use App\Models\Category;

class FrontentController extends Controller
{
    public function index()
    {
        //$products = Product::all();
        $trademarks = TradeMark::all();

        return view('frontend.trangchu')->with([
            //'products' => $products,
            'trademarks' => $trademarks,
        ]);

    }
    public function list()
    {
        return view('frontend.list');
    }
    public function product()
    {
        return view('frontend.product');
    }
}
