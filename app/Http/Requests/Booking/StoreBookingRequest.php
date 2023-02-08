<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'name' => ['required', 'min:2'],
            'email' => ['required', 'email:rfc,dns'],
            'phone' => ['nullable', 'numeric'],
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i'],
            'vehicle_make_id' => ['required', 'integer'],
            'vehicle_model_id' => ['required', 'integer'],
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'vehicle_make_id' => $this->make,
            'vehicle_model_id' => $this->model,
        ]);
    }
}
