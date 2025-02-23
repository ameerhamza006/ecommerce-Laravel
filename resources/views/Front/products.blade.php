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
                                <li class="breadcrumb-item active" aria-current="page">Brandix Screwdriver SCREW1500ACC
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="product product--layout--standard" data-layout="standard">
                        <div class="product__content">
                            <!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured"><button class="product-gallery__zoom"><svg
                                                width="24px" height="24px">
                                                <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                            </svg></button>
                                        <div class="owl-carousel" id="product-image">
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="images/products/product-16.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img" src="images/products/product-16.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="images/products/product-16-1.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img"
                                                        src="images/products/product-16-1.jpg" alt=""></a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="images/products/product-16-2.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img"
                                                        src="images/products/product-16-2.jpg" alt=""></a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="images/products/product-16-3.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img"
                                                        src="images/products/product-16-3.jpg" alt=""></a>
                                            </div>
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="images/products/product-16-4.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img"
                                                        src="images/products/product-16-4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__carousel">
                                        <div class="owl-carousel" id="product-carousel"><a
                                                href="images/products/product-16.jpg"
                                                class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body"><img
                                                        class="product-image__img product-gallery__carousel-image"
                                                        src="images/products/product-16.jpg" alt=""></div>
                                            </a><a href="images/products/product-16-1.jpg"
                                                class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body"><img
                                                        class="product-image__img product-gallery__carousel-image"
                                                        src="images/products/product-16-1.jpg" alt=""></div>
                                            </a><a href="images/products/product-16-2.jpg"
                                                class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body"><img
                                                        class="product-image__img product-gallery__carousel-image"
                                                        src="images/products/product-16-2.jpg" alt=""></div>
                                            </a><a href="images/products/product-16-3.jpg"
                                                class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body"><img
                                                        class="product-image__img product-gallery__carousel-image"
                                                        src="images/products/product-16-3.jpg" alt=""></div>
                                            </a><a href="images/products/product-16-4.jpg"
                                                class="product-image product-gallery__carousel-item">
                                                <div class="product-image__body"><img
                                                        class="product-image__img product-gallery__carousel-image"
                                                        src="images/products/product-16-4.jpg" alt=""></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div><!-- .product__gallery / end -->
                            <!-- .product__info -->
                            <div class="product__info">
                                <div class="product__wishlist-compare"><button type="button"
                                        class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                        data-placement="right" title="Wishlist"><svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                        </svg></button> <button type="button" class="btn btn-sm btn-light btn-svg-icon"
                                        data-toggle="tooltip" data-placement="right" title="Compare"><svg width="16px"
                                            height="16px">
                                            <use xlink:href="images/sprite.svg#compare-16"></use>
                                        </svg></button></div>
                                <h1 class="product__name">Brandix Screwdriver SCREW1500ACC</h1>
                                <div class="product__rating">
                                    <div class="product__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body"><svg class="rating__star rating__star--active"
                                                    width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__rating-legend"><a href="#">7 Reviews</a><span>/</span><a
                                            href="#">Write A Review</a></div>
                                </div>
                                <div class="product__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis
                                    convallis lorem erat at purus. Maecenas eu varius nisi.</div>
                                <ul class="product__features">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                                <ul class="product__meta">
                                    <li class="product__meta-availability">Availability: <span class="text-success">In
                                            Stock</span></li>
                                    <li>Brand: <a href="#">Wakita</a></li>
                                    <li>SKU: 83690/32</li>
                                </ul>
                            </div><!-- .product__info / end -->
                            <!-- .product__sidebar -->
                            <div class="product__sidebar">
                                <div class="product__availability">Availability: <span class="text-success">In
                                        Stock</span></div>
                                <div class="product__prices">$1,499.00</div><!-- .product__options -->
                                <form class="product__options">
                                    <div class="form-group product__option"><label
                                            class="product__option-label">Color</label>
                                        <div class="input-radio-color">
                                            <div class="input-radio-color__list"><label
                                                    class="input-radio-color__item input-radio-color__item--white"
                                                    style="color: #fff;" data-toggle="tooltip" title="White"><input
                                                        type="radio" name="color"> <span></span></label> <label
                                                    class="input-radio-color__item" style="color: #ffd333;"
                                                    data-toggle="tooltip" title="Yellow"><input type="radio"
                                                        name="color"> <span></span></label> <label
                                                    class="input-radio-color__item" style="color: #ff4040;"
                                                    data-toggle="tooltip" title="Red"><input type="radio" name="color">
                                                    <span></span></label> <label
                                                    class="input-radio-color__item input-radio-color__item--disabled"
                                                    style="color: #4080ff;" data-toggle="tooltip" title="Blue"><input
                                                        type="radio" name="color" disabled="disabled">
                                                    <span></span></label></div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option"><label
                                            class="product__option-label">Material</label>
                                        <div class="input-radio-label">
                                            <div class="input-radio-label__list"><label><input type="radio"
                                                        name="material"> <span>Metal</span></label> <label><input
                                                        type="radio" name="material"> <span>Wood</span></label>
                                                <label><input type="radio" name="material" disabled="disabled">
                                                    <span>Plastic</span></label></div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option"><label class="product__option-label"
                                            for="product-quantity">Quantity</label>
                                        <div class="product__actions">
                                            <div class="product__actions-item">
                                                <div class="input-number product__quantity"><input id="product-quantity"
                                                        class="input-number__input form-control form-control-lg"
                                                        type="number" min="1" value="1">
                                                    <div class="input-number__add"></div>
                                                    <div class="input-number__sub"></div>
                                                </div>
                                            </div>
                                            <div class="product__actions-item product__actions-item--addtocart"><button
                                                    class="btn btn-primary btn-lg">Add to cart</button></div>
                                            <div class="product__actions-item product__actions-item--wishlist"><button
                                                    type="button" class="btn btn-secondary btn-svg-icon btn-lg"
                                                    data-toggle="tooltip" title="Wishlist"><svg width="16px"
                                                        height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg></button></div>
                                            <div class="product__actions-item product__actions-item--compare"><button
                                                    type="button" class="btn btn-secondary btn-svg-icon btn-lg"
                                                    data-toggle="tooltip" title="Compare"><svg width="16px"
                                                        height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                </form><!-- .product__options / end -->
                            </div><!-- .product__end -->
                            <div class="product__footer">
                                <div class="product__tags tags">
                                    <div class="tags__list"><a href="#">Mounts</a> <a href="#">Electrodes</a> <a
                                            href="#">Chainsaws</a></div>
                                </div>
                                <div class="product__share-links share-links">
                                    <ul class="share-links__list">
                                        <li class="share-links__item share-links__item--type--like"><a href="#">Like</a>
                                        </li>
                                        <li class="share-links__item share-links__item--type--tweet"><a
                                                href="#">Tweet</a></li>
                                        <li class="share-links__item share-links__item--type--pin"><a href="#">Pin
                                                It</a></li>
                                        <li class="share-links__item share-links__item--type--counter"><a
                                                href="#">4K</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tabs product-tabs--sticky">
                        <div class="product-tabs__list">
                            <div class="product-tabs__list-body">
                                <div class="product-tabs__list-container container"><a href="#tab-description"
                                        class="product-tabs__item product-tabs__item--active">Description</a> <a
                                        href="#tab-specification" class="product-tabs__item">Specification</a> <a
                                        href="#tab-reviews" class="product-tabs__item">Reviews</a></div>
                            </div>
                        </div>
                        <div class="product-tabs__content">
                            <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                                <div class="typography">
                                    <h3>Product Full Description</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum, diam
                                        non iaculis finibus, ipsum arcu sollicitudin dolor, ut cursus sapien sem sed
                                        purus. Donec vitae fringilla tortor, sed fermentum nunc. Suspendisse sodales
                                        turpis dolor, at rutrum dolor tristique id. Quisque pellentesque ullamcorper
                                        felis, eget gravida mi elementum a. Maecenas consectetur volutpat ante, sit amet
                                        molestie urna luctus in. Nulla eget dolor semper urna malesuada dictum. Duis
                                        eleifend pellentesque dui et finibus. Pellentesque dapibus dignissim augue.
                                        Etiam odio est, sodales ac aliquam id, iaculis eget lacus. Aenean porta, ante
                                        vitae suscipit pulvinar, purus dui interdum tellus, sed dapibus mi mauris vitae
                                        tellus.</p>
                                    <h3>Etiam lacus lacus mollis in mattis</h3>
                                    <p>Praesent mattis eget augue ac elementum. Maecenas vel ante ut enim mollis
                                        accumsan. Vestibulum vel eros at mi suscipit feugiat. Sed tortor purus,
                                        vulputate et eros a, rhoncus laoreet orci. Proin sapien neque, commodo at porta
                                        in, vehicula eu elit. Vestibulum ante ipsum primis in faucibus orci luctus et
                                        ultrices posuere cubilia Curae; Curabitur porta vulputate augue, at sollicitudin
                                        nisl molestie eget.</p>
                                    <p>Nunc sollicitudin, nunc id accumsan semper, libero nunc aliquet nulla, nec
                                        pretium ipsum risus ac neque. Morbi eu facilisis purus. Quisque mi tortor,
                                        cursus in nulla ut, laoreet commodo quam. Pellentesque et ornare sapien. In ac
                                        est tempus urna tincidunt finibus. Integer erat ipsum, tristique ac lobortis sit
                                        amet, dapibus sit amet purus. Nam sed lorem nisi. Vestibulum ultrices tincidunt
                                        turpis, sit amet fringilla odio scelerisque non.</p>
                                </div>
                            </div>
                            <div class="product-tabs__pane" id="tab-specification">
                                <div class="spec">
                                    <h3 class="spec__header">Specification</h3>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">General</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Material</div>
                                            <div class="spec__value">Aluminium, Plastic</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Engine Type</div>
                                            <div class="spec__value">Brushless</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Battery Voltage</div>
                                            <div class="spec__value">18 V</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Battery Type</div>
                                            <div class="spec__value">Li-lon</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Number of Speeds</div>
                                            <div class="spec__value">2</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Charge Time</div>
                                            <div class="spec__value">1.08 h</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Weight</div>
                                            <div class="spec__value">1.5 kg</div>
                                        </div>
                                    </div>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">Dimensions</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Length</div>
                                            <div class="spec__value">99 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Width</div>
                                            <div class="spec__value">207 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Height</div>
                                            <div class="spec__value">208 mm</div>
                                        </div>
                                    </div>
                                    <div class="spec__disclaimer">Information on technical characteristics, the delivery
                                        set, the country of manufacture and the appearance of the goods is for reference
                                        only and is based on the latest information available at the time of
                                        publication.</div>
                                </div>
                            </div>
                            <div class="product-tabs__pane" id="tab-reviews">
                                <div class="reviews-view">
                                    <div class="reviews-view__list">
                                        <h3 class="reviews-view__header">Customer Reviews</h3>
                                        <div class="reviews-list">
                                            <ol class="reviews-list__content">
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar"><img
                                                                src="images/avatars/avatar-1.jpg" alt=""></div>
                                                        <div class="review__content">
                                                            <div class="review__author">Samantha Smith</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body"><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg class="rating__star" width="13px"
                                                                            height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review__text">Phasellus id mattis nulla. Mauris
                                                                velit nisi, imperdiet vitae sodales in, maximus ut
                                                                lectus. Vivamus commodo scelerisque lacus, at porttitor
                                                                dui iaculis id. Curabitur imperdiet ultrices fermentum.
                                                            </div>
                                                            <div class="review__date">27 May, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar"><img
                                                                src="images/avatars/avatar-2.jpg" alt=""></div>
                                                        <div class="review__content">
                                                            <div class="review__author">Adam Taylor</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body"><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg class="rating__star" width="13px"
                                                                            height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg class="rating__star" width="13px"
                                                                            height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review__text">Aenean non lorem nisl. Duis tempor
                                                                sollicitudin orci, eget tincidunt ex semper sit amet.
                                                                Nullam neque justo, sodales congue feugiat ac, facilisis
                                                                a augue. Donec tempor sapien et fringilla facilisis. Nam
                                                                maximus consectetur diam. Nulla ut ex mollis, volutpat
                                                                tellus vitae, accumsan ligula.</div>
                                                            <div class="review__date">12 April, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="reviews-list__item">
                                                    <div class="review">
                                                        <div class="review__avatar"><img
                                                                src="images/avatars/avatar-3.jpg" alt=""></div>
                                                        <div class="review__content">
                                                            <div class="review__author">Helena Garcia</div>
                                                            <div class="review__rating">
                                                                <div class="rating">
                                                                    <div class="rating__body"><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div><svg
                                                                            class="rating__star rating__star--active"
                                                                            width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal">
                                                                                </use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use
                                                                                    xlink:href="images/sprite.svg#star-normal-stroke">
                                                                                </use>
                                                                            </g>
                                                                        </svg>
                                                                        <div
                                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                                            <div class="rating__fill">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                            <div class="rating__stroke">
                                                                                <div class="fake-svg-icon"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review__text">Duis ac lectus scelerisque quam
                                                                blandit egestas. Pellentesque hendrerit eros laoreet
                                                                suscipit ultrices.</div>
                                                            <div class="review__date">2 January, 2018</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="reviews-list__pagination">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled"><a
                                                            class="page-link page-link--with-arrow" href="#"
                                                            aria-label="Previous"><svg
                                                                class="page-link__arrow page-link__arrow--left"
                                                                aria-hidden="true" width="8px" height="13px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-left-8x13">
                                                                </use>
                                                            </svg></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2 <span
                                                                class="sr-only">(current)</span></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link page-link--with-arrow"
                                                            href="#" aria-label="Next"><svg
                                                                class="page-link__arrow page-link__arrow--right"
                                                                aria-hidden="true" width="8px" height="13px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-8x13">
                                                                </use>
                                                            </svg></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="reviews-view__form">
                                        <h3 class="reviews-view__header">Write A Review</h3>
                                        <div class="row">
                                            <div class="col-12 col-lg-9 col-xl-8">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4"><label for="review-stars">Review
                                                            Stars</label> <select id="review-stars"
                                                            class="form-control">
                                                            <option>5 Stars Rating</option>
                                                            <option>4 Stars Rating</option>
                                                            <option>3 Stars Rating</option>
                                                            <option>2 Stars Rating</option>
                                                            <option>1 Stars Rating</option>
                                                        </select></div>
                                                    <div class="form-group col-md-4"><label for="review-author">Your
                                                            Name</label> <input type="text" class="form-control"
                                                            id="review-author" placeholder="Your Name"></div>
                                                    <div class="form-group col-md-4"><label for="review-email">Email
                                                            Address</label> <input type="text" class="form-control"
                                                            id="review-email" placeholder="Email Address"></div>
                                                </div>
                                                <div class="form-group"><label for="review-text">Your Review</label>
                                                    <textarea class="form-control" id="review-text" rows="6"></textarea>
                                                </div>
                                                <div class="form-group mb-0"><button type="submit"
                                                        class="btn btn-primary btn-lg">Post Your Review</button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Related Products</h3>
                        <div class="block-header__divider"></div>
                        <div class="block-header__arrows-list"><button
                                class="block-header__arrow block-header__arrow--left" type="button"><svg width="7px"
                                    height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg></button> <button class="block-header__arrow block-header__arrow--right"
                                type="button"><svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg></button></div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">New</div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-1.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Electric Planer
                                                    Brandix KL370090G 300 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$749.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--hot">Hot</div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-2.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Undefined Tool IRadix
                                                    DPS3000SY 2700 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,019.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-3.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Drill Screwdriver
                                                    Brandix ALX7054 200 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$850.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">Sale</div>
                                        </div>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-4.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Drill Series 3
                                                    Brandix KSR4590PQS 1500 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices"><span
                                                    class="product-card__new-price">$949.00</span> <span
                                                    class="product-card__old-price">$1189.00</span></div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-5.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Router Power
                                                    Tool 2017ERXPK</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,700.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-6.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Drilling
                                                    Machine DM2019KW4 4kW</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$3,199.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-7.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Pliers</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$24.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-8.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Water Hose 40cm</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$15.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-9.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Spanner Wrench</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$19.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-10.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Water Tap</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$15.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-11.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Hand Tool Kit</a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">9 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$149.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-12.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Ash's Chainsaw
                                                    3.5kW</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$666.99</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-13.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Angle Grinder
                                                    KZX3890PQW</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$649.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-14.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Air
                                                    Compressor DELTAKX500</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">7 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,800.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-15.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Electric
                                                    Jigsaw JIG7000BQ</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star" width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div class="rating__star rating__star--only-edge">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">4 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$290.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="images/products/product-16.jpg" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html">Brandix Screwdriver
                                                    SCREW1500ACC</a></div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="images/sprite.svg#star-normal-stroke">
                                                                    </use>
                                                                </g>
                                                            </svg>
                                                            <div
                                                                class="rating__star rating__star--only-edge rating__star--active">
                                                                <div class="rating__fill">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                                <div class="rating__stroke">
                                                                    <div class="fake-svg-icon"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card__rating-legend">11 Reviews</div>
                                            </div>
                                            <ul class="product-card__features-list">
                                                <li>Speed: 750 RPM</li>
                                                <li>Power Source: Cordless-Electric</li>
                                                <li>Battery Cell Type: Lithium</li>
                                                <li>Voltage: 20 Volts</li>
                                                <li>Battery Capacity: 2 Ah</li>
                                            </ul>
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">$1,499.00</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
                                                    Cart</button> <button
                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                    type="button">Add To Cart</button> <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                                <button
                                                    class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                    type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .block-products-carousel / end -->
        </div><!-- site__body / end -->










@endsection

