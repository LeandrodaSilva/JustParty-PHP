@extends('base')

@section('title', 'Home')

@section('sidebar')
    @parent
    <div class="container">
        <h2 class="text-light">Eventos</h2>
    </div>
@endsection

@section('content')
    <div class="form-group">
        <div class="card" style="width: 18rem;">
            <img src="tmp/uploads/9ac8caa45cb4d65df701c16ced7a0464.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Toca o Terror</h5>
                <p class="card-text">Partiu tocar o terror!</p>
                <a href="/evento" class="btn btn-primary btn-sm">Informações</a>
            </div>
        </div>
    </div>
@endsection
