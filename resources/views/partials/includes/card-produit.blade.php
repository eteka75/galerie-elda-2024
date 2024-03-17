@if(isset($product) && $product)
<div class="article-cover-type-1 bg-white">
    <div class="article-img-type-1-card position-relative">

        <div class="d-none d-md-block">
            <a href="{{ asset($product["imgPathLink"]) }}"
            data-lightbox="example-set" data-title="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}
        FCFA - {{ $product['PRODUIT'] }}">
            <img src="{{ asset($product["imgPathLink"]) }}"
                class="img-fluid rounded-lg article-img-type-1 p-img-hover bgfa" alt="{{ ($product['PRODUIT']) }}" /></a>
        </div>
        <div class="d-md-none">
            <a href="{{ route('shop.show', $product['CODEPRODUIT']) }}" title="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}
        FCFA - {{ $product['PRODUIT'] }}">
            <img src="{{ asset($product["imgPathLink"]) }}"
                class="img-fluid rounded-lg article-img-type-1 bgfa" alt="{{ ($product['PRODUIT']) }}" /></a>
        </div>
        <div
            class="product-info d-none d-md-flex p-2 align-content-center w-100 position-absolute justify-content-center   gap-2">

            <form action="{{ route('shop.addToCart') }}" method="POST">
                @csrf()
                <input type="hidden" name="id" value="{{ $product['ID'] }}">
                <input type="hidden" name="name" value="{{ $product['PRODUIT'] }}">
                <input type="hidden" name="price" value="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }} ">
                <input type="hidden" name="code" value="{{ $product['CODEPRODUIT'] }}">
                <input type="hidden" name="image" value="{{ $product['imgPathLink'] }}">
                <!-- <div class="small"><button class="add-panier btn-panier"><i
                            class="icon-basket"></i>
                        Ajouter au
                        panier</button>
                </div> -->
            </form>

            <div class="d-flex text-center gap-md-2 gap-4">
        <form action="{{ route('favorites.add') }}" method="POST">
            @csrf()
            <input type="hidden" name="id" value="{{ $product['ID'] }}">
            <input type="hidden" name="name" value="{{ $product['PRODUIT'] }}">
            <input type="hidden" name="price" value="{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}">
            <input type="hidden" name="code" value="{{ $product['CODEPRODUIT'] }}">
            <input type="hidden" name="image" value="{{ $product['imgPathLink'] }}">
            <input type="hidden" name="code_manuelle" value="{{ $product['CodeManuel'] }}">

            <!-- <button class="btn-panier"><i
                        class="icon-heart"></i> <span
                        class="d-md-none d-inline mx-1">Favoris</span></button> -->
        </form>
                        
                <a class="btn-panier bg-none" href="{{ route('shop.show', $product['CODEPRODUIT']) }}"><span
                        class="icon-eye"></span><span
                        class="d-inline mx-1">En savoir plus</span></a>
            </div>
        </div>
    </div>

    <div class="pt-1 px-md-2 text-center text-md-start">
        <small class="mb-1">
            <a class="text-dark" href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                {{ $product['PRODUIT'] }}
            </a>
        </small>
        <div class="clearfix fw-bold  ">
            <a class="text-primary2" href="{{ route('shop.show', $product['CODEPRODUIT'])??0 }}">  <span class="rounded-pill"
                style="font-size: 1rem; font-weight:800">{{isset($product['infos'],$product['infos']['prix'])? number_format($product['infos']['prix'], 0, ' ', ' '):'' }}
                FCFA</span></a>
        </div>
        @if($product['CodeManuel'])
        <a class="text-dark" href="{{ route('shop.show', $product['CODEPRODUIT']) }}"><span
                class=" text-sm text-muted font-weight-bold pull-right">CODE :
                {{ $product['CodeManuel'] }}</span></a>
        @endif
    </div>
    
</div>
@endif