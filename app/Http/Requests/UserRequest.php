<?php

namespace MegaSalud\Http\Requests;

use MegaSalud\Http\Requests\Request;

class UserRequest extends Request
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
                    'password' => 'confirmed|required',
                    'email' => 'unique:users,email,'
                ];
            }
            case 'PUT':
            {
                return [
                    'nombre' => 'required',
                    'email' => 'unique:users,email,'.$this->segment(3)
                ];
            }
        }
    }
}
