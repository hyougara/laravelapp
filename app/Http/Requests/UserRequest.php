<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Userrequest extends FormRequest
{
    public function authorize()
    {
        if($this->path() == 'form/input'|| 'form/update'|| 'form/new' || 'form/complete'){
            return true;
        }else{
            return false;
        }

            
        
    }

    public function rules()
    {
        return [
					'name' => 'required',
					'email' => 'email',
					'password' => 'required|min:6',//独自のバリデーション form
        ];
    }

    public function messages(){
			return [
				'name.required' => '名前を入力してください',
				'email.email' => '正しいメールアドレスを入力してください',
				'email.required' => 'メールアドレスを入力してください',
				// 'password.integer' => 'パスワードは数字のみでお願いします',
                'password.required' => 'パスワードを入力してください',
                'password.min' => 'パスワードは６文字以上でお願いします'
				// 'password.form' => '偶数のみで',

			];
    }
}
