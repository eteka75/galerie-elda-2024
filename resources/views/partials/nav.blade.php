<header>
    <!-- Jumbotron -->
    <div class="head-top bg-darken text-white py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0 px-0 px-md-2 ">
                    <ul class="d-flex d-flex justify-content-center justify-content-sm-start gap-1 py-0 px-0 px-md-2 m-0  top-menu">
                        <li><a href="mailto:ejuvencio05@gmail.com"><span class="icon-envelope-letter d-none_d-md-inline"></span> ejuvencio05@gmail.com</a></li>
                        <li><a href="whatsapp://send?phone=+22997683652" class=" px-2 top-menu">
                            <svg
                            viewBox="0 0 30 30" height="20px" fill='#dddddd' class="hover-text-black">
                            <path
                                d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                                fill-rule="evenodd"></path>
                        </svg>
                            (+229)95385252
                        </a></li>
                        <!--li class="d-none d-md-inline text-warning">
                            <span class="icon-basket-loaded "></span>
                            <span>Livraison gratuite</span>
                        </li-->
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="py-3 bg-white ">
        <div class="container">
            <div class="row gy-3 align-items-center">
                <!-- Left elements -->
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <img src="{{ asset('storage/assets/img/logo-galerie-elda.jpg') }}" height="55px"
                        class="img-fluid" alt="Galerie Elda">
                    </a>
                </div>
                <div class="col-lg-9 col-md-2 col-sm-8 col-6 d-lg-none d-flex order-md-last">
                    <div class="ms-auto">
                        <button class="navbar-toggler mx-1 rounded-2 d-flex border p-2_5 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icon-menu"></i> <span class="ms-1">Menu</span>
                        </button>
                    </div>
                </div>
                
                <!-- Left elements -->

                <!-- Center elements -->
                <!-- <div class="order-lg-last col-lg-4  col-sm-8 col-8">
                  <div class="d-flex justify-content-end align-items-center ">
                    @php
                        $favCount = count(Session::get('fav', []));
                    @endphp
                   
                      <a href="{{ route('favorites.show') }}"
                          class="me-1 border rounded py-1 px-2 nav-link d-flex align-items-center" > <i
                              class="icon-heart m-1 me-md-2"></i>
                          <div class="d-flex">
                              <p class="d-none d-md-block mb-0 me-1">Mes favoris </p>   @if ($favCount > 0)
<span class="panier-count">
                                  {{ $favCount < 100 ? $favCount : '+99' }}
                              </span>
@endif
                            </div>
                      </a>
                      <a title="Mon panier" class="border rounded py-1 px-2 nav-link d-flex align-items-center position-relative {{ request()->routeIs('cart.index') ? 'active' : '' }}"
                         href="{{ route('cart.index') }}">

                         <i class="icon-basket m-1 me-md-2 {{ request()->routeIs('cart.index') ? 'active' : '' }}"
                              href="{{ route('cart.index') }}"></i>
                          
                          @php
                              $cartCount = count(Session::get('cart', []));
                          @endphp
                          @if ($cartCount > 0)
<span class="panier-count">
                              {{ $cartCount < 100 ? $cartCount : '+99' }}
                          </span>
@endif
                      </a>
                      <div class=" d-lg-none text-right">
                        <button class="navbar-toggler mx-1  rounded-2  d-flex border p-2 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icon-menu"></i> <span class="ms-1">Menu</span>
                          </button>
                    </div>
                  </div>
              </div> -->
                <!-- Center elements -->

                <!-- Right elements -->
                <div class="col-lg-9 col-md-6 col-9 col-12 justify-content-end">
                    <form action="{{ route('shop.search') }}" method="GET">

                        <div class="input-group">
                            <input type="text" id="search" name="search" class="form-control"
                                value="{{ request()->input('search') }}" placeholder="Rechercher dans les articles...">
                            <button type="submit"
                                class="input-group-append btn py-2 my-0 btn-default btn-default2 border shadow-0">
                                <i class="mt-1 icon-magnifier"></i> <span
                                    class="d-none d-md-inline mx-2">Rechercher</span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right elements -->
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- Navbar -->
    <div class="border-top d-none d-lg-flex"></div>
    <nav class="navbar shadow-sm py-1 navbar-expand-lg navbar-light bg-white">
        <div class="container justify-content-center justify-content-md-between">
            <!-- Toggle button MENU -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 small text-uppercase fw-bold">
                    <li class="nav-item {{ request()->routeIs('welcome') ? 'active' : '' }}">
                        <a class="nav-link text-dark" aria-current="page" href="{{ route('welcome') }}">Accueil</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('shop.index') ? 'active' : '' }}">
                        <a class="nav-link text-dark" href="{{ route('shop.index') }}">Nos articles</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('shop.category') ? 'active' : '' }}">
                        <a class="nav-link text-dark" href="{{ route('shop.category') }}">Catégories</a>
                    </li>
                    
                    <li class="nav-item {{ request()->routeIs('page.about') ? 'active' : '' }}">
                        <a class="nav-link text-dark" href="{{ route('page.about') }}">A propos de nous</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('page.contact') ? 'active' : '' }}">
                        <a class="nav-link text-dark" href="{{ route('page.contact') }}">Contacts</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <!--li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                          data-mdb-toggle="dropdown" aria-expanded="false">
                          Autres
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li>
                              <a class="dropdown-item" href="#">Autres 1</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="#">Autres 2</a>
                          </li>
                      </ul>
                  </li-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</header>
