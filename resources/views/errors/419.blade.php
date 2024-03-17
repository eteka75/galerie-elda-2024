@extends('errors::minimal')

@section('title', __('Page expirée'))
@section('code', '419')
@section('message')
<div>
    <h6>{{__($exception->getMessage() ?: "Page d'erreur")}}</h6>
    Votre session a expirée, veuillez actualiser la page.
</div>
<div class="py-2">
    <a href="{{request()->url()}}" class="btn btn-primary"> Actualiser la page <i class="icon-reload"></i></a>
</div>
@endsection
