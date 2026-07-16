<?php

namespace App\Http\Requests;

class UpdateTestimonialRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_name' => ['required', 'string', 'max:100'],

            'content' => ['required', 'array'],
            'content.ID' => ['required', 'string'],
            'content.EN' => ['required', 'string'],
            'content.JPN' => ['required', 'string'],

            'rating' => ['required', 'integer', 'min:1', 'max:5'],

            'order' => ['integer'],
            'is_active' => ['boolean'],
        ];
    }
}
