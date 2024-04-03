@extends('site')
@yield('title', 'Cadastro')

@section('section')
    <form class="bg-body-tertiary p-5 rounded" method="POST" action="{{route('realizarcadastro')}}">
        <h1>Cadastre-se</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Telefone</label>
            <input name="telefone" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cpf</label>
            <input name="cpf" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" id="exampleFormControlInput1">
        </div>
        <input type="submit" value="ENVIAR">
    </form>
@endsection