<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function trademark()
    {
    	return $this->belongsToMany(TradeMark::class,'trademark_categories','category_id','id');
    }
}
