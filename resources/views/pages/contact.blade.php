@extends('layouts.app')

@section('title', 'Contactez nous')
@section('breadcrumb')
<div class="breadcrumb-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="maim">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-sm-12 mx-auto my-lg-2">
                <div class="inner-card shadow-sm rounded-4 my-4">
                    <div class="card-body">
                        <h2 class="content-head">
                            Contactez-nous
                        </h2>
                        <div>
                            <!---Contenu de la page-->

                            <p
                                class=" w-responsive  text-muted mb-5 bgfa border rounded px-4 py-4 alert-primary alert ">
                                <b>Avez-vous des questions? </b> <br>N'hésitez pas à nous contacter directement. Notre
                                équipe reviendra vers vous dans les heures qui suivent pour vous aider.
                            </p>
                            <form id="contact-form" name="contact-form" action="{{ route('page.store-message') }}"
                                method="POST">
                                @csrf()
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-2">
                                            <label for="nom_prenom" class="text-ms text-muted fw-bold mb-2">Nom et prénom(s) :</label>
                                            <input type="text" id="nom_prenom" name="nom_prenom" value="{{old('nom_prenom')}}" class="form-control py-3">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-2">
                                            <label for="email" class="text-ms text-muted fw-bold mb-2">Adresse e-mail :</label>
                                            <input type="text" value="{{old('email')}}" id="email" name="email" class="form-control py-3">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                                <div class="col-md-12">
                                    <div class="md-form mb-2">
                                        <label for="telephone" class="text-ms text-muted fw-bold mb-2">Téléphone :</label>
                                        <input type="tel" id="telephone" name="telephone" value="{{old('telephone')}}" class="form-control py-3">
                                    </div>
                                </div>
                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-2 mt-1">
                                            <label for="objet" class="text-ms text-muted fw-bold mb-2">Objet : </label>
                                            <select class="form-control py-3 mb-4" name="objet" id="objet" >
                                                <option value=''>Choisir...</option>
                                                <option {{old('objet')=="Commande de produits"?'selected':''}}>Commande de produits</option>
                                                <option {{old('objet')=="Partenariat"?'selected':''}}>Partenariat</option>
                                                <option {{old('objet')=="Renseignement"?'selected':''}}>Renseignement</option>
                                                <option {{old('objet')=="Problème de livraison"?'selected':''}}>Problème de livraison</option>
                                                <option {{old('objet')=="Plainte sur ma commande"?'selected':''}}>Plainte sur ma commande</option>
                                                <option {{old('objet')=="Suggestion"?'selected':''}}>Suggestion</option>
                                                <option {{old('objet')=="Autres"?'selected':''}}>Autres</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <label for="message" class="text-ms text-muted fw-bold mb-2">Votre message :</label>
                                            <textarea type="text" id="message" name="message" rows="6"
                                                class="form-control py-3 md-textarea">{{old('message')}}</textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                                <div class=" text-md-left text-center my-4">
                                    <button type="submit" class="btn btn-primary px-8 d-sm-block d-md-inline py-3 w-100 w-md-auto rounded">Envoyer <i class="icon-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--Grid column-->



                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9430.847270021204!2d2.4002729854061204!3d6.370380675180437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1690280149600!5m2!1sfr!2sfr"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection