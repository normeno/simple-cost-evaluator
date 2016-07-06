<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCalculatorRequest extends Request
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
            'tax'           =>  'required|numeric',
            'weeks'         =>  'required|numeric',
            'days'          =>  'required|numeric',
            'hours'         =>  'required|numeric',
            'hours_cost'    => 'required|numeric',

            'executive_total'           =>  'required|numeric',
            'executive'                 =>  'required|numeric',
            'project_manager_total'     =>  'required|numeric',
            'project_manager'           =>  'required|numeric',
            'designer_total'            =>  'required|numeric',
            'designer'                  =>  'required|numeric',
            'programmer_total'          =>  'required|numeric',
            'programmer'                =>  'required|numeric',

            'rent'      =>  'required|numeric',
            'light'     =>  'required|numeric',
            'phone'     =>  'required|numeric',
            'mobile'    =>  'required|numeric',
            'internet'  =>  'required|numeric',
            'water'     =>  'required|numeric',

            'software'      =>  'required|numeric',
            'travel'        =>  'required|numeric',
            'audiovisual'   =>  'required|numeric',
        ];
    }
}