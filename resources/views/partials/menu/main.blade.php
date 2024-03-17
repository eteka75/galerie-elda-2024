<ul class="navbar-nav mr-auto">
    <li class="nav-item {{ request()->route()->getName() == 'welcome' ? 'active': '' }}">
        <a class="nav-link" style="font-weight: bold;color: black !important" href="{{ route('welcome') }}">Accueil</a>
    </li>
    <li class="nav-item {{ request()->route()->getName() == 'shop.index' ? 'active': '' }}">
        <a class="nav-link" style="font-weight: bold; color: black !important"
            href="{{ route('shop.index') }}">Articles</a>
    </li>
    <li class="nav-item {{ request()->route()->getName() == 'shop.category' ? 'active': '' }}">
        <a class="nav-link" style="font-weight: bold;color: black !important"
            href="{{ route('shop.category') }}">Catégories</a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" style="font-weight: bold;color: black !important" href="#">Blog</a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" style="font-weight: bold;color: black !important" href="#">A propos de nous</a>
    </li>

</ul>