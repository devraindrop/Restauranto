<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $phone_number = $this->route('restaurant') ? Rule::unique('restaurants', 'phone_number')->ignore($this->route('restaurant')->id) : 'unique:restaurants,phone_number';

        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|integer|' . $phone_number,
            'description' => 'nullable|string',
        ];
    }
}
