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
        <x-menu_navigation />
    </header>
    <!-- Header Section End -->

        <!-- Contact Section Begin -->
        <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Nos Contacts</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Addresse</h6>
                                    <p>Rue 27 Nagrin, Ouagadougou, Burkina Faso</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Téléphone</h6>
                                    <p><span>+226 66 79 40 41</span><span>+226 02 24 85 24</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones"></i> Assistance</h6>
                                    <p>infos.afrikart@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>ENVOYEZ NOUS UN MESSAGE</h5>
                            <form action="#">
                                <input type="text" placeholder="Nom">
                                <input type="text" placeholder="Prénom">
                                <input type="text" placeholder="Email">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Envoyer Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d630.4367836521762!2d-1.5369440711704183!3d12.289263672297224!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbf!4v1729630697479!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


<!-- Footer Section Begin -->
<footer class="footer">
<x-footer />
    
</footer>
<!-- Footer Section End -->

@endsection

