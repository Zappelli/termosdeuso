<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Contrato;
use App\Clausula;
use App\ClausulaCategoria;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContratosRequest;

class ContratosController extends Controller {

	public function index()
	{
		$contratos = Contrato::all(); 

		return view('contratos.index')->with('contratos', $contratos);
	}



	public function adicionar_form()
	{
		$contrato = new Contrato;
		$contrato->nome = 'Titulo do Contrato';
		$contrato->descricao = '';
		$contrato->clausulas = array();
		$data_view = Clausula::relationship_all(); 
		$action = action('ContratosController@adicionar');
		return view('contratos.form')->with(array('action' => $action, 'contrato' => $contrato, 'data_view' => $data_view));
	}

	/** 
     * Action para adicionar uma novo Contrato
     * @return riderect ClausulasController@index
     */
    public function adicionar(ContratosRequest $request)
    {
        $clausulas = array();
		foreach($request->input('clausulas') as $c)
		{
			$clausulas[] = intval($c);
		}

		$contrato = new Contrato;

		$contrato->nome = $request->input('nome');
		$contrato->descricao = '';
		$contrato->user_id = Auth::id();
		$contrato->clausulas = json_encode($clausulas);

		$contrato->save();

        $msg = 'Contrato <b>' . $request->input('nome') . '</b> adicionada com sucesso';
        return redirect()->action('ContratosController@index')->with(array('mensagem' => $msg, 'class' => 'success'));
    }

    /**
	 * Editar uma Contrato
	 * @param  int  $id
	 * @return Response
	 */
	public function editar($id)
	{
		$contrato = new Contrato;
		
		$find = Contrato::find($id);

		$contrato->nome = $find->nome;
		$contrato->descricao = '';
		$contrato->clausulas = json_decode($find->clausulas);

		$data_view = Clausula::relationship_all();
		
		$action = action('ContratosController@atualizar', $find->id);
		
        return view('contratos.form')->with(array('action' => $action, 'contrato' => $contrato, 'data_view' => $data_view));
	}

    /**
	 * Atualizar uma Contrato
	 * @param  int  $id
	 * @return Response
	 */
	public function atualizar($id, ContratosRequest $request)
	{
		$clausula = Contrato::find($id);
        $clausula->fill($request->all())->save();
        $msg = 'Clausula <b>' . $request->input('nome') . '</b> atualizada com sucesso';
        return redirect()->action('ClausulasController@index')->with(array('mensagem' => $msg, 'class' => 'success'));
	}

    /**
	 * Remove uma Contrato
	 * @param  int  $id
	 * @return Response
	 */
	public function remover($id)
	{
		$clausula = Clausula::find($id);
        $clausula->delete();
        $msg = 'Clausula <b>Removida</b> com sucesso!';
        return redirect()->action('ClausulasController@index')->with(array('mensagem' => $msg, 'class' => 'info'));
	}

}
