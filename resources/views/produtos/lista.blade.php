@extends('site')

@section('section')
    <div class="mt-5 w-50 mx-auto">
        <form id="form_pesquisa" class="d-flex" role="search" method="GET">
            <input id="pesquisa" class="form-control me-2" name="q" type="text" placeholder="produto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
    </div>

    <div class="row mt-5">
        <!-- a div logo abaixo deve-se repetir -->
        <div class="col-4">
            <div class="card" href="#">
                <div class="card-body">
                    <!-- Todas estas informações devem ser passadas pelo controler-->
                    <a class="text-decoration-none text-dark" href="#">
                        <h3 class="card-title">Titulo</h3>
                        <img src="{{asset('storage/produtos/notebook_img.webp')}}" alt="" class="card-img-top">
                    </a>
                    <p class="card-text">Descrição simples:</p>
                    <p class="card-text">Preço: </p>
                    <a class="text-decoration-none" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                    </a>
                    <a class="card-link" href="#">Comprar</a>
                </div>
            </div>
        </div>
    </div>
    @foreach ($produtos as $item)
        <div>{{$item}}</div>
    @endforeach
    <!-- paginacao, logica incrementada pelo controller -->
    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">&laquo;</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </nav>
@endsection