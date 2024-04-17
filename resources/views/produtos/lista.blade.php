@extends('site')

@section('section')
<link href="./css/produtos.css" rel="stylesheet">
  <div class="row">
    <div class="mt-5 w-50 mx-auto">
        <form id="form_pesquisa" class="d-flex" role="search" method="GET">
            <input id="pesquisa" class="form-control me-2" name="q" type="text" placeholder="produto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
    </div>

    <div class="row mt-5 mx-auto">
        @foreach ($produtos as $key => $produto)
            <div class="col-md-3">
                <div class="card" href="#">
                    <div class="card-body">
                        <a class="text-decoration-none text-dark" href="/produto/descricao/{{$produto->id}}">
                            <img src="{{asset('img_produtos/'.$imagens[$key])}}" alt="" class="card-img-top">
                        </a>
                        <h5 class="card-text-Desc">{{$produto->descricao}}</h5>
                        <h5 class="card-text-valor">R$ {{number_format($produto->valor, 2, ',', '.')}}</h5>
                        <a class="card-link btn btn-primary" href="#"><i class="fa-solid fa-cart-shopping"></i> Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
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