@extends('layouts.app')
@section('title', 'Paiement')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paiement</li>
                </ol>
            </nav>
        </div>
       </div>
    </div>
</div>
@endsection
@section('content')

<!-- start page content -->
<div class="main bg-white">
    <div class="container">
   
    <div class="row">
        <div class="col-md-5 py-4 ">
           <div class="p-4 my-4 shadow-xs bg-gray-100 rounded-1 border">
            <h1 class="lead text-xl">Paiement</h1>
            <hr>
            <h3 class="lead fw-bold" >Détails de la facturation</h3>
            @if($success === "false")
            <div class="text-danger my-4" >Veuillez
                renseigner vos informations de facturation s'il vous plait!</div>
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf()
                <div class="form-group">
                    <label for="email" class="light-text">Adresse Email</label>
                    @guest
                    <input type="text" name="email" class="form-control "  required>
                    @else
                    <input type="text" name="email" class="form-control " 
                        value="{{ auth()->user()->email }}" readonly required>
                    @endguest
                </div>
                <div class="form-group">
                    <label for="name" class="light-text">Nom</label>
                    <input type="text" name="name" class="form-control "  required>
                </div>
                <div class="form-group">
                    <label for="address" class="light-text">Adresse</label>
                    <input type="text" name="address" class="form-control " 
                        required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="light-text">Ville</label>
                            <input type="text" name="city" class="form-control " 
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="pays" class="light-text">Pays</label>
                        <input type="text" name="pays" class="form-control " 
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postal_code" class="light-text">Code Postal</label>
                            <input type="text" name="postal_code" class="form-control "
                                 required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="light-text">Téléphone</label>
                        <input type="text" name="phone" class="form-control " 
                            required>
                    </div>
                </div>

                <input type="hidden" name="totalPrice" value={{$sommeTotal}}>
                <input type="hidden" name="carts" value="{{ json_encode($carts) }}">
                <input type="hidden" name="quantities" value="{{ json_encode($result) }}">

               <div class="py-4 d-block">
                <button type="submit" class="btn bg-success text-white p-2">
                    Valider mes informations <i class="icon-arrow-right"></i>
               </button>
               </div>
            
            </form>
            @endif

            @if($success === "true")
            <div class="text-center">
                <p style="color: green; font-size: 1.2rem; font-weight:bold">Détails de facturation enrégistré avec
                    succès</p>
            </div>

            <div class="text-center" style="margin-top: 3rem;">
                <kkiapay-widget amount={{$sommeTotal}} key="47511f20cb0011ec9f03dd4f7afb4463" url="" position="center"
                    sandbox="true" data="" callback="{{ route('shop.index') }}">
                </kkiapay-widget>
            </div>
            @endif


        </div>
        </div>
        <div class="col-md-5 offset-md-1 py-md-4">
            <div class="p-4 my-4 shadow-sm bg-white rounded-1 border">

            <h3>Votre commande</h3>
            <hr>
            <table class="table table-borderless table-responsive">
                <tbody>
                    @php
                    $i= 0;
                    @endphp
                    @foreach ($carts as $item)
                    <tr>
                        <td>
                            <a href="{{ route('shop.show', $item['name']) }}">
                                <img src="data:image/png;base64,{{ $item['image'] }}" 
                                    height="80px" width="100px">
                        </td>
                        </a>
                        <td>
                        <td>
                            <a href="{{ route('shop.show', $item['name']) }}" class="text-decoration-none">
                                <h3 class="lead light-text" style="font-weight: bold;">{{ $item['name'] }}</h3>
                                <h3 class="light-text lead text-small">{{ $item['price'] }} FCFA</h3>
                            </a>
                        </td>
                        <td>
                            <span class="quantity-square">x{{ $result[$i] }}</span>
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <span class="light-text" style="font-weight: bold;">Total</span>
                </div>
                <div class="col-md-6 offset-md-4">
                    <span class="light-text" style="display: inline-block; font-weight: bold;">{{ $sommeTotal }}
                        FCFA</span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <span class="light-text" style="font-weight: bold;">Tax</span>
                </div>
                <div class="col-md-6 offset-md-4">
                    <span class="light-text" style="display: inline-block;font-weight: bold;">0 FCFA</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" style="margin-top: 2rem;">
                    <span style="font-weight: bold;" id="prixAPayer">Grand Total</span>
                </div>
                <div class="col-md-6 offset-md-6" style="margin-top: 1rem;">
                    <span class="text-right" style="display: inline-block; font-weight: bold;">{{ $sommeTotal }}
                        FCFA</span>
                </div>
            </div>
            <hr>

            </div>
        </div>
    </div>
</div>
</div>
<!-- end page content -->

@endsection

@section('scripts')
<script src="https://cdn.kkiapay.me/k.js"></script>
<script>
function payment() {
    const prixAPayer = document.getElementById('prixAPayer');
    console.log(prixAPayer);

    var amount = 1000;
    var orderId = 12345;
    var callbackUrl = 'http://example.com/callback';

    // Appeler la fonction de paiement Kkaipay
    Kkaipay.makePayment(amount, orderId, callbackUrl)
        .then(function(response) {
            // Traiter la réponse du paiement
            console.log(response);
        })
        .catch(function(error) {
            // Gérer les erreurs de paiement
            console.error(error);
        });

}
</script>
@endsection