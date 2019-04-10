<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AgregarRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'title_entre' => 'required|max:255',
			'f_date' => 'required|date',
			'message' => 'required|max:400',
		];
	}

	public function messages() {
		return [
			'title_entre' => 'El titulo es requerido',
			'f_date' => 'La fecha es requerida',
			'message' => 'La descripción es requerida',
		];
	}
}
