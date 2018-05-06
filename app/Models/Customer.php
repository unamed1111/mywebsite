<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =['customer_name','email','dob','gender','avatar','phone','address','password'];

    protected $hidden = [
        'password', 'remember_token',
    ]; 
}
