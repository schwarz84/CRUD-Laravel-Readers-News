@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Bienvenido a {{ config('app.name', 'Laravel') }}</h1>
        <p class="lead">Implementacion de CRUD</p>
        <hr class="my-4">
        <p>Utiliza las opciones del menú para navegar entre lectores y noticias.</p>
    </div>
@endsection
