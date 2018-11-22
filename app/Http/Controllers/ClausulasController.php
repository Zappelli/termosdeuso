<?php 

namespace Termos\Http\Controllers;

use DB;
use Request;
use Termos\Clausula;
use Termos\ClausulaCategoria;
use Termos\Http\Requests\ClausulasRequest;

class ClausulasController extends Controller {

    /** 
     * Pagina inicial com todas as cláusulas cadastradas 
     * @return view clausulas.index
     */
    public function index()
    {
        $data_view = Clausula::relationship_all(); 
       
		return view('clausulas.index')->with('data_view', $data_view);
    }

    /** 
     * Pagina com o formulário de adicionar nova Cláusula 
     * @return view clausulas.form_adicionar
     */
    public function adicionar_form()
    {
        $clausula = new Clausula;
        $clausula->nome = '';
		$clausula->descricao = '';
		$clausula->categoria_id = '';

        $action = action('ClausulasController@adicionar');

        $categorias = ClausulaCategoria::all();

		return view('clausulas.form')->with(array('action' => $action, 'clausula' => $clausula, 'categorias' => $categorias));
    }

    /** 
     * Action para adicionar uma nova clausula 
     * @return riderect ClausulasController@index
     */
    public function adicionar(ClausulasRequest $request)
    {
        $clausula = new Clausula;
        $clausula->nome = $request->input('nome');
        $clausula->descricao = $request->input('descricao');
        $clausula->categoria_id = $request->input('categoria_id');

        $file = $request->file('imagem');
        
        $clausula->save();

        $msg = 'Clausula <b>' . $request->input('nome') . '</b> adicionada com sucesso';
        return redirect()->action('ClausulasController@index')->with(array('mensagem' => $msg, 'class' => 'success'));
    }


    /**
	 * Editar uma clausula
	 * @param  int  $id
	 * @return Response
	 */
	public function editar($id)
	{
		$find = Clausula::find($id);

        $clausula = new Clausula;
        $clausula->nome = $find->nome;
		$clausula->descricao = $find->descricao;
		$clausula->categoria_id = $find->categoria_id;

        $action = action('ContratosController@atualizar', $find->id);
        $categorias = ClausulaCategoria::all();

        return view('clausulas.form')->with(array('action' => $action, 'clausula' => $clausula, 'categorias' => $categorias));
	}

    /**
	 * Editar uma clausula
	 * @param  int  $id
	 * @return Response
	 */
	public function atualizar($id, ClausulasRequest $request)
	{
		$clausula = Clausula::find($id);
        $clausula->fill($request->all())->save();
        $msg = 'Clausula <b>' . $request->input('nome') . '</b> atualizada com sucesso';
        return redirect()->action('ClausulasController@index')->with(array('mensagem' => $msg, 'class' => 'success'));
	}

    /**
	 * Remove uma Clausula
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
