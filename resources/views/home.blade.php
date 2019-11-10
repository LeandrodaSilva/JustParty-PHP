@extends('base')

@section('title', 'Home')

@section('sidebar')
    @parent
    <div class="container">
        <h2 class="text-light">Destaques</h2>
    </div>
@endsection

@section('content')
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide col-6" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner text-dark">
                <div class="carousel-item active card">
                    <img src="tmp/uploads/9ac8caa45cb4d65df701c16ced7a0464.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toca o Terror</h5>
                        <p class="card-text">Partiu tocar o terror!</p>
                        <a href="/evento" class="btn btn-primary btn-sm">Informações</a>
                    </div>
                </div>
                <div class="carousel-item card">
                    <img src="tmp/uploads/9ac8caa45cb4d65df701c16ced7a0464.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toca o Terror</h5>
                        <p class="card-text">Partiu tocar o terror!</p>
                        <a href="/evento" class="btn btn-primary btn-sm">Informações</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection
