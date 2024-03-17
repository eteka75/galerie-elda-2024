@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="font-size: 1.2rem; font-weight:bold">
                <div class="card-header" style="font-size: 1.2rem; font-weight:bold">Bienvenue sur notre site</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Vous etes connecté !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection