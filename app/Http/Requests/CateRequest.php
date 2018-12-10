<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

 
class CateRequest extends FormRequest
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
            'txt_CateNameTest'  => 'required|unique:categories,name|max:20|Alpha',
            
            'cateImage'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'txt_CateDecription'    =>  'required'
        ];
    }

    public function messages(){
        return [
            'txt_CateNameTest.required'  =>  'Please enter name category ',
            'txt_CateNameTest.unique'  =>  'This name category is exist',
            'cateImage.required'    =>  'Please choose image',
            'cateImage.image'   => 'This file is Not image',
            'txt_CateDecription.required'   => 'Plaese enter descriptions'
        ];
    }

}
