@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Editer Client</h5>
    <div class="card-body">
      <form method="post" action="{{route('client.update',$client->IDClient)}}">
        @csrf 
        @method('PATCH')
      <div class="form-group">
        <label for="inputTitle" class="col-form-label">Client NOM et Prenoms <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="CLIENT" placeholder="Entrer le nom et prenoms du client"  value="{{$client->CLIENT}}" class="form-control">
        @error('CLIENT')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputifu" class="col-form-label">IFU</label>
            <input id="inputifu" type="text" name="ifu" placeholder="Enter IFU" value="{{$client->ifu }}" class="form-control">
            @error('ifu')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputTEL" class="col-form-label">TEL</label>
            <input id="inputTEL" type="text" name="TEL" placeholder="Enter TEL" value="{{ $client->TEL }}" class="form-control">
            @error('TEL')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
        <label for="inputadresse" class="col-form-label">adresse</label>
        <input id="inputadresse" type="text" name="adresse" placeholder="Enter adresse" value="{{ $client->adresse }}" class="form-control">
        @error('adresse')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputIfusociete" class="col-form-label">Ifusociete</label>
        <input id="inputIfusociete" type="text" name="Ifusociete" placeholder="Enter Ifusociete" value="{{ $client->Ifusociete }}" class="form-control">
        @error('Ifusociete')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputIDPRESTATAIRE" class="col-form-label">IDPRESTATAIRE</label>
        <input id="inputIDPRESTATAIRE" type="text" name="IDPRESTATAIRE" placeholder="Enter IDPRESTATAIRE" value="{{ $client->IDPRESTATAIRE }}" class="form-control">
        @error('IDPRESTATAIRE')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputtotaldette" class="col-form-label">totaldette</label>
        <input id="inputtotaldette" type="text" name="totaldette" placeholder="Enter totaldette" value="{{ $client->totaldette }}" class="form-control">
        @error('totaldette')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="form-group">
        <label for="inputtotalRemb" class="col-form-label">totalRemb</label>
        <input id="inputtotalRemb" type="text" name="totalRemb" placeholder="Enter totalRemb" value="{{ $client->totalRemb }}" class="form-control">
        @error('totalRemb')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputSolde" class="col-form-label">Solde</label>
        <input id="inputSolde" type="text" name="Solde" placeholder="Enter Solde" value="{{ $client->Solde }}" class="form-control">
        @error('Solde')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    <div class="form-group">
        <label for="inputPayementAutomatique" class="col-form-label">PayementAutomatique</label>
        <input id="inputSolde" type="text" name="PayementAutomatique" placeholder="Enter PayementAutomatique" value="{{ $client->PayementAutomatique }}" class="form-control">
        @error('PayementAutomatique')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputemail" class="col-form-label">Email</label>
        <input id="inputemail" type="email" name="email" placeholder="Enter email" value="{{ $client->email }}" class="form-control">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputEnvoyer" class="col-form-label">Envoyer</label>
        <input id="inputEnvoyer" type="text" name="envoyer" placeholder="Enter envoyer" value="{{ $client->envoyer}}" class="form-control">
        @error('envoyer')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputCpteGal" class="col-form-label">CpteGal</label>
        <input id="inputCpteGal" type="text" name="CpteGal" placeholder="Enter CpteGal" value="{{ $client->CpteGal }}" class="form-control">
        @error('CpteGal')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
  
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Mise à jour</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush