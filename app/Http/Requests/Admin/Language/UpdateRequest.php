<?php

namespace App\Http\Requests\Admin\Language;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check() && backpack_user()->can('Manage Languages');
    }

    public function rules()
    {
        return [
            'language' => 'required',
            'direction' => 'required',
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
