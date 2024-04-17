@extends('site')
@section('title', 'Cadastro')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection
@section('section')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="">

                    <div class="">
                        <form class= "formLogin" method="POST" action="{{ route('cadastro') }}">

                            <div class="imgLogoNome"><img src="../../img/icone.png" alt="">SóGiro Supermercado</div>

                            @csrf  
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input id="nome" type="text" class="form-control inputForm @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" class="form-control inputForm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input id="telefone" type="text" class="form-control inputForm @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required>
                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="documento">Cpf</label>
                                <input id="documento" type="text" class="form-control inputForm @error('documento') is-invalid @enderror" name="documento" value="{{ old('documento') }}" required>
                                @error('documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input id="senha" type="password" class="form-control inputForm @error('senha') is-invalid @enderror" name="senha" required autocomplete="new-senha">
                                @error('senha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="senha_confirmation">Confirmar Senha</label>
                                <input id="senha_confirmation" type="password" class="form-control inputForm" name="senha_confirmation" required autocomplete="new-senha">
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="botao btn ">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection