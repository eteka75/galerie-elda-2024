@extends('layouts.app')

@section('title', 'A propos')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">A propos</li>
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
            <div class="col-md-12 ">
                <h2 class="content-head text-center text-md-start text-uppercase" >
                    A propos de la boutique                 
                 </h2>
                <div class="inner-card mb-4 p-md-4 shadow-sm rounded">
                    <div class="card-body text-lg ">
                        
                        @foreach ($apropos as $propos)
                        <div class=" pb-4">
                        @if ($propos['titre']!='N/A')
                            <h2 class="mt-4">{{$propos['titre']}}</h2>
                                
                            @endif
                            @if ($propos['photo']!=null && $propos['paragraphe']!='N/A')
                        <div class="row">
                           
                            <div class="col-sm-12 text-md-start text-center">
                                <img src="{{ asset($propos['photo']) }}"
                                class="img-fluid rounded p-2 rounded-2 border-white  hover-shadow-sm mx-auto"
                                alt=" " />
                            
                            </div>
                            <div class="col-sm-12">
                                <div class="text-lg fs-4 mt-2">
                                    {!! nl2br($propos['paragraphe']) !!} 
                                </div>                            
                            </div>

                        </div>
                            
                                
                            @elseif ($propos['paragraphe']!='N/A')
                            <div class="text-lg fs-4 mt-2">
                                {!! nl2br($propos['paragraphe']) !!} 
                            </div>
                            @elseif ($propos['photo']!=null)
                            <img src="{{ $propos['photo'] }}"
                                class="img-fluid border-4 p-2 rounded-2 border-white  hover-shadow-sm mx-auto">
                                

                            @endif

                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection