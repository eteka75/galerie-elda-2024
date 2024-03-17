@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Ajouter un Fournisseur</h5>
    <div class="card-body">
      <form method="post" action="{{route('fournisseur.store')}}">
        {{csrf_field()}}
        <div class="form-group">
        <label for="inputTitle" class="col-form-label">Fournisseur NOM et Prenoms <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="Fournisseur" placeholder="Entrer le nom et prenoms du fournisseur"  value="{{old('Fournisseur')}}" class="form-control">
        @error('Fournisseur')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputIFU" class="col-form-label">IFU</label>
            <input id="inputIFU" type="number" name="IFU" placeholder="Enter IFU" value="{{ old('IFU') }}" class="form-control">
            @error('IFU')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputTEL" class="col-form-label">TEL</label>
            <input id="inputTEL" type="number" name="TEL" placeholder="Enter TEL" value="{{ old('TEL') }}" class="form-control">
            @error('TEL')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
        <label for="inputAdresse" class="col-form-label">Adresse</label>
        <input id="inputAdresse" type="text" name="Adresse" placeholder="Enter Adresse" value="{{ old('Adresse') }}" class="form-control">
        @error('Adresse')
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
        <label for="inputCpteGal" class="col-form-label">CpteGal</label>
        <input id="inputCpteGal" maxlength="10" type="text" name="CpteGal" placeholder="Enter CpteGal" value="{{ old('CpteGal') }}" class="form-control">
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