@extends('site')

@section('links')
    <link href="{{ asset('css/carrinho.css') }}" rel="stylesheet">
@endsection

@section('section')


    <section class="h-100 gradient-custom" style="margin-top: -100px;">
        <div class="container py-5">
          <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Meu Carrinho</h5>
                </div>
                <div class="card-body">
                 @foreach ($produtos as $produto)
                  <!-- Single item -->
                    <div class="row">
                        <div class="col-lg-3 col-md-12 mb-1 mb-lg-0">
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
                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                        <!-- Data -->
                        <p style="font-size: 22px"> <strong>{{$produto['nome']}}</strong></p>
                        <!-- Price -->
                        <p style="font-size: 20px">
                            <strong>R$ {{number_format($produto['valor'], 2, ',', '.')}}</strong>
                        </p>
                      <!-- Price -->
                        <!-- Data -->
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                      <!-- Quantity -->
                      <div class="d-flex mb-4" style="max-width: 300px">
                        <a href="{{route('delDoCarrinho', ['prodId' => $produto['id']])}}">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 me-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                            </button>
                        </a>
                        <div data-mdb-input-init class="form-outline">
                          <input id="form1" min="0" name="quantity" value="{{$produto['quantidade']}}" type="number" class="form-control" />
                          <label class="form-label" for="form1"></label>
                        </div>
                        <a href="{{route('addAoCarrinho', ['prodId' => $produto['id']])}}">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary px-3 ms-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </a>
                    </div>
                    </div>
                  </div>
                  <!-- Single item -->
                  <hr class="my-4" />
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0"></h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      SubTotal
                      <span>R$ {{number_format($subTotal, 2, ',', '.')}}</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>Total</strong>
                        <strong>
                          <p class="mb-0"></p>
                        </strong>
                      </div>
                      <span><strong>R$ {{number_format($subTotal, 2, ',', '.')}}</strong></span>
                    </li>
                  </ul>
                  <a href="{{route('compra')}}"></a>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
                    Finalizar Compra
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
