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

    <!-- Oeuvre creation Section Begin -->

    <form action="{{ route('oeuvre.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titre de l'œuvre :</label>
    <input type="text" name="title" required>

    <label for="description">Description :</label>
    <textarea name="description" required></textarea>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" required>

    <label for="image">Image de l'œuvre :</label>
    <input type="file" name="image" required>

    <button type="submit">Publier l'œuvre</button>
</form>


    <!-- Oeuvre creation Section End -->