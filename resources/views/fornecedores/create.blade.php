@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#99ccff;">Formulário fornecedores</div>

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
                    <form action="{{action('FornecedoresController@store')}}" method="post">
                        <div class="form-row">
                            @csrf
                            <div class="col">
                                <label for="nome">Nome</label> </br>
                                <input type="text" class="form-control" name="nome" /> </br>
                            </div>
                            <div class="col">
                                <label for="marca_vendida">Marca vendida</label> </br>
                                <input type="text" class="form-control" name="marca_vendida" /> </br>
                            </div>
                            <div class="col">
                                <label for="produto">Produto vendido</label> </br>
                                <input type="text" class="form-control" name="produto" /> </br>
                            </div>
                            <div class="col">
                                <label for="valor">Valor</label> </br>
                                <input type="text" class="form-control" name="valor" /> </br>
                            </div>
                            <div class="col-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Salvar</button>
                                <a href="{{url ('fornecedores')}}" class="btn btn-primary"><i class= "fa fa-arrow-left"></i>  Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection