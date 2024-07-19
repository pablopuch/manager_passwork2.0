<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassworkRequest extends FormRequest
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
			'user_id' => 'required',
			'name' => 'required|string',
			'user_pass' => 'required|string',
			'email_pass' => 'string',
			'password_pass' => 'required|string',
			'link' => 'string',
			'note' => 'string',
			'url_img' => 'string',
        ];
    }
}
