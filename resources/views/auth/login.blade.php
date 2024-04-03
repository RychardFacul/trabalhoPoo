@extends('site')
@section('title', 'Login')
    
@section('section')
    <form class="bg-body-tertiary p-5 rounded" method="POST" action="{{route('login.efetuar')}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">email</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" id="exampleFormControlInput1">
        </div>
        <input type="submit" value="Login">
    </form>
@endsection