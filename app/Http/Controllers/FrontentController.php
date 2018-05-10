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
        $trademarks = TradeMark::all();
        $categories = Category::with('trademark')->get();

        return view('frontend.trangchu')->with([
            'trademarks' => $trademarks,
            'categories' => $categories,
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
