<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionMovimiento extends FormRequest
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
            'monto' => 'required|min:1|max:20',
            'concepto' => 'required|min:1|max:150',
            'tipo' => 'required|min:1|max:150',
        ];
    }
}
