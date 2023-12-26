<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateWorldRequest extends FormRequest
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
            'region' => 'required|string',
            'rule' => 'required|string',
            'attitude' => 'required|string',
            'technology' => 'required|string',
            'environment' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'region.required' => '區域名稱為必填',

            'rule.required' => '統治方式為必填，若無，請打「無」',
            'rule.string' => '統治方式須為文字',

            'attitude.required' => '對於魔法的態度為必填，若無，請打「無」',
            'attitude.string' => '對於魔法的態度須為文字',

            'technology.required' => '科技水平為必填，若無，請打「無」',
            'technology.string' => '科技水平須為文字',

            'environment.required' => '整體環境為必填，若無，請打「無」',
            'environment.string' => '整體環境須為文字'
        ];
    }
}
