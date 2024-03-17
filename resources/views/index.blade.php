@extends('layouts.app')
@section('title', 'Achetez des meubles de bureaux, de maison, moins cher partout au Bénin')

@section('scripts')
<script src="{{asset("storage/assets/vendor/owlcarousel/owl.carousel.min.js")}}"></script>

<script>
$(function() {

    $(".owl-top").owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        navigation: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
            }
        }
    });

    $(".owl-list").owlCarousel({
        loop: true,
        margin: 5,
        responsiveClass: true,
        navigation: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            900: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });
    $(".owl-cat").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        navigation: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            900: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });

})
</script>
@endsection

@section('stylesheet')
<link rel="stylesheet" href={{asset("storage/assets/vendor/owlcarousel/css/owl.carousel.min.css")}} />
<link rel="stylesheet" href={{asset("storage/assets/vendor/owlcarousel/css/owl.theme.default.min.css")}}>

@endsection
@section('content')
@if($sliders && count($sliders))
<div>
    <div class="hero-content container ">
        <div id="home-slider" class="carousels row slide pt-3 pt-md-4 pb-md-1 rounded-xl" data-ride="carousel">
            <div class="carousel-inner_rounded-lg innder-hs owl-carousel owl-top owl-theme">
                <!-- Left and right controls/icons -->
                @foreach ($sliders as $key => $slider)
                <div class="item slide-item ">
                    <div class="cover-drop">
                        <div class="row py-2 py-lg-5">
                            <div class="col-md-7 col-lg-6 ">
                                <h2 class="col-md-10 py-0 mb-1 mb-md-2">
                                    {{ Str::length($slider['LibelleImage'])>40?substr($slider['LibelleImage'],0,40)."...":$slider['LibelleImage'] }}

                                </h2>
                                <p class="lead d-none_d-md-block text-lead">

                                    {{ Str::length($slider['Description'])>80?substr($slider['Description'],0,80)."...":$slider['Description'] }}
                                </p>
                                <button type="button" class="btn btn-sm btn-outline-light" fdprocessedid="y1qtqn">
                                    En savoir plus <i class="icon-arrow-right ms-1"></i>
                                </button>
                                <!--a href="{{ route('shop.index') }}"
                                    class="btn  btn-sm mx-2 btn-light shadow-0   border border-white"
                                    fdprocessedid="pmwwac">
                                    <span class="pt-1">Acheter maintenant</span>
                                </a-->
                            </div>
                        </div>
                    </div>
                    <img class="img-fluid object-fit-cover rounded-xl" src="{{ $slider['imgPathLink'] }}" height="100%"
                        alt="Slide" />

                </div>
                @endforeach
            </div>
        </div>

    </div>

</div>
@endif

@if($products && count($products)>0)
<div class="bg-white py-4">
    <div class="container py-1">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <h3 class="line-header  mb-2">Nos articles phares</h3>
            </div>
            <div class="col-md-6 text-center text-md-end py-2 mt-2">
                <a class="" href="{{route('shop.index')}}">plus d'articles <i class="icon-arrow-right mx-1"></i></a>
            </div>
        </div>

        <div>
            <div class="py-2 ">
                <div class="owl-carousel owl-list owl-theme" id="owl-carousel-produit">
                    
                    @foreach ($products as $product)
                    <div class="col-md-4col-lg-3col-sm-6 item">
                        
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($categories && count($categories)>0)
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fs-3 fw-bold py-2"><i class="icon-tag"></i> Catégories</h1>
            </div>
            <div class="col-md-12">
                <div class="row owl-carousel owl-cat owl-theme">
                    @foreach ($categories as $category)

                    <div class="col-md-6col-12col-sm-6col-12col-sm-6col-lg-4 item">
                        @include('partials.includes.card-categorie',compact('category'))
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-12 text-center text-md-start py-2">
                <a class="px-4 text-sm border bg-white shadow-sm py-2 rounded-1 small text-primary2 border-primary2 px-4  my-2"
                    href="{{ route('shop.category') }}">
                    Toutes les catégories <i class="icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endif
<section class=" py-4 border-top bg-white  shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <a href="{{route('shop.index')}}"><img src="{{asset('storage/assets/img/pub1.jpg')}}"
                        class="img-fluid border-4 p-2 rounded-2 border-white  hover-shadow-sm mx-auto"
                        alt="PUB 1" /></a>
            </div>

            <div class="col-md-6 mb-4 mb-md-0">
                <a href="{{route('shop.index')}}"></a><img src="{{asset('storage/assets/img/pub3.jpg')}}"
                    class="img-fluid border-4 p-2 rounded-2 border-white hover-shadow-sm mx-auto" alt="PUB 2" /></a>
            </div>
        </div>
    </div>
</section>
<section class="py-4 bg-secondary">
    <div class="container pb-4">
        <div class="text-center">
            <h1 class="display-5 fw-bold py-4 text-white">
                Pourquoi nous choisir ?
            </h1>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="box  mb-4 mb-md-0">
                    <div class="img-box">
                        <i class="icon-present text-success"></i>
                    </div>
                    <div class="detail-box">
                        <h2 class="text-success">
                            Moins chers
                        </h2>
                        <p class="text-muted">
                            Nos articles sont les moins chers du marché. Nous misons sur le commerce de proximité en
                            réduisant les coûts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box  mb-4 mb-md-0">
                    <div class="img-box">
                        <i class="icon-basket-loaded text-primary"></i>
                    </div>
                    <div class="detail-box ">
                        <h2 class="text-danger text-primary">
                            Livraison rapide
                        </h2>
                        <p class="text-muted">
                            Nous vous livrons le plus rapidement possible. La livraison de nos produits se fait avec les
                            services de livraison express
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box mb-4 mb-md-0 ">
                    <div class="img-box">
                        <i class="icon-trophy text-primary2"></i>
                    </div>
                    <div class="detail-box">
                        <h2 class="text-primary2">
                            Meilleure Qualité
                        </h2>
                        <p class="text-muted">
                            Nous sommes convaincu que la chose dont vous allez le plus vous souvenir, c'est la qualité
                            des produits achetés.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@if($productsArticles && count($productsArticles)>0)
<section class="py-4  bg-white">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <h1 class="fw-bold fs-4 py-2">Recommandation</h1>
            </div>
        </div>
        <div class="mb-2 mb-md-0 row">
            @foreach ($productsArticles as $product)
            <div class="col-md-4">
                <a href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                    <div
                        class="card-cat-product px-md-4  overflow-hidden py-md-2 bg-white border mb-2 mb-md-4 rounded-2 shadow-3">
                        <div class=" row position-relative overflow-hidden">
                            <div class="col-md-4 col-4  p-0">
                                <a href="{{ $product["imgPathLink"] }}" data-lightbox="example-set" data-title="{{isset($product['prix'])? number_format($product['prix'], 0, ' ', ' '):'' }}
                            FCFA - {{ $product['NOM'] }}">
                                    <img src="{{ $product["imgPathLink"] }}" class=" img-cat-product p-img-hover"
                                        alt="{{ $product['NOM'] }}" />
                                </a>
                            </div>
                            <div class="col-md-8  py-4 py-md-0 col-8 px-2 px-md-4">
                                <a class="text-dark" href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                                    {{ $product['NOM'] }}

                                </a>
                                <div class="text muted fw-bold text-primary2">
                                    {{ isset($product['prix']) ? $product['prix']:'' }} FCFA</div>
                                @if($product['CodeManuel'])
                                <a class="text-muted text-small"
                                    href="{{ route('shop.show', $product['CODEPRODUIT']) }}"><span
                                        class=" text-muted text-sm font-weight-bold">CODE :
                                        {{ $product['CodeManuel'] }}</span></a>
                                @endif
                                <div>
                                    <div class="d-flex py-2">
                                        <i class="text-warning icon-star"></i>
                                        <i class="text-warning icon-star"></i>
                                        <i class="text-warning icon-star"></i>
                                        <i class="text-warning icon-star"></i>
                                        <i class="text-warning icon-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="col-md-12 text-center text-md-start mb-4">
            <a class="px-4 fw-bold text-center text-md-start border btn btn-primary py-2 rounded-1 small  px-4  my-2"
                href="{{ route('shop.index') }}">
                Voir plus d'articles <i class="icon-arrow-right"></i>
            </a>
        </div>
    </div>
    </div>
</section>
@endif
@endsection