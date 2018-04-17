<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeMarkCategory extends Model
{
	protected $table = 'trademark_categories';
    protected $fillable =['trademark_id','category_id'];

}
