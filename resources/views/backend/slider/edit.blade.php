@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Modifier une banière</h5>
    <div class="card-body">
      <form method="post" action="{{route('slider.update',$slider['ID'])}}" enctype="multipart/form-data">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputDescription" class="col-form-label">Description <span class="text-danger">*</span></label>
          <input id="inputDescription" type="text" name="Description" placeholder="Entrer le Description"  value="{{$slider['Description']}}" class="form-control" require>
          @error('Description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Image</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choisir
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="file" name="LibelleImage">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('LibelleImage')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Mettre à jour</button>
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
        height: 150
    });
    });
</script>
@endpush