@extends('layouts.admin')

@section('template_title')
    Update Categoriaproveedore
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Categoriaproveedore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoriaProveedores.update', $categoriaproveedore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('proveedores.categoriaproveedore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
