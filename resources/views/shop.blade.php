@extends('layouts.app')

@section('title', 'Achetez ici vos mobiliers, stores, et bien plus')
@section('scripts')
<link rel="stylesheet" href="{{asset("storage/assets/vendor/lightbox2/css/lightbox.min.css")}}" />
<script src="{{asset("storage/assets/vendor/lightbox2/js/lightbox-plus-jquery.min.js")}}"></script>
@endsection
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Articles</a></li>

                        @if(isset($categoryName) && $categoryName!=null && $categoryName!='Articles')
                        <li class="breadcrumb-item active" aria-current="page">{{ $categoryName }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')

<!-- start page content -->
<div class="bg-white maim">
    <div class="container">
        
        <div class="row">
            @if(isset($categories) && count($categories))
            <!-- start filter section -->
            <div class="col-lg-2 col-md-3 order-lg-last pt-4 pb-2 col-12">
                <div class="mt-md-4">
                    <div class="p-2 border shadow-1 my-md-4  rounded-1">

                        <h5 class="bg-gray text-sm p-2 text-uppercase">
                            Catégorie
                        </h5>
                        <ul class="filter-ul list-unstyled  ">
                            @foreach ($categories as $category)
                            <a
                            href="{{ route('shop.index', ['category' => $category['ID'], 'name' => $category['NOM']]) }}"> <li
                                class="text-start text-inherit text-black {{ $category['NOM'] == $categoryName ? 'bg-primary text-white fw-bold' : '' }}">
                                {{ $category['NOM'] }}
                            </li></a>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <!-- end filter section -->
            <!-- start products section -->
            <div class="col-md-9 col-lg-10">
                <div class="head row">
                    <div class="col-md-12 text-start">
                        <h2 class="content-head text-center text-md-start text-uppercase">
                            {{ $categoryName }}
                        </h2>
                    </div>
                </div>
                <!-- start products row -->
                <div class="row">
                    
                    @forelse ($products as $product)
                    <!-- start single product -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-6 px-2 px-lg-3">
                        @include('partials.includes.card-produit',compact('product'))
                    </div>
                    <!-- end single product -->
                    @empty
                    <div class="col-md-8 mx-auto rounded-2 p-4 border text-center">
                        <div class="py-3"><span class="display-2  text-muted icon-layers"></span></div>
                        <h4 class="py-0 my-2">Aucun produit</h4>
                        <small class="text-muted">
                            Cette section ne contient aucun produit pour l'instant.
                        </small>
                        <p class="py-2">
                            <a href="{{route('shop.category')}}" class="btn btn-sm btn-outline-primary">Consulter les catégories <i class="arrow-right mx-2"></i></a>
                        </p>
                    </div>
                    @endforelse
                    @php
                    $pages=$products->links()->elements[0];
                    @endphp
                    <div class="pagination col-12 py-4">
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
                <!-- end products row -->
            </div>
            <!-- end products section -->
        </div>
    </div>
</div>
<!-- end page content -->

@endsection