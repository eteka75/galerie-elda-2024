@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message')
<div>
    <h6>{{__($exception->getMessage() ?: "Page d'erreur")}}</h6>
    Oups, trop de requête . Veuillez réessayer
</div>
<div class="py-2">
    <a href="{{url('/')}}" class="btn btn-primary">  Aller à l'accueil <i class="icon-arrow-right"></i></a>
</div>
@endsection

