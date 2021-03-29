@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#99ccff;">Formulário Cliente</div>

                <div class="card-body">
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{action('ClientesController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$clientes->id}}" />
                        <div class="form-row">
                            <div class="col">
                                <label for="nome">Nome</label></br>
                                <input type="text" class="form-control" name="nome" value="{{$clientes->nome}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="email">Email</label></br>
                                <input type="text" class="form-control" name="email" value="{{$clientes->email}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="cpf">CPF</label></br>
                                <input type="text" class="form-control" name="cpf" value="{{$clientes->cpf}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="telefone">Telefone</label></br>
                                <input type="text" class="form-control" name="telefone" value="{{$clientes->telefone}}" /> </br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Atualizar</button>
                                <a href="{{url ('clientes')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection