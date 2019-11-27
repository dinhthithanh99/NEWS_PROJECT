<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        // txtname, txtimage là tên name của input trong file create.blade.php
        return [
            'txtname'          => 'required',
            'txtuser'          => 'required|unique:users,userName',
            'txtimage'         => 'required',
            'txtphone'         => 'required|numeric|unique:users,phone',
            'txtpassword'      => 'required',
            'txtemail'      => 'required|unique:users,email',
            'txtaddress'    => 'required',
            'txtbirthday'   => 'required'
        ];
    }

    public function messages() {
        return [
            'txtname.required'         => 'Enter your name!',
            'txtuser.required'         => 'Enter your Username!',
            'txtuser.unique'           => 'Username already exists!',
            'txtimage.required'        => 'Enter your image !',
            // 'txtimage.image'        => 'not the image type!',
            'txtphone.required'         => 'Enter your Phone number!',
            'txtphone.unique'           => 'Phone number already exists!',
            'txtphone.numeric'          =>'Phone number must be number!',
            'txtpassword.required'      => 'Enter your password!',
            'txtemail.required'         => 'Enter your email!',
            'txtemail.unique'           => 'Email already exists!',
            'txtaddress.required'         => 'Enter your Addresss!',
            'txtbirthday.required'         => 'Enter your Birthday!'
           // 'txtbirthday.date'         => 'Birthday be must Date!',
        ];
    }
}
