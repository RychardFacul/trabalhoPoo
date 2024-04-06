@extends('site')

@section('section')
    
    <div class="mt-5 w-50 mx-auto">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <div class="row mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    aqui vai ficar uma imagem
                    <img src="{{asset()}}" alt="" class="card-img-top">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Descrição:</p>
                    <p class="card-text">Price: </p>
                    <a class="card-link" href="#">Adicionar ao Carrinho</a>
                    <a class="card-link" href="#">Descrição do produto</a>
                </div>
            </div>
        </div>
    </div>

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