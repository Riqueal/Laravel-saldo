@extends('adminlte::page')

@section('title', 'Confirmar Transferência de Saldo')

@section('content_header')
    <h1>Confirmar Transferência</h1>
    <ol class='breadcrumb'>
        <li><a href="http://">Dashboard</a></li>
        <li><a href="http://">Saldo</a></li>
        <li><a href="http://">Transferir</a></li>
        <li><a href="http://">confirmação</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Confirmar Transferência de Saldo</h3>
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')
            <p><strong>Recebedor: </strong>{{ $sender->name }}</p>
            <form action="{{ route('transfer.store')}}" method="POST">
                {!! csrf_field() !!}

                <input type="hidden" name="sender-id" value="{{ $sender->id }}">
                <div id="form-group">
                    <input type="text" name="balance" placeholder="Valor:" class="form-control">
                </div>
                <br>
                <div id="form-group">
                    <button type="submit" class="btn btn-success">Transferir</button>
                </div>
            </form>
        </div>
    </div>
@stop