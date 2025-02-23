@extends('Front.layout')
@section('content')



 <!-- site__body -->
 <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow"
                                        width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item"><a href="#">Breadcrumb</a> <svg class="breadcrumb-arrow"
                                        width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Shopping Cart</h1>
                    </div>
                </div>
            </div>
            <div class="cart block">
                <div class="container">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column cart-table__column--image">Image</th>
                                <th class="cart-table__column cart-table__column--product">Product</th>
                                <th class="cart-table__column cart-table__column--price">Price</th>
                                <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                                <th class="cart-table__column cart-table__column--total">Total</th>
                                <th class="cart-table__column cart-table__column--remove"></th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image"><a href="#" class="product-image__body"><img
                                                class="product-image__img" src="images/products/product-1.jpg"
                                                alt=""></a></div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="#"
                                        class="cart-table__product-name">Electric Planer Brandix KL370090G 300 Watts</a>
                                    <ul class="cart-table__options">
                                        <li>Color: Yellow</li>
                                        <li>Material: Aluminium</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">$699.00</td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input"
                                            type="number" min="1" value="2">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">$1,398.00
                                </td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button"
                                        class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image"><a href="#" class="product-image__body"><img
                                                class="product-image__img" src="images/products/product-2.jpg"
                                                alt=""></a></div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="#"
                                        class="cart-table__product-name">Undefined Tool IRadix DPS3000SY 2700 watts</a>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">$849.00</td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input"
                                            type="number" min="1" value="1">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">$849.00</td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button"
                                        class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image"><a href="#" class="product-image__body"><img
                                                class="product-image__img" src="images/products/product-5.jpg"
                                                alt=""></a></div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="#"
                                        class="cart-table__product-name">Brandix Router Power Tool 2017ERXPK</a>
                                    <ul class="cart-table__options">
                                        <li>Color: True Red</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">$1,210.00
                                </td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input"
                                            type="number" min="1" value="3">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">$3,630.00
                                </td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button"
                                        class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart__actions">
                        <form class="cart__coupon-form"><label for="input-coupon-code" class="sr-only">Password</label>
                            <input type="text" class="form-control" id="input-coupon-code" placeholder="Coupon Code">
                            <button type="submit" class="btn btn-primary">Apply Coupon</button></form>
                        <div class="cart__buttons"><a href="index.html" class="btn btn-light">Continue Shopping</a> <a
                                href="#" class="btn btn-primary cart__update-button">Update Cart</a></div>
                    </div>
                    <div class="row justify-content-end pt-5">
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Cart Totals</h3>
                                    <table class="cart__totals">
                                        <thead class="cart__totals-header">
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>$5,877.00</td>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__totals-body">
                                            <tr>
                                                <th>Shipping</th>
                                                <td>$25.00<div class="cart__calc-shipping"><a href="#">Calculate
                                                            Shipping</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tax</th>
                                                <td>$0.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="cart__totals-footer">
                                            <tr>
                                                <th>Total</th>
                                                <td>$5,902.00</td>
                                            </tr>
                                        </tfoot>
                                    </table><a class="btn btn-primary btn-xl btn-block cart__checkout-button"
                                        href="checkout.html">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- site__body / end -->



@endsection