@extends('layouts.admin')

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar blog: {{ $djmblog->nombre }}</span>
                        <span class="btn btn-primary" style="float: right;">
                            <a href="{{ route('djm.index') }}" style="color:#fff">Volver</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('djm.update', $djmblog->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('djmblog.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
