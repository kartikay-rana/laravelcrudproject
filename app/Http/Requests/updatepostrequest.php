<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatepostrequest extends FormRequest
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
            'firstname' => 'required|min:3|max:20',
            'lastname' => 'required|max:15',
            'age' => 'required|numeric',
            'Uploadfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
