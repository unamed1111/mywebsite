<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guards = [];

    public function detail()
    {
    	return $this->hasMany(OrderProduct::class);
    }
}
