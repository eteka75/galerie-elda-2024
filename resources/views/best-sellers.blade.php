@extends('layouts.app')

@section('title', "Meilleures ventes")
@section('scripts')

<link rel="stylesheet" href="{{asset("storage/assets/vendor/lightbox2/css/lightbox.min.css")}}" />
<script src="{{asset("storage/assets/vendor/lightbox2/js/lightbox.js")}}"></script>
@endsection
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Meilleures ventes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="maim">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-card">
                    <div class="card-body">
                        <h2 class="content-head">
                            Meilleurs ventes
                        </h2>
                        <div>
                            <div class="row">
                                @if($products && count($products)>0)
                                @foreach ($products as $product)
                                <!-- start single product -->
                                <div class="col-md-4 col-lg-4 col-sm-6">
                                    @include('partials.includes.card-produit',compact('product'))
                                </div>
                                <!-- end single product -->
                                @endforeach
                                @endif
                                @php
                                $pages=$products->links()->elements[0];
                                @endphp
                                <div class="pagination col-12 py-4">
                                    @if($pages && count($pages)>1)
                                    <ul class="pagination mb-4 mt-4 px-2 ">
                                        <li class="page-item  d-none d-md-inline">
                                            <a class="page-link text-primary" href="{{ $products->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Précédent</span>
                                            </a>
                                        </li>
                                        <!-- Boucle pour afficher les liens de pagination -->

                                        @foreach ($products->links()->elements[0] as $page => $url)
                                        <li
                                            class="page-item  text-primary {{ $products->currentPage() == $page ? 'active' : '' }}">
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
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3"></div> -->
        </div>
    </div>
</div>
@endsection