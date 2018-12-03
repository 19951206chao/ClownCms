<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
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


        $rules = [];
        switch ($this->method()) {
            case 'POST':
                $rules = [
                    'name' => 'required|max:30|min:2',
                    'email' => 'required|email|unique:admins,email',
                    'password' => 'required|max:30|min:6'
                ];
                break;
            case 'PUT':
                $rules = [
                    'name' => 'required|max:30|min:2',
                    'email' => [
                        'required',
                        'email',
                        Rule::unique('admins')->ignore($this->segment(3)),
                    ],
                    'password' => 'nullable|max:30|min:6'
                ];
                break;
            case 'DELETE':

                break;
        }
        return $rules;
    }


    public function messages()
    {
        return [
            'name.required' => '名称未填写',
            'name.max' => '名称长度不得超过10个汉字',
            'name.min' => '名称长度不得少于2个汉字',
            'email.required' => '登陆邮箱必须填写',
            'email.email' => '邮箱格式错误',
            'email.unique' => '邮箱已存在',
            'password.required' => '登陆密码未填写',
            'password.max' => '密码长度不得大于30位',
            'password.min' => '密码长度不得少于6位'
        ];
    }
}
