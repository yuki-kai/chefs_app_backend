<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cropedImage' => ['required', 'string'],
            'name' => ['required', 'string', 'max:20'],
            'description' => ['required', 'string', 'max:100'],
            'ingredients.*.name' => ['required', 'string', 'max:20'],
            'ingredients.*.amount' => ['required', 'string', 'max:10'],
            'recipes.*.instruction' => ['required', 'string', 'max:100'],
        ];
    }

    public function messages()
    {
        return [
          'cropedImage.required' => ':attributeを選択してください',
          'name.required' => ':attributeを入力してください',
          'name.max' => ':attributeは20文字以内で入力してください',
          'description.required' => ':attributeを入力してください',
          'description.max' => ':attributeは100文字以内で入力してください',
          'ingredients.*.name.required' => ':attributeを入力してください',
          'ingredients.*.name.max' => ':attributeは20文字以内で入力してください',
          'ingredients.*.amount.required' => ':attributeを入力してください',
          'ingredients.*.amount.max' => ':attributeは10文字以内で入力してください',
          'recipes.*.instruction.required' => ':attributeを入力してください',
          'recipes.*.instruction.max' => ':attributeは100文字以内で入力してください',
        ];
    }

    public function attributes()
    {
        return [
            'cropedImage' => '料理画像',
            'name' => '料理名',
            'description' => '概要',
            'ingredients.*.name' => '材料',
            'ingredients.*.amount' => '分量',
            'recipes.*.instruction' => '作り方',
          ];
    }
}
