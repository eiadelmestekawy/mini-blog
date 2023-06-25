<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'title' => 'required | min:3',
            'description' => 'required | min:5',
            
        ];

    }

    public function messages(): array
    {
        return [
            'title.min' => 'you should enter three character',
            'title.required' => 'you should enter your name',
        ]; 
    }
    
}
