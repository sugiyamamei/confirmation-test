<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name1' => ['required', 'string'],
            'name2' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel1' => ['required', 'numeric', 'max:5'],
            'tel2' => ['required', 'numeric', 'max:5'],
            'tel3' => ['required', 'numeric', 'max:5'],
            'address1' => ['required', 'string'],
            'content1' => ['required', 'string'],
            'content2' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'name1.required' => '姓を入力してください',
            'name2.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスはメール形式で入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel1.numeric' => '電話番号は5桁までの数値で入力してください',
            'tel2.numeric' => '電話番号は5桁までの数値で入力してください',
            'tel3.numeric' => '電話番号は5桁までの数値で入力してください',
            'tel1.max' => '電話番号は5桁までの数値で入力してください',
            'tel2.max' => '電話番号は5桁までの数値で入力してください',
            'tel3.max' => '電話番号は5桁までの数値で入力してください',
            'address1.required' => '住所を入力してください',
            'content1.required' => 'お問い合わせの種類を選択してください',
            'content2.required' => 'お問い合わせ内容を入力してください',
            'content2.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
