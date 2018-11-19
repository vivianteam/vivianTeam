<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class PorsonRequest extends FormRequest
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
            
            'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'txt_IdUser'    =>  'required',
            'txt_Decription'    =>  'required'

           // 'cateImage' =>  'requỉred'
           // 'txt_CateDecription'    =>  'requỉred|descriptions',
        ];
    }

    public function messages(){
        return [
            'txt_IdUser.required'  =>  'Please enter name category ',
            'img.required'    =>  'Please choose image',
            'img.image'   => 'This file is Not image',
            'txt_Decription.required'   => 'Plaese enter descriptions '
            
          // 'cateImage.requỉred'    =>  'Please choose image',
            //'txt_CateDecription.requỉred'    =>  'Please enter descriptions category',


        ];
    }
}
