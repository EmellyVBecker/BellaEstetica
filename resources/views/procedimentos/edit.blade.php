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
                    <form action="{{action('ProcedimentosController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$procedimentos->id}}" />
                        <div class="form-row">
                            <div class="col">
                                <label for="nome">Nome</label></br>
                                <input type="text" class="form-control" name="nome" value="{{$procedimentos->nome}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="duracao">Duração</label></br>
                                <input type="text" class="form-control" name="duracao" value="{{$procedimentos->duracao}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="valor">Valor</label></br>
                                <input type="text" class="form-control" name="valor" value="{{$procedimentos->valor}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="fornecedores_id">Produto Utilizado</label> </br>
                                <select class="form-control" name="fornecedores_id">
                                    @foreach($fornecedores as $item)
                                    <option value="{{$item->id}}">{{$item->produto}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Atualizar</button>
                                <a href="{{url ('procedimentos')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection