<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendasModel extends Model
{
    protected $table = "agendas";

    public function clientes()
    {
        return $this->belongsTo(ClientesModel::class, 'clientes_id', 'id');
    }

    public function procedimentos()
    {
        return $this->belongsTo(ProcedimentosModel::class, 'procedimentos_id', 'id');
    }
}
