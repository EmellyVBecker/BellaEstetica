<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use Illuminate\Http\Request;
use App\FornecedoresModel;
use Illuminate\Support\Facades\DB;

class FornecedoresController extends Controller
{
    public function index()
    {
        $objFornecedores = FornecedoresModel::orderBy("id")->get();
        return view('fornecedores.list')->with('fornecedores', $objFornecedores);
    }
    public function create()
    {
        return view("fornecedores.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'marca_vendida' => 'required|max:100',
            'produto' => 'required|max:100',
            'valor' => 'required|max:100',
        ]);

        $objFornecedores = new FornecedoresModel();
        $objFornecedores->nome = $request->nome;
        $objFornecedores->marca_vendida = $request->marca_vendida;
        $objFornecedores->produto = $request->produto;
        $objFornecedores->valor = $request->valor;

        $objFornecedores->save();

        return redirect()->action('FornecedoresController@index')
            ->with('success', 'Fornecedor salvo com sucesso.');
    }
    public function edit($id)
    {
        $objFornecedores = FornecedoresModel::findorfail($id);

        return view('fornecedores.edit')->with('fornecedores', $objFornecedores);
    }
    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'marca_vendida' => 'required|max:100',
            'produto' => 'required|max:100',
            'valor' => 'required|max:100',
        ]);

        $objFornecedores = FornecedoresModel::findorfail($request->id);
        $objFornecedores->nome = $request->nome;
        $objFornecedores->marca_vendida = $request->marca_vendida;
        $objFornecedores->produto = $request->produto;
        $objFornecedores->valor = $request->valor;

        $objFornecedores->save();

        return redirect()->action('FornecedoresController@index')
            ->with('success', 'Fornecedor editado com sucesso.');
    }
    public function remove($id)
    {

        //select * from fornecedores where id = $id
        $objFornecedores = FornecedoresModel::findOrFail($id);

        $objFornecedores->delete();

        return redirect()->action('FornecedoresController@index')
            ->with('success', 'Fornecedors removido com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('fornecedores');
        if(!empty($request->nome)){
            $query->where('nome', 'like', $request->nome);
        }  
        
        $objFornecedores = $query->orderBy('id')->get();
        return view('fornecedores.list')->with('fornecedores', $objFornecedores);
    }
}
