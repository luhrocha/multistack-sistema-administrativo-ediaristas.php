@extends('adminlte::page')

@section('title', 'Editar Serviço')

@section('content_header')
<h1>Editar Serviço</h1>
@stop

@section('content')

@include('servicos._message_errors')

<form action="{{ route('servicos.update', $servico) }}" method="post">
    @method('PUT')
    @include('servicos._form')
</form>

@stop