    
    <header class="fond">
    <div>
        <nav class="navbar-expand-lg bg-dark">
            <div class="container navbar">
            <a class="navbar-brand" href="{{ route('home') }}">Le Coin Cine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nos Films
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('categorie.action') }}">Action</a></li>
                    <li><a class="dropdown-item" href="{{ route('categorie.drame') }}">Drame</a></li>
                    </ul>
                </li>
                @auth

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil') }}">Mon Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('panier.index') }}">Panier</a>
                </li>
                @endauth

                </ul>
                @if (!auth()->check())
                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                @else
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                @endif

            </div>
            </div>
            <div class="container-fluid row itemcentrer">
                <div class="col-8 mb-3">
            <form class="d-flex" method="" action="{{ route('film.shearch') }}">

            <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
            </div>
                <div class="col-auto mb-3">
            <input class="btn btn-outline-warning  "type="submit" value="Rechercher"/>
            </div>
            </form>
        </div>
        </nav>     
    </div>
    </header>
