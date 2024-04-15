@extends('site')
@section('title', 'Login')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('section')

    <form class=" luiza w-100 m-auto form-container  p-5 rounded" method="POST" action="{{route('login')}}">
        @csrf
            <div class="formulario">
            <label for="floatingInput" class="">Email</label>
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="your-emai@gmail.com" >
           
        </div>
        <div class="maria">
            <label for="floatingInput" class="">Senha</label>
            <input name="senha" type="password" class="form-control" id="floatingInput" placeholder="password" >
        </div>
        <div class="from-check text-start my-3">
            <input type="checkbox" class="form-check-input" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">lembra-me</label>
        </div>
        <button class="btn rosa w-100 py-2">Entrar</button>
        <a href="{{route("cadastro")}}">cadastrar-se</a>
    </form>
        
@endsection