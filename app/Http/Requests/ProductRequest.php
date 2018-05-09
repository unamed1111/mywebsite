<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required',
            'price'=> 'required|numeric',
            'trade_mark_id' => 'required',
            'category_id' => 'required',
            'energy' =>'required',
            'diameter'=> 'required|numeric',
            'waterproof'=>'required|numeric',
            'case'=>'required',
            'watch_chain'=> 'required',
            'glass'=>'required',
            'guarantee'=>'required|numeric',
            'total_qty'=>'required|numeric',
            'image'=>'mimes:jpeg,bmp,png'
        ];
    }
}
