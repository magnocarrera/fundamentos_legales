<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLegalRequest extends FormRequest
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
            'regulation_id' =>  'required|integer',
            'nro_norma'     =>  'required',
            'ano'           =>  'required',
            'decreto'       =>  'required',
            'descripcion'   =>  'required',
            'file'          =>  'required|mimes:pdf',
        ];
    }
}
