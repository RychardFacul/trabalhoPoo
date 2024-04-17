@extends('site')

@section('links')
    <link href="{{ asset('css/carrinho.css') }}" rel="stylesheet">
@endsection

@section('section')
    <div class="row">
        <div class="col-lg-8 divCart">
            <div class="main-heading">Meu Carrinho</div>
            <div class="table-cart">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>
                                    <a style="font-size: 2em; color: red" href="{{route('delAllDoCarrinho', ['prodId' => $produto['id']])}}">-</a>
                                </td>
                                <td class="tela">
                                    <div class="display-flex align-center">
                                        <div class="img-product">
                                            <img src="{{asset('img_produtos/'.$produto['imagens'])}}" alt="" class="mCS_img_loaded">
                                        </div>
                                        <div class="name-product">
                                            {{$produto['nome']}}
                                        </div>
                                        <div class="price">
                                            R$ {{number_format($produto['valor'], 2, ',', '.')}}
                                        </div>
                                    </div>
                                </td>
                                <td class="product-qtd" style="display: flex; height: 153px">
                                    <a href="{{route('delDoCarrinho', ['prodId' => $produto['id']])}}">-</a>
                                    <h3>{{$produto['quantidade']}}</h3>
                                    <a href="{{route('addAoCarrinho', ['prodId' => $produto['id']])}}">+</a>
                                </td>
                                <td>
                                    <div class="total">
                                        R$ {{number_format($produto['valor'] * $produto['quantidade'], 2, ',', '.')}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class=" nome col-lg-4">
            <div class="cart-totals">
                <h3>Cart Totals</h3>
                <form action="{{route('compra')}}" method="get" accept-charset="utf-8">
                    <table>
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td class="subtotal">R$ {{number_format($subTotal, 2, ',', '.')}}</td>
                                <input type="hidden" name="subtotal" value="{{$subTotal}}">
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td class="free-shipping">Free Shipping</td>
                            </tr>
                            <tr class="total-row">
                                <td>Total</td>
                                <td class="subtotal">R$ {{number_format($subTotal, 2, ',', '.')}}</td>
                                <input type="hidden" name="total" value="{{$subTotal}}">
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-cart-totals">
                        <input type="submit" class="checkout round-black-btn" title="">Processar compra</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
