@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <a href="{{ url('/home')}}" ><div class="card-header" style="background-color: #99ccff;color:white">Listagem de Fornecedores</div></a>

                <div class="card-body">
                    <form action="{{action('FornecedoresController@search')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Pesquisar nome" name="nome" />
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn" style="background-color: #99ccff;">Buscar</button>
                                <a href="{{ url('/fornecedores/create')}}" class="btn" style="background-color: #99ccff;"><i class="fa fa-plus-circle"></i> Cadastrar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Marca vendida</th>
                                <th scope="col">Produto vendido</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Ação</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fornecedores as $dados)
                            <tr>
                                <td>{{$dados->id}}</td>
                                <td>{{$dados->nome}}</td>
                                <td>{{$dados->marca_vendida}}</td>
                                <td>{{$dados->produto}}</td>
                                <td>{{$dados->valor}}</td>
                                <td> <a style="color:  #66b3ff;" href="{{action('FornecedoresController@edit',$dados->id)}}"><i class="fa fa-edit"></i> Editar</a></td>
                                <td> <a style="color:  #66b3ff;" href="{{action('FornecedoresController@remove',$dados->id)}}" onclick="return confirm('Tem certeza que deseja remover?');"><i class="fa fa-trash"></i> Remover</a></td>
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