@extends('layouts.app')
@section('title', 'Résultat de la recherche pour : '.$query)
@section('content')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Recherche</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
<div class="container">

    <h2 class=" text-sm fs-6 text-center text-md-start pt-4 pb-2 fw-bold">Affichage de
        {{count($products) }} résultat{{count($products)>1?'s':'' }} pour <span class="text-primary2">{{ $query }}</span></h2>
    @if (count($products) == 0)
    <div class="alert mb-5 alert-primary">
        Aucun article trouvé pour votre recherche!
    </div>
    @else
        <div class="mb-4 row">

            @forelse ($products as $product)
            <div class="col-sm-12 col-md-6">
                <div class="hover-shadow-lg rounded-2 shadow-sm bg-white mb-2 p-4">
                    <a href="{{ route('shop.show', $product['CODEPRODUIT']) }}">
                    <div class="row">
                        <div class="col-md-4 p-0 col-lg-3 col-5 overflow-hidden text-center rounded-2">
                            <a href="{{ route('shop.show', $product['CODEPRODUIT']) }}"
                            class="text-decoration-none">
                               <img src="{{ $product['imgPathLink'] }}" height="80px" class="article-img-type-2 w-full object-fit-cover rounded-2 p-img-hover" alt="..." />
                        </a>
                        </div>
                        
                            <div class="col-7 col-md-8  col-lg-9">
                            <h6 class="py-0"><a href="{{ route('shop.show', $product['CODEPRODUIT']) }}"
                                    class="text-decoration-none text-black">{{ $product['PRODUIT'] }}</a></h6>
                            <div class="fw-bold text-primary2">{{isset($product['Infos'],$product['Infos']['prix'])? number_format($product['Infos']['prix'], 0, ' ', ' '):'' }} FCFA</div>
                            <small class="text-muted">
                                CODE : <b> {{ $product['CodeManuel'] }}</b>
                            </small>
                            
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="alert col-md-12 rounded-sm mb-5 alert-primary">
                Aucun article trouvé pour votre recherche!
            </div>
            @endforelse

            <div class="col-md-12 py-2">
                @php
                    $pages=$products->links()->elements[0];
                    @endphp
                    <div class="pagination col-12 ">
                        @if($pages && count($pages)>1)
                        <ul class="pagination mb-4 mt-4 px-2 mx-auto">
                            <li class="page-item  d-none d-md-inline">
                                <a class="page-link text-primary" href="{{ $products->previousPageUrl() }}"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Précédent</span>
                                </a>
                            </li>
                            <!-- Boucle pour afficher les liens de pagination -->

                            @foreach ($products->links()->elements[0] as $page => $url)
                            <li class="page-item  text-primary {{ $products->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endforeach
                            <li class="page-item d-none d-md-inline">
                                <a class="page-link text-primary" href="{{ $products->nextPageUrl() }}"
                                    aria-label="Next">
                                    <span class="sr-only">Suivant</span>
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                       
                        @endif
                    </div>
            </div>
    </div>
    @endif
</div>

@endsection