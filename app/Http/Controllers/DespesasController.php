<?php

namespace App\Http\Controllers;

use App\DespesasModel;
use App\FornecedoresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DespesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objDespesas = DespesasModel::orderBy('id')->get();
        return view('despesas.list')->with('despesa', $objDespesas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("despesas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'valor' => 'required|max:100',
            'data' => 'required|max:100',
        ]);

        $objDespesa = new DespesasModel();
        $objDespesa->nome = $request->nome;
        $objDespesa->valor = $request->valor;
        $objDespesa->data = $request->data;


        $objDespesa->save();

        return redirect()->action('DespesasController@index')
            ->with('sucess', 'Despesa salvo com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DespesasModel  $despesasModel
     * @return \Illuminate\Http\Response
     */
    public function show(DespesasModel $despesasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DespesasModel  $despesasModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $objDespesa = DespesasModel::findOrfail($id);

        return view('despesas.edit')->with('despesas', $objDespesa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DespesasModel  $despesasModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'valor' => 'required|max:100',
            'data' => 'required|max:100',
        ]);

        $objDespesa = DespesasModel::findOrfail($request->id);
        $objDespesa->nome = $request->nome;
        $objDespesa->valor = $request->valor;
        $objDespesa->data = $request->data;

        $objDespesa->save();

        return redirect()->action('DespesasController@index')
            ->with('sucess', 'Despesa salva com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DespesasModel  $despesasModel
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $objDespesa = DespesasModel::findOrfail($id);

        $objDespesa->delete();

        return redirect()->action('DespesasController@index')
            ->with('sucess', 'Despesa removida com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('despesas');
        if (!empty($request->nome)) {
            $query->where('nome', 'like', $request->nome);
        }

        if (!empty($request->valor)) {
            $query->where('valor', 'like', $request->valor);
        }

        if (!empty($request->data)) {
            $query->where('data', 'like', $request->data);
        }

        $objDespesa = $query->orderBy('id')->get();
        return view('despesas.list')->with('despesa', $objDespesa);
    }
}
