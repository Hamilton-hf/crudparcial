@extends('tema.app')

@section('title', "Editar Clientes")

@section('contenido')
    <h3>
        Editar Clientes <i>{{ $cliente->nombre }}</i>
    </h3>
    <form action="{{ route('cliente.store') }}" method="POST">
        <x-cliente-form-body :cliente="$cliente"/>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
