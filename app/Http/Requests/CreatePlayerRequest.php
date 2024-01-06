<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlayerRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:10',
            'profession' => 'required|string',
            'world' => 'required',
            'usage_rate' => 'required|numeric',
            'winning_rate' => 'required|numeric',
            'ban_rate' => 'required|numeric',
            'skin_of_shapes' => 'required|numeric',
            'listing_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '角色名稱為必填',
            'name.string' => '角色名稱須為文字',
            'name.min' => '角色名稱須介於2~10個字之間',
            'name.max' => '角色名稱須介於2~10個字之間',

            'profession.required' => '角色職業為必填',
            'profession.string' => '角色職業須為文字',

            'world.required' => '角色所屬世界為必填',

            'usage_rate.required' => '使用率為必填',
            'usage_rate.numeric' => '使用率須為數字',

            'winning_rate.required' => '勝率為必填',
            'winning_rate.numeric' => '勝率須為數字',

            'ban_rate.required' => '禁用率為必填',
            'ban_rate.numeric' => '禁用率須為數字',

            'skin_of_shapes.required' => '當前造型數量為必填',
            'skin_of_shapes.numeric' => '當前造型數量須為數字',

            'listing_date.required' => '上市日期為必填',
        ];
    }
}
