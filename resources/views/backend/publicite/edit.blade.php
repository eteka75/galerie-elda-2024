@extends('backend.layouts.master')

@section('main-content')
    <div class="card">
        <h5 class="card-header">Modifier la publicité</h5>
        <div class="card-body">
            <form method="post" action="{{ route('publicites.update', $publicite['IDPUBLICITE']) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="inputDescription" class="col-form-label">Description</label>
                    <textarea id="inputDescription" name="Description" placeholder="Entrer la description" class="form-control">{{ $publicite['Description'] }}</textarea>
                    @error('Description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Image -->
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Image</label>
                    <div class="input-group">
                        <input id="thumbnail" class="form-control" type="file" name="imgPathLink">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('imgPathLink')
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
