<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateCompanyRequest extends Request
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
        $company = $this->route('company');

        return [
            'logo'      =>  'image',
            'name'      =>  'required|max:255|unique:companies,name,'.$company,
            'tax'       =>  'required|integer|min:1|max:100',
        ];
    }
}
