<?php

namespace Termos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClausulasRequest extends FormRequest
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
			'nome' => 'required',
			'descricao' => 'required',
			'categoria_id' => 'numeric|min:1'
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
			'categoria_id.min' => '<b>Categoria</b> é obrigatório',
			'descricao.required' => '<b>Descrição</b> é obrigatório',
			'categoria_id.numeric' => 'Selecione uma <b>Categoria</b>  valida',
		];
	}
}
