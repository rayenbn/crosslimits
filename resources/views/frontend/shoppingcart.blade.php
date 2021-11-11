@extends('layouts.theme')
@section('content')
<!--Banner-->
<section class="page-heading" style="background-image:url('/storage/images/banners/{{ $blog_page->banner ?? ''}}') no-repeat center rgba(0, 0, 0, 0)">
    <div class="title-slide">
        <div class="container">
                <div class="banner-content slide-container">									
                    <div class="page-title">
                        <h3>YOUR SHOPPING CART</h3>
                    </div>
                </div>
        </div>
    </div>
</section>
<!--End Banner-->

 <!-- End Breadcrumbs -->
 <div class="product-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart">
                    <div class="cart-table">
                        <div class="row-title">
                            <div class="col-md-2"><span>Item</span></div>
                            <div class="col-md-5"><span>Description</span></div>
                            <div class="col-md-2"><span>Price</span></div>
                            <div class="col-md-2"><span>Total</span></div>
                            <div class="delete-item col-md-1"><a href="#"><i class="fa fa-times-circle"></i></a></div>
                        </div>
                        @foreach($items as $key => $item)
                        <div class="row-item">
                            <div class="item name-item col-md-2 col-sm-5 col-xs-12">
                                <a class="product-image" href="/our-products/{{ $item->prod_id }}-{{ $item->prod_name }}">
                                    <img alt="" src="/storage/products/thumbnail/{{ $item->prod_img }}">
                                </a>
                                <div class="product-info">
                                    <a href="/our-products/{{ $item->prod_id }}-{{ $item->prod_name }}">{{ $item->prod_name }}</a>
                                    <!-- <p>Subtitle sample</p> -->
                                </div>
                            </div>
                            <div class="item qty-item col-md-5 col-sm-2 col-xs-12">
                                <p>{!! $item->prod_desc !!}</p>
                                @if (isset( $item->logofile))
                                <p>Custom logo: <a href="storage/{{ $item->logofile ?? '#'}}" style="color: red;">view</a></p>
                                @endif
                            </div>
                            <div class="item price-item col-md-2 col-sm-2 col-xs-12">
                                <span class="cart-price">$ {{ $item->price }}</span>
                            </div>
                            <div class="item price-item col-md-2 col-sm-2 col-xs-12"><span class="cart-price">$ {{ $item->total }}</span></div>
                            <div class="item delete-item col-md-1 col-sm-1 col-xs-12">
                             
                                <form action="{{ route('orders.delete-cart-item', $item->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" style="border: none;background: none;"><i class="fa fa-times-circle"></i></button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="cart-collaterals row">
                        <!-- <div class="calculate-shipping col-md-6">
                            <div class="title">Calculate Shipping</div>
                            <div class="box">
                                <select class="country">
                                    <option>Country</option>
                                    <option>Country</option>
                                </select>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="state">
                                            <option>State</option>
                                            <option>State</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="zip-code">
                                            <option>Zip code</option>
                                            <option>Zip code</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" title="Update" class="button">
                                    <em class="fa-icon"><i class="fa fa-refresh"></i></em>
                                    <span>Update</span>
                                </button>
                            </div>
                        </div> -->
                        <div class="cart-total col-md-12">
                            <div class="title">Cart Total</div>
                            <div class="box">
                                <div class="cart-total-item">
                                    <label>Cart unit total</label>
                                    <div class="price">$ {{ $cartPrice }}</div>
                                </div>
                                <!-- <div class="cart-total-item">
                                    <label>Shipping fee</label>
                                    <div class="price">0</div>
                                </div> -->
                                <div class="cart-total-item order-total">
                                    <label>Order total price</label>
                                    <div class="price">$ {{ $cartTotal }}</div>
                                </div>
                                <a href="{{ route('orders.submit') }}" class="button btn-checkout">
                                    <em class="fa-icon"><i class="fa fa-arrow-right"></i></em>
                                    <span>Check out</span>
                                </a>
                                <!-- <button type="button" title="Check out" class="button btn-checkout">
                                    <em class="fa-icon"><i class="fa fa-arrow-right"></i></em>
                                    <span>Check out</span>
                                </button> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="product-related row">
                        <div class="col-md-12">
                            <h3 class="title">Product Related</h3>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-image-wrapper">
                                <div class="product-content">
                                    <div class="product-image">
                                        <a href="#"><img alt="" src="images/newproducts/product-1.jpg"></a>
                                    </div>
                                    <div class="info-products">
                                        <div class="product-name" >
                                            <a href="#">Horizon Andes</a>
                                            <div class="product-bottom"></div>
                                        </div>
                                        <div class="price-box">																										
                                            <span class="special-price">$200.60</span>
                                            <span class="old-price">$227.96</span>
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-image-wrapper">
                                <div class="product-content">
                                    <div class="product-image">
                                        <a href="#"><img alt="" src="images/newproducts/product-2.jpg"></a>
                                    </div>
                                    <span class="new-label">new</span>
                                    <div class="info-products">
                                        <div class="product-name" >
                                            <a href="#">Octane Deluxe Console</a>
                                            <div class="product-bottom"></div>
                                        </div>
                                        <div class="price-box">																										
                                            <span class="special-price">$200.60</span>
                                            <span class="old-price">$227.96</span>
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-image-wrapper">
                                <div class="product-content">
                                    <div class="product-image">
                                        <a href="#"><img alt="" src="images/newproducts/product-3.jpg"></a>
                                    </div>
                                    <div class="info-products">
                                        <div class="product-name" >
                                            <a href="#">Precor Recumbent Cycle</a>
                                            <div class="product-bottom"></div>
                                        </div>
                                        <div class="price-box">																										
                                            <span class="special-price">$200.60</span>
                                            <span class="old-price">$227.96</span>
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div id="quickview" class="quickview-box container">
                        <div class="row">
                            <div class="quickview-body col-md-9">
                                <div class="product-essential">
                                    <button type="button" class="quickview-close" onclick="$.fn.custombox('close');">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <div class="product-img-box col-md-6">
                                        <a href="#"><img alt="" src="images/newproducts/product-detail.jpg"></a>
                                        <div class="more-views">
                                            <div id="owl-demo-box" class="owl-carousel owl-theme">
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                                <div class="item"><img alt="" src="images/newproducts/product-view-more.jpg"></div>
                                            </div>
                                            <div class="customNavigation">
                                                <a class="btn prev"><i class="fa fa-caret-left"></i></a>
                                                <a class="btn next"><i class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-shop col-md-6">
                                        <div class="product-name">
                                            <h1>Horizon Andes</h1>
                                        </div>
                                        <div class="meta-box">
                                            <div class="price-box">																										
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="rating-box">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="short-description">
                                            To be in a good shape is very important nowadays because our way of life isn't so healthy and active. Most of us spend endless hours sitting by the computer and it gives negative results very fast. We think that fitness is a pleasant and useful activity. It helps to be more successful and disciplined.
                                        </div>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <input type="text" class="input-text qty-1" title="Qty" value="1" maxlength="12"  name="qty">
                                                <span class="increase-qty" onclick="increaseQty('1')"><i class="fa fa-sort-up"></i></span>
                                                <span class="decrease-qty" onclick="decreaseQty('1')"><i class="fa fa-sort-down"></i></span>
                                            </div>
                                            <button class="button btn-cart" title="Add to Cart" type="button">
                                                <em class="fa-icon"><i class="fa fa-shopping-cart"></i></em>
                                                <span>Add Cart</span>
                                            </button>
                                            <a class="link-wishlist"><i class="fa fa-heart"></i></a>
                                        </div>
                                        <div class="cat-list">
                                            <label>Categories</label><span>:</span>
                                            <ul>
                                                <li><a href="#">Dress,</a></li>
                                                <li><a href="#">Lorem</a></li>
                                            </ul>
                                        </div>
                                        <div class="tags-list">
                                            <label>Tags</label><span>:</span>
                                            <ul>
                                                <li><a href="#">Fitness</a></li>
                                                <li><a href="#">Lorem</a></li>
                                            </ul>
                                        </div>
                                        <div class="social-icon">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="product-filter">
                    <h3 class="title">product filter</h3>
                    <hr />
                    <div class="widget widget-price-filter">
                        <span class="min-filter">$<span id="price-filter-value-1">100</span></span>  
                        <span class="max-filter">$<span id="price-filter-value-2">700</span></span>
                        <div id="price-filter"></div>                                                
                        <a href="#" class="">Filter</a>
                    </div>
                </div>
                <div class="product-categories">
                    <h3 class="title">Product categories</h3>
                    <ul>
                        <li><a href="#">Boxing-MMA</a></li>
                        <li><a href="#">Yoga and Pilates</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Indoor-Cycles</a></li>
                        <li><a href="#">Cardio</a></li>
                        <li><a href="#">X-Fit</a></li>
                    </ul>
                </div>
                <div class="product-popular">
                    <h3 class="title">Popular products</h3>
                    <ul>
                        <li>
                            <div class="product-image">
                                <a href="#"><img alt="" src="images/popular-product.jpg"></a>
                            </div>
                            <div class="info-products">
                                <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                <div class="price-box">																										
                                    <span class="regular-price">$200.60</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-image">
                                <a href="#"><img alt="" src="images/popular-product.jpg"></a>
                            </div>
                            <div class="info-products">
                                <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                <div class="price-box">																										
                                    <span class="regular-price">$200.60</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-image">
                                <a href="#"><img alt="" src="images/popular-product.jpg"></a>
                            </div>
                            <div class="info-products">
                                <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                <div class="price-box">																										
                                    <span class="regular-price">$200.60</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-image">
                                <a href="#"><img alt="" src="images/popular-product.jpg"></a>
                            </div>
                            <div class="info-products">
                                <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                <div class="price-box">																										
                                    <span class="regular-price">$200.60</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-image">
                                <a href="#"><img alt="" src="images/popular-product.jpg"></a>
                            </div>
                            <div class="info-products">
                                <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                <div class="price-box">																										
                                    <span class="regular-price">$200.60</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection