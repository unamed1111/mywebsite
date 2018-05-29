<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductDetail;

class Product extends Model
{
    protected $fillable = ['product_name','price','trade_mark_id','category_id','description'];

    public function trademark()
    {
    	return $this->belongsTo(TradeMark::class,'trade_mark_id', 'id');
    }

    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function detail()
    {
    	return $this->hasOne(ProductDetail::class,'product_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function scopeSearchCategory($query,$category_id)
    {
        return $query->where('category_id',$category_id);
    }

     public function scopeSearchTrademark($query,$trademark_id)
    {
        return $query->where('trade_mark_id',$trademark_id);
    }

    public function scopeSearchPrice($query,$price)
    {
        return $query->whereBetween('price', PRICE[$price]);
    }

    public function scopeSearchEnergy($query,$energy)
    {
        $detail = ProductDetail::where('energy',$energy)->pluck('product_id')->toArray();
        return $query->whereIn('id',$detail);
    }

    public function scopeSearchCase($query,$case)
    {
        $detail = ProductDetail::where('case',$case)->pluck('product_id')->toArray();
        return $query->whereIn('id',$detail);
    }

    public function scopeSearchChain($query,$watch_chain)
    {
        $detail = ProductDetail::where('watch_chain',$watch_chain)->pluck('product_id')->toArray();
        return $query->whereIn('id',$detail);
    }

}
