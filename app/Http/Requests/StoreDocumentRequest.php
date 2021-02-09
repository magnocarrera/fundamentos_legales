<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentRequest extends FormRequest
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
            'committe_id'   =>  'required',
            'nro_norma'     =>  'required',
            'ano'           =>  'required',
            'descripcion'   =>  'required',
            'cod_norma'     =>  'required',
            'type'          =>  'required',
            'file'          =>  'required|mimes:pdf',
        ];
    }
}
