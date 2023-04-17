<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReaderRequest extends FormRequest
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
            'name' => 'required|regex:/^[\pL\s]+$/u|max:255',
            'last_name' => 'required|regex:/^[\pL\s]+$/u|max:255',
            'news' => 'nullable|array',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'EL campo nombre es obligatorio.',
            'name.regex' => 'El campo nombre solo permite caracteres alfabéticos.',
            'name.max' => 'El campo nombre supera la cantidad maxima permitida',
            'last_name.required' => 'EL campo apellido es obligatorio.',
            'last_name.regex' => 'El campo apellido solo permite caracteres alfabéticos.',
            'last_name.max' => 'El campo apellido supera la cantidad maxima permitida',
        ];
    }
}
