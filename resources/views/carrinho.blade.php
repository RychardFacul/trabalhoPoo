@extends('site')

@section('links')
    <link href="./css/carrinho.css" rel="stylesheet">
@endsection

@section('section')
{{$produtos[0]['id']}}
{{$subTotal}}
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="display-flex align-center">
                                <div class="img-product">
                                    <img src="https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg" alt="" class="mCS_img_loaded">
                                </div>
                                <div class="name-product">
                                    Apple iPad Mini
                                    <br>G2356
                                </div>
                                <div class="price">
                                    $1,250.00
                                </div>
                            </div>
                        </td>
                        <td class="product-qtd">
                            <h3>1</h3>
                        </td>
                        <td>
                            <div class="total">
                                $6,250.00
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-4">
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