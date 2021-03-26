<?php

namespace App\Http\Requests;

use App\Tiendaa;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TiendaaRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'min:3'
            ],
            'email' => [
                'required', 'email', Rule::unique((new Tiendaa)->getTable())->ignore($this->route()->tiendaa->id ?? null)
            ],
            'password' => [
                $this->route()->tiendaa ? 'nullable' : 'required', 'confirmed', 'min:6'
            ]
        ];
    }
}
