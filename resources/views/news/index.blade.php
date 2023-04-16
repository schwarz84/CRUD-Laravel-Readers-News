@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todas las noticias</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $newsItem)
                    <tr>
                        <td>{{ $newsItem->title }}</td>
                        <td>{{ $newsItem->author }}</td>
                        <td>
                            <a href="{{ route('news.show', $newsItem->id) }}" class="btn btn-primary">Ver Noticia</a>

                            <a href="{{ route('news.readers', $newsItem->id) }}" class="btn btn-info">Ver Lectores</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
