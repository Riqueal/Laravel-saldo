@extends('site.layouts.app')

@section( 'title', 'Meu Perfil' )

@section('content')

<h1>meu Perfil</h1>

<form action="{{ route('profile.update')}}" method="POST">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" value="{{auth()->user()->name}}" name="name" placeholder="Nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" value="{{auth()->user()->email}}" name="email" placeholder="E-mail" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" placeholder="Senha" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Imagem:</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <button type="submite" class="btn btn-info">Atualizar Perfil</button>
    </div>
</form>

@endsection