<?php

namespace App\Http\Controllers;

use App\Agendas;
use App\AgendasModel;
use App\ClientesModel;
use App\ProcedimentosModel;
use App\VwAgendaProcedimentoCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendasController extends Controller
{
    public function index()
    {
        $objAgendas = VwAgendaProcedimentoCliente::orderBy("id")->get();
        return view('agendas.list')->with('agendas', $objAgendas);
    }
    public function create()
    {
        $objProcedimentos = ProcedimentosModel::orderBy('id')->get();

        $objClientes = ClientesModel::orderBy('id')->get();

        return view("agendas.create")->with(['procedimentos' => $objProcedimentos, 'clientes' => $objClientes]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|max:100',
            'hora' => 'required|max:100',
        ]);

        $objAgendas = new AgendasModel();
        $objAgendas->clientes_id = $request->clientes_id;
        $objAgendas->procedimentos_id = $request->procedimentos_id;
        $objAgendas->data = $request->data;
        $objAgendas->hora = $request->hora;

        $objAgendas->save();

        return redirect()->action('AgendasController@index')
            ->with('success', 'Agenda salva com sucesso.');
    }
    public function edit($id)
    {
        $objAgendas = AgendasModel::findorfail($id);

        $objProcedimentos = ProcedimentosModel::orderBy('id')->get();

        $objClientes = ClientesModel::orderBy('id')->get();

        return view('agendas.edit')->with(['agendas' => $objAgendas, 'procedimentos' => $objProcedimentos, 'clientes' => $objClientes]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'data' => 'required|max:100',
            'hora' => 'required|max:100',
        ]);

        $objAgendas = AgendasModel::findorfail($request->id);
        $objAgendas->clientes_id = $request->clientes_id;
        $objAgendas->procedimentos_id = $request->procedimentos_id;
        $objAgendas->data = $request->data;
        $objAgendas->hora = $request->hora;

        $objAgendas->save();

        return redirect()->action('AgendasController@index')
            ->with('success', 'Agenda editada com sucesso.');
    }
    public function remove($id)
    {

        //select * from agendas where id = $id
        $objAgendas = AgendasModel::findOrFail($id);

        $objAgendas->delete();

        return redirect()->action('AgendasController@index')
            ->with('success', 'Agenda removida com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('vw_agenda_procedimento_cliente');

        if (!empty($request->nome)) {
            $query->where('nome_cliente', 'like', $request->nome);
        }


        $objAgendas = $query->orderBy('id')->get();
        return view('agendas.list')->with('agendas', $objAgendas);
    }
}
