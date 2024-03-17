@extends('layouts.app')
@section('title', 'Achetez des meubles de bureaux, de maison, moins cher partout au Bénin')

@section('scripts')
    <script src="{{ asset('storage/assets/vendor/owlcarousel/owl.carousel.min.js') }}"></script>

    <script>
        $(function() {

            $(".owl-top").owlCarousel({
                loop: false,
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
                loop: false,
                margin: 10,
                autoplay: true,
                lazyLoad: true,
                autoplayTimeout: 8000,
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
                //loop: true,
                margin: 10,
                lazyLoad: true,
                autoplay: true,
                autoplayTimeout: 11000,
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
    <link rel="stylesheet" href={{ asset('storage/assets/vendor/owlcarousel/css/owl.carousel.min.css') }} />
    <link rel="stylesheet" href={{ asset('storage/assets/vendor/owlcarousel/css/owl.theme.default.min.css') }}>

@endsection
@section('content')

    <!-- start hero section -->

    @if ($sliders && count($sliders))
        <div>
            <div class="hero-content container ">
                <div id="home-slider" class="carousels row slide pt-3 pt-md-4 pb-md-1 rounded-xl" data-ride="carousel">
                    <div class="carousel-inner_rounded-lg innder-hs owl-carousel owl-top owl-theme">
                        <!-- Left and right controls/icons -->
                        @foreach ($sliders as $key => $slider)
                            <div class="item slide-item">
                                <div class="cover-drop">
                                    <div class="row py-2 py-lg-5">
                                        <div class="col-md-10 col-lg-10 text-center text-md-start ">
                                            
                                            <h2 class="col-md-10 py-0 mt-6 mt-md-12 mb-1 mb-md-2 justify-content-center">
                                                {{ Str::length($slider['LibelleImage']) > 50 ? substr($slider['LibelleImage'], 0, 50) . '...' : $slider['LibelleImage'] }}

                                            </h2>
                                            <p class="lead  d-md-block text-lead">

                                                {{ Str::length($slider['Description']) > 120 ? substr($slider['Description'], 0, 120) . '...' : $slider['Description'] }}
                                            </p>
                                            @if($slider['lien']!=null && $slider['lien']!='')
                                           <a href={{ asset($slider['lien']??'') }}>
                                             <button type="button" class="btn btn-sm btn-outline-light"
                                                fdprocessedid="y1qtqn">
                                                En savoir plus <i class="icon-arrow-right ms-1"></i>
                                            </button></a>
                                            @endif
                                            <!--a href="{{ route('shop.index') }}"
                                        class="btn  btn-sm mx-2 btn-light shadow-0   border border-white"
                                        fdprocessedid="pmwwac">
                                        <span class="pt-1">Acheter maintenant</span>
                                    </a-->
                                        </div>
                                    </div>
                                </div>
                                <img class="img-fluid object-fit-cover rounded-xl bgfa" src="{{ asset($slider['imgPathLink']) }}"
                                    height="100%" alt={{ $slider['LibelleImage'] }} />

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    @endif
    @if ($products && count($products) > 0)
        <div class="bg-white py-4">
            <div class="container py-1">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <h3 class="line-header  mb-2">Nos articles phares</h3>
                    </div>
                    <div class="col-md-6 text-center text-md-end py-2 mt-2 ">
                        <a class="text-primary mt-n2" href="{{ route('shop.index') }}" >Plus d'articles <i
                                class="icon-arrow-right mx-1"></i></a>
                    </div>
                </div>

                <div>
                    <div class="py-2 ">
                        <div class="owl-carousel owl-list owl-theme" id="owl-carousel-produit">

                            @foreach ($products as $product)
                                <div class="col-md-4col-lg-3col-sm-6 item">
                                    @include('partials.includes.card-produit', compact('product'))
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($categories && count($categories) > 0)
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="line-header  mb-3"><i class="icon-tag"></i> Catégories</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row owl-carousel owl-cat owl-theme">
                            @foreach ($categories as $category)
                                <div class="col-md-6col-12col-sm-6col-12col-sm-6col-lg-4  item">
                                    @include('partials.includes.card-categorie', compact('category'))
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12 text-center  py-2">
                        <a class=" text-sm border bg-white shadow-sm py-2 rounded-1 small text-primary2 border-primary2 px-4  my-2"
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
                @foreach ($publicites as $pub)
                    <div class="col-md-6 mb-2 mb-md-0">
                        <a href="{{ route('shop.index') }}"><img src="{{ asset($pub['imgPathLink']) }}"
                                class="img-fluid border-4 p-2 rounded-2 border-white  hover-shadow-sm  mx-auto"
                                alt={{ asset($pub['imgPathLink']) }} /></a>
                    </div>
                @endforeach
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
                @foreach ($pourquois as $why)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="box  mb-md-0">
                            <div class="img-box"><img src="{{ asset($why['photo']) }}"
                                class="w-50  border-4 p-2 rounded-2 border-white   mx-auto"
                                alt="" />
                            </div>
                            <div class="detail-box">
                                <h2 class="text-{{ $why['color'] }} ">
                                    {{ $why['titre'] }}
                                </h2>
                                <p class="text-muted">
                                    {{ $why['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    </div>
    @if ($productsArticles && count($productsArticles) > 0)
        <section class="py-4  bg-white">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h1 class="fw-bold text-uppercase fs-5 py-2 text-center text-md-start">Recommandation</h1>
                    </div>
                </div>
                <div class="mb-2 mb-md-0 row">
                    @foreach ($productsArticles as $product)
                        <div class="col-md-3 col-lg-2 col-sm-6 col-6 px-2">
                            <a href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                                <div
                                    class="card-cat-product_ hover-shadow-sm overflow-hidden  bg-white border_ mb-2 mb-md-4 rounded-2 shadow-3">
                                    <div class=" row position-relative overflow-hidden">
                                        <div class="col-md-12  overflow-hidden  p-0 img-cat-product">
                                            <a class="text-dark fw-bold" href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                                                <img src="{{ $product['imgPathLink'] }}"
                                                    class=" img-cat-product p-img-hover bgfa" alt="{{ $product['NOM'] }}" />
                                            </a>
                                        </div>
                                        <div class="col-md-12  py-2 items-center col-8 px-md-3 ">
                                            <a class="text-dark fw-bold" href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                                                {{ $product['PRODUIT'] }}
                                            </a>
                                            <div class="fw-bold bold text-primary2">
                                                {{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }} FCFA</div>
                                            @if ($product['CodeManuel'])
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
                <div class="col-md-12 text-center   ">
                    <a class=" fw-bold text-center text-md-start  btn btn-primary py-2 rounded-2 hover-shadow-sm small  px-4  my-2"
                        href="{{ route('shop.index') }}">
                        Voir plus d'articles <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            </div>
        </section>
    @endif
@endsection
