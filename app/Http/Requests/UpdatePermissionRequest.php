<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('permission:update') || auth()->user()->hasRole('admin');
    }

   
    public function rules()
    {
        return [
            //
        ];
    }
}
