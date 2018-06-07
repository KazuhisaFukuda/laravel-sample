<?php

namespace App\Http\Requests\User\Tasks;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'target_date' => ['required', 'date_format:Y-m-d'],
            'content' => ['required'],
            'priority_no' => ['required', 'numeric', 'between:1,5'],
        ];
    }
}
