@extends('layouts.app')

@section('titulo', 'Lista de blogs en ingles')
@section('contenido')
    <div class="peru">
        <div class="container texTours d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1tours">Encontre tópicos de interesse sobre turismo no Peru</h1>
                    <div style="text-align: center;">
                        <hr style="width: 60px; border: none; border-top: 3px solid #fe5c24;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Blog do Peru</h2>
                <p class="text-justify">
                    Neste guia, você terá acesso a uma ampla seleção de tópicos de blog voltados ao turismo no Peru. Aqui,
                    convidamos você a explorar uma variedade de conteúdos interessantes e esclarecedores, elaborados para
                    auxiliar no planejamento da sua próxima aventura neste belo país sul-americano. Desde orientações
                    práticas para viajantes até sugestões de locais imperdíveis a serem explorados, nosso blog oferece uma
                    fonte valiosa para se inspirar e se preparar para uma experiência memorável no Peru. Conheça nossa
                    coleção de artigos e comece a imaginar a sua próxima jornada!
                </p>
            </div>
            <div class="col-lg-12 mt-3 mb-3">
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
                            <p class="date"><i class="fa fa-calendar datei"></i>
                                {{ $blog->updated_at->format('d, F - Y') }}
                            </p>
                            <p class="text-card text-justify mb-4">{{ $blog->descripcion }}</p>
                            <a href="{{ route('muestrame', ['slug' => $blog->slug]) }}" class="boton-card">
                                Más detalles
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
