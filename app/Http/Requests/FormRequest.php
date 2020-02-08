<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
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
            'group' =>'required',
            'username' =>'required',
            'age' =>'required|integer',
            'tel' =>'required|integer',
            'mail' =>'required|email',
            'opinion' =>'max:500',
        ];
    }

    public function messages()
    {
        return [
            'required' =>"必須項目です",
            'integer' =>"整数値で入力してください。",
            'email' =>"メールアドレスの形式で入力してください。",
            'opinion.max' =>"500文字以内で入力してください。",

        ];
    }
}
