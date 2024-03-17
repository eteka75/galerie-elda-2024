@extends('backend.layouts.master')

@section('main-content')
    <div class="card">
        <h5 class="card-header">Créer un nouveau produit</h5>
        <div class="card-body">
            <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="inputPrixOpportunite" class="col-form-label">Référence<span class="text-danger">*</span></label>
                    <input id="CodeManuel" type="text" name="CodeManuel" required placeholder="Entrer le code"  class="form-control">
                    @error('CodeManuel')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Nom Produit -->
                
                <div class="form-group">
                    <label for="inputNOM" class="col-form-label">Nom Produit<span class="text-danger">*</span></label>
                    <input id="inputNOM" type="text" name="PRODUIT" placeholder="Entrer le nom"
                        value="{{ old('PRODUIT') }}" class="form-control" required>
                    @error('PRODUIT')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputCode" class="col-form-label">Catégorie <span class="text-danger">*</span></label>
                    <select id="inputCode" name="NOM" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->NOM }}" {{ $category->NOM == $category->NOM ? 'selected' : '' }}>
                                {{ $category->NOM }}</option>
                        @endforeach
                    </select>
                    @error('NOM')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Prix -->
                <div class="form-group">
                    <label for="inputPrix" class="col-form-label">Prix</label>
                    <input id="inputPrix" type="number" name="prix" placeholder="Entrer le prix"
                        value="{{ old('prix') }}" class="form-control">
                    @error('prix')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Prix Opportunité -->
                <div class="form-group">
                    <label for="inputPrixOpportunite" class="col-form-label">Prix Opportunité</label>
                    <input id="inputPrixOpportunite" type="number" name="PrixOpportunite"
                        placeholder="Entrer le prix d'opportunité" value="{{ old('PrixOpportunite') }}"
                        class="form-control">
                    @error('PrixOpportunite')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="inputNumeroOpportunite" class="col-form-label">Numéro Opportunité</label>
                    <input id="inputNumeroOpportunite" type="number" name="NumeroOpportunite"
                        placeholder="Entrer le numéro d'opportunité" value="{{ old('NumeroOpportunite') }}"
                        class="form-control">
                    @error('NumeroOpportunite')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="inputDescription" class="col-form-label">Description</label>
                    <textarea id="inputDescription" name="Description" placeholder="Entrer la description" class="form-control">{{ old('Description') }}</textarea>
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
                    <button class="btn btn-success" type="submit">Créer</button>
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
