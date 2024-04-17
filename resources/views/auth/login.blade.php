@extends('site')
@section('title', 'Login')

@section('scripts')
    @empty($LoginError)
        <script>
            alert('{{ $LoginError }}')
        </script>
    @endempty
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('section')

    <form class=" formLogin w-100 m-auto p-5 rounded" method="POST" action="{{route('login')}}">
        <div class="imgLogoNome"><img src="../../img/icone.png" alt="">SóGiro Supermercado</div>
        @csrf
        <div class="formulario">
            <label for="floatingInput" class="">Email</label>
            <input name="email" type="email" class="form-control inputForm" id="floatingInput" placeholder="your-emai@gmail.com" >
           
        </div>
        <div>
            <label for="floatingInput" class="">Senha</label>
            <input name="senha" type="password" class="form-control inputForm" id="floatingInput" placeholder="password" >
        </div>
        <div class="from-check text-start my-3">
            <input type="checkbox" class="form-check-input" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">lembra-me</label>
        </div>
        <button type="submit">Login</button>
    </form>
        
@endsection