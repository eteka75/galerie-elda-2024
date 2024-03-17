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
                        <li class="breadcrumb-item active" aria-current="page">Panier d'achat</li>
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
    <div class="container">
        <div class="col-md-12">
            <div class="inner-card">
                @if(count($carts) > 0)
                <h2 class="content-head">
                    Panier d'achat
                </h2>
                <div class="p-4 border  rounded-2 mb-4">
                    <div class="row d-none d-md-flex fw-bold py-2 border-bottom">
                        <div class="col-md-4 col-xl-4">Produit</div>
                        <div class="col-md-2">Prix unitaire</div>
                        <div class="col-md-2 text-center">Quantité</div>
                        <div class="col-md-2">Prix total</div>
                        <div class="col-md-2 col-xl-1">Action</div>
                    </div>
                    @php
                    $i=0;
                    @endphp
                    @foreach($carts as $cart)
                    <div
                        class="row text-center align-items-center text-md-start py-2 border-bottom {{$i++%2==0?'bg-gray-100':''}}">
                        <div class="col-md-2 col-xl-1 py-3">
                            <a href="{{ $cart["image"] }}" data-lightbox="example-set"
                                data-title="{{ number_format($cart['price'], 0, ' ', ' ') }} FCFA - {{ $cart['name'] }}">
                                <img src="{{$cart['image']}}"
                                    class="img-cart-mini p-1 shadow-sm bg-white border-2 border-white "
                                    alt="{{$cart['name']}}" />
                            </a>
                        </div>
                        <div class="col-md-2 col-xl-3 py-3">{{ $cart['name'] }}</div>
                        <div class="col-md-2 py-3">{{ $cart['price'] }} FCFA</div>
                        <div class="col-md-2  text-center text-md-start ">
                            <div class="d-flex justify-content-between text-center text-md-start py-2">
                                <button class="decrement btn-sm btn py-1 btn-primary" data-code="{{ $cart['code'] }}"
                                    data-price="{{ $cart['price'] }}">-</button>
                                <span class="quantity mx-2 border-0"
                                    style="display: flex; justify-content:space-around; align-items:center; margin-right: 1rem; font-size: 18px !important"
                                    data-code="{{ $cart['code'] }}">{{ $cart['qty'] }}</span>
                                <button class="increment btn-sm btn py-1 btn-primary" data-code="{{ $cart['code'] }}"
                                    data-price="{{ $cart['price'] }}">+</button>
                            </div>
                        </div>
                        <!-- <td style="padding-top: 2rem;" >0 FCFA</td> -->
                        <div class="col-md-2 col-lg-2 total-price py-3" data-code="{{ $cart['code'] }}">
                            {{ $cart['price'] * $cart['qty'] }} FCFA
                        </div>
                        <div class="col-md-2">
                            <form action="{{ route('cart.destroy', $cart['code']) }}" method="POST" class="py-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="icon-trash"></i>
                                    Supprimer</button>
                            </form>
                        </div>
                    </div>

                    @endforeach
                    <div class="row py-3 bg-gray fw-bold">


                        <div class="col-md-8 fw-bold py-2 text-muted text-center text-md-end">
                            Total des prix de tout les articles :
                        </div>
                        <div class="col-md-4 py-2 text-dark text-center text-md-start">
                            <span id="totalPriceContainer">&nbsp;
                                &nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class="text-md-end px-md-4 text-center mb-4">
                    <form action="{{ route('checkout.index') }}" method="POST" class="px-md-4">
                        @csrf()
                        <a class="btn btn-secondary mb-2 d-block d-md-inline   mx-1"
                            href="{{route('shop.index')}}">Continuer vos achats <i class="icon-arrow-right"></i></a>
                        <div><input type="hidden" name="totalPriceInput" id="totalPriceInput" readonly>
                            <input type="hidden" name="tabPriceInput" id="tabPriceInput" readonly>
                        </div>
                        <button type="submit" class="btn mb-4 mx-1 mt-4 d-inline-block d-md-inline  btn-success ">
                            Passer à la caisse <i class="icon-basket"></i>
                        </button>
                    </form>
                </div>
                @else
                <div class="col-md-12">
                    <div class="inner-card shadow-sm text-center  rounded-3">
                        <div class="py-4">
                            <i class="text-muted icon-basket display-2 py-4"></i>
                            <p class="text-center fs-5 py-2">Votre panier est vide !</p>
                            <div class="mb-4 text-center">
                                <a class="btn bg-primary text-white mx-2" href="{{ route('shop.index') }}">Continuer vos
                                    achats <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
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
            const price = parseFloat(element.textContent);
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

        // console.log("ee", totalPriceInput);
        // console.log("ee", totaltabPriceInput);

    }

    incrementButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const code = button.getAttribute('data-code');
            const originalPrice = button.getAttribute('data-price');
            const quantitySpan = document.querySelector(`.quantity[data-code="${code}"]`);
            const priceElement = document.querySelector(`.total-price[data-code="${code}"]`);
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
            const priceElement = document.querySelector(`.total-price[data-code="${code}"]`);
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