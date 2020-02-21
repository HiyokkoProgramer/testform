<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
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
            'name' =>'required',
            'mail'=>'email',
            'age' =>'numeric | between:0,150',
            'male'=>'accept',
            'female'=>'accept',
            'siteurl'=>'url',
            'pass'=>'alpha-dash |alpha-num',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メール形式で入力してください',
            'numeric' => '数字で入力してください',
            'between' => '年齢は0〜150才の間で入力してください',
            'url' => 'url形式で入力してください',
            'pass.alpha-dash' => 'アルファベットとハイフン、アンダースコアで入力してください',
            'pass.alpha-num' => 'アルファベットと数字で入力してください'
        ];

    }
}
