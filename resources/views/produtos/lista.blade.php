@extends('site')

@section('section')
    <div class="mt-5 w-50 mx-auto">
        <form id="form_pesquisa" class="d-flex" role="search" method="GET">
            <input id="pesquisa" class="form-control me-2" name="q" type="text" placeholder="produto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
    </div>

    <div class="row mt-5 mx-auto">
        @foreach ($produtos as $produto)
            <div class="col-4">
                <div class="card" href="#">
                    <div class="card-body">
                        <a class="text-decoration-none text-dark" href="/produto/descricao/{{$produto->id}}">
                            <h3 class="card-title">{{$produto->nome}}</h3>
                            <img src="{{asset('storage/produtos/notebook_img.webp')}}" alt="" class="card-img-top">
                        </a>
                        <p class="card-text">{{$produto->descricao}}</p>
                        <p class="card-text">R$ {{$produto->valor}}</p>
                        <a class="text-decoration-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                        </a>
                        <a class="card-link" href="#">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item {{ $produtos->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $produtos->previousPageUrl() }}" tabindex="-1">&laquo;</a>
            </li>
            @foreach ($produtos->getUrlRange(1, $produtos->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $produtos->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            <li class="page-item {{ $produtos->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $produtos->nextPageUrl() }}">&raquo;</a>
            </li>
        </ul>
    </nav>
@endsection