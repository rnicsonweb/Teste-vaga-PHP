@extends('adminlte::page')

@section('content')
    <h3>Lista de Filmes</h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col">
                                    <a href="#" role="button" data-id="{{$item['id']}}" data-title="{{$item['title']}}" data-image="{{$item['imagem']}}" data-overview="{{$item['overview']}}" data-toggle="modal" data-target="#myModal">
                                    <p><img src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/.{{$item['imagem']}}" width="200" height="200"></p>
                                    <p>{{$item['title']}} @if($item['favorito'] == 0)
                                            <a href="favoritos/adicionar/{{$item['id']}}" alt="Adicionar aos Favoritos" title="Adicionar aos Favoritos"><i class="fas fa-star"></i></a>
                                                              @else
                                            <a href="favoritos/remover/{{$item['id']}}" alt="Remover dos Favoritos" title="Remover dos Favoritos"><i class="fas fa-star" style="color:red"></i></a>
                                        @endif
                                    </p>
                                    </a>
                                </div>
                    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><b><div id="title"></div></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <center><img src="" id="image" height="400px" width="400px" /></center>
            <hr style="width:100%">
            <b>Descrição:</b>
            <div id="overview"></div>
        </div>
    </div>
</div>
@endsection
@section('adminlte_js')
    <script type="text/javascript">
        $('#myModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('title')
            var overview = button.data('overview')
            var image = button.data('image')
            var url = "https://image.tmdb.org/t/p/w600_and_h900_bestv2/" + image
            var modal = $(this)
            modal.find('#title').text(title)
            modal.find('#image').attr('src', url)
            modal.find('#overview').text(overview)
        })
    </script>
@endsection
