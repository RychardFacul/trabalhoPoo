@extends('site')

@section('section')
    <div>
        <img>
        <div>{{ $produto['nome'] }}</div>
        <div>{{ $produto['marca'] }}</div>
        <div>{{ $produto['descricao_detalhada'] }}</div>
        <div>{{ $produto['valor'] }}</div>
        <div>{{ $produto['estoque'] }}</div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img src='../images/Produtos/' class='img-thumbnail w-100 d-block' alt='Slide Image' loading='lazy' style='height: 450px'/></div>
                <div class="carousel-item"><img src='../images/Produtos/'class='img-thumbnail w-100 d-block' alt='Slide Image' loading='lazy' style='height: 450px'/></div>
                <div class="carousel-item"><img src='../images/Produtos/' class='img-thumbnail w-100 d-block' alt='Slide Image' loading='lazy' style='height: 450px'/></div>
                <div class="carousel-item"><img src='../images/Produtos/' class='img-thumbnail w-100 d-block' alt='Slide Image' loading='lazy' style='height: 450px'/></div>
                <div class="carousel-item"><img src='../images/Produtos/' class='img-thumbnail w-100 d-block' alt='Slide Image' loading='lazy' style='height: 450px'/></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
                <li data-target="#carousel-1" data-slide-to="4"></li>
                </ol>
            </div>
        </div>
        <div class="col-md-7">
            <h4></h4>
            <div class="price"><span class="mr-2"><i class="fa fa-rupee text-success"></i>&nbsp;R$ </span></div>
            <div class="d-flex flex-row">
                
            </div>
            <div class="d-flex align-items-center mt-4 offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Marca :</span><span class="ml-1"><br></span></div>
            <div class="d-flex align-items-center mt-4 offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Placa Mãe :</span><span class="ml-1"><br></span></div>
            <div class="d-flex align-items-center offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Processador: </span><span class="ml-1"><br></span></div>
            <div class="d-flex align-items-center offers mb-1"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Memoria: </span><span class="ml-1"><br></span></div>
            <div class="d-flex align-items-center offers"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">HD: </span><span class="ml-1"><br></span></div>
            <div class="d-flex align-items-center offers"><i class="fa fa-check-square-o mt-1"></i><span class="ml-1 font-weight-bold">Descrição: </span><span class="ml-1"><br></span></div>
            <hr>
            <div><span class="font-weight-bold">Verdido Por:</span><span class="ml-2">REUSE PC</span></div>
            <div class="mt-3"><button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" type="button">COMPRAR</button></div>
        </div>
    </div>
@endsection