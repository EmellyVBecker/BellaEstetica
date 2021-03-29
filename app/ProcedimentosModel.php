<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcedimentosModel extends Model
{
    protected $table = "procedimentos";

    public function fornecedores()
    {
        return $this->belongsTo('App\FornecedoresModel', 'fornecedores_id', 'id');
    }
}
