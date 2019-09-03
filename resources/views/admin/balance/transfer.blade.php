@extends('adminlte::page')

@section('title', 'Transferir Saldo')

@section('content_header')
    <h1>Tranaferir</h1>
    <ol class='breadcrumb'>
        <li><a href="http://">Dashboard</a></li>
        <li><a href="http://">Saldo</a></li>
        <li><a href="http://">Transferir</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Informe o Recebedor</h3>
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')
            <form action="{{ route('confirm.transfer')}}" method="POST">
                {!! csrf_field() !!}
                <div id="form-group">
                    <input type="text" name="sender" placeholder="Informação de quem vai receber o saque ( Nome ou E-mail )" class="form-control">
                </div>
                <br>
                <div id="form-group">
                    <button type="submit" class="btn btn-success">Próxima Etapa</button>
                </div>
            </form>
        </div>
    </div>
@stop