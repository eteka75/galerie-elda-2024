@extends('backend.layouts.master')

@section('main-content')
    <div class="card">
        <h5 class="card-header">Modification</h5>
        <div class="card-body">
            <form method="post" action="{{ route('apropos.update', $apropo['id']) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="col-form-label">Titre</label>
                    <input type="text" name="titre" placeholder="Entrer le titre"  value="{{ $apropo['titre'] }}" class="form-control">
                    @error('titre')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                <!-- Description -->
                <div class="form-group">
                    <label class="col-form-label">Paragraphe</label>
                    <textarea name="paragraphe" placeholder="Entrer la paragraphe" class ="form-control">{{ $apropo['paragraphe'] }}</textarea>
                    @error('paragraphe')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Image -->
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Image</label>
                    <div class="input-group">
                        <input id="thumbnail" class="form-control" type="file" name="photo">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group d-flex ">
                        <input id="delete-img" class="mx-1 p-1" value="1" type="checkbox" name="sup"> 
                        <label for="delete-img" class="mt-2"> Supprimer l'image</label>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Annuler</button>
                    <button class="btn btn-success" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
@endpush

@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
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

    <script></script>
@endpush
