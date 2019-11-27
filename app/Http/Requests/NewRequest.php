<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
             'txttitle'          => 'required',
            'txtsummary'          => 'required',
            'txtdate_post'         => 'required|date',
            'txtcontent'         => 'required',
            'txtimage'      => 'required|image',
            'txtsource'      => 'required',
            'categories_id'=>'required',
        ];
    }

    public function messages() {
        return [
            'txttitle.required'         => 'Enter your title!',
            'txtsummary.required'         => 'Enter your summary!',
            'txtdate_post.required'           => 'Enter your summary!',
            'txtdate_post.date(format)'        => 'Please enter the correct date type !',
            'txtimage.image'        => 'not the image type!',
            'txtimage.required'         => 'Enter your image!',
            'txtsource.required'           => 'Enter your Source!',
            'categories_id.required'=>'Enter your Category',
            
        ];
    }
}
