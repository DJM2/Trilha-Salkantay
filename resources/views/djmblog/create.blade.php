@extends('layouts.admin')

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Blog</span>
                        <span class="btn btn-primary" style="float: right">
                            <a href="{{ route('djm.index') }}" style="color:#fff">Volver</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('djm.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('djmblog.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
