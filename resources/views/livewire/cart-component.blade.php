@section('title')
    <title>Find it | Panier</title>
@endsection
<main id="main" class="main-site">
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route('page.home') }}" class="link">Accueil</a></li>
                <li class="item-link"><span>Panier</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            @if (Session::has('success_message'))
                <div class="alert alert-success text-center font-weight-bolder">
                    <strong><i class="fa fa-check"></i> {{ Session::get('success_message') }}</strong>
                </div>
            @endif

            @if (Cart::count() > 0)
            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Articles</h3>
                <ul class="products-cart">
                    @foreach (Cart::content() as $product)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <figure><img src="{{ asset('assets/images/products') }}/{{ $product->model->image }}" alt="{{ $product->model->name }}"></figure>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="{{ route('product.details',['slug'=>$product->model->slug]) }}">{{ $product->model->name }}</a>
                            </div>
                            <div class="price-field produtc-price"><p class="price">{{ $product->model->getFormatedPrice() }}</p></div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value="{{ $product->qty }}" data-max="120" pattern="[0-9]*" >
                                    <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{ $product->rowId }}')"></a>
                                    <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{ $product->rowId }}')"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total"><p class="price">{{ number_format($product->subtotal, 0, '', ' ') }} Fcfa</p></div>
                            <div class="delete">
                                <a href="#" class="btn btn-delete" wire:click.prevent="destroy('{{ $product->rowId }}')" title="">
                                    <span><i class="fa fa-trash"></i> Supprimer</span>
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <a class="link-to-shop btn btn-success mx-0 mb-4" style="margin-bottom: 1rem" href="{{ route('product.shop') }}">Ajouter des articles <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>

            <div class="summary row" id="checkout-bg">
                <div class="order-summary col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">{{ Cart::subtotal() }}</b></p>
                    <p class="summary-info"><span class="title">Taxe</span><b class="index">{{ Cart::tax() }}</b></p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">{{ Cart::total() }}</b></p>
                </div>
                <div class="checkout-info col-lg-4 col-md-4 col-sm-4 col-xs-12" id="checkout-info">
                    <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>J'ai un code coupon</span>
                    </label>
                    <a class="btn btn-checkout" href="{{ route('product.checkout') }}">Procéder Au Paiement</a>
                    <a class="link-to-shop" href="{{ route('product.shop') }}">Ajouter des articles<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
                <div class="update-clear col-lg-4 col-md-4 col-sm-4 col-xs-12" id="checkout-info">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Vider le panier</a>
                    <a class="btn btn-update" href="#">Update Shopping Cart</a>
                </div>
            </div>
            @else
                <div class="row equal-container">
					<div class="col-xs-12 rounded">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title" style="color: red"><i class="fa fa-warning"></i>Oops!</b>
							<span class="sub-title" style="color: red; font-weight: bold">Votre panie est vide !</span>
							<p class="desc">Pour y ajouter des articles, veuillez <a href="{{ route('product.shop') }}" style="font-weight:bold" title="parcourir la boutique">Parcourir notre boutique</a></p>
						</div>
					</div>
				</div>
            @endif

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                        @foreach($popular_products as $product)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" title="{{ $product->name }}">
                                        <figure><img src="{{  asset('assets/images/products') }}/{{ $product->image }}" width="214" height="214" alt=" $product->name "></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="{{  route('product.details', ['slug'=>$product->slug]) }}" class="function-link"><i class="fa fa-eye"></i> voir détails</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" class="product-name"><span>{{  $product->name }} </span></a>
                                    <div class="wrap-price"><span class="product-price">{{  $product->getFormatedPrice() }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->
</main>
