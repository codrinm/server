<?php

namespace App\Http\Requests\BlockDay;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlockDayRequest extends FormRequest
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
            'date' => ['required', 'date', 'after:today', 'unique:blocked_days'],
        ];
    }

    public function messages()
    {
        return [
            'date' => [
                'unique' => 'This date has already been blocked'
            ],
        ];
    }
}
