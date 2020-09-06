@extends('adminlte::page')

@section('content')
    <h3>Meus Favoritos</h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                @foreach($favorites as $favorite)
                    <div class="col">
                        <p><img src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/.{{$favorite->poster_path}}" width="200" height="200"></p>
                        <p>{{$favorite->title}}  <a href="favoritos/remover/{{$favorite->id}}" alt="Remover dos Favoritos" title="Remover dos Favoritos"><i class="fas fa-star" style="color:red"></i></a></p>
                    </div>
                @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
