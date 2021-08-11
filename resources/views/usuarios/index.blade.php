@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
<h1>Lista de Usuários</h1>
@stop

@section('content')

@if (session('mensagem'))
    <div class="alert alert-success">
        {{ session('mensagem') }}
    </div>
@endif

<table class="table table-sm">
    <thead>
        <tr>
            <th style="width: 10px">ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('usuarios.edit', $usuario) }}">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja remover esse usuário?')">
                        Excluir
                    </button>
                </form>
                </td>
            </tr>
        @empty
            <tr>
                <th></th>
                <th>Nenhum registro foi encontrado</th>
                <th></th>
            </tr>
        @endforelse       
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $usuarios->links() }}
</div>

<div class="float-right">
    <a href="{{route('usuarios.create')}}" class="btn btn-success">Novo Usuário</a>
</div>
@stop