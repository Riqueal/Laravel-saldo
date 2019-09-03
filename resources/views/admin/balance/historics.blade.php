@extends('adminlte::page')

@section('title', 'Histórico de Movimentações')

@section('content_header')
    <h1>Histórico de Movimentações</h1>
    <ol class='breadcrumb'>
        <li><a href="http://">Dashboard</a></li>
        <li><a href="http://">Histórico de Movimentações</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">   

        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>?sender</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($historics as $historic)
                    <tr>
                        <td>{{ $historic->id }}</td>
                        <td>{{ number_format($historic->amount, 2, ',', '.') }}</td>
                        <td>{{ $historic->type($historic->type) }}</td> <!-- método type em Historic.php -->
                        <td>{{ $historic->date }}</td>
                        <td>
                            @if($historic->user_id_transaction)
                                {{ $historic->userSender->name }}
                            @else

                            @endif                            
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop