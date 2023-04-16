@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar lector</h1>

        <form action="{{ route('readers.update', $reader->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group col-6 my-3">
                <label for="name">Nombre</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre" value="{{ old('name', $reader->name) }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6 my-3">
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Apellido" value="{{ old('last_name', $reader->last_name) }}" required>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('readers.index') }}" class="btn btn-secondary mx-3">Cancelar</a>
        </form>
    </div>
@endsection

