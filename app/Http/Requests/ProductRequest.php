<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */

    public function rules()
    {
        return [
            'id' => 'required',
            'name' => 'required|max:25',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'comment' => 'required',
            'img_path' => 'nullable|image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => '商品IDを入力してください。',
            'name.required' => '商品名を入力してください。',
            'name.max' => '商品名は25文字以内で入力してください。',
            'price.required' => '価格を入力してください。',
            'price.numeric' => '価格は数値で入力してください。',
            'stock.required' => '在庫数を入力してください。',
            'stock.numeric' => '在庫数は数値で入力してください。',
            'comment.required' => 'コメントを入力してください。',
            'img_path.file' => 'このファイルはアップロードできません',
        ];
    }

}


