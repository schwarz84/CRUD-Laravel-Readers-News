@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <h5>Autor: {{ $news->author }}</h5>
        <hr>

        <div class="content">
            <p>{!! nl2br(e($news->content)) !!}</p>
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('news.readers', $newsItem->id) }}" class="btn btn-info">Ver Lectores</a>
    </div>
@endsection
