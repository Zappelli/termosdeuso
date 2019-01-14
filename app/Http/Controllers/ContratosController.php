<?php

namespace Termos\Http\Controllers;

use Termos\Contrato;
use Termos\Clausula;
use Termos\ClausulaCategoria;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContratosController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$user = Auth::user();

		if ($user->permission == 1) {
			$contratos = Contrato::all(); 
		} else {
			$contratos = Contrato::where('user_id', $user->id); 
		}

		return view('contratos.index')->with('contratos', $contratos);
	}



	public function adicionar_form()
	{
		$contrato = new Contrato;

		$contrato->nome = 'Titulo do Contrato';
		$contrato->descricao = '';
		$contrato->clausulas = array();

		$data_view = Clausula::relationship_all(); 

		$action = action('ContratosController@to_choose');

		return view('contratos.form')->with(array('action' => $action, 'contrato' => $contrato, 'data_view' => $data_view));
	}

	public function to_choose(Request $request) {

		if ($request->input('type') == 'inicio') {
			var_dump($request->input('type'));
			return $this->create($request);
		}
	}

	/** 
     * Action para adicionar uma novo Contrato
     * @return riderect ClausulasController@index
     */
    public function create(Request $request)
    {

		$contrato = new Contrato;

		$contrato->nome = $request->input('nome');
		$contrato->descricao = '';
		$contrato->user_id = Auth::id();

		$contrato->_inicio()->tipo = $request->input('tipo');
		$contrato->_inicio()->tipo_hospedagem = $request->input('tipo_hospedagem');
		$contrato->_inicio()->dispositivos = json_encode($request->input('dispositivos'));
		$contrato->_inicio()->uso_comercial = $request->input('uso_comercial');

		$contrato->save();

		var_dump($contrato);

		if (!empty($contrato->id)) {
			return Response::json(array('success' => true, 'contrato' => $contrato), 200);
		}else{
			return Response::json(array('success' => false, 'contrato' => $contrato), 500);
		}
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
	public function atualizar($id, Request $request)
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
