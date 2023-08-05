<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre:') }}
            {{ Form::text('nombre', $buscadore->nombre, ['id' => 'nombre', 'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slug:') }}
            {{ Form::text('slug', $buscadore->slug, ['id' => 'slug', 'class' => 'form-control', 'readonly' => 'readonly' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'slug']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <script>
            const nombreInput = document.getElementById('nombre');
            const slugInput = document.getElementById('slug');
        
            nombreInput.addEventListener('input', () => {
                const nombreSlug = nombreInput.value.trim().replace(/\s+/g, '-');               
                slugInput.value = nombreSlug;
            });
        </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>