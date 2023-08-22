<div class="box box-info padding-1">
    <div class="box-body">        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', isset($categoria) ? $categoria->nombre : '') }}">
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', isset($categoria) ? $categoria->slug : '') }}">
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