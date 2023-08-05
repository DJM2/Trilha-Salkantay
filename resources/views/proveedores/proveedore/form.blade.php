<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-4">
                {{ Form::label('nombre') }}
                {{ Form::text('nombre', $proveedore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-4">
                {{ Form::label('ruc') }}
                {{ Form::text('ruc', $proveedore->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
                {!! $errors->first('ruc', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-grou col-lg-4">
                {{ Form::label('categoria') }}
                {{ Form::select('categoria_id', $categorias, old('categoria_id', $proveedore->categoria_id), ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
                {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group col-lg-6">
                {{ Form::label('direccion') }}
                {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $proveedore->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('paginaweb') }}
                {{ Form::text('paginaweb', $proveedore->paginaweb, ['class' => 'form-control' . ($errors->has('paginaweb') ? ' is-invalid' : ''), 'placeholder' => 'Paginaweb']) }}
                {!! $errors->first('paginaweb', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-6">
                {{ Form::label('correo') }}
                {{ Form::text('correo', $proveedore->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-lg-12">
                {{ Form::label('detalles') }}
                {{ Form::text('detalles', $proveedore->detalles, ['class' => 'form-control' . ($errors->has('detalles') ? ' is-invalid' : ''), 'placeholder' => 'Detalles']) }}
                {!! $errors->first('detalles', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
