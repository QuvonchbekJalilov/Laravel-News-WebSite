<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('post:create') || auth()->user()->hasRole('admin');
    }

   
    public function rules()
    {
        return [
            
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required|image|max:2048',
        ];
    }
}
