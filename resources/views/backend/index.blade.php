@extends('backend.layouts.master')
@section('title', 'ELDA || DASHBOARD')
@section('main-content')

    <div class="container-fluid">
        @include('backend.layouts.notification')
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de Bord</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Category -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow py-40">
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Catégories</div>
                                <a class="text-muted" href="{{ route('category.index') }}"> 

                                {{ $c=\App\Models\Famille::countCategorie() }} catégorie{{  $c>1?'s':'' }} d'article
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-sitemap fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Products -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow py-40">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Articles</div>
                                <a class="text-muted" href="{{ route('product.index') }}"> 
                                {{ $a=\App\Models\Product::countProduct() }} article{{  $a>1?'s':'' }}
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cubes fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-dark shadow py-40">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-dark text-uppercase mb-1">Publicités</div>
                                <a class="text-muted" href="{{ route('publicites.index') }}"> 
                                {{ $n= \App\Models\Publicite::count() }} publicité{{  $n>1?'s':'' }}
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-caret-square-right fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow py-40">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-danger text-uppercase mb-1">Sliders</div>
                                <a class="text-muted" href="{{ route('sliders.index') }}"> 
                                {{ $s=\App\Models\Nouvelle::count() }} slide{{  $s>1?'s':'' }}
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-image fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow py-40">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Utilisateurs</div>
                                <a class="text-muted" href="{{ route('users.index') }}"> 
                                {{ $u=\App\Models\User::count() }} utilisateur{{  $u>1?'s':'' }}
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow py-40">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Paramètres</div>
                                <a class="text-muted" href="{{ route('parametres.index') }}"> 
                                    {{ $n= \App\Models\Parametre::count() }} paramètre{{  $n>1?'s':'' }}
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cogs fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12 mb-4">
                <div class="card border-left-primary shadow py-40">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Messages contact</div>
                              <a class="text-muted" href="{{ route('contacts.index') }}">  {{ $m= \App\Models\Contact::count() }} message{{  $m>1?'s':'' }}</a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope-open fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @endsection
