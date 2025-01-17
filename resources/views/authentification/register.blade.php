<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>Inscription</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        function toggleRoleFields() {
            var role = document.getElementById("role").value;
            var artisanFields = document.getElementById("artisan-fields");
            var membreFields = document.getElementById("membre-fields");

            if (role == "artisan") { // Artisan
                artisanFields.style.display = "block";
                membreFields.style.display = "none";
            } else if (role == "membre") { // Membre
                artisanFields.style.display = "none";
                membreFields.style.display = "block";
            } else {
                artisanFields.style.display = "none";
                membreFields.style.display = "none";
            }
        }
    </script>
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('membre/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{asset('membre/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>

@extends('front.layout.front')

@section('contentPage')

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
        <x-menu_navigation />
    </header>
    <!-- Header Section End -->

    <div class="main-bg">
        <!-- title -->
        <h1>Inscription</h1>
        <!-- //title -->
        <!-- content -->
        <br> <br> <br>
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <div class="top-content-style">
                    <a href="#"><img src="{{asset('membre/images/user.png')}}" width="200" alt="" /></a>
                </div>
                <form action="{{ route('inscription.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="legend">S'inscrire ici<span class="fa fa-hand-o-down"></span></p>
                    <div class="input">
                        <input type="text" placeholder="Nom" name="nom" required />
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Prenom" name="prenom" required />
                        <span class="fa fa-user"></span>
                    </div>

                    <div class="input">
                        <label>Choisissez votre genre :</label>
                        <select name="genre">
                            <option value="">Choisissez votre genre</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="input">
                        <label>Choisissez votre âge :</label>
                        <select name="age">
                            <?php
                                for ($i = 1; $i <= 100; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input">
                        <input type="email" placeholder="Email" name="email" required />
                        <span class="fa fa-envelope"></span>
                    </div>
                    
                    
                    <div class="input">
                        <input type="text" placeholder="Adresse" name="adresse" required />
                        <span class="fa fa-map-pin"></span>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Ville" name="ville" required />
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="input">
                        <label>Choisissez votre groupe de profession :</label>
                        <select name="profession">
                            <option value="healthcare">Santé (Médecin, Infirmier, Pharmacien, etc.)</option>
                            <option value="engineering">Ingénierie (Ingénieur, Architecte, Technicien, etc.)</option>
                            <option value="education">Éducation (Enseignant, Professeur, Formateur, etc.)</option>
                            <option value="arts">Arts & Culture (Artiste, Musicien, Écrivain, etc.)</option>
                            <option value="law">Droit (Avocat, Juge, Notaire, etc.)</option>
                            <option value="it">Technologie (Développeur, Administrateur Réseau, Analyste, etc.)</option>
                            <option value="business">Affaires & Finance (Comptable, Directeur, Entrepreneur, etc.)</option>
                            <option value="services">Services (Chef cuisinier, Coiffeur, Réparateur, etc.)</option>
                        </select>
                        </div>
                    <div class="input">
                        <input type="file" name="photo" accept="image/*">
                        <span class="fa fa-camera"></span>
                    </div>

                    <div class="input">
                        <label for="role">Je suis :</label>
                        <select id="role" name="role" onchange="toggleRoleFields()" required>
                            <option value="">Choisissez votre rôle</option>
                            <option value="artisan">Artisan</option>
                            <option value="membre">Membre</option>
                        </select>
                    </div>

                    <!-- Champs pour Artisan -->
                    <div id="artisan-fields" style="display: none;">

                        <div class="input">
                            <input type="text" placeholder="Qui etes vous?" name="biographie" />
                            <span class="fa fa-bio"></span>
                        </div>

                        <div class="input">
                            <input type="text" placeholder="Numéro(s) de téléphone" name="contact" />
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="input">
                            <input type="text" placeholder="Lien whatsapp" name="whatsapp" />
                            <span class="fa fa-whatsapp"></span>
                        </div>
                    </div>
                    <!-- Champs pour Membre -->
                    <div id="membre-fields" style="display: none;">
                        
                    </div>

                    <div class="input">
                        <input type="password" placeholder="Mot de passe" name="password" required />
                        <span class="fa fa-lock"></span>
                    </div>

                    <div class="input">
                        <input type="password" placeholder="Confirmez le mot de passe" name="password_confirmation" required />
                        <span class="fa fa-lock"></span>
                    </div>

                    <button type="submit" class="btn submit">
                        <span class="fa fa-check"></span>
                    </button>
                </form>
                <a href="{{ route('connexion') }}" class="bottom-text-w3ls">Vous avez déjà un compte? Connectez-vous maintenant</a>
            </div>
        </div>
        <!-- //content -->
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Footer Section Begin -->
    <footer class="footer">
        <x-footer />
    </footer>
    <!-- Footer Section End -->

@endsection
</body>

</html>
