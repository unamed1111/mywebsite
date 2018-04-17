<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name','price','trade_mark_id','categories_id','description'];

    public function trademark()
    {
    	return $this->belongsTo(TradeMark::class,'trade_mark_id','id');
    }

    public function category()
    {
    	return $this->belongsTo(Category::class,'categories_id','id');
    }

    public function detail()
    {
    	return $this->hasOne(ProductDetail::class);
    }
}
