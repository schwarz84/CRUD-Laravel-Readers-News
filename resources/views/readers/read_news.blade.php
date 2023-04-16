@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Noticias leídas por {{ $reader->name }} {{ $reader->last_name }}</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reader->news as $news)
                    <tr>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->author }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-secondary">Volver al detalle del lector</a>
    </div>
@endsection
