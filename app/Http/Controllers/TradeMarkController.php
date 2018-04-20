<?php

namespace App\Http\Controllers;

use App\Models\TradeMark;
use App\Models\Category;
use App\Models\TradeMarkCategory;
use Illuminate\Http\Request;

class TradeMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trademarks = TradeMark::all();
        return view('admin.trademarks.index',compact('trademarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.trademarks.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trademark = TradeMark::create($request->all());
        if(isset($request->category_id))
        {
            foreach($request->category_id as $category)
            {
                TradeMarkCategory::create([
                    'trademark_id'=> $trademark->id,
                    'category_id'=> $category
                ]);
            }
        }
        return redirect()->route('trademarks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TradeMark  $tradeMark
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TradeMark  $tradeMark
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trademark = TradeMark::with('category')->find($id);
        $categories = Category::all();
        $oldcategoriesId = TradeMarkCategory::where('trademark_id',$id)->pluck('category_id')->toArray();
        return view('admin.trademarks.edit',compact('trademark','categories','oldcategoriesId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TradeMark  $tradeMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $trademark = TradeMark::find($id);
        $trademark->update($request->all());
        $oldTradeMarkCategory = TradeMarkCategory::where('trademark_id',$id)->delete();
        
        if($request->has('category_id')){
            foreach($request->category_id as $category)
            {
                $trademark = TradeMarkCategory::updateOrCreate([
                    'trademark_id'=> $id,
                    'category_id'=> $category
                ]);
            }
        }
        return redirect()->route('trademarks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TradeMark  $tradeMark
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TradeMark::destroy($id);
        return redirect()->route('trademarks.index');
    }
}
