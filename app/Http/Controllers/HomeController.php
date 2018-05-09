<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TradeMark;
use App\Models\TradeMarkCategory;
use App\Models\Category;

class HomeController extends Controller
{
    public function navbar()
    {
    	$thuonghieu = TradeMark::all();
        $nam = Category::find(1)->trademark;
        $nu = Category::find(2)->trademark;
        $doi = Category::find(3)->trademark;
        $treem = Category::find(4)->trademark;
        return view('frontend.layouts.navbar', compact('aaa', 'nam', 'nu', 'doi', 'treem'));
    }
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
