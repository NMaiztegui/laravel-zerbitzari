@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>edit a Character</h1>
            <form action="{{ route('character.update', $character->id) }}"  method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="name">Nombre del Personaje:</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $character->name) }}" required>
                </div>
            
                <div class="form-group">
                    <label for="actor">Actor:</label>
                    <input type="text" class="form-control" name="actor" value="{{ old('actor', $character->actor) }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea name="description" class="form-control" required>{{ old('description', $character->description) }}</textarea>
                
                <button type="submit" class="btn btn-warning">actualizar</button>
            </form>
            <a href="{{ route('zerrenda') }}">
                <button type="button" class="btn btn-info">Volver al Inicio</button>
            </a>
        </div>
    </div>
@endsection
