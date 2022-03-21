<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // false ase true kore dibo . auth complete hoye gele abar false kore dibo
        // false dile ai page r show korbe na coz unauthorize dekhabe .. onno page e restriction 
        //  er jonno false diye rakhbo
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
