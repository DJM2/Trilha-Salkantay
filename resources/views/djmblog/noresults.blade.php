@extends('layouts.app')
@section('contenido')
    <div class="noresults">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="padding-top: 30vh;color:#fff">Nenhum resultado foi encontrado em sua pesquisa</h3>
                </div>
                <div class="col-lg-12 text-center mt-2">
                    <h5 style="color:#fff">Nova pesquisa:</h5>
                    <form action="{{ route('blogsearch') }}" method="get">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="form-outline" style="width:300px; margin:0 auto">
                                <input type="search" id="name" name="name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn-inicio" style="border:none;" value="Procurar">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection
