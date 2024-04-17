@extends('site')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/compra.css') }}">
@endsection
@section('section')
    <section class="h-100 gradient-custom" style="margin-top: -100px;">
        <div class="container py-5">
          <div class="row d-flex justify-content-center my-4">
            <div class="col-md-7">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Resumo da Compra</h5>
                </div>
                <div class="card-body">
                 @foreach ($produtos as $produto)
                  <!-- Single item -->
                    <div class="row">
                        <div class="col-lg-2 col-md-12 mb-1 mb-lg-0">
                        <!-- Image -->
                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                            <img src="{{asset('img_produtos/'.$produto['imagens'])}}"
                            class="w-100" alt="Blue Jeans Jacket"
                            style="height: 80px" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                        <!-- Image -->
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <!-- Data -->
                        <p style="font-size: 18px"> <strong>{{$produto['nome']}}</strong></p>
                        <!-- Data -->
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                            <!-- Data -->
                            <p style="font-size: 16px"> <strong>{{$produto['quantidade']}} x R$ {{number_format($produto['valor'], 2, ',', '.')}}</strong></p>
                            <!-- Data -->
                            </div>
                        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                            <h4 style="font-size: 20px">
                                <strong>R$ {{number_format($produto['quantidade'] * $produto['valor'], 2, ',', '.')}}</strong>
                            </h4>   
                        </div>
                  </div>
                  <!-- Single item -->
                  <hr class="my-4" />
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-5">
                <form action="{{route('efetuarcompra', ['vendId' => $vendId])}}">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                          <h5 class="mb-0">Pagemento</h5>
                        </div>
                        <div class="card-body">
                          <ul class="list-group list-group-flush">
                            <li
                              class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                              <input type="radio" id="forma1" name="forma_pagamento" value="1">
                              <label for="forma1">PIX</label>
                          
                              <input type="radio" id="forma2" name="forma_pagamento" value="2">
                              <label for="forma2">CARTAO DE CREDITO</label>

                              <input type="radio" id="forma3" name="forma_pagamento" value="3">
                              <label for="forma3">CARTAO DE DEBITO</label>
                            </li>
                            <hr class="my-4" />
                            <li
                              class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3" >
                              <div style="font-size: 18px">
                                <strong>Total</strong>
                                <strong>
                                  <p class="mb-0"></p>
                                </strong>
                              </div>
                              <span style="font-size: 20px"><strong>R$ {{number_format($total, 2, ',', '.')}}</strong></span>
                            </li>
                          </ul>
                          <a href="{{route('compra')}}">
                            <button type="submit" class="btn btn-primary btn-lg btn-block w-100">
                                Finalizar Compra
                            </button>
                          </a>
                        </div>
                      </div>
                </form>
            </div>
          </div>
        </div>
      </section>
@endsection