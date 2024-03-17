@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Ajouter un Client</h5>
    <div class="card-body">
      <form method="post" action="{{route('client.store')}}">
        {{csrf_field()}}
        <div class="form-group">
        <label for="inputTitle" class="col-form-label">Client NOM et Prenoms <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="CLIENT" placeholder="Entrer le nom et prenoms du client"  value="{{old('CLIENT')}}" class="form-control">
        @error('CLIENT')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputifu" class="col-form-label">IFU</label>
            <input id="inputifu" type="number" name="ifu" placeholder="Enter IFU" value="{{old('ifu') }}" class="form-control">
            @error('ifu')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputTEL" class="col-form-label">TEL</label>
            <input id="inputTEL" type="text" name="TEL" placeholder="Enter TEL" value="{{ old('TEL') }}" class="form-control">
            @error('TEL')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
        <label for="inputadresse" class="col-form-label">adresse</label>
        <input id="inputadresse" type="text" name="adresse" placeholder="Enter adresse" value="{{ old('adresse') }}" class="form-control">
        @error('adresse')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputIfusociete" class="col-form-label">Ifusociete</label>
        <input id="inputIfusociete" type="number" name="Ifusociete" placeholder="Enter Ifusociete" value="{{ old('Ifusociete') }}" class="form-control">
        @error('Ifusociete')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="inputtotaldette" class="col-form-label">totaldette</label>
        <input id="inputtotaldette" type="number" name="totaldette" placeholder="Enter totaldette" value="{{ old('totaldette') }}" class="form-control">
        @error('totaldette')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="form-group">
        <label for="inputtotalRemb" class="col-form-label">totalRemb</label>
        <input id="inputtotalRemb" type="number" name="totalRemb" placeholder="Enter totalRemb" value="{{ old('totalRemb') }}" class="form-control">
        @error('totalRemb')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="inputSolde" class="col-form-label">Solde</label>
        <input id="inputSolde" type="number" name="Solde" placeholder="Enter Solde" value="{{ old('Solde') }}" class="form-control">
        @error('Solde')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    

    <div class="form-group">
        <label for="inputemail" class="col-form-label">Email</label>
        <input id="inputemail" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}" class="form-control">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="form-group">
        <label for="inputCpteGal" class="col-form-label">CpteGal</label>
        <input maxlength="10" id="inputCpteGal" type="text" name="CpteGal" placeholder="Enter CpteGal" value="{{ old('CpteGal') }}" class="form-control">
        @error('CpteGal')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


        
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reinitialiser</button>
           <button class="btn btn-success" type="submit">creer</button>
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