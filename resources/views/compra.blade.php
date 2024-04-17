@extends('site')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/compra.css') }}">
@endsection
@section('section')
    @isset($produto)
        <img src="" alt="">
        <div>Descrição completa</div>
        <div>
            <div>preço</div>
            <div>avalização do produto</div>
            <a href="#">comprar</a>
            <a href="#"><i class="bi bi-cart"></i></a>
        </div>
    @else
        @isset($produtos)
            @foreach($produtos as $produto)
                {{-- aqui tem as informações dos produtos se tiver no carrinho --}}
                <div>{{$produto['id']}}</div>
            @endforeach
            <div>{{$total}}</div>
        @endisset
    @endisset
    
    <form action="{{route('efetuarcompra', ['vendId' => $vendId])}}">
        <input type="radio" id="forma1" name="forma_pagamento" value="1">
        <label for="forma1">Forma de Pagamento 1</label>
    
        <input type="radio" id="forma2" name="forma_pagamento" value="2">
        <label for="forma2">Forma de Pagamento 2</label>
        
        <input type="submit" value="Efeturar compra">
    </form>
@endsection