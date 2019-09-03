@extends('adminlte::page')

@section('title', 'Nova Retirada')

@section('content_header')
    <h1>Fazer Retirada</h1>
    <ol class='breadcrumb'>
        <li><a href="http://">Dashboard</a></li>
        <li><a href="http://">Saldo</a></li>
        <li><a href="http://">Retirada</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <!-- <div class="box-header">
            <h3>Fazer Recarga</h3>
        </div> -->
        <div class="box-body">
            @include('admin.includes.alerts')
            <form action="{{ route('withdraw.store')}}" method="POST">
                {!! csrf_field() !!}
                <div id="form-group">
                    <input type="text" name="value" placeholder="Valor Retirada" class="form-control">
                </div>
                <br>
                <div id="form-group">
                    <button type="submit" class="bth btn-success">Sacar</button>
                </div>
            </form>
        </div>
    </div>
@stop