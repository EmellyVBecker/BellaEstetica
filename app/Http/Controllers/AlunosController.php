<?php

namespace App\Http\Controllers;

use App\Alunos;
use Illuminate\Http\Request;
use App\AlunosModel;
use Illuminate\Support\Facades\DB;

class AlunosController extends Controller
{
    public function index()
    {
        $objAlunos = AlunosModel::orderBy("id")->get();
        return view('alunos.list')->with('alunos', $objAlunos);
    }
    public function create()
    {
        return view("alunos.create");
    }
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|max:100',
            'curso' => 'required',
        ]);

        $objAlunos = new AlunosModel();
        $objAlunos->nome = $request->nome;
        $objAlunos->curso = $request->curso;
        $objAlunos->turma = $request->turma;

        $objAlunos->save();

        return redirect()->action('AlunosController@index')
            ->with('success', 'Aluno salvo com sucesso.');
    }
    public function edit($id)
    {

        $objAlunos = AlunosModel::findorfail($id);

        return view('alunos.edit')->with('alunos', $objAlunos);
    }
    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'curso' => 'required',
        ]);

        $objAlunos = AlunosModel::findorfail($request->id);
        $objAlunos->nome = $request->nome;
        $objAlunos->curso = $request->curso;
        $objAlunos->turma = $request->turma;

        $objAlunos->save();

        return redirect()->action('AlunosController@index')
            ->with('success', 'Aluno editado com sucesso.');
    }
    public function remove($id)
    {

        //select * from alunos where id = $id
        $objAlunos = AlunosModel::findOrFail($id);

        $objAlunos->delete();

        return redirect()->action('AlunosController@index')
            ->with('success', 'Aluno removido com sucesso.');
    }
    public function search(Request $request)
    {
        /*//opção1
        if(!empty($request->nome)){
            $objAlunos = AlunosModel::where('nome', 'like', '%' . $request->nome . '%')->get();
        
        }else if(!empty($request->curso)){
            $objAlunos = AlunosModel::where('curso', 'like', '%' . $request->curso . '%')->get();
        }else{
            $objAlunos= AlunosModel::orderBy('id')->get();
        } */
        
        //opção2
        $query = DB::table('alunos');
        if(!empty($request->nome)){
            $query->where('nome', 'like', $request->nome);
        }  

        if(!empty($request->curso)){
            $query->where('curso', 'like', $request->curso);
        }
        
        $objAlunos = $query->orderBy('id')->get();
        return view('alunos.list')->with('alunos', $objAlunos);
    }
}
