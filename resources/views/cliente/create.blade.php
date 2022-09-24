@extends('tema.app')

@section('title', "RegistroClientes")

@section('contenido')
    <h3>
        Registrar Clientes
    </h3>
    <form action="{{ route('cliente.store') }}" method="POST">
        <x-cliente-form-body/>
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
