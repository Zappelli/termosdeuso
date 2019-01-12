<?php 

namespace Termos;

use Termos\Contrato;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {

	
	public function _inicio()
    {
        return $this->hasOne('Termos\ContratoInicio');
    }


}
