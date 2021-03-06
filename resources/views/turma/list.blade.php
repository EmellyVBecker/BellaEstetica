@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listagem de turmas</div>

                <div class="card-body">
                    <form action="{{--action('TurmaController@search')--}}" method="POST">
                        @csrf
                        <div class ="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Pesquisar nome" name="nome" />
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                                <a href="{{ url('/turma/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i>  Cadastrar</a>
                            </div>
                        </div>
                    </form>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sigla</th>
                            <th scope="col">Ação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($turmas as $dados)
                        <tr>
                            <td>{{$dados->id}}</td>
                            <td>{{$dados->nome}}</td>
                            <td>{{$dados->sigla}}</td>
                            <td> <a href="{{action('TurmaController@edit',$dados->id)}}"><i class="fa fa-edit"></i>  Editar</a></td>
                            <td> <a href="{{action('TurmaController@destroy',$dados->id)}}" onclick="return confirm('Tem certeza que deseja remover?');"><i class="fa fa-trash"></i>  Remover</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection