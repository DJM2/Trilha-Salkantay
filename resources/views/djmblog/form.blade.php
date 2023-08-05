<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $djmblog->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'id' => 'nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $djmblog->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'maxlength' => 160]) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuerpo') }}
            {{ Form::textarea('cuerpo', $djmblog->cuerpo, ['class' => 'ckeditor form-control' . ($errors->has('cuerpo') ? ' is-invalid' : ''), 'placeholder' => 'Cuerpo']) }}
            {!! $errors->first('cuerpo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img') }}
            {{ Form::file('img', ['class' => 'form-control' . ($errors->has('img') ? ' is-invalid' : '')]) }}
            {!! $errors->first('img', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('keywords') }}
            {{ Form::text('keywords', $djmblog->keywords, ['class' => 'form-control' . ($errors->has('keywords') ? ' is-invalid' : ''), 'placeholder' => 'Keywords']) }}
            @if($errors->has('keywords'))
                <div class="invalid-feedback">{{ $errors->first('keywords') }}</div>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('categorias', 'Categorías') }}
            <br>
            @foreach ($categorias as $id => $nombre)
                <div class="form-check form-check-inline">
                    {{ Form::checkbox('categorias[]', $id, in_array($id, $djmblog->categorias->pluck('id')->toArray()), ['class' => 'form-check-input']) }}
                    {{ Form::label('categoria_' . $id, $nombre, ['class' => 'form-check-label']) }}
                </div>
            @endforeach
            {!! $errors->first('categorias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('slug') }}
            {{ Form::text('slug', $djmblog->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug', 'onkeyup' => 'replaceSpaces(this)']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <script>
            function replaceSpaces(input) {
                var value = input.value;
                var replaced = value.replace(/ /g, '-').replace(/[-]{2,}/g, '-');
                input.value = replaced;
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
