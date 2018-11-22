<?php

namespace Termos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratosRequest extends FormRequest
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
        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
	{
		return [
			'nome' => 'required',
			'clausulas' => 'required'
		];
	}

	/**
	 * Get the error messages for the defined validation rules
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'nome.required' => '<b>Nome</b> é obrigatório',
			'clausulas.required' => '<b>Clausulas</b> é obrigatório',
		];
	}
}
