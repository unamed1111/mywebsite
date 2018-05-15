<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    protected $fillable =['customer_name','email','dob','gender','avatar','phone','address','password'];

    protected $hidden = [
        'password', 'remember_token',
    ]; 

    protected $guard = "customers";
}
