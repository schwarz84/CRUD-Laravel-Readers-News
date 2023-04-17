@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$reader ? 'Editar lector' : 'Crear nuevo lector'}}</h1>

        <form action="{{ $reader ? route('readers.update', $reader->id) : route('readers.store') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group col-6 my-3">
                <label for="name">Nombre</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre" value="{{ $reader ? $reader->name : '' }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-6 my-3">
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Apellido" value="{{ $reader ? $reader->last_name : '' }}" required>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group my-3 col-6">
                <label>Noticias:</label>
                @foreach(App\Models\News::all() as $news)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="news[]" id="news-{{ $news->id }}" value="{{ $news->id }}"
                               @if($reader && $reader->news->contains($news->id)) checked @endif
                        >
                        <label class="form-check-label" for="news-{{ $news->id }}">
                            {{ $news->title }}
                        </label>
                    </div>
                @endforeach
            </div>


            <button type="submit" class="btn btn-primary">{{ $reader ? 'Actualizar' : 'Guardar' }}</button>
            <a href="{{ route('readers.index') }}" class="btn btn-secondary mx-3">Cancelar</a>
        </form>
    </div>
@endsection

