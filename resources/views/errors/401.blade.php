@extends('errors::minimal')

@section('title', __('Page indisponible'))
@section('code', '401')

@section('message')
<div>
    <h6>{{__($exception->getMessage() ?: "Page d'erreur")}}</h6>
    La page que vous rechechez est indisponible ou a été déplacée.
</div>
<div class="py-2">
    <a href="{{url('/')}}" class="btn btn-primary">  Aller à l'accueil <i class="icon-arrow-right"></i></a>
</div>
@endsection
