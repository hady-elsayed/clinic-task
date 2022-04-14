<?php

namespace App\Http\Requests\Patient;

use App\Rules\EgyptionNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class update extends FormRequest
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
            'name' => ['required', 'string'],
            'age' => ['required','integer'],
            'address' => ['required','string'],
            'phone' => ['required',new EgyptionNumberRule(),'unique:patients,phone,'.$this['patient']]
        ];
    }
}
