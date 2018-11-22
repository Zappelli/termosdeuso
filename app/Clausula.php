<?php namespace termos;

use Illuminate\Database\Eloquent\Model;

use Termos\ClausulaCategoria;

class Clausula extends Model {

	protected $guarded = ['id'];
	protected $fillable = array('nome', 'descricao', 'categoria_id');

	public static function relationship_all()
	{
		$cla = Clausula::orderBy('categoria_id')->get();
		$cat = ClausulaCategoria::select('id', 'nome')->get();

		$rel = array();
		$clausulas = array();
		foreach ($cla as $c) {
			$clausulas[$c->id] = ['nome' => $c->nome, 'descricao' => $c->descricao];
			$rel[$c->categoria_id][] = $c->id;
		}

		$categorias = array();
		foreach ($cat as $c) {
			$categorias[] = ['nome' => $c->nome, 'id' => $c->id];
		}


		return array('rel' => $rel, 'clausulas' => $clausulas, 'categorias' => $categorias);
	}
}
