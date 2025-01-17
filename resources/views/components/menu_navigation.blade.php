<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="" width="200"></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('explorez') }}">Explorez</a></li>
                        <li><a href="{{ route('apropos') }}">À propos</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contacts') }}">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        @guest
                            <!-- Liens pour visiteurs non connectés -->
                            <a href="{{ route('connexion') }}">Se connecter</a>
                            <a href="{{ route('inscription') }}">S'inscrire</a>
                        @else
                            <!-- Utilisateur connecté (membre ou artisan) -->
                            <a href="{{ route('profile') }}">Mon profil</a>

                            <!-- Vérification du rôle -->
                            @if (auth()->user()->role === 'artisan')
                                <a href="{{ route('artisan.createPost') }}">Créer un post</a>
                            @elseif (auth()->user()->role === 'membre')
                                <a href="{{ route('membre.dashboard') }}">Mon espace membre</a>
                            @endif
                            
                            <a href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest

                        @auth
                            <pre>{{ dd(auth()->user()) }}</pre>
                        @endauth

                    </div>
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>

                        @auth
                            <!-- Liens pour utilisateurs connectés uniquement -->
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</div>
