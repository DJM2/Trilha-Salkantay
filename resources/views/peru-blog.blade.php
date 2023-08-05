@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">Peru Blog Topics</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('index') }}">Home</a> / <a>Blog</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="blogs santaRosa">
                    <div class="black">
                        <h2>Santa Rosa de Lima</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 17/10/2022</span></div>
                        <p>Patron saint of the police and nurses, to whom a series of miracles and stories are
                            attributed.
                        </p>
                        <a href="{{ route('santa-rosa-de-lima-en') }}">Read Article</a>
                    </div>
                </div>
                <div class="blogs fiestasPatrias">
                    <div class="black">
                        <h2>National Holidays in Perú</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 15/10/2022</span></div>
                        <p>Every July 28 the emancipation of Peru is celebrated </p>
                        <a href="{{ route('national-holidays-peru') }}">Read Article</a>
                    </div>
                </div>
                <div class="blogs playas">
                    <div class="black">
                        <h2>The best beaches in Perú</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 10/10/2022</span></div>
                        <p>After a rigorous search, we have a list of the best beaches that Peru has to offer
                        </p>
                        <a href="{{ route('the-best-beaches-peru') }}">Read Article</a>
                    </div>
                </div>
                <div class="blogs mistura">
                    <div class="black">
                        <h2>Mistura</h2>
                        <div class="fecha"><i class="icon-calendar"></i><span> 27/09/2022</span></div>
                        <p>The largest gastronomic fair Peru
                        </p>
                        <a href="{{ route('mistura-en') }}">Read Article</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="padding-bottom: 5em"></div>

    @endsection
