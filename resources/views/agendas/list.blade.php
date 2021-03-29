@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <a href="{{ url('/home')}}"><div class="card-header" style="background-color: #99ccff;">Listagem de Agendas</div></a>

                <div class="card-body">
                    <form action="{{action('AgendasController@search')}}" method="POST">
                        @csrf
                        <div class ="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Pesquisar nome" name="nome" />
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn" style="background-color:#99ccff;">Buscar</button>
                                <a href="{{ url('/agendas/create')}}" class="btn" style="background-color: #99ccff;"><i class="fa fa-plus-circle"></i>  Cadastrar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome da cliente</th>
                                <th scope="col">Nome do procedimento</th>
                                <th scope="col">Data</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Ação</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agendas as $dados)
                            <tr>
                                <td>{{$dados->id}}</td>
                                <td>{{$dados->nome_cliente}}</td>
                                <td>{{$dados->nome_procedimento}}</td>
                                <td>{{$dados->data}}</td>
                                <td>{{$dados->hora}}</td>

                                <td> <a style="color:  #66b3ff;" href="{{action('AgendasController@edit',$dados->id)}}"><i class="fa fa-edit"></i> Editar</a></td>
                                <td> <a style="color:  #66b3ff;" href="{{action('AgendasController@remove',$dados->id)}}" onclick="return confirm('Tem certeza que deseja remover?');"><i class="fa fa-trash"></i> Remover</a></td>
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