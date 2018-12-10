<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class ImageRequest extends FormRequest
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
            'cmb_proEdit'=>'required',
            //'cmb_pro_Add'=>'required',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
           // 'cateImage' =>  'requỉred'
           // 'txt_CateDecription'    =>  'requỉred|descriptions',
        ];
    }

    public function messages(){
        return [
            'cmb_proEdit.required'=>'Please enter id product',
            'img.required'    =>  'Please choose image',
            'img.image'   => 'This file is Not image',
           // 'cmb_pro_Add.required'=>'Please enter id product'
          // 'cateImage.requỉred'    =>  'Please choose image',
            //'txt_CateDecription.requỉred'    =>  'Please enter descriptions category',


        ];
    }
}
