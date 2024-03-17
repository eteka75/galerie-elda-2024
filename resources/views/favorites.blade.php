<!-- cart.blade.php -->

@extends('layouts.app')
@section('title', 'Cart')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Favoris</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="maim ">
    <!-- Affichage des produits du panier -->
    @if(isset($carts) && count($carts) > 0)
    <div class="container">
        <div class="col-md-12">
            <div class="inner-card">
                <h2 class="content-head">
                    Mes favoris
                </h2>
                <div class="p-4 border  rounded-2 mb-4">
                    <div class="row d-none d-md-flex fw-bold py-2 border-bottom">
                        <div class="col-md-3 col-xl-2">Image</div>
                        <div class="col-md-4 col-xl-4">Produit</div>
                        <div class="col-md-2">Prix unitaire</div>
                        <div class="col-md-3 col-xl-4">Action</div>
                    </div>
                    @php
                    $i=0;
                    @endphp
                    @foreach($carts as $cart)
                    <div
                        class="row text-center align-items-center text-md-start py-2 border-bottom {{$i++%2==0?'bg-gray-100':''}}">
                        <div class="col-md-3 col-xl-2 ">
                            <a href="{{ $cart["image"] }}" data-lightbox="example-set"
                                data-title="{{ number_format($cart['price'], 0, ' ', ' ') }} FCFA - {{ $cart['name'] }}">
                                <img src="{{$cart['image']}}"
                                    class="img-cart-mini p-1 shadow-sm bg-white border-2 border-white "
                                    alt="{{$cart['name']}}" />
                            </a>
                        </div>
                        <div class="col-md-5 col-xl-4 py-3">{{ $cart['name'] }}</div>
                        <div class="col-md-2 py-3">{{ $cart['price'] }} FCFA</div>
                        <div class="col-md-3 col-xl-4 d-flex">
                            <form action="{{ route('favorites.remove', $cart['code']) }}" method="POST" class="py-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="icon-trash"></i>
                                    Supprimer</button>
                            </form>
                            <form action="{{ route('shop.addToCart') }}" method="POST" class="py-3 mx-2">
                                @csrf()
                                <input type="hidden" name="id" value="{{ $cart['id'] }}">
                                <input type="hidden" name="name" value="{{ $cart['name'] }}">
                                <input type="hidden" name="price" value="{{ $cart['price'] }}">
                                <input type="hidden" name="code" value="{{ $cart['code'] }}">
                                <input type="hidden" name="image" value="{{ $cart['image'] }}">
                                <button class=" btn btn-sm border"><i class="icon-basket"></i>
                                    Ajouter aux favoris</button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-md-12 py-3">
                        <div class="text-md-end px-md-4 text-center mb-4">
                            <a class="btn btn-secondary mb-2 d-block d-md-inline   mx-1"
                                href="{{route('shop.index')}}">Continuer vos achats <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-12">
                    <div class="inner-card shadow-sm text-center  rounded-3">
                        <div class="py-4">
                            <i class="text-muted icon-heart display-2 py-4"></i>
                            <p class="text-center fs-5 py-2">Votre liste de favoris est vide !</p>
                            <div class="mb-4 text-center">
                                <a class="btn bg-secondary text-white mx-2" href="{{ route('shop.index') }}">Consulter
                                    mes achats <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')

    <!-- Script JavaScript pour gérer l'incrémentation et la décrémentation de la quantité -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const incrementButtons = document.querySelectorAll('.increment');
        const decrementButtons = document.querySelectorAll('.decrement');
        const totalPrices = document.querySelectorAll('.total-price');
        const quantitySpans = document.querySelectorAll('.quantity');
        const totalPriceElement = document.getElementById('totalPriceContainer');

        function updateTotalPrice() {
            let totalPrice = 0;
            let tabPrice = [];
            totalPrices.forEach(function(element) {
                const price = parseFloat(element.innerText);
                totalPrice += price;

                tabPrice.push(price);
            });
            // console.log(tabPrice);
            totalPriceElement.innerText = totalPrice.toFixed(2);

            // Mettre à jour le total dans le conteneur span
            const totalPriceContainer = document.getElementById('totalPriceContainer');
            totalPriceContainer.innerText = totalPrice.toFixed(2) + ' FCFA';

            const totalPriceInput = document.getElementById('totalPriceInput');
            totalPriceInput.value = totalPrice.toFixed(2);

            const totaltabPriceInput = document.getElementById('tabPriceInput');
            totaltabPriceInput.value = JSON.stringify(tabPrice);

        }

        incrementButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const code = button.getAttribute('data-code');
                const originalPrice = button.getAttribute('data-price');
                const quantitySpan = document.querySelector(`.quantity[data-code="${code}"]`);
                const priceElement = document.querySelector(
                `.total-price[data-code="${code}"]`);
                const price = parseFloat(priceElement.innerText);
                const quantity = parseInt(quantitySpan.innerText);

                const newQuantity = quantity + 1;
                const newPrice = originalPrice * newQuantity;

                quantitySpan.innerText = newQuantity;
                priceElement.innerText = newPrice.toFixed(2);

                // const totalQuantityInput = document.getElementById('totalQuantityInput');
                // totalQuantityInput.value = newQuantity.toFixed(2);

                updateTotalPrice();
            });
        });

        decrementButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const code = button.getAttribute('data-code');
                const originalPrice = button.getAttribute('data-price');
                const quantitySpan = document.querySelector(`.quantity[data-code="${code}"]`);
                const priceElement = document.querySelector(
                `.total-price[data-code="${code}"]`);
                const price = parseFloat(priceElement.innerText);
                const quantity = parseInt(quantitySpan.innerText);

                if (quantity > 1) {
                    const newQuantity = quantity - 1;
                    const newPrice = originalPrice * newQuantity;

                    quantitySpan.innerText = newQuantity;
                    priceElement.innerText = newPrice.toFixed(2);

                    // const totalQuantityInput = document.getElementById('totalQuantityInput');
                    // totalQuantityInput.value = newQuantity.toFixed(2);

                    updateTotalPrice();
                }
            });
        });
        updateTotalPrice();
    });
    </script>

    @endsection