<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateProfileInfo extends FormRequest
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
            'name'        =>  'required|max:255|min:3',
            'phone-1'     =>  'numeric|size:1',
            'phone-2'     =>  'numeric|size:3',
            'phone-3'     =>  'numeric|size:3',
            'phone-4'     =>  'numeric|size:4'
        ];
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'     =>  'A name is required.',
            'name.min'          =>  'Name required atleast 3 characters.',
        ];
    }
}
