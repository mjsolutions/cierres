<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GalleryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//Autorizar para utilizar
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   
        switch($this->method()) {
            case 'POST':
            {
                return [
                'nombre' => 'required',
                'ruta' => 'confirmed|required'
                ];
            }
            case 'PUT':
            {
                return [
                'nombre' => 'required',
                'ruta' => 'confirmed|required'
                ];
            }
        }
    }
}
