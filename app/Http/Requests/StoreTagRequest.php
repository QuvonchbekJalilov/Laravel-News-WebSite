<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->hasRole('admin');
    }

   
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
