@extends('front.layout.front')

@section ('contentPage')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Se connecter</a>
            <a href="#">S'inscrire</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
    
    <!-- Header Section Begin -->
    <header class="header">
        <x-menu_navigation_artisan />
    </header>
    <!-- Header Section End -->

    <!-- Shop Section Begin -->
       
    <!-- Shop Section End -->
    <div class="container">
        <h1>Mes Œuvres</h1>

        <div class="row">
            @forelse($oeuvres as $oeuvre)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <!-- Afficher l'image de l'œuvre -->
                        @if($oeuvre->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $oeuvre->images->first()->path) }}" class="card-img-top" alt="{{ $oeuvre->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $oeuvre->title }}</h5>
                            <p class="card-text">{{ $oeuvre->description }}</p>
                            <p class="card-text">Prix: {{ $oeuvre->prix }} FCFA</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Aucune œuvre à afficher pour le moment.</p>
            @endforelse
        </div>
    </div>


    <!-- Footer Section Begin -->
<footer class="footer">
<x-footer />
    
</footer>
<!-- Footer Section End -->

@endsection
