@extends('base')

@section('title', 'Toca o Terror')

@section('sidebar')
    @parent
    <div class="container">
        <h2 class="text-light">Toca o Terror</h2>
    </div>
@endsection

@section('content')
    <div class="form-group">
        <div class="card">
            <img src="tmp/uploads/9ac8caa45cb4d65df701c16ced7a0464.jpg"
                 class="card-img-top"
                 alt="..."
                 style="height: 270px;">
            <div class="card-body">
                <h5 class="card-title">Toca o Terror</h5>
                <p class="card-text">Partiu tocar o terror!</p>
                <a href="#" class="btn btn-primary btn-sm">Comprar</a>
            </div>
        </div>
    </div>
@endsection
