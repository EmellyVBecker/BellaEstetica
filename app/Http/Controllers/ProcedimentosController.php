<?php

namespace App\Http\Controllers;

use App\Procedimentos;
use App\ProcedimentosModel;
use App\FornecedoresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcedimentosController extends Controller
{
    public function index()
    {
        $objProcedimentos = ProcedimentosModel::orderBy("id")->get();
        return view('procedimentos.list')->with('procedimentos', $objProcedimentos);
    }
    public function create()
    {
        $objFornecedores = FornecedoresModel::orderBy('id')->get();

        return view("procedimentos.create")->with(['fornecedores' => $objFornecedores]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'duracao' => 'required|max:100',
            'valor' => 'required|max:100',
        ]);

        $objProcedimentos = new ProcedimentosModel();
        $objProcedimentos->nome = $request->nome;
        $objProcedimentos->duracao = $request->duracao;
        $objProcedimentos->valor = $request->valor;
        $objProcedimentos->fornecedores_id = $request->fornecedores_id;

        $objProcedimentos->save();

        return redirect()->action('ProcedimentosController@index')
            ->with('success', 'Procedimento salvo com sucesso.');
    }
    public function edit($id)
    {
        $objProcedimentos = ProcedimentosModel::findorfail($id);

        $objFornecedores = FornecedoresModel::orderBy('id')->get();

        return view('procedimentos.edit')->with(['procedimentos' => $objProcedimentos, 'fornecedores' => $objFornecedores]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'duracao' => 'required|max:100',
            'valor' => 'required|max:100',
        ]);

        $objProcedimentos = ProcedimentosModel::findorfail($request->id);
        $objProcedimentos->nome = $request->nome;
        $objProcedimentos->duracao = $request->duracao;
        $objProcedimentos->valor = $request->valor;
        $objProcedimentos->fornecedores_id = $request->fornecedores_id;

        $objProcedimentos->save();

        return redirect()->action('ProcedimentosController@index')
            ->with('success', 'Procedimento editado com sucesso.');
    }
    public function remove($id)
    {

        //select * from procedimentos where id = $id
        $objProcedimentos = ProcedimentosModel::findOrFail($id);

        $objProcedimentos->delete();

        return redirect()->action('ProcedimentosController@index')
            ->with('success', 'Procedimentos removido com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('procedimentos');
        if (!empty($request->nome)) {
            $query->where('nome', 'like', $request->nome);
        }

        $objProcedimentos = $query->orderBy('id')->get();
        return view('procedimentos.list')->with('procedimentos', $objProcedimentos);
    }
}
