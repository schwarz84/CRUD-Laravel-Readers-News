@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lectores de la noticia: {{ $news->title }}</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news->readers as $reader)
                    <tr>
                        <td>{{ $reader->name }}</td>
                        <td>{{ $reader->last_name }}</td>
                        <td>
                            <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-primary">Ver Lector</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('news.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
