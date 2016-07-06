<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreOperatingExpenseRequest extends Request
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
            'rent'      =>  'required|numeric',
            'light'     =>  'required|numeric',
            'phone'     =>  'required|numeric',
            'mobile'    =>  'required|numeric',
            'internet'  =>  'required|numeric',
            'water'     =>  'required|numeric',
        ];
    }
}
