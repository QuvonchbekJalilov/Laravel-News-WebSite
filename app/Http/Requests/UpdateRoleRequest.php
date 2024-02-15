<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->can('user:update') || auth()->user()->hasRole('admin');
    }

   
    public function rules()
    {
        return [
            
        ];
    }
}
