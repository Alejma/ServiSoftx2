<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'Peso' => 'required',
            'Estado' => 'required',
            'Direccion_Remitente' => 'required',
            'Nombre_Remitente' => 'required',
            'NDocumento' => 'required',
            'Direccion_Llegada' => 'required',
            'Nombre_Remitido' => 'required'
        ];
    }
}
