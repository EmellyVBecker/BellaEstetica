@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulário Curso</div>

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
                    <form action="{{action('CursosController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$cursos->id}}" />
                        <div class="form-row">
                            <div class="col">
                                <label for="nome">Nome</label></br>
                                <input type="text" class="form-control" name="nome" value="{{$cursos->nome}}" /> </br>
                            </div>
                            <div class="col">
                                <label for="abreviatura">Abreviatura</label></br>
                                <input type="text" class="form-control" name="abreviatura" value="{{$cursos->abreviatura}}" /> </br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Atualizar</button>
                                <a href="{{url ('cursos')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection