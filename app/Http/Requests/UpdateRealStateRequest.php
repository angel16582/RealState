<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRealStateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required",
            "real_state_type" => "required",
            "street" => "required",
            "external_number" => "required",
            "internal_number" => "required",
            "neighborhood" => "required",
            "city" => "required",
            "country" => "required",
            "rooms" => "required",
            "bathrooms" => "required",
            "comments" => "required"
        ];
    }
}
