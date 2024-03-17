@extends('layouts.app')

@section('title', 'Politique de confidentialité')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Politique de confidentialité</li>
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
            <div class="col-md-12">
                <!-- class="content-head text-center text-md-start text-uppercase" >

                    Politique de confidentialité                    
                </h2-->
                <div class="inner-card mb-4 p-md-4 shadow-sm my-4 rounded">
                    <div class="card-body text-lg ">
                        @if(isset($datas))
                        @foreach ($datas as $data)
                        <div class=" pb-4">
                        @if ($data['titre']!='N/A')
                            <h2 class="mt-4">{{$data['titre']}}</h2>
                                
                            @endif
                            @if ($data['photo']!=null && $data['paragraphe']!='N/A')
                        <div class="row">
                           
                            <div class="col-sm-12 text-md-start text-center">
                                <img src="{{ asset($data['photo']) }}"
                                class="img-fluid rounded p-2 rounded-2 border-white  hover-shadow-sm mx-auto"
                                alt=" " />
                            
                            </div>
                            <div class="col-sm-12">
                                <div class="text-lg fs-4 mt-2">
                                   {{$data['paragraphe']}} 
                                </div>                            
                            </div>

                        </div>
                            
                                
                            @elseif ($data['paragraphe']!='N/A')
                            <div class="text-lg fs-4 mt-2">
                                {!! nl2br($data['paragraphe']) !!} 
                            </div>
                            @elseif ($data['photo']!=null)
                            <div class="text-md-start text-center">

                                <img src="{{ $data['photo'] }}"
                                class="img-fluid border-4 p-2 rounded-2 border-white  hover-shadow-sm mx-auto">
                            </div>
                                

                            @endif

                        </div>
                            @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection