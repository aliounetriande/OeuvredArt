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
                        <li><a href="{{ route('artisan.dashboard') }}">Accueil</a></li>
                        <li><a href="{{ route('artisan.explorez') }}">Explorez</a></li>
                        <li><a href="{{ route('artisan.apropos') }}">À propos</a></li>
                        <li><a href="{{ route('artisan.blog') }}">Blog</a></li>
                        <li><a href="{{ route('artisan.contact') }}">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        
                            <!-- Utilisateur connecté artisan -->
                            <a href="#">Mon profil</a>

                                <a href="{{ route('oeuvre.create') }}">Créer un post</a>
                            
                                <form id="logout-form" action="{{ route('deconnexion') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('deconnexion') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                       

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
