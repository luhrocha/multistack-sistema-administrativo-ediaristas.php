@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
<h1>Lista de Serviços</h1>
@stop

@section('content')

@include('_message_session')

<table class="table table-sm">
    <thead>
        <tr>
            <th style="width: 10px">ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($servicos as $servico)
            <tr>
                <td>{{$servico->id}}</td>
                <td>{{$servico->nome}}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('servicos.edit', $servico) }}">Editar</a>
                <form action="{{ route('servicos.destroy', $servico) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja remover esse serviço?')">
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
    {{ $servicos->links() }}
</div>

<div class="float-right">
    <a href="{{route('servicos.create')}}" class="btn btn-success">Novo Serviço</a>
</div>
@stop