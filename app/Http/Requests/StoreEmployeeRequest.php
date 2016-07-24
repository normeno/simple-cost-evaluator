<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreEmployeeRequest extends Request
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
            'name' => 'required|max:65',
            'position' => 'required|max:100',
            'hour_price' => 'required|numeric|min:0',
            'company_id' => 'required|integer|min:1'
        ];
    }
}
