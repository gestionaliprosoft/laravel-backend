<?php

namespace App\Filament\Resources\BreweryResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBreweryRequest extends FormRequest
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
            'name' => 'required|string',
            'brewery_type' => 'required|string',
            'address_1' => 'required|string',
            'address_2' => 'required|string',
            'address_3' => 'required|string',
            'city' => 'required|string',
            'state_province' => 'required|string',
            'postal_code' => 'required|string',
            'country' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'phone' => 'required|string',
            'website_url' => 'required|string',
            'state' => 'required|string',
            'street' => 'required|string',
        ];
    }
}
