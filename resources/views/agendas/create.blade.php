@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#99ccff;">Formulário agendas</div>

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
                    <form action="{{action('AgendasController@store')}}" method="post">
                        <div class="form-row">
                            @csrf
                            <div class="col">
                                <label for="clientes_id">Nome da cliente</label> </br>
                                <select class="form-control" name="clientes_id">
                                    @foreach($clientes as $item)
                                    <option value="{{$item->id}}">{{$item->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="procedimentos_id">Nome do procedimento</label> </br>
                                <select class="form-control" name="procedimentos_id">
                                    @foreach($procedimentos as $item)
                                    <option value="{{$item->id}}">{{$item->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="data">Data</label> </br>
                                <input type="text" class="form-control" name="data" /> </br>
                            </div>
                            <div class="col">
                                <label for="hora">Hora</label> </br>
                                <input type="text" class="form-control" name="hora" /> </br>
                            </div>
                            <div class="col-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Salvar</button>
                                <a href="{{url ('agendas')}}" class="btn btn-primary"><i class= "fa fa-arrow-left"></i>  Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection