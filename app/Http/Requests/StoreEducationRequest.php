<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationRequest extends FormRequest
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
            'type' => 'required',
            'name' => 'required|string|max:50',
            'from' => 'nullable|date_format:Y',
            'to' => 'nullable|date_format:Y',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'school',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'please enter your :attribute name.'
        ];
    }
}
