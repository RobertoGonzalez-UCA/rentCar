<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRentRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'date' => 'Fecha inicial',
            'date_expire' => 'Fecha final'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'required|after_or_equal:today',
            'date_expire' => 'required|after_or_equal:date'
        ];
    }
}
