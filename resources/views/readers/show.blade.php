@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del lector</h1>

        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <tr>
                <td>{{ $reader->name }}</td>
                <td>{{ $reader->last_name }}</td>
            </tr>
        </table>

        <a href="{{ route('readers.index') }}" class="btn btn-secondary">Regresar al listado de lectores</a>
        <a href="{{ route('readers.showReadNews', $reader->id) }}" class="btn btn-info">Mis Noticias</a>

    </div>
@endsection

