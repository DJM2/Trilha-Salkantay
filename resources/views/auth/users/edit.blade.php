@extends('layouts.admin')

@section('contenido')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <h3>Actualizar usuario</h3>
            <form action="/users/{{ $user->id }}" method="post" class="bg-light">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="name" name="name" class="form-control" required
                            value="{{ $user->name }}">
                    </div>
                    <div class="col-lg-12">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="email" name="email" class="form-control" required
                            value="{{ $user->email }}">
                    </div>

                </div>
                <a href="/users" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
                <span class="float-right">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </span>
            </form>
        </div>
    </div>
@endsection
