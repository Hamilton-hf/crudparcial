@extends('tema.app')

@section('title', "Listado de Tareas")

@section('contenido')
    <h3>
        Listado de tareas
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Telefono
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente )
                <tr>
                    <td>
                        {{ $cliente->nombre }}
                    </td>
                    <td>
                        {{ $cliente->apellido }}
                    </td>
                    <td>
                        {{ $cliente->telefono }}
                    </td>
                    <td>
                        <a href="{{ route('cliente.edit', $cliente) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
