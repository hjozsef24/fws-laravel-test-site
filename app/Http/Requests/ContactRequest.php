<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
	 * @return array<string, ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'email', 'max:255'],
			'message' => ['required', 'string', 'max:255'],
		];
	}

	public function messages(): array
	{
		return [
			'name.required' => 'A név megadása kötelező.',
			'name.max' => 'A név legfeljebb 255 karakter lehet.',

			'email.required' => 'Az e-mail cím megadása kötelező.',
			'email.email' => 'Az e-mail cím formátuma nem megfelelő.',
			'email.max' => 'Az e-mail cím legfeljebb 255 karakter lehet.',

			'message.required' => 'Az üzenet megadása kötelező.',
			'message.max' => 'Az üzenet legfeljebb 255 karakter lehet.',
		];
	}
}
