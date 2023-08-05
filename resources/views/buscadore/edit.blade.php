@extends('layouts.admin')
@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Buscadore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cat.update', $buscadore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('buscadore.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
