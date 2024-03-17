@extends('layouts.app')

@section('title', 'Catégories de produits')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Catégorie</li>
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
        <h2 class="content-head text-uppercase" >
            Catégorie d'articles                
            </h2>
    </div>
    @if($categories && count($categories)>0)
        @foreach ($categories as $category)
        <div class="col-md-6 col-12 col-sm-6 col-12 col-sm-6 col-lg-4 ">
            @include('partials.includes.card-categorie',compact('category'))
        </div>
        @endforeach
        
    @endif
    <div class="col-md-12">
        @php
        $pages=$categories->links()->elements[0];
        @endphp
        <div class="pagination col-12 ">
            @if($pages && count($pages)>1)
            <ul class="pagination mb-4 mt-4 px-2 mx-auto">
                <li class="page-item  d-none d-md-inline">
                    <a class="page-link text-primary" href="{{ $categories->previousPageUrl() }}"
                        aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Précédent</span>
                    </a>
                </li>
                <!-- Boucle pour afficher les liens de pagination -->

                @foreach ($categories->links()->elements[0] as $page => $url)
                <li class="page-item  text-primary {{ $categories->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach
                <li class="page-item d-none d-md-inline">
                    <a class="page-link text-primary" href="{{ $categories->nextPageUrl() }}"
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

@endsection