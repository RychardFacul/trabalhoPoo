@extends('site')

@section('section')
    <div>
        <img>
        <div>{{ $produto->nome }}</div>
        <div>{{ $produto->marca }}</div>
        <div>{{ $produto->descricao_detalhada }}</div>
        <div>{{ $produto->valor }}</div>
        <div>{{ $produto->estoque }}</div>
    </div>
@endsection