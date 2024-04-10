@extends('site')
@section('section')
    Está é a pagina de apresentação
    @auth
        <!-- Conteúdo visível apenas se o usuário estiver autenticado -->
        <p>Usuário logado!</p>
    @else
        <!-- Conteúdo visível apenas se o usuário não estiver autenticado -->
        <p>Usuário não logado!</p>
    @endauth
@endsection