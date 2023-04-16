@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de lectores</h1>
        <a href="{{ route('readers.create') }}" class="btn btn-primary mb-3">Crear nuevo lector</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($readers as $reader)
                <tr>
                    <td>{{ $reader->id }}</td>
                    <td>{{ $reader->name }}</td>
                    <td>{{ $reader->last_name }}</td>
                    <td>
                        <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning">Editar</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $reader->id }}">Eliminar</button>
                    </td>
                </tr>


{{--                Modal para eliminar--}}
                <div class="modal fade" id="deleteModal-{{ $reader->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar al lector "{{ $reader->name }} {{ $reader->last_name }}"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <form action="{{ route('readers.destroy', $reader->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

