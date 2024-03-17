@extends('layouts.app')
@php
    $prix =isset($product['infos'],$product['infos']['prix'])? "à ".number_format($product['infos']['prix'], 0, ' ', ' ')." FCFA":'';
    $titre = $product['PRODUIT']? $product['PRODUIT'].' '. $prix :"Détail sur l'article";
@endphp
@section('title', $titre)
@section('breadcrumb')

    <div class="breadcrumb-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product['PRODUIT']??'Article' }} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('meta')
<meta property="og:image" content="{{ asset($product['imgPathLink']) }}">
<meta property="og:url" content="{{ request()->url() }}">
@endsection
@section('scripts')
    <link rel="stylesheet" href="{{ asset('storage/assets/vendor/lightbox2/css/lightbox.min.css') }}" />
    <script src="{{ asset('storage/assets/vendor/lightbox2/js/lightbox-plus-jquery.min.js') }}"></script>
@endsection
@section('content')
    <div class="maim bg-white">
        <div class="container">
            @if (isset($product) && count($product) > 0)
                <div class="row   border-top-0">
                    <div class="col-md-12 mx-auto_ col-sm-12 pt-4">
                        <a href="{{ asset($product['imgPathLink']) }}" data-lightbox="example-set"
                            data-title="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}
                 FCFA - {{ $product['NOM'] }}">
                            <img src="{{ asset($product['imgPathLink']) }}" alt="{{ asset($product['imgPathLink']) }}" class="img-fluid bgfa rounded" width="100%" /></a>
                        
                    </div>
                    <div class="col-6">
                        <p class="text-sm text-muted py-1">
                            <i class="icon-size-fullscreen"></i> Cliquez pour agrandir
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <p class="text-sm text-muted py-1">
                            <i class="icon-eye"></i> Nombre de vues : {{isset($product['vues'])? number_format($product['vues'], 0, ' ', ' '):'' }}
                        </p> 
                    </div>
                    <div class="product-details border-bottom  col-md-12 mx-auto  pb-4  mt-lg-0 mt-4">
                        
                        <div class="row">
                            <div class="col-md-12">
                        <h1 class="fs-2 text-xl text-center text-md-start">{{ $product['PRODUIT']??'Article' }}</h1>

                            </div>
                            <div class="col-md-6 text-center text-md-start">

                                <h3 class="fw-bold text-primary2"><span>Prix: </span>
                                    {{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }} FCFA</h3>
                                
                                    <div class="row text-muted">
                                        <div class="col-12 ">
                                            @if ($product['CodeManuel'])
                                            <div class="fs-6 "><span>Code : </span><span class="fw-bold">
                                                {{ $product['CodeManuel'] }}</span></div>
                                                @endif
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <!--div class="fs-6 "><span>Quantité en stock : </span><span class="fw-bold">
                                            {{ $product['stock'] }}</span></div-->
                                    </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6 text-center text-md-end">
                                        
                                <div class="text-sm text-muted">
                                    *Voulez-vous commander ou poser des questions ?
                                </div>
                                <a class="btn-sm btn btn-success fw-bold shadow w-auto justify-content-center  d-none d-md-inline-block  px-2 px-md-4"
                                    href="whatsapp://send?phone=+22997683652&text=Bonjour *Galerie Elda*. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                    Je suis intéressé par le produit *{{ $product['PRODUIT'] }}* disponible sur votre site web à l'adresse suivante  {{ request()->url() }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *Merci !*">
                                    <svg
                                        viewBox="0 0 30 30" height="50px" fill='#ffffff' class="">
                                        <path
                                            d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                                            fill-rule="evenodd"></path>
                                    </svg> Discutons par WhatsApp </a>

                                    <a class="btn-sm btn btn-success fw-bold shadow w-100 d-md-none   px-2 px-md-4"
                                    href="whatsapp://send?phone=+22997683652&text=Bonjour *Galerie Elda*. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                    Je suis intéressé par le produit *{{ $product['PRODUIT'] }}* disponible sur votre site web à l'adresse suivante  {{ request()->url() }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *Merci !*">
                                    <svg
                                        viewBox="0 0 30 30" height="50px" fill='#ffffff' class="">
                                        <path
                                            d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                                            fill-rule="evenodd"></path>
                                    </svg> Discutons par WhatsApp </a>
                            </div>
                                </div>                           
                        </div>
                        <div class="col-md-12 col-sm-12">
                            {{$product['Description'] }}
                         </div>
                       
                        <div class="py-2 hidden d-none py-lg-4 row">
                            <form action="{{ route('shop.addToCart') }}" method="POST"
                                class=" col-md-6 col-lg-6   mb-4 mb-lg-0 col-sm-12">
                                @csrf()
                                <input type="hidden" name="id" value="{{ $product['ID'] }}">
                                <input type="hidden" name="name" value="{{ $product['NOM'] }}">
                                <input type="hidden" name="price"
                                    value="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}">
                                <input type="hidden" name="code" value="{{ $product['CODEPRODUIT'] }}">
                                <input type="hidden" name="image" value="{{ $product['imgPathLink'] }}">
                                <!-- <button type="submit" class="btn btn-primary2 btn-lg d-md-inline d-block w-100 w-md-auto"> <i
                                        class="icon-bag me-2"></i> Ajouter au panier</button> -->
                            </form>
                        <div class="col-md-6 col-lg-6  mb-4  mb-lg-0 col-sm-12">

                                <form action="{{ route('favorites.add') }}" method="POST" class="w-100">
                                    @csrf()
                                    <input type="hidden" name="id" value="{{ $product['ID'] }}">
                                    <input type="hidden" name="name" value="{{ $product['NOM'] }}">
                                    <input type="hidden" name="price"
                                        value="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}">
                                    <input type="hidden" name="code" value="{{ $product['CODEPRODUIT'] }}">
                                    <input type="hidden" name="image" value="{{ $product['imgPathLink'] }}">
                                    <input type="hidden" name="code_manuelle" value="{{ $product['CodeManuel'] }}">

                                    <!-- <button class="btn btn-light mx-md-2 px-4 bg-gray-100 border w-100 btn-lg d-block ">
                                                <i class="icon-heart mx-md-1"></i><span class="d-lg-noned-sm-inline"> Ajouter aux favoris</span>
                                            </button> -->
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endif
            <!-- <hr> -->
        </div>


        @include('partials.might-like', ['pid' => $product['CodeManuel'], 'products' => $products])
    </div>
    <!-- end page content -->

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            // force the height to be as as long as the width
            var w = $('#current-image').width();
            $('#current-image').css({
                'height': w + 'px'
            });

            $('.image-thumbnail').on('click', (e) => {
                $('.image-thumbnail').removeClass('active');
                $(e.currentTarget).addClass('active');
                if ($(e.currentTarget).attr('src') != $('#current-image').attr('src')) {
                    $(e.currentTarget).addClass('active');
                    $('#current-image').animate({
                        'opacity': 0
                    }, 300, function() {
                        $('#current-image').attr('src', $(e.currentTarget).attr('src'));
                        $('#current-image').animate({
                            'opacity': 1
                        }, 400);
                    })
                }
            });

        });
    </script>

@endsection
