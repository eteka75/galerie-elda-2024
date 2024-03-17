@extends('layouts.app')

@section('title', "Le paiements sécurisés")
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paiements sécurisés</li>
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
            <div class="col-md-9">
                <div class="inner-card">
                    <div class="card-body">
                        <h2 class="content-head" >
                            Paiements sécurisés                
                        </h2>
                        <div>
                            <!---Contenu de la page-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection