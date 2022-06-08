<?php

namespace App\Http\Requests\Admin\Drive;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Drives');
    }

    public function rules()
    {
        return [
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
        ];
    }

    public function attributes()
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
