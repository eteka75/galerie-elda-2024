@extends('layouts.app')

@section('title', "Conditions d'utilisation")
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('page.contact') }}">Contact</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Message envoyé</li>
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
            <div class="col-sm-12 inner-card py-4">
                <div class="row border mt-4 rounded-3">
                <div class="col-md-4  mt-8 text-md-start text-center">
                    <img src="{{asset('images/email_send.png')}}" alt="Email image" class="img-fluid " />
                </div>
                <div class="col-md-8 py-md-8 py-4 text-md-start text-center mb-4">

                    <h1 class="display-5 mt-md-4 fw-bold"> Contact</h1>

                    <div class="text-lead lead">
                        <div>
                            Votre message a été bien envoyé !
                        </div>
                        <div class="py-2">
                            <a href="{{ route('welcome') }}" class="btn btn lg btn-secondary"> Revenez à la page
                                d'acceuil
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection