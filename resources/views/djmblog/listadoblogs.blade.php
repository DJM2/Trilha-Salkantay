@extends('layouts.app')

@section('titulo', 'Lista de blogs en ingles')
@section('contenido')
    <div class="peru">
        <div class="centrado">
            <h1 class="h1-inicio">Encontre tópicos de interesse sobre turismo no Peru</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Blog do Peru</h2>
                <p>
                    Nesta guia, você encontrará a lista completa de todos os temas de blog relacionados ao turismo no Peru.
                    Aqui, você pode explorar uma ampla variedade de artigos interessantes e informativos que o ajudarão a
                    planejar sua próxima aventura neste belo país sul-americano. Desde dicas práticas para viajantes até
                    recomendações de lugares imperdíveis para visitar, nosso blog tem tudo o que você precisa para se
                    inspirar e se preparar para uma experiência inesquecível no Peru. Explore nossa coleção de artigos e
                    comece a sonhar com sua próxima viagem!
                </p>
            </div>
            <div class="col-lg-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="buscador" placeholder="Procurar blog">
                </div>
            </div>
            <script>
              function searchBlogs() {
                  const input = document.getElementById('buscador');
                  const blogs = document.querySelectorAll('.nombreBlog');
                  const blogContainers = document.querySelectorAll('.blog-container');
                  const noResults = document.getElementById('no-results');
                  let numResults = 0;

                  const searchWords = input.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").split(' ');

                  blogContainers.forEach(function(blogContainer) {
                      let blogName = blogContainer.querySelector('.nombreBlog').textContent.toLowerCase().normalize('NFD')
                          .replace(/[\u0300-\u036f]/g, "");
                      let hasAllWords = true;

                      searchWords.forEach(function(searchWord) {
                          if (!blogName.includes(searchWord)) {
                              hasAllWords = false;
                          }
                      });

                      if (hasAllWords) {
                          blogContainer.style.display = 'block';
                          numResults++;
                      } else {
                          blogContainer.style.display = 'none';
                      }
                  });

                  if (input.value === '') {
                      blogContainers.forEach(function(blogContainer) {
                          blogContainer.style.display = 'block';
                      });
                  }

                  if (numResults === 0) {
                      noResults.style.display = 'block';
                  } else {
                      noResults.style.display = 'none';
                  }
              }
              setInterval(searchBlogs, 500);
          </script>          

            <div id="no-results" style="display: none;" class="mt-5 mb-5">
                Nenhum resultado de pesquisa encontrado...
            </div>
            @foreach ($blogs as $blog)
                <div class="col-lg-3 col-md-6 blog-container">
                    <div class="card card-new mx-auto" style="width: 18rem;">
                        <a href="{{ route('muestrame', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                            <div class="img-container">
                                <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}"
                                    loading="lazy">
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title nombreBlog">{{ $blog->nombre }}</h5>
                            <p class="text-center"><i class="icon-date_range"></i>
                                {{ $blog->updated_at->format('d/m/Y') }}
                            </p>
                            <p class="text-card">{{ $blog->descripcion }}</p>
                            <a href="{{ route('muestrame', ['slug' => $blog->slug]) }}" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
