@extends('errors::minimal')

@section('title', __('Page non autorisée'))
@section('code', '403')
@section('message')
<div>
    <h6>{{__($exception->getMessage() ?: "Page d'erreur")}}</h6>
   Vous n'êtes pas autorisé à consulter cette page.
</div>
<div class="py-2">
    <a href="{{url('/')}}" class="btn btn-primary">  Aller à l'accueil <i class="icon-arrow-right"></i></a>
</div>
@endsection
