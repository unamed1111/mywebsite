<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['product_id','energy','diameter','waterproof','case','watch_chain','glass','guarantee','total_qty','image','content'];
}
