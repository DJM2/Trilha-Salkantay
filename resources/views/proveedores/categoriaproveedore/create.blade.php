@extends('layouts.admin')

@section('template_title')
    Create Categoriaproveedore
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Categoriaproveedore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoriaProveedores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('proveedores.categoriaproveedore.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
