@extends('errors::minimal')

@section('title', __('Site en maintenance'))
@section('code', '503')

@section('message')
<div>
    <h6 class="text-danger">{{__($exception->getMessage() ?: 'Service indisponible')}}</h6>
    Nous somme désolé de vous informer que le site est actuellement en maintenance
</div>
<div class="py-2">
    <a href="{{request()->url()}}" class="btn btn lg btn-secondary">  Réesayez dans 5 minutes <i class="icon-reload"></i></a>
</div>
@endsection
