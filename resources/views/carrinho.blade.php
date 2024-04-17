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
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td class="tela">
                                    <div class="display-flex align-center">
                                        <div class="img-product">
                                            <img src="{{asset('img_produtos/'.$produto['imagens'])}}" alt="" class="mCS_img_loaded">
                                        </div>
                                        <div class="name-product">
                                            {{$produto['nome']}}
                                        </div>
                                        <div class="price">
                                            {{$produto['valor']}}
                                        </div>
                                    </div>
                                </td>
                                <td class="product-qtd">
                                    <h3>{{$produto['quantidade']}}</h3>
                                </td>
                                <td>
                                    <div class="total">
                                        {{$produto['valor'] * $produto['quantidade']}}
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
                <form action="#" method="get" accept-charset="utf-8">
                    <table>
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td class="subtotal">$2,589.00</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td class="free-shipping">Free Shipping</td>
                            </tr>
                            <tr class="total-row">
                                <td>Total</td>
                                <td class="price-total">$1,591.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-cart-totals">
                        <a href="#" class="checkout round-black-btn" title="">Proceed to Checkout</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
