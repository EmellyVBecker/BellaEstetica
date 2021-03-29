@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#99ccff;">Formulário fornecedor</div>

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
                    <form action="{{action('FornecedoresController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$fornecedores->id}}" />
                        <div class="form-row">
                            <div class="col">
                                <label for="nome">Nome</label></br>
                                <input type="text" class="form-control" name="nome" value="{{$fornecedores->nome}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="marca_vendida">Marca vendida</label></br>
                                <input type="text" class="form-control" name="marca_vendida" value="{{$fornecedores->marca_vendida}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="produto">Produto vendido</label></br>
                                <input type="text" class="form-control" name="produto" value="{{$fornecedores->produto}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="valor">Valor</label></br>
                                <input type="text" class="form-control" name="valor" value="{{$fornecedores->valor}}" /> </br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Atualizar</button>
                                <a href="{{url ('fornecedores')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection