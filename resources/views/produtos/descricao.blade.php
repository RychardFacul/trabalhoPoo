@extends('site')

@section('section')
<link href="../../css/produtosDesc.css" rel="stylesheet">

    <div class="row" style="margin-top: 80px">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div id="productCarousel" class="carousel slide SliderProdutos" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($imagens as $imagem)
                        
                    <div class="carousel-item active">
                        <img src="{{asset('img_produtos/'.$imagem)}}" class="d-block " alt="Produto 1">
                    </div>

                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
        <div class="col-md-7">
            <h4 class="ProdNome">{{ $produto['nome'] }}</h4>
            <div class="price"><span class="mr-2">R$ {{number_format($produto['valor'], 2, ',', '.')}}</span></div>
            <div class="d-flex flex-row">
                
            </div>
            <div class="d-flex align-items-center mt-4 offers mb-1">
                <i class="fa fa-check-square-o mt-1"></i>
                <span class="ml-1 font-weight-bold ProdFabric">Fabricante: </span><span class="ml-1 ProdFabric" style="margin-left: 8px"> {{ $produto['marca'] }}<br></span></div>
            <div class="d-flex align-items-center offers ProdDescCompleta"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold ProdFabric">Descrição:  {{ $produto['descricao_detalhada'] }}</span><span class="ml-1" style="margin-left: 8px"><br></span></div>
            <hr>
            <div><span class="font-weight-bold">Verdido Por: </span><span class="ml-2"> SóGiro SuperMercado</span></div>
            <div class="mt-3"><button class="btn buttonComprarProdDesc" data-toggle="modal" data-target="#exampleModalCenter" type="button">ADICIONAR AO CARRINHO</button></div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection