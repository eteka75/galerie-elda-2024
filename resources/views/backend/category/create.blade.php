@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Créer une catégorie</h5>
    <div class="card-body">
      <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputNOM" class="col-form-label">Nom <span class="text-danger">*</span></label>
          <input id="inputNOM" type="text" name="NOM" placeholder="Entrer le nom"  value="{{old('NOM')}}" class="form-control" require>
          @error('NOM')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>


        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Image</label>
          <div class="input-group">
              
          <input id="thumbnail" class="form-control" type="file" name="imgPathLink">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('imgPathLink')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Annuler</button>
           <button class="btn btn-success" type="submit">Envoyer</button>
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
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 120
      });
    });
</script>

<script>


</script>
@endpush
