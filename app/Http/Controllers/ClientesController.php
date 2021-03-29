<?php

namespace App\Http\Controllers;

use App\ClientesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objClientess = ClientesModel::orderBy('id')->get();
        return view('clientes.list')->with('clientes', $objClientess);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
            'email' => 'required|max:100',
            'cpf' => 'required|max:100',
            'telefone' => 'required|max:100',
        ]);

        $objClientes = new ClientesModel();
        $objClientes->nome = $request->nome;
        $objClientes->email = $request->email;
        $objClientes->cpf = $request->cpf;
        $objClientes->telefone = $request->telefone;

        $objClientes->save();

        return redirect()->action('ClientesController@index')
            ->with('sucess', 'Cliente salvo com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientesModel  $clientesModel
     * @return \Illuminate\Http\Response
     */
    public function show(ClientesModel $clientesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientesModel  $clientesModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objClientes = ClientesModel::findOrfail($id);
        return view('clientes.edit')->with('clientes', $objClientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientesModel  $clientesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'email' => 'required|max:100',
            'cpf' => 'required|max:100',
            'telefone' => 'required|max:100',
        ]);

        $objClientes = ClientesModel::findOrfail($request->id);
        $objClientes->nome = $request->nome;
        $objClientes->email = $request->email;
        $objClientes->cpf = $request->cpf;
        $objClientes->telefone = $request->telefone;

        $objClientes->save();

        return redirect()->action('ClientesController@index')
            ->with('sucess', 'Cliente salvo com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientesModel  $clientesModel
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $objClientes = ClientesModel::findOrfail($id);

        $objClientes->delete();

        return redirect()->action('ClientesController@index')
            ->with('sucess', 'Cliente removido com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('clientes');
        if (!empty($request->nome)) {
            $query->where('nome', 'like', $request->nome);
        }

        if (!empty($request->cpf)) {
            $query->where('cpf', 'like', $request->cpf);
        }

        $objClientes = $query->orderBy('id')->get();
        return view('clientes.list')->with('clientes', $objClientes);
    }
}
