<ul class="navbar-nav sidebarStyle sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center" href="{{ '/' }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('backend/img/logo_elda.png') }}" class="img-fluid" style="max-width:70px" alt="logo.png" />
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link {{ request()->routeIs('admin') ? 'active' : '' }}" href="{{ route('admin') }}">
            <i class="fas fa-home"></i>
            <span>Tableau de bord</span></a>
    </li>
    {{-- Produits --}}
   
    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('category.index') ? 'active' : '' }}"
            href="{{ route('category.index') }}">
            <i class="fas fa-sitemap"></i>
            <span>Catégories</span>
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('product.index') ? 'active' : '' }}"
          href="{{ route('product.index') }}">
          <i class="fas fa-cubes"></i>
          <span>Articles</span>
      </a>
  </li>



    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('sliders.index') ? 'active' : '' }}"
            href="{{ route('sliders.index') }}">
            <i class="fas fa-image"></i>
            <span>Sliders</span>
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('publicites.index') ? 'active' : '' }}"
            href="{{ route('publicites.index') }}">
            <i class="fas fa-caret-square-right"></i>
            <span>Publicités</span>
        </a>

    </li>



    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('apropos.index') ? 'active' : '' }}"
            href="{{ route('apropos.index') }}">
            <i class="fas fa-info-circle"></i>
            <span>A propos</span>
        </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link {{ request()->routeIs('conditions.index') ? 'active' : '' }}"
          href="{{ route('conditions.index') }}">
          <i class="fas fa-cog"></i>
          <span>Conditions</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link {{ request()->routeIs('confidentialites.index') ? 'active' : '' }}"
        href="{{ route('confidentialites.index') }}">
        <i class="fas fa-cog"></i>
        <span>Confidentialités</span></a>
</li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('contacts.index') ? 'active' : '' }}"
            href="{{ route('contacts.index') }}">
            <i class="fa fa-envelope"></i>
            <span>Messages de contacts </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('pourquois.index') ? 'active' : '' }}"
            href="{{ route('pourquois.index') }}">
            <i class="fas fa-question-circle"></i>
            <span>Pourquoi nous choisir ?</span>
        </a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}">
            <i class="fas fa-user-alt"></i>
            <span>Utilisateurs</span></a>
    </li>


    <li class="nav-item ">
        <a class="nav-link {{ request()->routeIs('parametres.index') ? 'active' : '' }}"
            href="{{ route('parametres.index') }}">
            <i class="fas fa-cog"></i>
            <span>Paramètres</span></a>
    </li>


    {{-- Fournisseurs --}}
    <!-- <li class="nav-item">
        <a class="nav-link"  href="{{ route('fournisseur.index') }}">
          <span>Fournisseurs</span>
        </a>

    </li> -->

    {{-- Clients --}}
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ route('client.index') }}">
          <span>Clients</span>
        </a>
    </li> -->

    <!-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('evenements.index') }}">
          <span>Evenements</span></a>
      </li>
     -->


    <!-- Divider -->
    <hr class="sidebar-divider">


</ul>
