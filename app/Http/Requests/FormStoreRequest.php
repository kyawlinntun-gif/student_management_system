<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormStoreRequest extends FormRequest
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
            'cne' => 'required|unique:students,cne',
            'first_name' => 'required|string',
            'second_name' => 'required|string',
            'age' => 'required|numeric',
            'speciality' => 'required|string'
        ];
    }
}
