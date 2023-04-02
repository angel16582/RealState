<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRealStateRequest extends FormRequest
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
        //aqui hacer la validacion de si es de cierto tipo 
        // dd($this->route('request')->id);
        // dd($this->route('request'));
        return [
            "name" => "required|min:1|max:128",
            "real_state_type" => "required|in:house,department,land,commercial_ground",
            "street" => "required|min:1|max:128",
            "external_number" => "required|min:1|max:12|alpha_dash",
            "internal_number" => "alpha_dash|required_if:real_state_type,==,department|required_if:real_state_type,==,commercial_ground",
            "neighborhood" => "required|min:1|max:128",
            "city" => "required|min:1|max:64",
            "country" => "required|min:2|max:2",
            "rooms" => "required",
            "bathrooms" => "required",
            "comments" => "required|min:1|max:128"
        ];
    }
}
