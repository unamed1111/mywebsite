<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeMark extends Model
{
    protected $fillable =['trademark_name','description'];

    public function category()
    {
    	return $this->belongsToMany(Category::class,'trademark_categories','trademark_id','category_id');
    }
}
