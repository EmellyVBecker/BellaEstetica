<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\DespesasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DespesaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objDespesas = DespesasModel::orderBy('id')->get();
        return $objDespesas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        return DespesasModel::create ($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DespesasModel  $despesaModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objDespesas = DespesasModel::findOrFail($id);
        return $objDespesas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DespesasModel  $despesaModel
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request, $id)
    {
        $objDespesas = DespesasModel::findOrFail($id);
        return $objDespesas ->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DespesasModel  $despesaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objDespesas = DespesasModel::findOrFail($id);
        return $objDespesas->delete();
    }

    public function search(Request $request)
    {
        $query = DB::table('despesa');

        if(!empty($request->nome)){
            $query->where('nome', 'like', "%".$request->nome."%");
        }

        if(!empty($request->valor)){
            $query->where('valor', 'like', "%".$request->valor."%");
        }

        if(!empty($request->data)){
            $query->where('data', 'like', "%".$request->data."%");
        }

        $objDespesas = $query->orderBy('id')->get();
        return $objDespesas;
    }
}
