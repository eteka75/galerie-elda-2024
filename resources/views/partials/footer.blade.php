
<footer class="bg-gray-800 border-5 border-top border-white shadow">
    <div class="container">
        <div class="footer">
            <div class="col-12 row">
                <div class="col-md-4 col-12 mt-lg-0 mt-3">
                    <h3>
                        GALERIE ELDA
                    </h3>
                    <p>Avec la Galerie Elda, la vrai vie commence à l'intérieur</p>
                    <div>
                        <h6>
                            Résaux sociaux
                        </h6>
                        <div class="d-flex gap-2">
                            <a target="_blanck" href="https://www.facebook.com/profile.php?id=100087230630053"><img
                                    src="{{ asset('images/facebook.png') }}" alt="Facebook" class="img-fluid icon-socials" /></a>
                            <a href="whatsapp://send?phone=+22997683652"><img src="{{ asset('images/whatsapp.jpeg') }}"
                                    class="img-fluid icon-socials" alt="WhatsApp" /></a>
                            <!--a href="#"><img src="{{ asset('images/twitter.png') }}" class="img-fluid icon-socials"/></a -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-lg-0 mt-3 foot-link">
                    <h3>
                        Services
                    </h3>
                    <a href="{{ ('/') }}">Accueil</a>
                    <a href="{{ route('shop.index') }}">Articles</a>
                    <a href="{{ route('shop.category') }}">Catégories</a>
                    <a href="{{ route('page.contact') }}">Contacts</a>
                    <!--a href="{{ route('page.our-shop') }}" >Nos boutiques</a><br-->
                    <a href="{{ route('page.about') }}">A propos de la galerie</a>
                    <!--a href="{{ route('page.faq') }}">Forum aux questions</a-->
                </div>
                <div class="col-md-4 col-12 mt-lg-0 mt-3">
                    <h3>
                        Contact
                    </h3>
                    <!-- <p>Site web: <a href="https://www.galerieelda.com/" style="color: white">https://www.galerieelda.com/</a></p> -->
                    <p>Nous sommes situé à <a target="_blanck"
                            href="https://www.google.com/maps/search/etoile+rouge/@6.3691473,2.3977283,15.25z?entry=ttu">Gbégamey,
                            2e rue à gauche en quittant la place de
                            l'Etoile Rouge</a></p>
                    <p>Téléphone: <a href="tel:+22995385252" class="fw-bold">+229 95385252/ 97683652</a></p>
                        <div>
                            
                            <a class="d-flex gap-1 items-center justify-center" href="{{ route('admin') }}">
                                <i class="mt-1 icon-login"></i> Administration</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class=" bg-white py-4 pb-4  text-muted">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-2 mb-md-0 text-center text-md-end order-md-last">
                <a class="mx-2 text-primary" href="{{ route('page.terms') }}">Conditions d'utilisations</a> |
                <a class="mx-2 text-primary" href="{{ route('page.privacy-policy') }}">Politique de confidentialité</a>

            </div>
            <div class="col-md-6 text-center text-md-start">
                Copyright © 2023 CAN Services<!--a href="http://pischon-tech.com/" class="text-primary" target="_blanck">CAN Services</a-->. Tous droits réservés.
                
            </div>
        </div>
    </div>