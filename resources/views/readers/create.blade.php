@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear nuevo lector</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('readers.store') }}" method="POST">
            @csrf

            <div class="form-group my-3 col-6">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
            </div>

            <div class="form-group my-3 col-6">
                <label for="last_name">Apellido:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required>
            </div>

            <button type="submit" class="btn btn-primary mx-3">Guardar</button>
            <a href="{{ route('readers.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
