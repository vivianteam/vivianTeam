<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class ProductRequest extends FormRequest
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
            'txt_name'  => 'required|unique:categories,name',
            'proImg'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'txt_dsort'    =>  'required|max:255',
            'txt_dlong'    =>  'required',
            'txt_Color'    =>  'required',
            'txt_Size'    =>  'required',
            'txt_PriceIn'    =>  'required',
            'txt_PriceOut'    =>  'required',
            'txt_PriceSale'    =>  'required'

           // 'cateImage' =>  'requỉred'
           // 'txt_CateDecription'    =>  'requỉred|descriptions',
        ];
    }

    public function messages(){
        return [
            'txt_name.required'  =>  'Please enter name category ',
            'txt_name.unique'  =>  'This name category is exist',
            'proImg.required'    =>  'Please choose image',
            'proImg.image'   => 'This file is Not image',
            'txt_dsort.required'   => 'Plaese enter descriptions sort ',
            'txt_dlong.required'   => 'Plaese enter descriptions long',
            'txt_Color.required'   => 'Plaese enter color',
            'txt_Size.required'   => 'Plaese enter size',
            'txt_PriceIn.required'   => 'Plaese enter price in',
            'txt_PriceOut.required'   => 'Plaese enter price out',
            'txt_PriceSale.required'   => 'Plaese enter price sale'
          // 'cateImage.requỉred'    =>  'Please choose image',
            //'txt_CateDecription.requỉred'    =>  'Please enter descriptions category',


        ];
    }
}
